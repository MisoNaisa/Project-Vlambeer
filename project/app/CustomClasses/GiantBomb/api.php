<?php

namespace App\CustomClasses\GiantBomb;

/**
 *
 *  Class GiantBomb
 *
 *  API wrapper for the GiantBomb Game database.
 *  Supports both content searching and fetching.
 *  Please refer to below url to review examples and parameters:
 *  http://www.giantbomb.com/forums/api-developers-3017/quick-start-guide-to-using-the-api-1427959/
 *
 *  @dob: 25-11-2015
 *  @author: Michiel Pot <m.pot@rocwb.nl>
 *  @license: Terror Teddies
 *  @copyright: Radius College ROC West-Brabant, 2015 and beyond
 */
class Api
{
    // Default url to connect to the API.
    const API_BASE_URL = 'http://www.giantbomb.com/api';
    const API_KEY = 'd862fbb61c9cd7cc3a7f7f0ccc063966738e559c';

    // Possible formats for returned data. [ http://www.giantbomb.com/api/documentation ]
    const RESPONSE_TYPE_XML = 'xml';
    const RESPONSE_TYPE_JSON = 'json';

    // The format in which the API should respond.
    private $sFormat = 'json';

    // Whether exceptions should be shown.
    private $isDebugging;
    private $sQuery, $sRequest, $sResponse;
    private $aResourceTypes, $aResourceFields;

    // The search parameters for the API.
    // E.g. What you want. [ http://www.giantbomb.com/api/documentation ]
    private $aParams;

    /**
     *
     *      Class constructor, initializes a new GiantBomb object.
     *
     * @param bool $bDev
     * @return GiantBomb
     */
    public function __construct( $bDev = false )
    {
        $this->isDebugging = $bDev;
    }

    /**
     *
     *      GiantBomb Search interface http://www.giantbomb.com/api/search
     *
     * @param $sQuery
     * @param array $aFields
     *
     * @return void
     */
    public final function search( $sQuery, array $aFields = array() )
    {
        $this->sQuery = $sQuery;
        $this->aResourceTypes = array( 'search' );
        $this->aResourceFields = $aFields;

        $this->compile();
        $this->send();
    }

    /**
     *
     *      GiantBomb Content interface http://www.giantbomb.com/api/game/[resource-id]
     *
     * @param array $aResources
     * @param array $aFields
     */
    public final function fetch( array $aResources, array $aFields = array() )
    {
        // Wipe any search command.
        $this->sQuery = null;

        $this->aResourceTypes = $aResources;
        $this->aResourceFields = $aFields;

        $this->compile();
        $this->send();
    }



    /**
     *
     *      Method to fetch information from a detail url ( pre-configured fetch )
     *
     * @param $sDetailUrl
     */
    public final function fetchDetails( $sDetailUrl )
    {
        // Wipe any search command.
        $this->sQuery = null;

        $this->sRequest = $sDetailUrl . '?api_key=' . static::API_KEY;
        $this->send();
    }

    public function test()
    {
        // Selects detail information for Metroid Prime.
        $aTypes = array(
            'game',
            '3030-4725'
        );

        $this->fetch( $aTypes );
    }

    /**
     *
     *      Method to send a request to the GiantBomb API
     *
     * @params none
     * @return void
     */
    private function send()
    {
        try
        {
            $this->sResponse = file_get_contents( $this->sRequest );
        }
        catch( \Exception $e )
        {
            if ( $this->isDebugging )
            {
                echo "Failed to connect to the Giant Bomb API!";
                echo "Your command produced the following result: ";
                echo $e->getMessage();
                echo "Despite all this... Do have a nice day and don't forget to smile!";
            }
        }
    }

    public function getQuery()
    {
        return $this->sQuery;
    }

    public function getResponse()
    {
        return $this->sResponse;
    }

    public function getResourceTypes()
    {
        return $this->aResourceTypes;
    }

    public function getResourceFields()
    {
        return $this->aResourceFields;
    }

    public function getFormat()
    {
        return $this->sFormat;
    }

    public function setFormat( $sFormat = 'json' )
    {
        $sFormat = strtolower( trim( $sFormat ) );
        if ( $sFormat === static::RESPONSE_TYPE_JSON || $sFormat === static::RESPONSE_TYPE_XML )
        {
            $this->sFormat = $sFormat;
            return;
        }

        if ( $this->isDebugging )
        {
            throw new \InvalidArgumentException( "Giant bomb API only supports xml and json at this time!" );
        }
    }

    private function compile()
    {
        $this->sRequest  = static::API_BASE_URL;

        if ( empty( $this->aResourceTypes ) && $this->isDebugging )
        {
            throw new \InvalidArgumentException( "Cannot query GiantBomb without an interface!" );
        }

        $this->sRequest .= str_replace( '//', '/', '/'. implode( '/', $this->aResourceTypes ) . '/' );
        $this->sRequest .= '?api_key=' . static::API_KEY;

        if ( !empty( $this->sQuery ) )
        {
            $this->sRequest .= '&query="' . $this->sQuery . '""';
        }

        $this->sRequest .= '&format=' . $this->sFormat;

        if ( !empty( $this->aResourceFields ) )
        {
            if ( empty( $this->sQuery ) )
            {
                // Cannot be a search command.
                $this->sRequest .= '&field_list=' . implode( ',', $this->aResourceFields );
            }
            else
            {
                $this->sRequest .= '&resources=' . implode( ',', $this->aResourceFields );
            }
        }
    }


    public function __toObject()
    {
        if ( $this->sFormat === static::RESPONSE_TYPE_JSON )
        {
            return json_decode( $this->sResponse, JSON_PRETTY_PRINT );
        }
        else
        {
            return simplexml_load_string( $this->sResponse );
        }
    }

    public function __toJson()
    {
        $sOut = $this->sResponse;
        if ( $this->sFormat === static::RESPONSE_TYPE_JSON )
        {
            $sOut = json_encode( $sOut, JSON_PRETTY_PRINT );
        }

        return $sOut;
    }

    public function __toString()
    {
        return $this->sRequest;
    }

    //    Easy to use functions

    public function getAllGames() {
        $this->fetch(array( 'company', '3010-7731' ), array('published_games', 'description'));
        return $this->__toObject();
    }

    public function getGameById($id) {
        $this->fetch(array( 'game', $id ), array('id', 'name', 'deck', 'original_game_rating'));
        return $this->__toObject();
    }


}


