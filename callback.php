<?php
/**
 * @file
 * Take the user when they return from Twitter. Get access tokens.
 * Verify credentials and redirect to based on response from Twitter.
 */

/* Start session and load lib */
session_start();

require_once('twitteroauth/twitteroauth.php');
require_once('config.php');

/* Create TwitteroAuth object with app key/secret and token key/secret from default phase */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

/* Request access tokens from twitter */
$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);

/* if (isset($_REQUEST['oauth_token']) && $_SESSION['oauth_token'] !== $_REQUEST['oauth_token']) {
  $_SESSION['oauth_status'] = 'oldtoken';
  header('Location: connect.php');
} */


$_SESSION['access_token'] = $access_token;
$_SESSION['access_token_secret'] = $secret_access_token;

/* Save the access tokens. Normally these would be saved in a database for future use. */

$token = $access_token['oauth_token'];
$secret = $access_token['oauth_token_secret'];

/* Remove no longer needed request tokens */
unset($_SESSION['oauth_token']);
unset($_SESSION['oauth_token_secret']);

/* If HTTP response is 200 continue otherwise send to connect page to retry */
if (200 == $connection->http_code) {
  /* Save HTTP status for error dialog on connnect page.*/
	if($_SESSION['r'] == "1") {
		header('Location: clearsessions.php?k='.$token.'&s='.$secret.'&r=1&u='.$_SESSION['twt']);
	}else{
		$_SESSION['status'] = 'verified';
		header('Location: clearsessions.php?k='.$token.'&s='.$secret);
	}
}else{
	session_destroy();
	header('Location: redirect.php');
}

