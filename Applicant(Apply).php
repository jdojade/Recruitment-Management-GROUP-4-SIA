<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octagon</title>
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="icon" type="image/jpg" href="images/octagon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">    
        <!------>    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#ddddd6">
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
        <div class="top-section" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/apply.jpg);">

            <h1>you're in good hands with us</h1>
        <script type="text/javascript">
            window.addEventListener("scroll", function() {
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);  
            })
        </script>
     </div>
        <div class="reg-con">
        <?php
        include_once "includes/apply.inc.php";
        ?>
            <form method="post" enctype="multipart/form-data">
            <?php
                $jobId =$_GET['id'];

                $queryJob = "SELECT * FROM `rm_jobs` WHERE jobId='$jobId' ";
                $queryJobRun = mysqli_query($conn,$queryJob);

                if(mysqli_num_rows($queryJobRun)>0){
                    foreach($queryJobRun as $jobRow){
                        ?>
                        <input type="hidden" name="jobId" value="<?php echo $jobRow['jobId']?>"class="form-control" >
                        <input type="hidden" name="applicantDepartment" value="<?php echo $jobRow['jobDepartment']?>"class="form-control" >
                        <input type="hidden" name="applicantJob" value="<?php echo $jobRow['jobTitle']?>"class="form-control">
                        <input type="hidden" name="applicantBranch" value="<?php echo $jobRow['jobBranch']?>"class="form-control"><?php
                    }
                }
                ?>
            <div class="reg-form"></div>
              
                    <div class="mb-3">
                        <label class="form-label">Name</label> <br>
                        <input type="text" class="form-control" name="applicantName"  autocomplete="off" placeholder="Enter your name..." >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label><br>
                        <input type="text" class="form-control" name="applicantEmail"  autocomplete="off" placeholder="Enter your email..." >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter your resume here:</label>
                        <br><br>
                        <input type="file" name="applicantFile" class="upload-box" required>
                        <br><br>
                        <?php 
                 if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyFields"){
                     echo "<label class='form-label'style='color:red;'>Fill in all fields</label>";
                        }
                    else if ($_GET["error"] == "invalidEmail"){
                    echo "<label class='form-label'style='color:red;'>The Email is invalid</label>";
                                }
                    else if ($_GET["error"] == "invalidFile"){
                    echo "<label class='form-label'style='color:red;'>Please input valid file - doc, docx ,pdf</label>";
                                }
                    else if ($_GET["error"] == "existingUser"){
                     echo "<label class='form-label'style='color:red;'>The applicant is exsisting</label>";
                                }
                    else if ($_GET["error"] == "none"){
                     echo "<label class='form-label'style='color:green;'>Your data is recorded</label>";
                                }
                    }
                    ?>
                    </div>
                    <button class="submit-btn" name="applyJob">Submit</button>
                    <!-- <a href=""   class="submit-btn">submit</a> -->
                </form>
            <div class="reg-img">
                <img src="images/reg.jpg">
            </div>
        </div>


     <footer>
        <div class="footer-content">
            <h3>OCTAGON</h3>
            <p>
            We are here to support you in the 'new normal'
            As our Filipino and global clients adjust to the “new normal” of working under the COVID-19 pandemic, Octagon is here to support. Our team are all working efficiently from home and are fully operational. We are providing our services without interruption at the same standard that you have always been accustomed to. 
            Therefore, we are here to help you with any recruitment need during and after the crisis. We can answer any questions you may have about COVID and job market trends, remote staffing, virtual teams and regular office-based recruitment to help you ease into the new workplace norms. We are here to be your
            dedicated recruitment partner and consultant during the crisis and beyond. Contact us now or anytime.
            </p>
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