<?php
	// Inicializando uma sessão
	session_start();
	
	// API do facebook
	include('facebook-php-sdk/autoload.php');
	use Facebook\Facebook;
	use Facebook\Exceptios\FacebookResponseException;
	use Facebook\Exceptions|FacebookSDKException;

	// Constantes
	define('APP_ID', 'id24234...');
	define('APP_SECRET','wi4of4fsla');
	define('URL_BASE', 'http://localhost/login/');
	define('FB_PERMISSION', 'array("email")');

	$fb = new Facebook(array(
		'app_ip'=> APP_ID,
		'app_secret'=> APP_SECRET,
		'default_graph_version'=> 'v2.2',
	));
	
	$helper = $fb->getRedirectLoginHelper();

	try{
		if(isset($_SESSION['facebook_access_token'])){
			$accessToken = $_SESSION['facebook_access_token'];
		} else {
			$accessToken = $helper->getAccessToken();
		}
	} catch(FacebookResponseException $e){

	}

?>
