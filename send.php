<?php
session_start();
require_once('src/snapchat.php');

$_SESSION['usr'] = $_POST['usr'];
$_SESSION['pass'] = $_POST['pass'];

    $s = new Snapchat($_POST['usr'], $_POST['pass']);
    $result = $s->login($_POST['usr'], $_POST['pass']);
	$r = (array) $result;
	if($r['logged'] == 1){
		echo '<div id="Login-Message" class="Success" style="display: block;">Login Successful</div>';
		 header( 'Location: profile.php' ) ;
	}else{
		echo '<div id="Login-Message" class="Error" style="display: block;">Login Failed</div>';
	}