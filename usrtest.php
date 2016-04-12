<?php

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
$name = array();
$row_k = array();

	while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
		$connection[] = new TwitterOAuth('ky2eXs7RF8EDbPSRimsp5zTQA', 'RAzRpfRlA839fEyzDfNuwJ1JlpmgsasE6hiGKsl7sE3KgIvOOM', $row['key'], $row['secret']);
		$row_k[] = $row['key'];
		$name[] = $row['usr'];
	}

$amt = mysqli_num_rows($result);
$ff = 0;
$fh = fopen('log.txt', 'w') or die("can't open file");

foreach($connection as $c) {
$user_info = $c->get('account/verify_credentials');
$acc1 = (array) $user_info;
$new = $acc1['screen_name'];
mysqli_query($con, "UPDATE twitterdb SET usr='$new' WHERE `key`='".$row_k[$ff]."'");
$g = $name[$ff] . " - Updated (".$new.") \n";
fwrite($fh, $g);
	
$ff++; 
}

$n = 0;

 foreach($connection as $c) {
$user_info = $c->get('users/show', array('screen_name' => $name[$n]));
$acc1 = (array) $user_info;
$profilepic = explode('/', $acc1['profile_image_url']);
	
if($acc1['suspended'] || $acc1['errors']) {
	$f = $n . ": ".$name[$n]." - Suspended \n";
	//echo $f . "<br />";
	fwrite($fh, $f);
	$name1 = $name[$n];
	mysqli_query($con, "DELETE FROM twitterdb WHERE usr='$name1'");
	mysqli_query($con, "ALTER TABLE twitterdb DROP `id`" );
	mysqli_query($con, "ALTER TABLE twitterdb AUTO_INCREMENT = 1" );
	mysqli_query($con, "ALTER TABLE twitterdb ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;" );
}else{
	$t = $n . ": ".$name[$n]." - Good \n";
	fwrite($fh, $t);
	//echo $t . "<br />";
}
	
$n++; 
}

$sep = "

======================================================================================\n
==========================   Account Log ".date("F j, Y, g:i a")."   ====================\n
======================================================================================\n";

mysqli_query($con, "UPDATE amt SET amt='".date("F j, Y, g:i a")."' WHERE here='nothere'");
echo "<br />Reload complete, thanks for doing your part.";
	
fwrite($fh, $sep);
fclose($fh);

?>