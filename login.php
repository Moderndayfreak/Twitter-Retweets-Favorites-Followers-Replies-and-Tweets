<?php
session_start();
require_once('src/snapchat.php');

$_SESSION['usr'] = $_POST['usr'];
$_SESSION['pass'] = $_POST['pass'];

    $s = new Snapchat($_POST['usr'], $_POST['pass']);
    $result = $s->login($_POST['usr'], $_POST['pass']);
	$r = (array) $result;
	if($r['logged'] == 1){
		echo '<div class="alert alert-success">  <i class="fa fa-ban-circle"></i><strong>Hooray!</strong> Wait one moment while we setup your profile page. </div>';
		echo '<meta http-equiv="refresh" content="0; url=http://iamusicent.com/profile.php" />';
	}else{
		echo '<div class="alert alert-danger">  <i class="fa fa-ban-circle"></i><strong>Oh no!</strong> Ensure you have entered the correct info and try again. </div>';
	}
