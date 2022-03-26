<?php 

include 'dbh.inc.php';

if (isset($_POST['deleteJob'])){
    $jobId = $_POST['jobId'];
    $jobTitle = $_POST['jobTitle'];
    $jobDepartment = $_POST['jobDepartment'];
    $jobBranch = $_POST['jobBranch'];
    $jobDescription = $_POST['jobDescription'];
    $jobResponsibilities = $_POST['jobResponsibilities'];
    $jobQualifications = $_POST['jobQualifications'];
    $jobCompensation = $_POST['jobCompensation'];
    
    $arcQuery = "INSERT INTO `archived_jobs`
                (`jobId`, `jobTitle`, `jobDepartment`, `jobBranch`, `jobDescription`, `jobResponsibilities`, `jobQualifications`, `jobCompensation`)
                 VALUES ('$jobId','$jobTitle','$jobDepartment','$jobBranch','$jobDescription','$jobResponsibilities','$jobQualifications','$jobCompensation')";

    $arcQueryRun =  mysqli_query($conn, $arcQuery);
    
    if($arcQueryRun){
        $deleteQuery = "DELETE FROM rm_jobs WHERE jobId ='$jobId' ";
        $queryRun = mysqli_query($conn, $deleteQuery);

        if($queryRun){
            header("Location: ../HR(Jobs).php");
        }
        else{
            echo "error".mysqli_error($conn);
        }
    }
    else{
        echo "error".mysqli_error($conn);
    }
}

