<?php
include "dbh.inc.php";
if(isset($_POST['contactUs'])){
	$fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	
	$notifMessage ="Send message to Octagon";
    $notifType = "messages";
    $notifStatus = "unread";
		$sql = "INSERT INTO rm_messages(fullName,email,messages) VALUES ('$fullName','$email','$message')";
		$query = mysqli_query($conn,$sql);
	
		if($query){
			$query_notif = mysqli_query($conn,"INSERT INTO `rm_notif`(`name`, `message`, `type`, `status`) VALUES ('$fullName','$notifMessage','$notifType','$notifStatus')");
			if($query_notif){
				echo "<script>alert('Your Message is recorded')</script>";
			}	
		}
		else{
			echo "error".mysqli_error($conn);
		}
} 

