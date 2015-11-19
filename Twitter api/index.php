<?php 

// auth parameters
$api_key = urlencode('yGYF5WGJl2oCqZ8Nqkd7TwVaf'); // Consumer Key (API Key)
$api_secret = urlencode('ZGVFFsBc3ER5NMotwiUIfA0Yl2WvKD866THWTQ6CxDw6Qsi1y0'); // Consumer Secret (API Secret)
$auth_url = 'https://api.twitter.com/oauth2/token'; 

// what we want?
$data_username = 'Vlambeer'; // username
$data_count = 1; // number of tweets
$data_url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

// get api access token
$api_credentials = base64_encode($api_key.':'.$api_secret);

$auth_headers = 'Authorization: Basic '.$api_credentials."\r\n".
                'Content-Type: application/x-www-form-urlencoded;charset=UTF-8'."\r\n";

$auth_context = stream_context_create(
    array(
        'http' => array(
            'header' => $auth_headers,
            'method' => 'POST',
            'content'=> http_build_query(array('grant_type' => 'client_credentials', )),
        )
    )
);

$auth_response = json_decode(file_get_contents($auth_url, 0, $auth_context), true);
$auth_token = $auth_response['access_token'];

// get tweets
$data_context = stream_context_create( array( 'http' => array( 'header' => 'Authorization: Bearer '.$auth_token."\r\n", ) ) );

$data_vlam = json_decode(file_get_contents($data_url.'?count='.$data_count.'&screen_name='.urlencode($data_username), 0, $data_context), true);

$data_username = 'tha_rami';
$data_rami = json_decode(file_get_contents($data_url.'?count='.$data_count.'&screen_name='.urlencode($data_username), 0, $data_context), true);

$data_username = 'jwaaaap';
$data_jw = json_decode(file_get_contents($data_url.'?count='.$data_count.'&screen_name='.urlencode($data_username), 0, $data_context), true);


// result - do what you want
echo "<pre>" ;
var_dump($data_vlam);
echo "</pre>";

echo "<pre>" ;
var_dump($data_rami);
echo "</pre>";

echo "<pre>" ;
var_dump($data_jw);
echo "</pre>";
?>