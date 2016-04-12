<?php

if($_POST['url4']) {
  
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
	
/* Connect to the database */
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DB);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
$p_amt = mysqli_query($con, "SELECT * FROM prem WHERE key='" . $_POST['key4'] . "'");
$amt_tt = mysqli_query($con, "SELECT * FROM twitterdb");
$cue = ($p_amt->num_rows > 0) ? $amt_tt->num_rows : "50";
$amt_t = ($_POST['spinnerrr'] > $cue) ? "50" : $_POST['spinnerrr'];

$result = mysqli_query($con,"SELECT * FROM twitterdb ORDER BY RAND() LIMIT " . $amt_t);
$connection = array();
$name = array();

	while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
		$connection[] = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $row['key'], $row['secret']);
		$name[] = $row['usr'];
	}

$amt = mysqli_num_rows($result);
$ff = 0;

$url1 = parse_url($_POST['url4'], PHP_URL_PATH);
$url = explode("/", $url1);
$text_array = explode("|", $_POST['additionaltext1']);

foreach($connection as $c) {
$text = $text_array[array_rand($text_array)];
$user_info = $c->get('statuses/lookup', array('id' => $url[3]));
$acc1 = (array) $user_info;
$usr = (array) $acc1[0];
  $c->post('statuses/update', array('status' => "@".$url[1]." ".$text, 'in_reply_to_status_id' => $url[3]));
$ff++; 
}

  echo "<br /><a href=\"https://twitter.com/i/notifications\">All done, check your twitter notifications for the tweets.</a>";


}else{
  
  echo "<br />Please include a link to quote retweet.";
  
}