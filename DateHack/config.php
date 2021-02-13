<?php

//start session on web page
if(!isset($_SESSION)){
	session_start();
}


//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('419839512907-42og4jplpsj1vkuj69i5e3ib80hp3l50.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('bXjnJx5JJCiVpNctab6mKPgw');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/DateHack/DateHack/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>