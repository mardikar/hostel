<?php

require_once ("config.php");
$db_handle = new ConfigController();
session_start();

$nameError = "";
$collegeError = "";
$branchError = "";
$emailErr = "";
if (isset($_POST['submit'])) {
	$fName = $_POST['fname'];
	$error = 0;
	$cid = $_POST["cid"];
	$college = $_POST['college'];
	$branch = $_POST['branch'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['radio'];
	
	if ($error == 0) {		
		if (filesize($_FILES['abc']['tmp_name']) != 0) {
			$imagename = $_FILES['abc']['name'];
			//Get the content of the image and then add slashes to it
			$imagetmp = addslashes(file_get_contents($_FILES['abc']['tmp_name']));
			$query = "INSERT INTO userdata VALUES ('$cid', '$fName', '$college', '$branch', '$email', '$password','male','$imagetmp')";
			if (mysql_query($query)) {
				echo '<script type="text/javascript"> alert("Account Created!!!"); window.location.href="index.php";</script>';
			}
			 else {
				echo '<script type="text/javascript"> alert("This email is already registered");window.location.href="index.php";</script>';
			}
		}
		 else {
			echo '<script type="text/javascript"> alert("Please upload image");	window.location.href="index.php";</script>';
		}
		mysql_close();
	}
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
