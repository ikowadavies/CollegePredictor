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
	<title>Rank Predictor | Contact </title>
	<link rel="stylesheet" type="text/css" href="css/sitestyle.css">
</head>
<body>

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
					<li class="mine1"><a href="admissions.php">Admissions</a></li>
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
	<div class="container">
        <h3>Project Members</h3>
        <ol>
            <li>Davies Ikowa</li>
	        <li>Jeff Bwalya</li>
	        <li>Mary Solange</li>
            <li>Mwenzi Phiri</li>
        </ol>
    </div>
</body>
</html>