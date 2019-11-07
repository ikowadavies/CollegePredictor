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
	<title>Rank Predictor | Colleges </title>
	<link rel="stylesheet" type="text/css" href="css/sitestyle.css">
</head>
<body>

	<!-- logged in user information -->
	<header>
		<div>
			<div id="branding">
				<h1><span class="highlight"> UNZA | </span> Programs </h1>
			</div>
			<nav>
				<ul>
					<li class="mine1"><a href="website.php">Home</a>	</a></li>
					<li class="mine1"><a href="about.php">About</a></li>					
					<li class="mine1"><a href="contactus.php">Contact Us</a></li>
					<button class="button_1">
					<?php  if (isset($_SESSION['username'])) : ?>           
							<a href="index.php?logout='1'">logout</a>
						<?php endif ?>
					</button>			
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<h3>School of Natural Sciences</h3>
		<ol class="list1">
			<li>BSc., MSc, PhD Biology</li>  
			<li>BSc., MSc, PhD Chemistry</li> 
			<li>BSc., MSc, PhD Computer Science</li>
			<li>BSc., MSc, PhD Mathematics and Statistics</li>
			<li>BSc., MSc, PhD Physics</li>
			<li>BSc., MSc, PhD Geography and Environmental Studies</li>
        </ol>
        <h3>School of Education</h3>
		<ol class="list1">
			<li>BSc., MSc, PhD Adult Education</li>  
			<li>BSc., MSc, PhD Education Administration and Policy Studies</li> 
			<li>BSc., MSc, PhD Educational Psychology, Sociology and Special Education</li>
			<li>BSc., MSc, PhD Library Informattion Science</li>
			<li>BSc., MSc, PhD Language and Social Science Education</li>
            <li>BSc., MSc, PhD Mathematics and Science Education</li>
            <li>BSc., MSc, PhD Religious Studies</li>
			<li>Dip. Primary Education</li>
        </ol>
        <h3>School of Engineering</h3>
		<ol class="list1">
			<li>BSc., MSc, PhD Agricultural Engineering</li>  
			<li>BSc., MSc, PhD Civil and Environmental Engineering</li> 
			<li>BSc., MSc, PhD Electrical and Electronic Enginnering</li>
			<li>BSc., MSc, PhD Geomatic Enginnering</li>
            <li>BSc., MSc, PhD Mechanincal Engineering</li>
		</ol>
        <h3>School of Humanities and Social Sciences</h3>
		<ol class="list1">
			<li>BSc., MSc, PhD Development Studies</li>  
			<li>BSc., MSc, PhD Economics</li> 
			<li>BSc., MSc, PhD Gender studies</li>
			<li>BSc., MSc, PhD Historical and Archaelogical Studies</li>
			<li>BSc., MSc, PhD Media and Communication studies</li>
            <li>BSc., MSc, PhD Literature and Languages</li>
            <li>BSc., MSc, PhD Philosophy and Applied Ethics</li>
            <li>BSc., MSc, PhD Political and Administrative Studies</li>
            <li>BSc., MSc, PhD Population Studies</li>
            <li>BSc., MSc, PhD Psychology</li>
            <li>BSc., MSc, PhD Social Work and Sociology</li>
        </ol>
	</div>
</body>
</html>