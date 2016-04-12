<?php
include('handle_check.php');
?>
<!DOCTYPE html>
<html lang="en" class="app">
  <head>
    
    <meta charset="utf-8" />
    
    <title>
      I.A. Entertainment | Twitter
    </title>
    
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <link rel="stylesheet" href="css/app.v2.css" type="text/css" />
    
    <link rel="stylesheet" href="css/font.css" type="text/css" cache="false" />
	  
	  <link rel="stylesheet" href="js/select2/select2.css" type="text/css" cache="false"/>
<link rel="stylesheet" href="js/select2/theme.css" type="text/css" cache="false"/>
<link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" cache="false"/>
<link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" cache="false"/>
<link rel="stylesheet" href="js/slider/slider.css" type="text/css" cache="false"/>
	  <style type="text/css">
		  .reset {	  
			animation : none;
			animation-delay : 0;
			animation-direction : normal;
			animation-duration : 0;
			animation-fill-mode : none;
			animation-iteration-count : 1;
			animation-name : none;
			animation-play-state : running;
			animation-timing-function : ease;
			backface-visibility : visible;
			background : 0;
			background-attachment : scroll;
			background-clip : border-box;
			background-color : transparent;
			background-image : none;
			background-origin : padding-box;
			background-position : 0 0;
			background-position-x : 0;
			background-position-y : 0;
			background-repeat : repeat;
			background-size : auto auto;
			border : 0;
			border-style : none;
			border-width : medium;
			border-color : inherit;
			border-bottom : 0;
			border-bottom-color : inherit;
			border-bottom-left-radius : 0;
			border-bottom-right-radius : 0;
			border-bottom-style : none;
			border-bottom-width : medium;
			border-collapse : separate;
			border-image : none;
			border-left : 0;
			border-left-color : inherit;
			border-left-style : none;
			border-left-width : medium;
			border-radius : 0;
			border-right : 0;
			border-right-color : inherit;
			border-right-style : none;
			border-right-width : medium;
			border-spacing : 0;
			border-top : 0;
			border-top-color : inherit;
			border-top-left-radius : 0;
			border-top-right-radius : 0;
			border-top-style : none;
			border-top-width : medium;
			bottom : auto;
			box-shadow : none;
			box-sizing : content-box;
			caption-side : top;
			clear : none;
			clip : auto;
			color : inherit;
			columns : auto;
			column-count : auto;
			column-fill : balance;
			column-gap : normal;
			column-rule : medium none currentColor;
			column-rule-color : currentColor;
			column-rule-style : none;
			column-rule-width : none;
			column-span : 1;
			column-width : auto;
			content : normal;
			counter-increment : none;
			counter-reset : none;
			cursor : auto;
			direction : ltr;
			display : inline;
			empty-cells : show;
			float : none;
			font : normal;
			font-family : inherit;
			font-size : medium;
			font-style : normal;
			font-variant : normal;
			font-weight : normal;
			height : auto;
			hyphens : none;
			left : auto;
			letter-spacing : normal;
			line-height : normal;
			list-style : none;
			list-style-image : none;
			list-style-position : outside;
			list-style-type : disc;
			margin : 0;
			margin-bottom : 0;
			margin-left : 0;
			margin-right : 0;
			margin-top : 0;
			max-height : none;
			max-width : none;
			min-height : 0;
			min-width : 0;
			opacity : 1;
			orphans : 0;
			outline : 0;
			outline-color : invert;
			outline-style : none;
			outline-width : medium;
			overflow : visible;
			overflow-x : visible;
			overflow-y : visible;
			padding : 0;
			padding-bottom : 0;
			padding-left : 0;
			padding-right : 0;
			padding-top : 0;
			page-break-after : auto;
			page-break-before : auto;
			page-break-inside : auto;
			perspective : none;
			perspective-origin : 50% 50%;
			position : static;
			/* May need to alter quotes for different locales (e.g fr) */
			quotes : '\201C' '\201D' '\2018' '\2019';
			right : auto;
			tab-size : 8;
			table-layout : auto;
			text-align : inherit;
			text-align-last : auto;
			text-decoration : none;
			text-decoration-color : inherit;
			text-decoration-line : none;
			text-decoration-style : solid;
			text-indent : 0;
			text-shadow : none;
			text-transform : none;
			top : auto;
			transform : none;
			transform-style : flat;
			transition : none;
			transition-delay : 0s;
			transition-duration : 0s;
			transition-property : none;
			transition-timing-function : ease;
			unicode-bidi : normal;
			vertical-align : baseline;
			visibility : visible;
			white-space : normal;
			widows : 0;
			width : auto;
			word-spacing : normal;
			z-index : auto;	  
		  }
		  
.ribbon-green {
font: bold 10px Sans-Serif;
color: #333;
text-align: center;
text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
position: relative;
padding: 7px 0;
left: 50px;
top: -17px;
width: 144px;
background-color: #BFDC7A;
background-image: -webkit-gradient(linear, left top, left bottom, from(#BFDC7A), to(#8EBF45));
background-image: -webkit-linear-gradient(top, #BFDC7A, #8EBF45);
background-image: -moz-linear-gradient(top, #BFDC7A, #8EBF45);
background-image: -ms-linear-gradient(top, #BFDC7A, #8EBF45);
background-image: -o-linear-gradient(top, #BFDC7A, #8EBF45);
color: #6a6340;
-webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
-moz-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
}
.ribbon-green:before, .ribbon-green:after {
  content: "";
  border-top:   3px solid #6e8900;   
  border-left:  3px solid transparent;
  border-right: 3px solid transparent;
  position:absolute;
  bottom: -3px;
}

.ribbon-green:before {
  left: 0;
}
.ribbon-green:after {
  right: 0;
}
	  </style>
	  
    <!--[if lt IE 9]>

<script src="js/ie/html5shiv.js" cache="false">
</script>

<script src="js/ie/respond.min.js" cache="false">
</script>

<script src="js/ie/excanvas.js" cache="false">
</script>

<![endif]-->
	  
	<script>
function postStuff(){
// Create our XMLHttpRequest object
var hr = new XMLHttpRequest();
// Create some variables we need to send to our PHP file
var fn = document.getElementById("url").value;
var ln = document.getElementById("checkbox-1").checked;
var ln1 = document.getElementById("checkbox-0").checked;
var ld = document.getElementById("spinne").value;
var key = document.getElementById("keyID").value;
var url = "handle.php";
var vars = "url="+fn+"&retweet="+ln+"&favorite="+ln1+"&spinner="+ld+"&key="+key;
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// Access the onreadystatechange event for the XMLHttpRequest object
hr.onreadystatechange = function() {
    if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
        document.getElementById("status").innerHTML = return_data;
    }
}
// Send the data to PHP now... and wait for response to update the status div
hr.send(vars); // Actually execute the request
	document.getElementById("status").innerHTML = "<br /> Processing... Allow up to a minute for your query to process, thanks.";
}
function postStuff1(){
// Create our XMLHttpRequest object
var hr = new XMLHttpRequest();
// Create some variables we need to send to our PHP file
var fn43 = document.getElementById("url1").value;
var key = document.getElementById("keyID2").value;
var url4 = "handle_follow.php";
var vars = "url1="+fn43+"&key="+key;
hr.open("POST", url4, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// Access the onreadystatechange event for the XMLHttpRequest object
hr.onreadystatechange = function() {
    if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
        document.getElementById("status1").innerHTML = return_data;
    }
}
// Send the data to PHP now... and wait for response to update the status div
hr.send(vars); // Actually execute the request
	document.getElementById("status1").innerHTML = "<br />Processing... Allow up to a minute for your query to process, thanks.";
}
function postStuff2(){
var hr = new XMLHttpRequest();
// Create some variables we need to send to our PHP file
var fn = document.getElementById("url2").value;
var fn2 = document.getElementById("additionaltext").value;
var ld = document.getElementById("spinnee").value;
var key = document.getElementById("keyID1").value;
var url = "quote.php";
var vars = "url2="+fn+"&additionaltext="+fn2+"&spinnerr="+ld+"&key="+key;
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// Access the onreadystatechange event for the XMLHttpRequest object
hr.onreadystatechange = function() {
    if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
        document.getElementById("status2").innerHTML = return_data;
    }
}
// Send the data to PHP now... and wait for response to update the status div
hr.send(vars); // Actually execute the request
	document.getElementById("status2").innerHTML = "<br /> Processing... Allow up to a minute for your query to process, thanks.";
}
function postStuff4(){
var hr = new XMLHttpRequest();
// Create some variables we need to send to our PHP file
var fn = document.getElementById("url4").value;
var fn2 = document.getElementById("additionaltext1").value;
var ld = document.getElementById("spinneee").value;
var key = document.getElementById("keyID4").value;
var url = "reply.php";
var vars = "url4="+fn+"&additionaltext1="+fn2+"&spinnerrr="+ld+"&key4="+key;
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// Access the onreadystatechange event for the XMLHttpRequest object
hr.onreadystatechange = function() {
    if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
        document.getElementById("status4").innerHTML = return_data;
    }
}
// Send the data to PHP now... and wait for response to update the status div
hr.send(vars); // Actually execute the request
	document.getElementById("status4").innerHTML = "<br /> Processing... Allow up to a minute for your query to process, thanks.";
}
function postStuff3(){
var hr = new XMLHttpRequest();
// Create some variables we need to send to our PHP file
var fn = "yes"
var url = "usrtest.php";
var vars = "yes="+fn;
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// Access the onreadystatechange event for the XMLHttpRequest object
hr.onreadystatechange = function() {
    if(hr.readyState == 4 && hr.status == 200) {
        var return_data = hr.responseText;
        document.getElementById("status3").innerHTML = return_data;
    }
}
// Send the data to PHP now... and wait for response to update the status div
hr.send(vars); // Actually execute the request
	document.getElementById("status3").innerHTML = "<br /> Processing... Allow up to a minute for your query to process, thanks.";
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
    
    <section class="vbox">
      
      <header class="bg-dark dk header navbar navbar-fixed-top-xs">
        
        <div class="navbar-header aside-md">
          
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
            
            <i class="fa fa-bars">
            </i>
            
          </a>
          
          <a href="index.php" class="navbar-brand">
            <img src="images/logo.png" class="m-r-sm">
           I.A. Entertainment
          </a>
          
          <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
            
            <i class="fa fa-cog">
            </i>
            
          </a>
          
        </div>
        
        <ul class="nav navbar-nav hidden-xs">
          
          <li class="dropdown">
            
            <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
              
              <i class="fa fa-building-o">
              </i>
              
              <span class="font-bold">
                Activity
              </span>
              
            </a>
            
            
          </li>
          
        </ul>
 
        
      </header>
      
      <section>
        
        <section class="hbox stretch">
          
          <!-- .aside -->
          
          <aside class="bg-light lter b-r aside-md hidden-print" id="nav">
            
            <section class="vbox">
              
              <header class="header bg-primary lter text-center clearfix">
                
                
                 <div class="btn-group">
                  
                  <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
                    <i class="fa fa-question">
                    </i>
                  </button>
                  
                  <div class="btn-group hidden-nav-xs">
                    
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-primary dropdown-toggle">
                      Help & Support
                      </span>
                      
                    </button>
                
                    
                  </div>
                  
                </div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">	
<div class="modal-dialog"> 
	<div class="modal-content"> 
		<div class="modal-header"> 
			<button type="button" class="close" data-dismiss="modal">×</button> 
			<h4 class="modal-title" style="color: #717171;">Twitter Service Help & Support</h4> 
		</div> 
		<div class="modal-body" style="text-align:left; color: #717171;">
			<h4>I accidentally entered my real twitter not secondary, help?</h4>
			<p align="justify">
				The best way it to do so through the left-menu tab. Select 'Edit secondary Account', and select the account you'd like
				to replace. Then, simply follow the process and your account will be replaced. You may also add more accounts
				but you may not remove accounts because we must ensure you maintain at least one account.
			</p>
			<br />
			<h4>Why aren't I receiving any followers?</h4>
			<p align="justify">
				Ensure that you are enter the account spelled correctly, also please make sure you are entering the username only, not an entire link.
				For example, enter "moderndayfreak", not "@moderndayfreak" or "http://twitter.com/moderndayfreak".
			</p>
			<br />
			<h4>Is there any way I get more followers/favourites/retweets?</h4>
			<p align="justify">
				Where there's a will, there's a way. We're working on the form right now, however for the time
				being you may e-mail us at support@I.A. Entertainment.com to request a larger order amount. Or, private
				message us via HF.
			</p>
			<h5 style="text-indent:10px;">How much for the extra features?</h5>
			<p style="margin-left:15px;" align="justify">
				For extra followers, retweets, and favourites we ask for anywhere between 2-3$/k depending the quantity of the order.
				Remember, these are immediate, and these users are <i>real-looking</i> with avatars, bios, and followers.
			</p>
		</div> 
		<div class="modal-footer"> 
			<a href="#" class="btn btn-default" data-dismiss="modal">Close</a> 
			<a href="#" class="btn btn-primary">Save</a> 
		</div> 
	</div><!-- /.modal-content -->
</div>
</div>
                
              </header>
              
              <section class="w-f scrollable">
                
                <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                  
                  <!-- nav -->
                  
                  <nav class="nav-primary hidden-xs">
                    
                    <ul class="nav">
   
                      <li>
                        
                        <a href="profile.php">
                          
                          <i class="fa fa-trophy icon">
                            
                            <b class="bg-warning lter">
                            </b>
                            
                          </i>
                          
                          <span>
                            Snapchat Services
                          </span>
                          
                        </a>
                        
                      </li>
                      
                      <li class="active">
                        
                        <a href="#" class="active">
                          
                          <i class="fa fa-twitter icon">
                            
                            <b class="bg-info">
                            </b>
                            
                          </i>
							
						<span class="pull-right"> 
							<i class="fa fa-angle-down text"></i> 
							<i class="fa fa-angle-up text-active"></i> 
						</span>
                          
                          <span>
                            Twitter Services
                          </span>
                          
                        </a>
						  
							<ul class="nav lt"> 
								<li class="active"> 
									<a href="#" class="active"> 
										<i class="fa fa-angle-right"></i> 
										<span>Main Page</span> 
									</a> 
								</li> 

								<li> 
									<a href="profile.html"> 

										<span class="pull-right"> 
											<i class="fa fa-angle-down text"></i> 
											<i class="fa fa-angle-up text-active"></i> 
										</span>

										<i class="fa fa-angle-right"></i> 
										<span>Edit secondary Account</span> 
									</a> 

										<ul class="nav lt"> 
										<?php if($result->num_rows >= 1) {
												foreach($usrs as $d) {
													echo '
													<li> 
														<a href="connect.php?r=1&u='.$d.'"> 
															<i class="fa fa-twitter"></i> 
															<span>
																'.$d.'
															</span> 
														</a> 
													</li> 
													'; 
												} 

											} ?>
										</ul>

								</li> 

								<li> 
									<a href="connect.php?i=3"> 
										<i class="fa fa-angle-right"></i>
										<span>Add More Accounts</span> 
									</a> 
								</li> 
								
								<li>  
									<a href="#"> 
										<i class="fa fa-angle-right"></i>
										<span>Buy Premium Services</span> 
										<div class="ribbon-green">COMING SOON</div>
									</a> 
								</li> 
								
							
							</ul>
                        
                      </li>
                      
                    </ul>
                    
                  </nav>
                  
                  <!-- / nav -->
                  
                </div>
                
              </section>
              
            </section>
            
          </aside>
          
          <!-- /.aside -->
          
          <section id="content">
            
            <section class="vbox">
              
              <header class="header bg-white b-b b-light">
                
                <p>
                  Twitter overview
                </p>
            	  
              </header>
              
              <section class="scrollable">
                
                <section class="hbox stretch">
                  
                  <aside class="aside-lg bg-light lter b-r">
                    
                    <section class="vbox">
                      
                      <section class="scrollable">
                        
                        <div class="wrapper">
                          
                          <div class="clearfix m-b">
                            
                                           <div class="clear">
                                             <div class="h3 m-t-xs m-b-xs">Twitter Service</div>
                                             <small class="text-muted"><i class="fa fa-map-marker"></i> <?php $ip = $_SERVER['REMOTE_ADDR']; $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}")); echo $details->city.", ".$details->country; // -> "Mountain View" ?></small> 
                                          </div>
                                       </div>                         
                          
                          <div>
                            
                            <small class="text-uc text-xs text-muted">
                              about our service
                            </small>
                            
                            <p>
								The original retweet and favourite generator. Created in 2013, we've reached over 1,000 users in under a month.
                            </p>
                            
                            <small class="text-uc text-xs text-muted">
                              information
                            </small>
                            
                            <p>
								The secondary account you provided is <a href="//twitter.com/<? echo $fetch['usr']; ?>">@<? echo $usrs[0]; ?></a>, wrong account? Click help above to find out how to change that.
                            </p>
                            
                            <div class="line">
                            </div>
                            
                            <small class="text-uc text-xs text-muted">
                              Statistics
                            </small>
                            
                            <p class="m-t-sm">
                              
							Over <span id="totalAmount">NULL</span> retweets, tweets, and followers have been given thanks to I.A. Entertainment Services!
                              
                            </p>
                            
                          </div>
                          
                        </div>
                        
                      </section>
                      
                    </section>
                    
                  </aside>
                  
                  <aside class="bg-white">
                    
                    <section class="vbox">
                      
                      <header class="header bg-light bg-gradient">
                        
                        <ul class="nav nav-tabs nav-white">
                          
						  <li class="active">
                            <a href="#activity" data-toggle="tab">
                              Favourites & Retweets
                            </a>
                          </li>
							
                          <li class="">
                            <a href="#quotes" data-toggle="tab">
                              Quote Retweets
                            </a>
                          </li> 
							
                          <li class="">
                            <a href="#events" data-toggle="tab">
                              Followers
                            </a>
                          </li>
							
                          <li class="">
                            <a href="#reply" data-toggle="tab">
                              Reply
                            </a>
                          </li>
							
                          <li class="">
                            <a href="#reload" data-toggle="tab">
                              Reload the Accounts
                            </a>
                          </li>
							
                          
                        </ul>
                        
                      </header>
                      
						<section style="padding:10px;" class="scrollable">
                        
                        <div class="tab-content">
                          
							<!-- Favourites & Retweets -->
							<div class="tab-pane active" id="activity">
							<div class="row">

								<div class="alert alert-warning alert-block"> 
									<h4><i class="fa fa-bell-alt"></i>Information</h4> 
									<p>Accounts are checked and updated, if your secondary account is suspended you must provide a new, working one.</p>
                                  <p>Last account check: <strong><?php echo $date; ?> EST</strong></p>
									<p>
										For a blog post on what happened, <a href="post.php">go here</a>.
									</p>
								</div>
								
								<div class="col-sm-6">
									<section class="panel panel-default">
										
										<header class=
										"panel-heading font-bold">
											Retweets & Favourites form
										</header>

										<div class="panel-body">
											<form method="post" id="formTwT" onsubmit="return validateForm()">
												<div class="form-group" style="margin-bottom:22px;">
													<label>Tweet URL</label>
													<input class="form-control"
													placeholder="Provide your tweet URL"
													type="text" id="url" name="url">
												</div>
				
												<div>
													
												<span style="float:left; margin-top:-11px; margin-right: 50px;"> 
													
												<div class="checkbox">
													<label><input type="checkbox" name="retweet" id="checkbox-1"> Retweets</label>
												</div>
												
												<div class="checkbox">
													<label><input type="checkbox" name="favorite" id="checkbox-0"> Favourites</label>
												</div>
												
												</span>
													
													<div id="MySpinner" class="spinner input-group" data-min="1" data-max="<?php echo $total_num; ?>" style="width: 70px; float: left; margin-right:50px;"> 
													<input type="text" style="width:50px;" class="form-control spinner-input" value="<?php echo $total_num; ?>" name="spinner" id="spinne" maxlength="2"> 
													<div class="btn-group btn-group-vertical input-group-btn"> 
														<button type="button" class="btn btn-default spinner-up"> <i class="fa fa-chevron-up text-muted"></i> </button> 
														<button type="button" class="btn btn-default spinner-down"> <i class="fa fa-chevron-down text-muted"></i> </button> 
													</div>
		
												</div>
												
												</div>
												
												<div style="display:none;">
													<input id="keyID" name="key" value="<?php echo $key; ?>" type="hidden">
												</div>  												
												
												<div>
												
												<button onclick="postStuff();" class=
												"btn btn-sm btn-default" type=
												"submit">Submit</button>
												</div>
											</form>
                                          <span class="help-block" style="margin-top:30px;"> <small> In the input space, include your twitter link, then select whether you want favourites, retweets, or both. Then, input how many you'd like with a maximum of <strong><?php echo $total_num; ?></strong> per request. Please note the accuracy of the number be not accurate due to suspended accounts, expired tokens, or other causes. These accounts are cleared at the end of the day.</small></span>
										</div>
									</section>
								</div>

								<div class="col-sm-6">
									<section class="panel panel-default">
										<header class=
										"panel-heading font-bold">
											Status Panel
										</header>

										<div class="panel-body">
												<div class="form-group" id="status">
													<br /> Idle, waiting for a request.
												</div>
										</div>
									</section>
								</div>
							</div>
							</div>
							
							<!-- Quote Retweets -->
							<div class="tab-pane" id="quotes">
							<div class="row">

								<div class="alert alert-warning alert-block"> 
									<h4><i class="fa fa-bell-alt"></i>Information</h4> 
									<p>Accounts are checked and updated, if your secondary account is suspended you must provide a new, working one.</p>
                                  <p>Last account check: <strong><?php echo $date; ?> EST</strong></p>
									<p>
										For a blog post on what happened, <a href="post.php">go here</a>.
									</p>
								</div>
								
								<div class="col-sm-6">
									<section class="panel panel-default">
										
										<header class=
										"panel-heading font-bold">
											Quote Retweets form
										</header>

										<div class="panel-body">
											<form method="post" id="formTwT" onsubmit="return validateForm()">
												<div class="form-group" style="margin-bottom:22px;">
													<label>Tweet URL</label>
													<input class="form-control"
													placeholder="Provide your tweet URL"
													type="text" id="url2" name="url2">
												</div>
												
												<div class="form-group" style="margin-bottom:22px;">
													<label>Additional text</label>
													<input class="form-control"
													placeholder="Additional text (optional, seperate each with '|')"
													type="text" id="additionaltext" name="additionaltext">
												</div>
												
												<div>
													
												<div id="MySpinner" class="spinner input-group" data-min="1" data-max="<?php echo $total_num; ?>" style="width: 70px; float: left; margin-right:50px;"> 
													<input type="text" style="width:50px;" class="form-control spinner-input" value="<?php echo $total_num; ?>" name="spinnerr" id="spinnee" maxlength="2"> 
													<div class="btn-group btn-group-vertical input-group-btn"> 
														<button type="button" class="btn btn-default spinner-up"> <i class="fa fa-chevron-up text-muted"></i> </button> 
														<button type="button" class="btn btn-default spinner-down"> <i class="fa fa-chevron-down text-muted"></i> </button> 
													</div>
		
												</div>
												
												</div>
												
												<div style="display:none;">
													<input id="keyID1" name="key1" value="<?php echo $key; ?>" type="hidden">
												</div>  												
												
												<div>
												
												<button onclick="postStuff2();" class=
												"btn btn-sm btn-default" type=
												"submit">Submit</button>
												</div>
											</form>
                                          <span class="help-block" style="margin-top:30px;"> <small> In the input space, include your twitter link, then select whether you want favourites, retweets, or both. Then, input how many you'd like with a maximum of <strong><?php echo $total_num; ?></strong> per request. Please note the accuracy of the number be not accurate due to suspended accounts, expired tokens, or other causes. These accounts are cleared at the end of the day.</small></span>
										</div>
									</section>
								</div>

								<div class="col-sm-6">
									<section class="panel panel-default">
										<header class=
										"panel-heading font-bold">
											Status Panel
										</header>

										<div class="panel-body">
												<div class="form-group" id="status2">
													<br /> Idle, waiting for a request.
												</div>
										</div>
									</section>
								</div>
							</div>
							</div>
							
							<!-- Followers -->
							<div class="tab-pane" id="events">
							<div class="row">
								
								<div class="alert alert-warning alert-block"> 
									<h4><i class="fa fa-bell-alt"></i>Information</h4> 
									<p>Accounts are checked and updated, if your secondary account is suspended you must provide a new, working one.</p>
                                  <p>Last account check: <strong><?php echo $date; ?> EST</strong></p>
									<p>
										For a blog post on what happened, <a href="post.php">go here</a>.
									</p>
								</div>
								
								<div class="col-sm-6">
									<section class="panel panel-default">
										<header class=
										"panel-heading font-bold">
											Followers Form
										</header>

										<div class="panel-body">
											<form method="post" id="formTwT" onsubmit="return validateForm()">
												<div class="form-group">
													<label>Twitter Name</label>
													<input class="form-control"
													placeholder="Enter your username e.g. fearfuls"
													type="text" id="url1" name="url1">
												</div>
											
												<div style="display:none;">
													<input id="keyID2" name="key2" value="<?php echo $key; ?>" type="hidden">
												</div>  
												
												<button onclick="postStuff1();" class=
												"btn btn-sm btn-default" type=
												"submit">Submit</button>
											</form>
										</div>
									</section>
								</div>

								<div class="col-sm-6">
									<section class="panel panel-default">
										<header class=
										"panel-heading font-bold">
											Status Panel
										</header>

										<div class="panel-body">
												<div class="form-group" id="status1">
													<br />
													Idle, waiting for a request.
												</div>
										</div>
									</section>
								</div>
							</div>
							</div>

							<!-- Reply Retweets -->
							<div class="tab-pane" id="reply">
							<div class="row">

								<div class="alert alert-warning alert-block"> 
									<h4><i class="fa fa-bell-alt"></i>Information</h4> 
									<p>Accounts are checked and updated, if your secondary account is suspended you must provide a new, working one.</p>
                                  <p>Last account check: <strong><?php echo $date; ?> EST</strong></p>
									<p>
										For a blog post on what happened, <a href="post.php">go here</a>.
									</p>
								</div>
								
								<div class="col-sm-6">
									<section class="panel panel-default">
										
										<header class=
										"panel-heading font-bold">
											Reply form
										</header>

										<div class="panel-body">
											<form method="post" id="formTwT" onsubmit="return validateForm()">
												<div class="form-group" style="margin-bottom:22px;">
													<label>Tweet URL</label>
													<input class="form-control"
													placeholder="Provide your tweet URL"
													type="text" id="url4" name="url4">
												</div>
												
												<div class="form-group" style="margin-bottom:22px;">
													<label>Reply text</label>
													<input class="form-control"
													placeholder="Reply text (optional, seperate each with '|')"
													type="text" id="additionaltext1" name="additionaltext1">
												</div>
												
												<div>
													
												<div id="MySpinner" class="spinner input-group" data-min="1" data-max="<?php echo $total_num; ?>" style="width: 70px; float: left; margin-right:50px;"> 
													<input type="text" style="width:50px;" class="form-control spinner-input" value="<?php echo $total_num; ?>" name="spinnerrr" id="spinneee" maxlength="2"> 
													<div class="btn-group btn-group-vertical input-group-btn"> 
														<button type="button" class="btn btn-default spinner-up"> <i class="fa fa-chevron-up text-muted"></i> </button> 
														<button type="button" class="btn btn-default spinner-down"> <i class="fa fa-chevron-down text-muted"></i> </button> 
													</div>
		
												</div>
												
												</div>
												
												<div style="display:none;">
													<input id="keyID4" name="key4" value="<?php echo $key; ?>" type="hidden">
												</div>  												
												
												<div>
												
												<button onclick="postStuff4();" class=
												"btn btn-sm btn-default" type=
												"submit">Submit</button>
												</div>
											</form>
                                          <span class="help-block" style="margin-top:30px;"> <small> In the input space, include your twitter link, then select whether you want favourites, retweets, or both. Then, input how many you'd like with a maximum of <strong><?php echo $total_num; ?></strong> per request. Please note the accuracy of the number be not accurate due to suspended accounts, expired tokens, or other causes. These accounts are cleared at the end of the day.</small></span>
										</div>
									</section>
								</div>

								<div class="col-sm-6">
									<section class="panel panel-default">
										<header class=
										"panel-heading font-bold">
											Status Panel
										</header>

										<div class="panel-body">
												<div class="form-group" id="status4">
													<br /> Idle, waiting for a request.
												</div>
										</div>
									</section>
								</div>
							</div>
							</div>
							
							<!-- Followers -->
							<div class="tab-pane" id="reload">
							<div class="row">
								
								<div class="alert alert-warning alert-block"> 
									<h4><i class="fa fa-bell-alt"></i>Information</h4> 
									<p>Accounts are checked and updated, if your secondary account is suspended you must provide a new, working one.</p>
                                  <p>Last account check: <strong><?php echo $date; ?> EST</strong></p>
									<p>
										For a blog post on what happened, <a href="post.php">go here</a>.
									</p>
								</div>
								
								<div class="col-sm-6">
									<section class="panel panel-default">
										<header class=
										"panel-heading font-bold">
											Reload accounts, for us.
										</header>

										<div class="panel-body">
											<form method="post" id="formTwT" onsubmit="return validateForm()">
												<div class="form-group">
													<label>Simply click the button to begin.</label>
												</div>
												
												<button onclick="postStuff3();" class=
												"btn btn-sm btn-default" type=
												"submit">Reload the accounts</button>
											</form>
										</div>
									</section>
								</div>

								<div class="col-sm-6">
									<section class="panel panel-default">
										<header class=
										"panel-heading font-bold">
											Status Panel
										</header>

										<div class="panel-body">
												<div class="form-group" id="status3">
													<br />
													Idle, waiting for a request.
												</div>
										</div>
									</section>
								</div>
							</div>
							</div>
							
							</div>						
                            
                          </div>
                        
                      </section>
                      
                    </section>
                    
                  </aside>

                </section>
                
              </section>
              
            </section>
            
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav">
            </a>
            
          </section>
          
          <aside class="bg-light lter b-l aside-md hide" id="notes">
            
            <div class="wrapper">
              Notification
            </div>
            
          </aside>
          
        </section>
        
      </section>
      
    </section>
  
    <script src="js/app.v2.js">
    </script>
	  <script src="js/file-input/bootstrap-filestyle.min.js" cache="false">
	
		  </script>

<script type="text/javascript">// <![CDATA[
$(document).ready(function() {
$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
setInterval(function() {
$('#totalAmount').load('amt.php');
}, 5000); // the "3000" here refers to the time to refresh the div.  it is in milliseconds. 
});
// ]]></script>

    		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script src="js/fuelux/fuelux.js" cache="false"></script><!-- datepicker -->
	<script src="js/fuelux/fuelux.js" cache="false"></script><!-- datepicker -->
	<script src="js/datepicker/bootstrap-datepicker.js" cache="false"></script><!-- slider -->
	<script src="js/slider/bootstrap-slider.js" cache="false"></script><!-- file input --> 
	<script src="js/file-input/bootstrap-filestyle.min.js" cache="false"></script><!-- combodate -->
	<script src="js/libs/moment.min.js" cache="false"></script>
	<script src="js/combodate/combodate.js" cache="false"></script><!-- select2 -->
	<script src="js/select2/select2.min.js" cache="false"></script><!-- wysiwyg -->
	<script src="js/wysiwyg/jquery.hotkeys.js" cache="false"></script>
	<script src="js/wysiwyg/bootstrap-wysiwyg.js" cache="false"></script>
	<script src="js/wysiwyg/demo.js" cache="false"></script><!-- markdown -->
	<script src="js/markdown/epiceditor.min.js" cache="false"></script>
	<script src="js/markdown/demo.js" cache="false"></script>
    <!-- Bootstrap -->
    
    <!-- App -->
    
  </body>
</html>
<?php
mysqli_close($con);
?>