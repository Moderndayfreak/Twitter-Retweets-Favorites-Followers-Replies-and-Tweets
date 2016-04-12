<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

if($_POST['url1']) {

/* Inherit the functions */
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
	
/* Connect to the database */
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DB);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
$result = mysqli_query($con,"SELECT * FROM twitterdb");
$connection = array();
	while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
		$connection[] = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $row['key'], $row['secret']);
	}

/* Take the tweet link and break it up into parts */
$url2 = parse_url($_POST['url1'], PHP_URL_PATH);
$url3 = explode("/", $url2);
$userid = $_POST['url1'];
$amt = mysqli_num_rows($result);
mysqli_query($con, "UPDATE amt SET amt=amt+$amt WHERE here='here'");


foreach ($connection as $c)
    {
	 
	 $c->post('friendships/create', array('screen_name' => $userid, 'follow' => true));

	}

  echo "<br /> <a href='http://www.twitter.com/".$_POST['url1']."'>Thank you, your request has been completed. Click here to check it out!</a>";

mysqli_close($con);
  
}else{
  
  echo "<br />Please include a twitter handle to follow.";
  
}
?>