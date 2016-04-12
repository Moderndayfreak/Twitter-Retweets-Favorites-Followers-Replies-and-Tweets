<?php
session_start();
require_once('config.php');
	
/* Connect to the database */
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DB);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$ip = $_SERVER['REMOTE_ADDR'];
$result = mysqli_query($con, "SELECT * FROM pwd WHERE pwd='".$_POST['usr']."' LIMIT 1");
$result_b = mysqli_query($con, "SELECT * FROM twitterdb WHERE ip='".$_SERVER['REMOTE_ADDR']."' LIMIT 1");
$i_result = mysqli_query($con, "SELECT * FROM pwd WHERE ip='".$_SERVER['REMOTE_ADDR']."' AND pwd='".$_POST['usr']."' LIMIT 1");
$fetch = mysqli_fetch_array($result);

if($result->num_rows > 0) {
	if($i_result->num_rows == 0) {
			$pwd = $_POST['usr'];
			$key = md5($pwd);
			mysqli_query($con,"INSERT INTO  `pwd` (  `pwd` , `key` , `ip` ) VALUES ('$pwd', '$key', '$ip') ");
		
	}
}

	if($result->num_rows > 0){
		echo '<div class="alert alert-success">  <i class="fa fa-ban-circle"></i><strong>Hooray!</strong> Wait one moment while we redirect you. </div>';
		echo '<meta http-equiv="refresh" content="0; url=http://iamusicent.com/twitter.php?key='.$fetch['key'].'" />';
		$_SESSION['yes'] = 1;
	}else{
		echo '<div class="alert alert-danger">  <i class="fa fa-ban-circle"></i><strong>Oh no!</strong> Ensure you have entered the correct info and try again. </div>';
	}