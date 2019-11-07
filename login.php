<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Rank Predictor | Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/sitestyle.css">
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
					<li class="mine1"><a href="blog.php">Blog</a></li>
					<li class="mine1"><a href="contactus.php">Contact Us</a></li>			
					<button class="button_1" disabled=""><a href="register.php">Register</a></button>
				</ul>
			</nav>
		</div>
	</header>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>