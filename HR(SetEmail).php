<?php 
include "HR(Header).php";
?>
	<br>
	<br>

	
 	<form id="myForm">
 	<h2 class="h2">Set an Interview</h2>
 	<br><Br>
	 <?php 
	$applicantId =$_GET['id'];
	$query = "SELECT * FROM rm_applicants WHERE applicantId='$applicantId' ";
	$queryRun = mysqli_query($conn,$query);
						
	if(mysqli_num_rows($queryRun)>0){
		foreach($queryRun as $applicantRows){
	?>		
		<div class="labels">
		 <div class="title"><label>Interviewer</label></div>
		 <input id="id" type="hidden" value="<?php echo $applicantRows['applicantId']?>">
		 <input id="name" type="text" value="<?php echo $userRow['accountName']?>"><br><Br>	
		</div>

		<div class="labels">
		 <div class="title"><label>Applicant  </label></div>
		 <input id="email" type="text" value="<?php echo $applicantRows['applicantEmail']?>"><br><Br>
		</div>

		<div class="labels">
		 <div class="title"><label> subject</label></div>
		 <input id="subject" type="text" value="<?php echo $applicantRows['applicantStatus'] ?> Interview">
		 <input id="interviewStatus" type="hidden" value="<?php echo $applicantRows['applicantStatus'] ?>"><br><Br>
		</div>
		<?php
        	}
        }
        ?>

	<h3 class="h3">Email To  Applicant</h3>
	<center>
 	<textarea id="body" type="text" rows="5" autofocus>Good Day!
I hope this email finds you well.
This email serves as an invitation to an <?php echo $applicantRows['applicantStatus'] ?> interview which will be held on December 15, 2021, from 9:00AM - 9:30AM.
Do not be late. Below is the google meet link that you  will be joining. See you there!</textarea><br>
	 <h4 class="sent-notification"></h4>
	 <Br>
 	<button id ="submit-btn"  type="button" onclick="sendEmail()" value="Send An Email"> SEND</button>


 </form>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script type="text/javascript">
 	function sendEmail(){
 		var name = $("#name");
 		var email = $("#email");
 		var subject = $("#subject");
 		var body = $("#body");
		var interviewStatus = $("#interviewStatus");
		var id = $("#id")
		
 		if(isNotEmpty(name)&& isNotEmpty(email)&& isNotEmpty(subject) && isNotEmpty(body)){
 			$.ajax({
 				url: 'includes/sendEmail.inc.php',
 				method: 'POST',
 				dataType: 'json',
 				data:{
 					name: name.val(),
 					email: email.val(),
 					subject: subject.val(),
 					body: body.val(),
					id: id.val(),
					interviewStatus: interviewStatus.val()
 				}, success: function(response){
 					$('#myForm')[0].reset();
 					$('.sent-notification').text("Message sent Successfully.");
 				}
 			});
 		}
 	}
 	function isNotEmpty(caller){
 		if(caller.val()==""){
 			caller.css('border','1px solid red');
 			return false ;
 		}
 		else{
 			caller.css('border','');
 			return true;
 		}
 	}
 </script>
<?php 
include "Footer.php";
?>