
<?php include('dbcon.php'); ?>
<?php include('header.php'); ?>
<?php include('session.php'); ?>


     <!DOCTYPE HTML>

<html>
	<head >
		<title>BuddahWorkz Powered By Etech - Las Piñas</title>

			<link href="img/log.jpg" rel="icon">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<body>
	<style>
body {
  background-image: url('img/a.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
	background-position: center center;
	background-size: cover;
}
</style>
	<body class="is-preload landing" >
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">BuddahWorkz</a></h1>
					<nav id="nav">
						<ul>
								






							<li>
								<a href="#">Services</a>
								<ul>
<li class="active" ><a rel="tooltip"  data-placement="bottom" title="Home" id="home" href="indexx.php" class=""><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
						
						<li><a href="edit_info.php"><i class="icon-pencil icon-large"></i>&nbsp;Edit Info</a></li>
					<li><a href="myschedule.php"><i class="icon-file-alt icon-large"></i>&nbsp;My Schedule</a></li>
						<li><a href="logout.php"><i class="icon-signout icon-large"></i>Logout</a></li>
										<ul>
											<li><a href="edit_info.php">Option 1</a></li>
											<li><a href="myschedule.php">Option 2</a></li>
											<li><a href="logout.php">Option 3</a></li>
											
										</ul>
									</li>
								</ul>
							</li>
									<?php
					$query=mysqli_query($conn,"select * from members where member_id='$session_id'")or die(mysqli_error($conn));
					$row=mysqli_fetch_array($query);
					?>
					<li>
						
							
	<li class="active" ><a href="dasboard.php" class="">Welcome:&nbsp;<i class="icon-user icon-large"></i>&nbsp;<?php echo $row['firstname']." ".$row['lastname']; ?></a></li>	
						
					
								</ul>
							</li>
							<li><a href="#four"></a></li>
						
						</ul>
					</nav>
				</header>


				

  


	     
    


			<!-- Banner -->
				<section id="banner" style="background-image: url('img/logs.png');"> </style>
				

					<div class="content">
						<header>
							<strong><h2 style="color: #2E1A47;">BuddahWorkz Powered By Etech</h2></strong>
							<b><p style="color: black;">Exclusive Distributor of ETech Avocado Products in the SOUTH</p></b>
							<b><p style="color: black;">Specializes on Engine Modification</p></b>
						</header>

						<span class="image"><img src="imG/LOG.JPG" alt="" /></span>
					</div>
				
					<a href="#one" class="goto-next scrolly">Next</a>
</style>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="img/3.png" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2 style="color: #FFB5BE" ;>We offer a wide range of services to meet all your motorcycle needs</h2>
										<p> </p>

									</header>

								</div>
								<div class="col-4 col-12-medium">
									<p >🏍 We understand that our customers need repairs quickly, so we offer quick and reliable turnaround times.<br> <br> 🏍 We also offer convenient online reservations, so you can make an appointment at your convenience.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>🏍 No matter what your motorcycle needs, we’ve got you covered! From simple maintenance and repairs to custom parts and accessories, we’re your one-stop shop! <br> <br>🏍Specializes on Engine Modification</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="img/parts.png" alt="" /></span>
					<div class="content">
					
					<p  style="font-size: 16px;">MOTORCYCLE PERFORMANCE PARTS AVAILABLE!<br>
							

ETECH RACING PRODUCTS - EXCLUSIVE DISTRIBUTOR IN THE SOUTH<br>


◾ ETech Engine Oil<br>
◾ ETech Silent Killer Power Pipe<br>
◾ Air Filter<br>
◾ Regrind Camshaft<br>
◾ Center Spring<br>
◾ Clutch Bell<br>
◾ Clutch Lining<br>
◾ Clutch Spring<br>
◾ Cylinder Block<br>
◾ Drive Face<br>
◾ Flyball<br>
◾ Forged Piston<br>
◾ Pulley<br>
◾ Pulley Nut<br>
◾ Slide Piece<br>
◾ Torsion Controller</p>
				
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="img/service.png" alt="" /></span>
					<div class="content">
						<h4> Make a Reservartion Now </h4>
							<ul class="actions">
							<li><a href="dasboard.php" class="button">Schedule Now</a></li>
						</ul>


							<p> <br>📍Monday - Closed</a></p>
							<p>📍Tuesday - Sunday (10:00 am to 7:00 pm) </p>
					
						

							
			
				
	
	
						<ul class="actions">
							<li><a href="#" class=""></a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>About Us</h2>
							<p>Welcome to BuddahWorkz Motorcycle Parts and Accessories Shop! </p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<section class="col-4 col-6-medium col-12-xsmall">
									<span  class="icon solid alt major fa-solid fa-motorcycle"></span>
									<h3>...</h3>
									<p>We are a top-tier motorcycle repair shop that provides a quality service to meet all the needs of our beloved customers.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-users-between-lines"></span>
									<h3>..</h3>
									<p>Our team of experienced mechanics specialize in all forms of motorcycle parts and accessories and are committed to providing the highest level of customer service.

</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-solid fa-screwdriver-wrench"></span>
									<h3>..</h3>
									<p>We provide a wide variety of services tailored to the needs of the individual customer. Whether you need simple maintenance and repairs, complete engine repair and diagnosis, or full custom parts and accessories, we are your one-stop shop!</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-paper-plane"></span>
									<h3>..</h3>
									<p>Our mechanics are trained in the most modern methods available and use the industry’s best products to get your motor bike back to running condition better than ever.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-file"></span>
									<h3>..</h3>
									<p>Our goal is to provide our customers with quality service that exceeds their expectations.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-lock"></span>
									<h3>..</h3>
									<p> We strive to provide timely and courteous service at all times.</p>
								</section>
							</div>
						</div>
						
					</div>
				</section>

		

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
				<p>📢You can reach us through our social media channel</p>
						<li><a href="https://www.facebook.com/BuddahWorkz" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>

					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li> <a href=""></a></li>
					</ul>
				</footer>

		</div>

	
	<!-- -->
		
	   
	<!-- -->


		<!-- Scripts -->
				<script src="assets/js/jquery.min.js"></script>
				<script src="assets/js/jquery.scrolly.min.js"></script>
				<script src="assets/js/jquery.dropotron.min.js"></script>
				<script src="assets/js/jquery.scrollex.min.js"></script>
				<script src="assets/js/browser.min.js"></script>
				<script src="assets/js/breakpoints.min.js"></script>
				<script src="assets/js/util.js"></script>
				<script src="assets/js/main.js"></script>

		</body>
	</html>