<?php 
include "HR(Header).php";
?>
	<br>
	<br>

	
 	<form action="includes/updatestatus.inc.php" method="post">
 	<h2 class="h2">Interview Details</h2>
 	<br><Br>
	 <?php 
	$id =$_GET['id'];
    $subject=$_GET['status'];
	$query = "SELECT * FROM rm_maildetails WHERE detailsId='$id' && interviewStatus='$subject' ";
	$query_run = mysqli_query($conn,$query);
						
	if(mysqli_num_rows($query_run)>0){
		foreach($query_run as $interviewDetailsRow){
	?>		
		<div class="labels">
		 <div class="title"><label>Interviewer</label></div>
         <input id="id" name="detailsId"type="hidden" value="<?php echo $interviewDetailsRow['detailsId']?>">
		 <input id="name" type="text" value="<?php echo $interviewDetailsRow['detailsNames']?>" readonly><br><Br>	
		</div>

		<div class="labels">
		 <div class="title"><label>Applicant  </label></div>
		 <input id="email" type="text" value="<?php echo $interviewDetailsRow['detailsEmail']?>" readonly><br><Br>
		</div>

		<div class="labels">
		 <div class="title"><label> subject</label></div>
		 <input id="subject" type="text" name="detailsSubject" value="<?php echo $interviewDetailsRow['detailsSubject'] ?>" readonly><br><Br>
		</div>
		<?php
        	}
        }
        ?>

	<h3 class="h3">Email To  Applicant</h3>
	<center>
 	<textarea id="body" type="text" rows="5" autofocus readonly><?php echo $interviewDetailsRow['body'] ?></textarea><br>
	 <h4 class="sent-notification"></h4>
	 <Br>
	 <?php 
	 if($interviewDetailsRow['detailsSubject'] == 'Final Interview'){
		echo ("<a href='HR(EmailForm).php?id=$interviewDetailsRow[detailsId]' id ='submit-btn'>Send email for Applicant Form</a>");
		// echo ("<a href='sendMailForm.php?id=$interviewDetailsRow[detailsId]'><button id ='submit-btn'  type='submit'  name='updateApplicantStatus'> Set Applicant Form</button></a>");
	 }
	 else{
		echo ("<button id ='submit-btn'  type='submit'  name='updateApplicantStatus'> Pass</button>");
	}

    // <!-- <button type="submit" class="btn-info" name="move_to_screening">Move to Screening</button> -->
	?>
 </form>
 <br>
 <br>
 <!-- <form action="Commands/MoveApplicant.php" method="post">
	<input type="hidden" name="appid" value="<?php echo $interviewDetailsRow['detailsId']; ?>" >
	<button id ='submit-btn' type="submit" name="reject">Reject</button>
</form> -->
 <?php 
include "Footer.php";
?>