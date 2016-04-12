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
	
$ip1 = $_SERVER['REMOTE_ADDR'];
$key = $_GET['key'];
$amount = mysqli_query($con, "SELECT * FROM twitterdb");
$result = mysqli_query($con, "SELECT * FROM twitterdb WHERE ip = '$ip1'");
$pwd_result = mysqli_query($con, "SELECT * FROM pwd WHERE ip = '$ip1' LIMIT 1");
$total_result = mysqli_query($con, "SELECT * FROM amt WHERE here = 'here'");
$p_result = mysqli_query($con, "SELECT * FROM prem WHERE `key` = '$key'");
$d_result = mysqli_query($con, "SELECT * FROM amt WHERE here = 'nothere'");
$total_array = array();
$total_fetch = mysqli_fetch_array($total_result);
$total = $total_fetch['amt'];


		if(!$_SESSION['yes']){
				
			
				if(!$_GET['key']) {
					header('Location: pwd.php?n=1&e=1');
				}else{
					header('Location: pwd.php');
				}
			
			}else{
		
			if($pwd_result->num_rows > 0 && !$_GET['key']) {
			$fetch_t = mysqli_fetch_array($pwd_result);
			header('Location: twitter.php?key='.$fetch_t['key']);
			}
			
			if($pwd_result->num_rows == 0) {
			header('Location: pwd.php');
			}
			
			$usrs = array();
			while($fetch = mysqli_fetch_array($result)) {
				$usrs[] = $fetch['usr'];
			}
			
			$number_rows = $result->num_rows;
			$total_num = ($p_result->num_rows !== 0) ? $amount->num_rows : "50";
			$date_fetch = mysqli_fetch_array($d_result);
			$date = $date_fetch['amt'];
		}
	
