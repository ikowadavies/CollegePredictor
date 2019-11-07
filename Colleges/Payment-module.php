<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UNZA | Admissions </title>
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
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
</head>
<body>

	<!-- logged in user information -->
	<header>
		<div>
			<div id="branding">
				<h1><span class="highlight"> UNZA | </span> Payment details </h1>
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
				
				 <div> <button type="button" class="btn btn-primary"><h2>Step 1</h2>
					Make payement</button>	<hr>				
				
                  <button type="button" class="btn btn-primary">Choose Payement Method</button>
		  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="sr-only">Toggle Dropdown</span> </button>
		  <div class="dropdown-menu">
		    <a class="dropdown-item" href="#" width="50" heigh="30" alt=""/>Airtel money<img src="images/airtel-money-logo.png" width="50" height="35" alt=""/></h6>
		    <a class="dropdown-item" href="#">Mtn Mobile Money<img src="images/MTN-Mobile-Money.jpg" width="50" height="30" alt=""/> </a> <a class="dropdown-item disabled" href="#" >Zamtel Kwacha<img src="images/download.png" width="50" height="35" alt=""/></a> <a class="dropdown-item" href="#">Visa<img src="images/VISA_Logo1.svg.png"width="50" height="30" alt=""/></a>
		    
	  </div>
	  <form>
		<h2></h2>
			<p>Name:</p>
			<input type="text">
			<p>Payer Mobile Number</p>
			<input type="text">
			<p>Amount*</p>
			<input type="text">
			<p>Username</p>
			<input type="text">
		  <hr>
		  
	   <a href="Pay2.php"><input type="submit"></a> 
</p>
			</form>
		</div>
	</section>

<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap-4.3.1.js"></script>
</body>
</html>