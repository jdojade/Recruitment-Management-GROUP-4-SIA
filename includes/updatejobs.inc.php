<?php

include "dbh.inc.php";


if(isset($_POST['updateJob'])){
    $jobId = $_POST['jobId'];
    $jobTitle = $_POST['jobTitle'];
    $jobDepartment = $_POST['jobDepartment'];
    $jobBranch = $_POST['jobBranch'];
    $jobDescription = $_POST['jobDescription'];
    $jobResponsibilities = $_POST['jobResponsibilities'];
    $jobQualifications = $_POST['jobQualifications'];
    $jobCompensation = $_POST['jobCompensation'];
    $oldjobImage = $_POST['jobImage'];
    $newjobImage = $_FILES['jobImage']['name'];
    $path = "jobimages/".$new_image;

    if($new_image != ''){
        $updateFilename = $_FILES['jobImage']['name'];
    }
    else{
        $updateFilename = $oldjobImage;
    }

    $query = "UPDATE rm_jobs SET jobTitle='$jobTitle',jobDepartment='$jobDepartment',jobBranch='$jobBranch',jobDescription='$jobDescription',
    jobResponsibilities='$jobResponsibilities',jobQualifications='$jobQualifications',jobCompensation='$jobCompensation',jobImage='$updateFilename' WHERE jobId='$jobId'";

    $query_run = mysqli_query($conn,$query);

    if($query_run){
        move_uploaded_file($updateFilename,$path);
        header("Location: HR(Jobs).php");
    }
    else{
        echo "error".mysqli_error($conn);
    }
}