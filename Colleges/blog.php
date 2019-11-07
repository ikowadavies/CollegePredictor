<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>UNZA | Blog </title>
	<link rel="stylesheet" type="text/css" href="css/sitestyle.css">
	<style type="text/css">
	#customers {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	#customers td, #customers th {
		border: 1px solid #ddd;
		padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #CCC;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #E8491D;
		color: white;
	}
</style>
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
		<form>
			<h2></h2>
			<p>Name:</p>
			<input type="text">
			<p>About you:</p>
			<input type="text">
			<p>Heading:</p>
			<input type="text">
			<p>Write:</p>
			<textarea></textarea>
			<p>
				<input type="submit" class="button_1">
			</p>
			</form>
		</div>
	</section>

</body>
</html>