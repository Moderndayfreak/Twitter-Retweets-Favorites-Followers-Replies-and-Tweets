<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

if($_POST['url']) {

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
	
$amt_t = $_POST['spinner'];
$amount = mysqli_query($con, "SELECT * FROM twitterdb");
$result = mysqli_query($con,"SELECT * FROM twitterdb ORDER BY RAND() LIMIT " . $amt_t);
$p_result = mysqli_query($con, "SELECT * FROM prem WHERE key='" . $_POST['key'] . "'");

$connection = array();

	while($row = mysqli_fetch_array($result)) {
		$connection[] = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $row['key'], $row['secret']);
	}

/* Take the tweet link and break it up into parts */
$url1 = parse_url($_POST['url'], PHP_URL_PATH);
$url = explode("/", $url1);

$url2 = parse_url($_POST['url'], PHP_URL_PATH);
$url3 = explode("/", $url1);

$cue = ($p_result->num_rows > 0) ? $amount->num_rows : "50";

$amt = ($amt_t > $cue) ? $cue : $amt_t;



/* Define the amounts */
$method = 'statuses/retweet/'.$url[3]; // [3] is the id of the tweet
$sub = rand(1,3); // Random number 1-3
$amt1 = $amt-$sub; // Subtract 51-(random number 1-3)

/* Retweets */
if($_POST['retweet'] == "true" || $_POST['retweet'] == "1"){
	
 foreach ($connection as $c)
    {
	$c->post('statuses/retweet/'.$url[3]);
	}

	mysqli_query($con, "UPDATE amt SET amt=amt+$amt WHERE here='here'");
	
}

/* Favourites */
if($_POST['favorite'] == "true" || $_POST['favorite'] == "1") {
	
 foreach ($connection as $d)
    {
	$d->post('favorites/create', array('id' => $url[3]));
	}
	
	mysqli_query($con, "UPDATE amt SET amt=amt+$amt WHERE here='here'");
	
}

if($_GET['f'] == "yes"){
 foreach( $connection as $e )
    {
	 $e->post('friendships/create', array('user_id' => $url3[1], 'follow' => true));
	}
}

  echo "<br /><a href='".$_POST['url']."'>Thank you, your request has been completed. Click here to check it out!</a> ";

mysqli_close($con);
  
}else{
  
  echo "<br />Please include a link to your tweet.";
  
}
?>