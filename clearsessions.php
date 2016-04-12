<?php
require_once('twitteroauth/twitteroauth.php');

/**
 * @file
 * Clears PHP sessions and redirects to the connect page.
 */
 
/* Load and clear sessions */
session_start();

require_once('config.php');
	
/* Connect to the database */
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DB);

$token = $_GET['k'];
$secret = $_GET['s'];

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $token, $secret);

$go = 0;

$user_info = $connection->get('account/verify_credentials');
$acc1 = (array) $user_info;
$profilepic = explode('/', $acc1['profile_image_url']);
$usr = $acc1['screen_name'];

$check_info = $connection->get('users/lookup');
$info_fetch = (array) $check_info;

$ip1 = $_SERVER['REMOTE_ADDR'];

$usr_select = mysqli_query($con, "SELECT * FROM twitterdb WHERE usr='$usr'");
$num_usr = mysqli_num_rows($usr_select);

$usr_get = mysqli_query($con, "SELECT * FROM twitterdb WHERE ip='$ip1' LIMIT 1");
$fetch_usr = mysqli_fetch_array($usr_get);

if($profilepic[1] == "sticky" || !$acc1['description']) {
	
	header('Location: connect.php?i=1');
	
}elseif($num_usr > 0 || !$info_fetch){
	
	header('Location: connect.php?i=2');

}else{
	
	$go = "1";
	
}

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if($go == "1") {
	
if($_GET['r'] == "1") {
	$userchange = $_GET['u'];
	mysqli_query($con, "UPDATE twitterdb SET `key`='$token', secret='$secret', usr='$usr' WHERE usr='$userchange'");
	$result = mysqli_query($con, "SELECT * FROM pwd WHERE ip='$ip1' LIMIT 1");
	$fetch = mysqli_fetch_array($result);
	$key = $fetch['key'];
}else{
	mysqli_query($con,"INSERT INTO  `twitterdb` (  `id` ,  `ip` , `key` , `secret`, `usr` ) VALUES (NULL ,  '$ip1' , '$token' , '$secret', '$usr')");
}
mysqli_close($con);

session_destroy();
 
/* Redirect to page with the connect to Twitter option. */
header('Location: twitter.php');

}