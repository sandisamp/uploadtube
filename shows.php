<!DOCTYPE HTML>
<html>
<head>
<title>Subscriptions</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/fblogin.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<?php session_start();  ?>
</head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><h1><img src="images/logo.png" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right">
				<!-- 	<input type="text" class="form-control" placeholder="Search...">
					<input type="submit" value=" "> --><h4 style="font-weight:900;color:#00e6e6;">Upload..Share..Repeat!</h4>
				</form>
			</div>  
			<div class="header-top-right">
				<div class="file">
					<a href="upload.php">Upload</a>
				</div>	
				<div class="signin">
					<a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Sign Up</a>
					<!-- pop-up-box -->
									<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
									<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
									<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
									<!--//pop-up-box -->
									<div id="small-dialog2" class="mfp-hide">
										<h3>Create Account</h3> 
										<div class="social-sits">
											<div class="facebook-button">
												<a onclick="checkLoginState();"><?php if(isset($_SESSION['name']))
													{echo $_SESSION['name'];}
													else {echo " Connect with Facebook";}  ?></a>
											</div>
											<div class="chrome-button">
												<a href="#">Connect with Google</a>
											</div>
											<div class="button-bottom">
												<p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
											</div>
										</div>
										<div class="signup">
											<form>
												<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
											</form>
											<div class="continue-button">
												<a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">CONTINUE</a>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div id="small-dialog3" class="mfp-hide">
										<h3>Create Account</h3> 
										<div class="social-sits">
											<div class="facebook-button">
												<a onclick="checkLoginState();"><?php if(isset($_SESSION['name']))
													{echo $_SESSION['name'];}
													else {echo " Connect with Facebook";}  ?></a>
											</div>
											<div class="chrome-button">
												<a href="#">Connect with Google</a>
											</div>
											<div class="button-bottom">
												<p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
											</div>
										</div>
										<div class="signup">
											<form>
												<input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
												<input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
												<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
												<input type="submit"  value="Sign Up"/>
											</form>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div id="small-dialog7" class="mfp-hide">
										<h3>Create Account</h3> 
										<div class="social-sits">
											<div class="facebook-button">
												<a onclick="checkLoginState();"><?php if(isset($_SESSION['name']))
													{echo $_SESSION['name'];}
													else {echo " Connect with Facebook";}  ?></a>
											</div>
											<div class="chrome-button">
												<a href="#">Connect with Google</a>
											</div>
											<div class="button-bottom">
												<p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
											</div>
										</div>
										<div class="signup">
											<form action="upload.php">
												<input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
												<input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
												<input type="submit"  value="Sign In"/>
											</form>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div id="small-dialog8" class="mfp-hide">
										<h3>Subscribe to our newsletters</h3> 
										<div class="signup subscribe-grid">
											<form>
												<input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
												<input type="submit"  value="Subscribe"/>
											</form>
										</div>
									</div>
									<div id="small-dialog4" class="mfp-hide">
										<h3>Feedback</h3> 
										<div class="feedback-grids">
											<div class="feedback-grid">
												<p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
											</div>
											<div class="button-bottom">
												<p><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign in</a> to get started.</p>
											</div>
										</div>
									</div>
									<div id="small-dialog5" class="mfp-hide">
										<h3>Help</h3> 
											<div class="help-grid">
												<p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
											</div>
											<div class="help-grids">
												<div class="help-button-bottom">
													<p><a href="#small-dialog4" class="play-icon popup-with-zoom-anim">Feedback</a></p>
												</div>
												<div class="help-button-bottom">
													<p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Lorem ipsum dolor sit amet</a></p>
												</div>
												<div class="help-button-bottom">
													<p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Nunc vitae rutrum enim</a></p>
												</div>
												<div class="help-button-bottom">
													<p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris at volutpat leo</a></p>
												</div>
												<div class="help-button-bottom">
													<p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris vehicula rutrum velit</a></p>
												</div>
												<div class="help-button-bottom">
													<p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Aliquam eget ante non orci fac</a></p>
												</div>
											</div>
									</div>
									<div id="small-dialog6" class="mfp-hide">
										<div class="video-information-text">
											<h4>Video information & settings</h4>
											<p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
											<ol>
												<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
												<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
												<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
												<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
												<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
											</ol>
										</div>
									</div>
									<script>
											$(document).ready(function() {
											$('.popup-with-zoom-anim').magnificPopup({
												type: 'inline',
												fixedContentPos: false,
												fixedBgPos: true,
												overflowY: 'auto',
												closeBtnInside: true,
												preloader: false,
												midClick: true,
												removalDelay: 300,
												mainClass: 'my-mfp-zoom-in'
											});
																											
											});
									</script>	
				</div>
				<div class="signin" id="fdel2">
					<a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a>
					<div id="small-dialog" class="mfp-hide">
						<h3>Login</h3>
						<div class="social-sits">
							<div class="facebook-button">
								<a onclick="checkLoginState();"><?php if(isset($_SESSION['name']))
													{echo $_SESSION['name'];}
													else {echo " Connect with Facebook";}  ?></a>
							</div>
							<div class="chrome-button">
								<a href="#">Connect with Google</a>
							</div>
							<div class="button-bottom">
								<p>New account? <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Signup</a></p>
							</div>
						</div>
						<div class="signup">
							<form>
								<input type="text" class="email" placeholder="Enter email / mobile" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"/>
								<input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
								<input type="submit"  value="LOGIN"/>
							</form>
							<div class="forgot">
								<a href="#">Forgot password ?</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
		<div class="col-sm-3 col-md-2 sidebar">
			<div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="images/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="drop-navigation drop-navigation">
				  <ul class="nav nav-sidebar">
					<li><a href="index.php" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					<li class="active"><a href="shows.php" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>All Videos</a></li>
					<li><a href="history.php" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>History</a></li>
					

				  </ul>
				  <!-- script-for-menu -->
						<script>
							$( ".top-navigation" ).click(function() {
							$( ".drop-navigation" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
					<div class="side-bottom">
						<div class="side-bottom-icons">
							<ul class="nav2">
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="http://localhost/uploadtube/fbconnect.php" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
						<!-- <div class="copyright">
							<p>Copyright © Pranshu Choubey</p>
						</div> -->
					</div>
				</div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-10 show-grid-left main-grids">
					<div class="recommended">
						<div class="recommended-grids english-grid">
							<div class="recommended-info">
								<div class="heading">
									<h3>Subscriptions</h3>
								</div>
								<!-- <div class="heading-right">
									<a  href="#small-dialog8" class="play-icon popup-with-zoom-anim">Subscribe</a>
								</div> -->
								<div class="clearfix"> </div>
							</div>
							<?php  
							$user='root';
						$pass='';
						$db='up_pro';
   						$conn= new mysqli('localhost',$user,$pass,$db) or die("not connected");
   						if(isset($_SESSION['uid'])) 
						{$str='SELECT * FROM up_pro.video_sub WHERE user LIKE "'.$_SESSION['uid'].'"';
						/*echo $str;*/
						$result=mysqli_query($conn,$str);;
						/*mysql_data_seek($result, 1);*/
						while($row = mysqli_fetch_assoc($result))
							{echo '<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php?id='.$row['id'].'"><img src="'.$row['img_url'].'" alt="preview" /></a>
									<div class="time small-time show-time">
										<p>7:34</p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php?id='.$row["id"].'" class="title">'.$row['title'].'</a></h5>
									<p class="author"><a href="#" class="author">'.$_SESSION["name"].'</a></p>
									<p class="views">1,200 views</p>
								</div>
								</div>';}}else{echo "<h1>No videos uploaded please login...</h1>";};
							/*<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/eg2.jpg" alt="" /></a>
									<div class="time small-time show-time">
										<p>9:34</p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title">Varius sit sed Nullam interdum</a></h5>
									<p class="author"><a href="#" class="author">Pranshu Choubey</a></p>
									<p class="views">4,200 views</p>
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/eg3.jpg" alt="" /></a>
									<div class="time small-time show-time">
										<p>3:04</p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title">Varius sit sed Nullam interdum</a></h5>
									<p class="author"><a href="#" class="author">Pranshu Choubey</a></p>
									<p class="views">2,200 views</p>
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/eg4.jpg" alt="" /></a>
									<div class="time small-time show-time">
										<p>2:06</p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title">Varius sit sed Nullam interdum</a></h5>
									<p class="author"><a href="#" class="author">Pranshu Choubey</a></p>
									<p class="views">2,114 views</p>
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/eg1.jpg" alt="" /></a>
									<div class="time small-time show-time">
										<p>3:23</p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title">Varius sit sed Nullam interdum</a></h5>
									<p class="author"><a href="#" class="author">Pranshu Choubey</a></p>
									<p class="views">2,200 views</p>
								</div>
							</div>
							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.php"><img src="images/eg2.jpg" alt="" /></a>
									<div class="time small-time show-time">
										<p>4:23</p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.php" class="title">Varius sit sed Nullam interdum</a></h5>
									<p class="author"><a href="#" class="author">Pranshu Choubey</a></p>
									<p class="views">2,114 views</p>
								</div>
							</div>*/ ?>
							<div class="clearfix"> </div>
						</div>
					</div>
					
				<div class="clearfix"> </div>
			</div>
			<!-- footer -->

			<!-- //footer -->
		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
     function up_stat () {var elem=document.getElementById('up_file').value;
     console.log(elem);}
    </script>
    <?php 
  /*echo ($_SESSION['facebook_access_token'].$_SESSION['usr_id']);*/
  if (isset($_SESSION['img_url']))
  	{echo '<script type="text/javascript">'.'sess_true("'.$_SESSION['img_url'].'");'.'</script>';}
  else {echo '<script type="text/javascript">'.'sess_false();'.'</script>';}?>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>

