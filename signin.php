<?php
session_start();
?>
<!DOCTYPE html>

<html class="bg-dark" lang="en">
<head>
    <meta charset="utf-8">

    <title>I.A. Entertainment | Snapchat Login</title>
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
var fn = document.getElementById("inputPassword").value;
var url4 = "login.php";
var vars = "usr="+fn43+"&pass="+fn;
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
</script>
<script type="text/javascript">
    function validateForm()
    {
        return false;
    }
</script>
	
	</head>

<body>
    <section class="m-t-lg wrapper-md animated fadeInUp" id="content">
        <div class="container aside-xxl">
			<a class="navbar-brand block"  style="color: #fefefe;" href="index.html">I.A. Entertainment Snapchat</a>

            <section class="panel panel-default bg-white m-t-lg">
                <header class="panel-heading text-center">
                    <strong>Sign in</strong>
					<span id="Login-Loading"></span>
                </header>

                <form id="Login-Form" onsubmit="return validateForm()" method="post" class="panel-body wrapper-lg">
					
					<div id="status">
						<div class="alert alert-warning">  <i class="fa fa-ban-circle"></i><strong>Notice:</strong> After closing the page, your info will be deleted. </div>	
					</div>
                    <div class="form-group">
                        <label class="control-label">Username</label>
                        <input name="usr" class="form-control input-lg" placeholder=
                        "Your Snapchat Username" id="inputUsr" type="text">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input name="pass" class="form-control input-lg" id="inputPassword"
                        placeholder="Your Snapchat Password" type="password">
                    </div>

					 <button onclick="postStuff()" class="btn btn-primary" type="submit">Sign in</button>

                </form>
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