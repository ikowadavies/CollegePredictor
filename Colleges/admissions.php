<?php 
	session_start();

    // variable declaration
    
    $email    = "";
    $fname = "";
    $lname = "";
    $dob = "";
    $nationality = "";
    $nrc_or_pssprt = "";
	$errors = array(); 
	//$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'college-predictor');

	// REGISTER USER
	if (isset($_POST['submit_form'])) {
        // receive all input values from the form
        $email = mysqli_real_escape_string($db, $_POST['email']);
		$fname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lname = mysqli_real_escape_string($db, $_POST['lastname']);
        $marital_status = mysqli_real_escape_string($db, $_POST['marital_status']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $dob = mysqli_real_escape_string($db, $_POST['dob']);
        $med_record = mysqli_real_escape_string($db, $_POST['medicalrecord']);
        $nationality = mysqli_real_escape_string($db, $_POST['nationality']);
        $nrc_or_pssprt = mysqli_real_escape_string($db, $_POST['nrc-or-pssprt']);
        $psw = mysqli_real_escape_string($db, $_POST['psw']);
        $psw_repeat = mysqli_real_escape_string($db, $_POST['psw-repeat']);
        $nationality = mysqli_real_escape_string($db, $_POST['nationality']);
        $acad_yr = mysqli_real_escape_string($db, $_POST['academic-yr']);



		// form validation: ensure that the form is correctly filled
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($fname)) { array_push($errors, "First name is required"); }
        if (empty($lname)) { array_push($errors, "Last name is required"); }
        if (empty($dob)) { array_push($errors, "Date of birth is required"); }
		if (empty($psw)) { array_push($errors, "Password is required"); }
        if (empty($nrc_or_pssprt)) { array_push($errors, "NRC or Passport No. is required"); }
        if ($psw != $psw_repeat) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (!count($errors) == 0) {
			//$pswd = md5($psw);//encrypt the password before saving in the database
			$query = "INSERT INTO admissions_form (email , fname, lname, gender, dob, medical_record, id_no, pswd) 
					  VALUES('$email', '$fname', '$fname', '$lname', '$dob', '$med_record', '$nrc_or_pssprt', '$psw')";
            mysqli_query($db, $query);

            //if(!$result) {echo "error";}

            
			/*$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php'); */
        }
        
    }

	// ... 

	// LOGIN USER
	/*if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM login_form WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		} 
	} */

?>