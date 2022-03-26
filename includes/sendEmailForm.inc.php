<?php
include "dbh.inc.php";
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['body'];
	$id = $_POST['id'];
	// $interviewStatus = $_POST['interviewStatus'];

	require_once "PHPMailer.php";
	require_once "SMTP.php";
	require_once "Exception.php";

	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "octagon.network.hr@gmail.com"; //EMAIL NG HR
	$mail->Password = "octagonnetwork"; //PASSWORD NG HR
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";

	$mail->isHTML(true);
	$mail->setFrom($email, $name);
	$mail->addAddress("$email");
	$mail->Subject =("$subject");
	$mail->Body = $body;

	if($mail->send()){
		 $sql ="UPDATE rm_applicants SET applicantSchedSet='0', applicantStatus ='Pass' WHERE applicantId = '$id'";
		 $query_run = mysqli_query($conn,$sql);
		 if($query_run){
			// $sql = "INSERT INTO `interviewdetails`(`detailsId`,`name`, `email`, `subject`,`interviewStatus`, `body`) VALUES ('$id','$name','$email','$subject','$interviewStatus','$body')";
			// $run = mysqli_query($conn,$sql);
			$status = "success";
			$response = "Email has been sent!";
		 }
		
	}
	else{
		$status = "failed";
		$response = "Something is wrong! <br>" . $mail->ErrorInfo;
	}
	exit(json_encode(array("status" => $status, "response" => $response )));
}