<?php 
session_start(); 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Rank Predictor | About </title>
	<link rel="stylesheet" type="text/css" href="css/sitestyle.css">
	<style type="text/css">
	
</style>
</head>
<body>

	<!-- logged in user information -->
	<header>
		<div>
			<div id="branding">
				<h1><span class="highlight"> College </span> Predictor</h1>
			</div>
			<nav>
				<ul>
					<li class="mine1"><a href="website.php">Home</a></li>
					<li class="mine1"><a href="collegerank.php">College Rankings</a></li>
					<li class="mine1"><a href="index.php">Predict</a></li>
					<li class="current"><a href="blog.php">Blog</a></li>					
					<li class="current"><a href="about.php">About</a></li>
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
		<h3>About</h3>
        <ol>
          
			<p>
				This project “Computerization of College Admission Predictor” is a web based application where students can register with their personal as well as marks details for prediction the admission in colleges. The college predictor results and analyses can be downloaded in the form of a personalized report. 
			</p>
			
			<p>
				Lots of students have no idea which college they can be eligible for after their 12th standard due to which many don’t fill the required forms whereas others spend a lot of money for the forms of certain colleges they won’t get selected for.
			</p>

			
			<p>
				The students not only get their overall and preference-based results, but also know all the facts about the counselling procedure. This application will contain the information about the previous year cut offs and the eligibility criteria’s of various colleges. So, this application will make it easier for the students to choose the best college for them according to their marks. 
			
			</p>


	       
        </ol>
	</section>

</body>
</html>