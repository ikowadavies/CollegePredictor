<?php 
include('admissions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UNZA | Admissions Portal </title>
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
	<link href="file:///C|/css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
	<link href="../css/sitestyle.css" rel="stylesheet" type="text/css">
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
	<div class="container"><!DOCTYPE html>
<html>

<form method="post" action="Payment-module.php">

    <?php include('errors.php'); ?>

    <div class="container">
    <h1><font color="rgba(0,0,0,1.00)">Student Application</font></h1>
    <p>Please fill in this form to apply.</p>
    <hr>
	<br>
	<p><b>Account Details</b></p>
    <div>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email; ?>">
     <br>
	 <br>
    <label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" value="<?php echo $fname; ?>">
	 <br>
	 <br>
	<label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" value="<?php echo $lname; ?>">
	 <br>
	 <br>
	<label for="othername"><b>Other Name</b></label>
    <input type="text" placeholder="Enter Other Name" name="othername">
	 <br>
	 <br>
	<label for="maritalstatus"><b>Marital Status</b></label>
    <select name="marital_status">
     <option value="single">Single</option>
     <option value="married">Married</option>
     <option value="divorced">Divorced</option>
    </select>
	 <br>
	 <br> 
	<label for="gender"><b>Gender</b></label>
    <select name="gender">
      <option value="male" name="male">Male</option>
      <option value="female" name="female">Female</option>
    </select>
	 <br>
	 <br>
	<label for="dob"><b>Date Of Birth</b></label>
    <input type="text" placeholder="yyyy/mm/dd" name="dob" value="<?php echo $dob; ?>">
	 <br>
	 <br>
	<label for="medicalrecord"><b>Medical Condition</b></label>
    <input type="text" placeholder="Medical contition if any" name="medicalrecord">
	 <br>
	 <br>
	<label for="nationality"><b>Nationality</b></label>
   <select name="nationality" value="<?php echo $nationality; ?>">
  <option value="">-- select one --</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
	 <br>
	 <br>
	<label for="nrc-or-pssprt"><b>NRC or Passport</b></label>
    <input type="text" placeholder="NRC or Passport" name="nrc-or-pssprt" value="<?php echo $nrc_or_pssprt; ?>">
	 <br>
	 <br>
	<label for="psw"><b> Create Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">
	 <br>
	 <br>
    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw-repeat">
	 <br>
	 <br>
	<label for="academic-yr"><b>Academic Year</b></label>
    <select name="academic-yr">
      <option value="2019">2019</option>
      <option value="2020">2020</option>
    </select>
	 <br>
	 <br><hr>
	 </div>
	 <br>
	 
	<div class="input-group">
        <button href= "Payment-module.php"type="submit" class="btn" name="submit_form">Register and Proceed to Payment</button>
            <br> 
            <br>
        <button name="cancel-admission">Cancel</button>
    </div>
    
</form>


<body>
<html>