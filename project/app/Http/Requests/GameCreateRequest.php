<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GameCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'id'                        => 'required|max:32|string',
            'game_name'                 => 'max:100|string',
            'game_background_video'     => 'string',
            'game_background_img'       => 'string',
            'custom_payment_link'       => 'max:32|string',
            'steam_payment_link'        => 'max:32|string',
            'ios_payment_link'          => 'string',
            'psn_payment_link'          => 'string',
            'android_payment_link'      => 'string'
        ];
    }
}
