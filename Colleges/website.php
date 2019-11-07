<?php 
session_start(); 

// if (!isset($_SESSION['username'])) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: login.php');
// }

// if (isset($_GET['logout'])) {
// 	session_destroy();
// 	unset($_SESSION['username']);
// 	header("location: login.php");
// }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>The University of Zambia | Home </title>
	<link rel="stylesheet" type="text/css" href="css/sitestyle.css">
</head>
<body style="background: #35424a">

	<!-- logged in user information -->
	<header>
		<div>
			<div id="branding">
				<h1><span class="highlight"> The University</span> of Zambia</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="website.php">Home</a></li>
					<li class="mine1"><a href="programs.php">Programs Offered</a></li>
					<li class="mine1"><a href="admissions-form.php">Admissions</a></li>
					<li class="mine1"><a href="Payment-module.php">Payments</a></li>
					<li class="mine1"><a href="blog.php">Blog</a></li>
					<li class="mine1"><a href="contactus.php">Contact Us</a></li>
					<button class="button_1">
						<?php  if (isset($_SESSION['username']))
						echo '<a href="index.php?logout=\'1\'">logout</a>';
						else echo'<a href="index.php">Login</a>';
						?>
					</button>			
				</ul>
			</nav>
		</div>
	</header>

	<section id="showcase" style="height: 75vh;">
		<div class="container">
			<h1 class="col-xs-6">Student Information System</h1>
			<p class="col-xs-6">Go to Admissions to proceed with Admission application</p>
		</div>
	</section>

	<section id="boxes">
		<div class="box">
			<h3>Step-1</h3>
			<p>Login and fill in admission form</p>	
		</div>
		<div class="box">
			<h3>Step-2</h3>
			<p>Proceed to Payments</p>	
		</div>
		<div class="box">
			<h3>Step-3</h3>
			<p>Checkout and await response via email</p>	
		</div>
	</section>

	<section id="newsletter">
		<div class="container">
			<form>
				<input type="email" name="Enter email:" placeholder="Subscribe for updates (@email)"/>
				<button class="button_1">Subscribe</button>
			</form>
		</div>
	</section>

</body>
</html>