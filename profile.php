<?php
//header('Location: index.php');
session_start();
if($_SESSION['pass'] == "") {
	header('Location: signin.php');
} 
require_once('src/snapchat.php');
    $s = new Snapchat($_SESSION['usr'], $_SESSION['pass']);
    $result = $s->login($_SESSION['usr'], $_SESSION['pass']);
	$r = (array) $result;
	$snaps = $s->getSnaps();
?>
<!DOCTYPE html>
<html lang="en" class="app">
  <head>
    
    <meta charset="utf-8" />
    
    <title>
      I.A. Entertainment | Snapchat
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
    
    <!--[if lt IE 9]>

<script src="js/ie/html5shiv.js" cache="false">
</script>

<script src="js/ie/respond.min.js" cache="false">
</script>

<script src="js/ie/excanvas.js" cache="false">
</script>

<![endif]-->
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
          
          <li>
            
            <div class="m-t m-l">
              
              <a href="logout.php" class="dropdown-toggle btn btn-xs btn-primary" title="Logout">
                <i class="fa fa-long-arrow-up">
                </i>
              </a>
              
            </div>
            
          </li>
          
        </ul>
        
        <ul class="nav navbar-nav navbar-right hidden-xs nav-user">
          
          
          <li class="dropdown">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
				<span class="thumb-sm avatar pull-right" style="border:none;">
                
                <img src="">
                
              </span>
              <?php echo $r['username']; ?> 
              <b class="caret">
              </b>
              
            </a>
            
			  <ul class="dropdown-menu animated fadeInRight" style="left:-32px;">
              
              <span class="arrow top">
              </span>
              
              <li>
              
              <li>
                
                <a href="logout.php" data-toggle="ajaxModal" >
                  Logout
                </a>
                
              </li>
              
            </ul>
            
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
			<h4 class="modal-title" style="color: #717171;">Snapchat Service Help & Support</h4> 
		</div> 
		<div class="modal-body" style="text-align:left; color: #717171;">
			<h4>How do I send snapchats to my snapchat friends?</h4>
			<p align="justify">
				Just click the 'Send a Snap' tab, select your picture, recipient and time. Just hit send and boom! Your snap has been sent.
			</p>
			<br />
			<h4>Are my credentials safe with you?</h4>
			<p align="justify">
				Of course! We do not share your information with anyone. We don't even store your information in a database, it's 
				simply stored in something called a session, which automatically removes itself after a set amount of time.
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
   
                      <li class="active">
                        
                        <a href="#pages" class="active">
                          
                          <i class="fa fa-trophy icon">
                            
                            <b class="bg-warning lter">
                            </b>
                            
                          </i>
                          
                          <span>
                            Snapchat Services
                          </span>
                          
                        </a>
                        
                      </li>
                      
                      <li >
                        
                        <a href="twitter.php" >
                          
                          <i class="fa fa-twitter icon">
                            
                            <b class="bg-info">
                            </b>
                            
                          </i>
                          
                          <span>
                            Twitter Services
                          </span>
                          
                        </a>
                        
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
                  <?php echo $r['username']; ?>'s profile
                </p>
                
              </header>
              
              <section class="scrollable">
                
                <section class="hbox stretch">
                  
                  <aside class="aside-lg bg-light lter b-r">
                    
                    <section class="vbox">
                      
                      <section class="scrollable">
                        
                        <div class="wrapper">
                          
                          <div class="clearfix m-b">
                            
                            <a href="#" class="pull-left thumb m-r">
                              
                              <img src="images/avatar.jpg" class="fa fa-trophy icon img-circle">
								
                            </a>
                            
                                           <div class="clear">
                                             <div class="h3 m-t-xs m-b-xs"><?php echo $r['username']; ?></div>
                                             <small class="text-muted"><i class="fa fa-map-marker"></i> <?php $ip = $_SERVER['REMOTE_ADDR']; $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}")); echo $details->city.", ".$details->country; // -> "Mountain View" ?></small> 
                                          </div>
                                       </div>
                                       <div class="panel wrapper panel-success">
                                          <div class="row">
                                             <div class="col-xs-4"> <a href="#"> <span class="m-b-xs h4 block"><?php echo number_format($r['score']); ?></span> <small class="text-muted">Score</small> </a> </div>
                                             <div class="col-xs-4"> <a href="#"> <span class="m-b-xs h4 block"><?php $zz = $r['received']+$r['sent']; echo number_format($zz); ?></span> <small class="text-muted">Snaps</small> </a> </div>
											  <div class="col-xs-4"> <a href="#"> <span class="m-b-xs h4 block"><?php echo count($r['friends']); ?></span> <small class="text-muted">Friends</small> </a> </div>

                                          
                              
                            </div>
                            
                          </div>
                         
                          
                          <div>
                            
                            <small class="text-uc text-xs text-muted">
                              about <?php echo $r['username']; ?>
                            </small>
                            
                            <p>
								Mobile: <?php echo $r['mobile']; ?> <br />
								Email: <?php echo $r['email']; ?>
                            </p>
                            
                            <small class="text-uc text-xs text-muted">
                              help
                            </small>
                            
                            <p>
                              Simple and easy-to-use, at the right you can view your recent snaps, the snaps you've sent and even send snaps to your snapchat friends.
                            </p>
                            
                            <div class="line">
                            </div>
                            
                            <small class="text-uc text-xs text-muted">
                              Follow Us
                            </small>
                            
                            <p class="m-t-sm">
                              
								<a href="//twitter.com/fearfuls" class="btn btn-rounded btn-twitter btn-icon">
                                <i class="fa fa-twitter">
                                </i>
                              </a>
                              
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
                          
							<li <?php if($_GET['s'] !== "1") { ?> class="active" <?php } ?>>
                            <a href="#activity" data-toggle="tab">
                              Recent Snaps
                            </a>
                          </li>
                          
                          <li class="">
                            <a href="#events" data-toggle="tab">
                              Sent Snaps
                            </a>
                          </li>
                          
							<li <?php if($_GET['s'] == "1") { ?>  class="active" <?php } ?>>
                            <a href="#interaction" data-toggle="tab">
                              Send a Snap
                            </a>
                          </li>
                          
                        </ul>
                        
                      </header>
                      
                      <section class="scrollable">
                        
                        <div class="tab-content">
                          
							<div class="tab-pane <?php if($_GET['s'] !== "1") { ?> active <?php } ?>" id="activity">
                                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
											 <?php 
												foreach($snaps as $key)
													{
														$tm = gmdate("d-m-y", $key['sent']);
													if($key['status'] == "2") {
														$s = "You've opened this snap";
													}elseif($key['status'] == "3"){
														$s = "You took a screenshot of this snap";
													}else{
														$s = "You've not yet opened this snap";
													}
													
													$t = ($s == "You've not yet opened this snap") ? 'getsnap.php?id='.$key['id'] : '#';
													
													if($key['status'] == $_SESSION['usr']){
														
													}else{
														echo '<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="'.$t.'" class="clear"> <small class="pull-right">'.$tm.'</small> <strong class="block">'.$key['sender'].'</strong> <small>Status: '.$s.'</small> </a> </li>';
													}
													}
											 ?>
                                          </ul>
                                       </div>
                                       <div class="tab-pane" id="events">
                                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
											 <?php 	
												foreach($snaps as $key)
													{
														$tm = gmdate("m-d-y", $key['sent']);
													if($key['status'] == "2") {
														$s = "They've opened your snap";
													}elseif($key['status'] == "3"){
														$s = "They took a screenshot";
													}else{
														$s = "They have not yet opened your snap";
													}
													if($key['sender'] == $_SESSION['usr']){
														echo '<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">'.$tm.'</small> <strong class="block">'.$key['recipient'].'</strong> <small>Status: '.$s.'</small> </a> </li>';
													}else{
														
													}
													}
											 ?>
                                          </ul>
                          </div>
                          
							<div class="tab-pane <?php if($_GET['s'] == "1") { ?> active <? } ?>" id="interaction">

		<section class="panel panel-default">
		<div class="panel-body">
		<form role="form" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>?s=1" method="post">
			<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  $filename = $_FILES["file"]["name"];
  $type = $_FILES["file"]["type"];
  $size = $_FILES["file"]["size"];
  $location = $_FILES["file"]["tmp_name"];
  $new = "s/" . $_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"], 's/' . $filename);
  $aDoor = $_POST['d-s-c-1'];
  if(empty($aDoor)) 
  {
  } 
  else
  {
    $s1 = new Snapchat($_SESSION['usr'], $_SESSION['pass']);
    $N = count($aDoor);
	$id = $s1->upload(
		Snapchat::MEDIA_IMAGE,
		file_get_contents($new)
	);
    for($i=0; $i < $N; $i++)
    {
	$s1->send($id, array($aDoor[$i]), $_POST['spinner']);
    }
		echo '<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert">×</button> <i class="fa fa-ok-sign"></i><strong>Boom!</strong> Your snap has been sent. </div>';
  }
  }
?>
			<div class="form-group">
			<label class="col-lg-2 control-label">
			Snap Picture </label>
			<div class="col-lg-10" style="margin-bottom:24px;">
				<input type="file" id="file" class="filestyle" data-icon="false" name="file" data-classbutton="btn btn-default" data-classinput="form-control inline input-s">
						<span class="help-block m-b-none">
						Here, select the snapchat that you'd like to send. </span>
			</div>
		</div>

				<div class="form-group">
					<label class="col-lg-2 control-label">
					Recipient </label>
					<div class="col-lg-10">
						<button style="float:left; margin-right: 50px;" data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
					<span class="dropdown-label" data-placeholder="Please select">
					Please select </span>
					<span class="caret">
					</span>
					</button>
					<ul name="dropdown" class="dropdown-menu dropdown-select">
						<li>
																	 <?php 	
												$ff = count($r['friends']);
												for($xx = 0; $xx < $ff; $xx++)
													{
													echo '						<li>
						<a href="#">
						<input type="checkbox" name="d-s-c-1[]" value="'.$r['friends'][$xx]->name.'"> 
						'.$r['friends'][$xx]->name.'</a>
						</li>';
													}
											 ?>
					</ul>
						
					<div id="MySpinner" class="spinner input-group" data-min="1" data-max="10" style="width: 70px; float: left;"> 
						<input type="text" class="form-control spinner-input" value="1" name="spinner" maxlength="2"> 
						<div class="btn-group btn-group-vertical input-group-btn"> 
							<button type="button" class="btn btn-default spinner-up"> <i class="fa fa-chevron-up text-muted"></i> </button> 
							<button type="button" class="btn btn-default spinner-down"> <i class="fa fa-chevron-down text-muted"></i> </button> 
						</div> 
					</div>
						
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10" style="margin-top:25px;">
						<button type="submit" class="btn btn-sm btn-default">
						Send Snap </button>
					</div>
				</div>
			</form>
		</div>
		</section>
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
    		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- fuelux -->
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