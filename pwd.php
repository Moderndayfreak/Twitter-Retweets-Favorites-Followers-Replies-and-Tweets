<?php
session_start();
$go = "4";
require_once('config.php');
	
/* Connect to the database */
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DB);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
	$ip1 = $_SERVER['REMOTE_ADDR'];
	$result = mysqli_query($con, "SELECT * FROM pwd WHERE ip='$ip1'");
	$t_result = mysqli_query($con, "SELECT * FROM twitterdb WHERE ip='$ip1'");
	$e_result = mysqli_query($con, "SELECT * FROM emails WHERE ip='$ip1'");
	$fetch = mysqli_fetch_array($result);
	$pwd = $fetch['pwd'];

if($result->num_rows == 0 && !$_GET['n']) {
	
	if($t_result->num_rows !== 0) {
	header('Location: pwd.php?n=1');
	}
}

if($_GET['e'] == "1") {
	
	if($e_result->num_rows !== 0) {
		header('Location: pwd.php?n=1');
	}else{
		$go = "5";
	}
	
}

if($_GET['e'] == "2") {
	
	if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$ip = $_SERVER['REMOTE_ADDR'];
	mysqli_query($con, "INSERT INTO  `emails` (  `emails` ,  `ip` ) VALUES ('$email',  '$ip');");
	}
		
}

if(!$_GET['e'] && $e_result->num_rows == 0) {
	
	header('Location: pwd.php?e=1');
	
}
	
if($_GET['n'] == "1" && $go == "4") {

if($result->num_rows == 0) {
	
	if($t_result->num_rows !== 0) {
	
	$sayings_array = array("key", "miracle", "salad", "pokemon", "derek",
		  "susie", "hero", "chicken", "real", "new", "dessert",
		  "plant", "twitter", "gnarly", "input", "simple", "far",
		  "far", "foot", "debate", "dog", "admin", "dash", "flat",
		  "chart", "sister", "text", "false", "sweet", "max", "kit",
		  "content", "view", "body", "width", "device", "game", "done",
		  "young", "under", "place", "belly", "hurts", "again", "good",
		  "happy", "both", "lord", "ready", "more", "stick", "size", "peter", 
		  "love", "six", "hot", "stuff", "picture", "liquid", "not", "part", 
		  "bath", "weird", "home", "about", "honey", "boy", "knew", "one", "sold",
		  "fun", "night", "talk", "ham", "dozens", "driver", "dump", "cut", "behind",
		  "help", "abrupt", "wood", "balloon", "after", "tucker", "news", "channel", 
		  "down", "ground", "rely", "value", "top", "doll", "drive", "events", "indian",
		  "expect", "guest", "hotdog", "tour", "case", "play", "come", "here", "potato",
		  "worth", "queen", "world", "killer", "robot", "band", "relax", "defy", "health",
		  "camp", "hear", "held", "near", "start", "gross", "griffin", "stay", "please",
		  "fire", "contest", "pound", "handle", "what", "boost", "rise", "shine", "candy",
		  "chops", "kitchen", "slowly", "empty", "vegan", "baby", "saturday", "terms");
	
	$array = $sayings_array[array_rand($sayings_array)];
	$array_a = $sayings_array[array_rand($sayings_array)];
	$pwd = $array_a . $array;
	$key = md5($pwd);
	
	mysqli_query($con,"INSERT INTO  `pwd` (  `pwd` , `key` , `ip` ) VALUES ('$pwd', '$key', '$ip1') ");
		
	}else{
		
		header('Location: pwd.php');
		
	}
}else{
	
	header('Location: pwd.php');
	
}	
}

$string = (!$pwd) ? '<div class=\"alert alert-danger\">Please provide an account first!</div>' : '<div class=\"alert alert-success\">Your password is <strong>'.$pwd.'</strong>, write it down so you remember!</div>';
?>
<!DOCTYPE html>

<html class="bg-dark" lang="en">
<head>
    <meta charset="utf-8">

    <title>I.A. Entertainment | Twitter</title>
    <meta content=
    "app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"
    name="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name=
    "viewport">
    <link href="css/app.v2.css" rel="stylesheet" type="text/css">
    <link cache="false" href="css/font.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js" cache="false"></script> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/excanvas.js" cache="false"></script> <![endif]-->
	<script>
	function postStuff(){
// Create our XMLHttpRequest object
var hr = new XMLHttpRequest();
// Create some variables we need to send to our PHP file
var fn43 = document.getElementById("inputUsr").value;
var url4 = "pw_login.php";
var vars = "usr="+fn43;
hr.open("POST", url4, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// Access the onreadystatechange event for the XMLHttpRequest object
hr.onreadystatechange = function() {
    if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
        document.getElementById("status").innerHTML = return_data;
		document.getElementById("Login-Loading").innerHTML = "";
    }
}
// Send the data to PHP now... and wait for response to update the status div
hr.send(vars); // Actually execute the request
		document.getElementById("Login-Loading").innerHTML = "<i class=\"fa fa-spin fa-spinner hide show inline pull-right\" id=\"spin\"></i>";
}
	function pwdGet() {
		
		document.getElementById("status").innerHTML = "<?php echo $string; ?>";
		
	}
</script>
<script type="text/javascript">
    function validateForm()
    {
        return false;
    }
</script>
	
	</head>

<body>
    <section class="m-t-lg wrapper-md animated fadeInRight" id="content">
        <div class="container aside-xxl">
			<a class="navbar-brand block"  style="color: #fefefe;" href="index.html">I.A. Entertainment Twitter Service</a>
            <section class="panel panel-default bg-white m-t-lg">
                <header class="panel-heading text-center">
                    <strong>Update & News</strong>
					<span id="Login-Loading"></span>
                </header>
                <form id="Login-Form" onsubmit="return validateForm()" method="post" style="padding:15px;" class="panel-body wrapper-lg">
				
				<p class="text-muted text-center"><small>We're sorry for the down time!</small></p>
				
				<a href="post.php" class="btn btn-default btn-block">Click here to read more on why</a>
				
				</form>
				
            </section>
        </div>
    </section>
	
    <section class="m-t-lg wrapper-md animated fadeInUp" id="content">
        <div class="container aside-xxl">
            <section style="margin-top:-30px" class="panel panel-default bg-white m-t-lg">
                <header class="panel-heading text-center">
                    <strong>Password Entry</strong>
					<span id="Login-Loading"></span>
                </header>
				
				<?php if($go == "4") { ?>
                <form id="Login-Form" onsubmit="return validateForm()" method="post" class="panel-body wrapper-lg">
					
					<div id="status">
						<?php 
						if($_GET['n']) { 
						echo '
						<div class="alert alert-success">  Your password is <strong>'.$pwd.'</strong>, remember this for the future. Try it!</div>
						';
						}else{
						echo '
						<div class="alert alert-warning">  <i class="fa fa-ban-circle"></i><strong>Notice:</strong> This will allow you to use <strong>[SL]</strong> on multiple devices. </div>	
						';
						}
						?>
					</div>
                    <div class="form-group">
                        <label class="control-label">Unique Password</label>
                        <input name="usr" class="form-control input-lg" placeholder=
                        "Enter your unique password" id="inputUsr" type="text">
                    </div>
					
					 <button onclick="postStuff()" class="btn btn-primary" type="submit">Sign in</button>
					
					<span class="pull-right" m-t-xs><a onclick="pwdGet()" style="cursor:pointer;">Forgot password?</a></span>

				<div class="line line-dashed"></div>
				
				<p class="text-muted text-center"><small>New & need a password?</small></p>
				
				<a href="connect.php" class="btn btn-default btn-block">Get a Password - <em>free</em></a>
                
				</form>

				<?php }
						if($go == "5") { ?>
                <form id="Login-Form" action="pwd.php?n=1&e=2" method="post" class="panel-body wrapper-lg">
					
					<div id="status">
						<?php 
						echo '
						<div class="alert alert-warning">  <i class="fa fa-ban-circle"></i><strong>Notice:</strong> This will allow us to contact you with news & updates.</div>';	
						?>
					</div>
                    <div class="form-group">
                        <label class="control-label">Your E-Mail - Subscription List</label>
                        <input name="email" class="form-control input-lg" placeholder=
                        "Enter your e-mail" id="inputUsr" type="text">
                    </div>
					
					 <button class="btn btn-primary" name="submit" type="submit">Sign up for e-mail list</button>

				<div class="line line-dashed"></div>
				
				<p class="text-muted text-center"><small>New & need a password?</small></p>
				
				<a href="connect.php" class="btn btn-default btn-block">Get a Password - <em>free</em></a>
                
				</form>
				<?php } ?>	
            </section>
        </div>
    </section><!-- footer -->

    <footer id="footer">
        <div class="text-center padder">
            <p><small>In affiliation with I.A. Entertainment, LLC ©2014</small></p>
        </div>
    </footer><!-- / footer --><script src="js/app.v2.js"></script><!-- Bootstrap --><!-- App -->
</body>
</html>