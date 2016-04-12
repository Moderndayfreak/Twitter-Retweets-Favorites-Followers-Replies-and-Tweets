<?php
if($_GET['r']) {
	session_start();
	$_SESSION['r'] = 1;
	$_SESSION['twt'] = $_GET['u'];
}
?>
<html>
	<head>
		<title>Twitter Service</title>

<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
<style type="text/css">
 body{
margin-top:-10px;
}
</style>
	</head>
	<body href="javascript:alert('Currently reloading accounts');">
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
	<div class="jumbotron">
		<?php if($_GET['i'] == 1){?>
		<div class="alert alert-danger">Please check that your account includes an avatar and bio before we can allow you to use our services. <?php echo $_GET['a']. " "; echo $_GET['p'];  ?></div>
		<?php }
		 if($_GET['i'] == 2){?>
		<div class="alert alert-danger">Please ensure your account active, not suspended, and not already being used by another user.</div>
		<?php } ?>
		<?php if($_GET['i'] == 3){?>
		<div class="alert alert-success">We thank you for participating in Project Build-up. Simply follow the process to add more accounts.</div>
		<?php } ?>     
		<b>I.A. Entertainment policy change:</b> In order to use our services for its intended purpose, we now require each user to provide the website with a secondary account of their own. Simply log out of your personal account, and create a new twitter account. Next, click the button below, and sign in to your secondary account. Allow our app to have access to your account and you'll be taken back to the main page. We apologise for any inconvienience this has caused you, thanks.
		<ol>
			<li style="font-size:30px;">Conditions <span style="font-size:15px;">To keep up with the High Qualitiness of our services, we ask a few things.</span></li>
		<li>An Avatar</li>
		<li>Bio</li>
		</ol>
		<center><a href="./redirect.php"><img src="//textbarrage.com/twi/images/lighter.png" alt="Sign in with Twitter"/></a></center>
		<br />
		<p style="font-size:12px">
			In order to maintain a correct amount of accounts to favourite and retweet for 5 hours, we require our guests to provide us with an account. We are not asking for you to provide any information related to, involving with, and/or includes your person twitter account aside from the simple link to the tweet. At no point, will we require you to provide your password to your main account, and at no point we will require to you to provide more than just your tweet link, secondary account password/username, and whether you want favourites or retweets.
			This web app runs off the community, and with the hundreds of visitors per day, we ensure our users that new accounts will be able to provided each five hours. With this new policy change you will be required to provide one secondary-twitter account per person, once for life. At no point in the future will these policies change, however new policies may be extended or added on to.
		</p>
			</div>
		</div>
	</div>
</div>

<!-- le scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.motionCaptcha.0.2.min.js"></script>
<script>
$('.dropdown-toggle').dropdown();
$(".alert").alert();
$('#form-id').motioncaptcha();
</script>

<!-- (additional add-ons) -->
<script src="assets/js/bootstrap-transition.js"></script>
<script src="assets/js/bootstrap-alert.js"></script>
<script src="assets/js/bootstrap-modal.js"></script>
<script src="assets/js/bootstrap-dropdown.js"></script>
<script src="assets/js/bootstrap-scrollspy.js"></script>
<script src="assets/js/bootstrap-tab.js"></script>
<script src="assets/js/bootstrap-tooltip.js"></script>
<script src="assets/js/bootstrap-popover.js"></script>
<script src="assets/js/bootstrap-button.js"></script>
<script src="assets/js/bootstrap-collapse.js"></script>
<script src="assets/js/bootstrap-carousel.js"></script>
<script src="assets/js/bootstrap-typeahead.js"></script>
<script src="assets/js/bootstrap-affix.js"></script>
<!-- (additional add-ons) -->
<!-- le scripts -->

	</body>
</html>