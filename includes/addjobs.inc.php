<?php

include "dbh.inc.php";
if(isset($_POST['addJob'])){
    $jobTitle = $_POST['jobTitle'];
    $jobDepartment = $_POST['jobDepartment'];
    $jobBranch = $_POST['jobBranch'];
    $jobDescription = $_POST['jobDescription'];
    $jobResponsibilities = $_POST['jobResponsibilities'];
    $jobQualifications = $_POST['jobQualifications'];
    $jobCompensation = $_POST['jobCompensation'];
    $jobImage = $_FILES['jobImage']['name'];
    $jobImageTmpnName = $_FILES['jobImage']['tmp_name'];
    $path = "jobimages/".$jobImage;

    $addQuery = mysqli_query($conn, "INSERT INTO rm_jobs(jobTitle, jobDepartment, jobBranch, jobDescription, jobResponsibilities, jobQualifications, jobCompensation, jobImage)
                 VALUES ('{$jobTitle}','{$jobDepartment}','{$jobBranch}','{$jobDescription}','{$jobResponsibilities}','{$jobQualifications}','{$jobCompensation}','{$jobImage}')");
    if($addQuery){
        move_uploaded_file($jobImageTmpnName,$path);
    }
    else{
        echo "error".mysqli_error($conn);
    }
}