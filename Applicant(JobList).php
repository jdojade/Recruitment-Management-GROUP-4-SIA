<?php 
include_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0"> 
        <title>Octagon</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/div.css">
        <link rel="stylesheet" href="css/div1.css">
        <link rel="icon" type="image/jpg" href="images/octagon.png">
        <!------>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
 
    </head>
<body>
     <!---Header--->
     <header>
        <a href="index.html"><img src="images/octagon.png"></a>
        <h3 id="name">CTAGON</h3>
        <ul>
            <li><a href="Applicant(Homepage).php">HOME</a></li>
            <li><a href="Applicant(JobList).php">JOB</a></li>
            <li><a href="Applicant(AboutUs).php">ABOUT</a></li>
           <a href= "Applicant(ContactUs).php" class="header-btn" type="submit">Contact Us </a>
        </ul>
        </header>
       
        <script type="text/javascript">
            window.addEventListener("scroll", function() {
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);  
            })
        </script>
    


  <!---Contacts--->
  <!-- <section class="cta">
    <h1>Enroll for our various online courses</h1>            <p>Work with us and refer your friend, colleague, or cousin to an active opportunity at TalentumPH. <br>
        You can earn up to $500.00 if we fill the position—it’s that simple.</p>
    <a href="" class="btn-1">Contact us</a>
  </section> -->

  <section class="cover" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(images/offer.jpg); background-size: cover;background-position: center;">
    <label>JOB OFFERS</label>
    <p>Search for the best job position for you.
    </p>
</section>


  <div class="job-listing">
      <!-- <section>
          <label>Filter by:</label>
          <input type="radio" name="Department" value="Department">  Department
          <input type="radio" name="Branch" value="Branch">  Branch        
          <button type="submit">Filter</button>
      </section> -->
      <?php          
        $jobListQuery = "SELECT * FROM `rm_jobs`";
        $jobListQueryRun = mysqli_query($conn,$jobListQuery);
        ?>
            <div class="list">
            <?php
                    if(mysqli_num_rows($jobListQueryRun)>0){
                        foreach($jobListQueryRun as $jobRow){
            ?>
                <div class="jobs">
                    <h4><?php echo $jobRow['jobTitle'];?></h4>
                    <p><?php echo $jobRow['jobDepartment'];?> <br>
                    <?php echo $jobRow['jobBranch']?></p> <br>
                    
                    <a href="Applicant(JobDetails).php?id=<?php echo $jobRow['jobId'];?>">View Details</a>
               
                       </div>
                       <?php
                             }
                        }
                       else{
                           ?>
                           <div class="jobs">
                           <h4>There is no Job title available</h4>
                           <p>There is no Job Department available<br>
                           There is no Job Branch available</p><br>
                           
                           <a href="#">There is no Job available</a>
                       <?php
                       }
                       ?>
                   </div>
    <div class="details">

    <div class="default">
        <img src="images/octagon.png" alt="logo">
        <h1>Welcome to Octagon!</h1>
        <p>Join our community and be a part of us!<br>
            Listed on the left are the vacant job positions. Select a job to see the additional details and requirements. </p>
    </div>

    </div>
    </div>
    </div>


    <script src="script.js"></script>
    <footer>
        <div class="footer-content">
            <h3>OCTAGON</h3>
            <p>We are here to support you in the 'new normal' As our Filipino and global clients adjust to the “new normal” 
            of working under the COVID-19 pandemic, Octagon is here to support. Our team are all working efficiently from home and 
            are fully operational. We are providing our services without interruption at the same standard that you have always been
            accustomed to. Therefore, we are here to help you with any recruitment need during and after the crisis. We can answer any questions
            you may have about COVID and job market trends, remote staffing, virtual teams and regular office-based recruitment to help you ease into 
            the new workplace norms. We are here to be your dedicated recruitment partner and consultant during the crisis and beyond. Contact us now or anytime.</p>
            <ul class="social-links">
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></span></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy,2020 codeopacity. designed by <span>OCTAGON</span>
        </div>
</body>
</body>