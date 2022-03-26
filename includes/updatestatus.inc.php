<?php 
include "dbh.inc.php";

if (isset($_POST['updateToScreening'])){
    $updateId = $_POST['updateId'];

    $query = "UPDATE rm_applicants SET applicantStatus='Screening' WHERE applicantId ='$updateId' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ../HR(Recruitment).php");
    }
    else{
        echo "error".mysqli_error($conn);
    }
}

if (isset($_POST['updateToInterview'])){
    $updateId = $_POST['updateId'];

    $query = "UPDATE rm_applicants SET applicantStatus='Initial' WHERE applicantId ='$updateId' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: ../HR(Screening).php");
    }
    else{
        echo "error".mysqli_error($conn);
    }
}
if (isset($_POST['updateApplicantStatus'])){
    $detailsId = $_POST['detailsId'];
    $detailsSubject = $_POST['detailsSubject'];


    if($detailsSubject == "Initial Interview"){
        $query = "UPDATE rm_applicants set applicantStatus='Behavioral', applicantSchedSet='0' WHERE applicantId ='$detailsId' ";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
          header("Location: ../Hr(Interview).php");
      }
    }
    else if ($detailsSubject == "Behavioral Interview"){
        $query = "UPDATE rm_applicants set applicantStatus='Final', applicantSchedSet='0' WHERE applicantId ='$detailsId' ";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
          header("Location: ../Hr(Interview).php");
      }
    }
}
if (isset($_POST['rejectApplicant'])){
    $updateId = $_POST['updateId'];
    $applicantName = $_POST['applicantName'];
    $applicantEmail = $_POST['applicantEmail'];
    $applicantDepartment = $_POST['applicantDepartment'];
    $applicantJob = $_POST['applicantJob'];
    $applicantBranch = $_POST['applicantBranch'];
    $applicantStatus = $_POST['applicantStatus'];

    if($applicantStatus == "Recruitment"){
        $arcQuery = "INSERT INTO `archived_applicants`
            (`applicantId`, `applicantName`, `applicantEmail`, `applicantDepartment`, `applicantJob`, `applicantBranch`, `applicantStatus`)
             VALUES ('$updateId','$applicantName','$applicantEmail','$applicantDepartment','$applicantJob','$applicantBranch','Reject at Recruitment')";
        $arcQueryRun = mysqli_query($conn, $arcQuery);

        if($arcQueryRun){
            $queryDelete = "DELETE FROM `rm_applicants` WHERE applicantId = $updateId";
            $queryDeleteRun = mysqli_query($conn, $queryDelete);
            
            if($queryDeleteRun){
                header("Location: ../HR(Dashboard).php");
            }
        }
    }
    else if($applicantStatus == "Screening"){
        $arcQuery = "INSERT INTO `archived_applicants`
            (`applicantId`, `applicantName`, `applicantEmail`, `applicantDepartment`, `applicantJob`, `applicantBranch`, `applicantStatus`)
             VALUES ('$updateId','$applicantName','$applicantEmail','$applicantDepartment','$applicantJob','$applicantBranch','Reject at Screening')";
        $arcQueryRun = mysqli_query($conn, $arcQuery);

        if($arcQueryRun){
            $queryDelete = "DELETE FROM `rm_applicants` WHERE applicantId = $updateId";
            $queryDeleteRun = mysqli_query($conn, $queryDelete);
            
            if($queryDeleteRun){
                header("Location: ../HR(Dashboard).php");
            }
        }
    }
    else if($applicantStatus == "Initial" OR "Behavioral" OR "Final"){
        $arcQuery = "INSERT INTO `archived_applicants`
            (`applicantId`, `applicantName`, `applicantEmail`, `applicantDepartment`, `applicantJob`, `applicantBranch`, `applicantStatus`)
             VALUES ('$updateId','$applicantName','$applicantEmail','$applicantDepartment','$applicantJob','$applicantBranch','Reject at Interview')";
        $arcQueryRun = mysqli_query($conn, $arcQuery);

        if($arcQueryRun){
            $queryDelete = "DELETE FROM `rm_applicants` WHERE applicantId = $updateId";
            $queryDeleteRun = mysqli_query($conn, $queryDelete);
            
            if($queryDeleteRun){
                header("Location: ../HR(Dashboard).php");
            }
        }
    }
}