<?php
include "dbh.inc.php";
if(isset($_POST['applicantForm'])){
	$email = $_POST['email'];
	$fName = $_POST['fname'];
	$mName = $_POST['mname'];
	$lName = $_POST['lname'];
	$bDay = $_POST['bday'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$position = $_POST['position'];
	$department = $_POST['department'];
	$branch = $_POST['branch'];
	$password = "";
	$sql = "INSERT INTO `empinfo`(`FNAME`, `MNAME`, `LNAME`, `password`, `POSITION`, `BRANCH`, `ADDRESS`, `BDAY`, `GENDER`, `CONTACTNO`, `EMAIL`, `DEPT`) VALUES
		  ('$fName','$mName','$lName','$password','$position','$branch','$address','$bDay','$gender','$contact','$email','$department')";

	$query = mysqli_query($conn,$sql);

	if($query){
		echo "<script>alert('Your data is recorded')</script>";
	}
	else{
		echo "error".mysqli_error($conn);
    }
} 
