<?php
	require_once('src/snaphax.php');

	function main() {
		global $argv;

		$usr = $_SESSION['usr'];
		$pass = $_SESSION['pass'];
		
		$opts = array();
		$opts['username'] = $usr;
		$opts['password'] = $pass;
		//$opts['debug'] = 1; // uncomment if having trouble

		$s = new Snaphax($opts);
		$result = $s->login();
				$blob_data = $s->fetch($_GET['id']);
				if ($blob_data) {
					$rnad = rand(0,1023);
					file_put_contents($rnad.'.jpg', $blob_data);
					echo '<img src="'.$rnad.'.jpg" />';
				}
	}

	main();

require_once('src/snapchat.php');
$snapchat = new Snapchat($_SESSION['usr'], $_SESSION['pass']);
$snapchat->markSnapViewed($_GET['id']);
?>

<br />
<br />
<b>Don't see the snap?</b> Some snaps may not be visible because it has not yet been opened.