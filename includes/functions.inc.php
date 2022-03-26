<?php
// functions for total in recruitment
function totalRecruitment(){
    include "dbh.inc.php";
    $totalQuery = "SELECT applicantId FROM `rm_applicants` WHERE applicantStatus = 'Recruitment' order by applicantStatus";
    $totalRecruitment = mysqli_query($conn,$totalQuery);

    $ovrall = mysqli_num_rows($totalRecruitment);
    echo $ovrall;
}
// functions for total in screening
function totalScreening(){
    include "dbh.inc.php";
    $totalQuery = "SELECT applicantId FROM `rm_applicants` WHERE applicantStatus = 'Screening' order by applicantStatus";
    $totalScreening = mysqli_query($conn,$totalQuery);

    $ovrall = mysqli_num_rows($totalScreening);
    echo $ovrall;
}

// functions for total in total Staff
function totalStaff(){
    include "dbh.inc.php";
    $totalQuery = "SELECT accountId FROM `rm_accounts` WHERE accountType = 'HR' ORDER BY accountType";
    $totalStaff = mysqli_query($conn,$totalQuery);

    $ovrall = mysqli_num_rows($totalStaff);
    echo $ovrall;
}
function totalAdmin(){
    include "dbh.inc.php";
    $totalQuery = "SELECT accountId FROM `rm_accounts` WHERE accountType = 'Admin' ORDER BY accountType";
    $totalAdmin = mysqli_query($conn,$totalQuery);

    $ovrall = mysqli_num_rows($totalAdmin);
    echo $ovrall;
}
// functions for total in total Applicants
function totalApplicants(){
    include "dbh.inc.php";
    $totalQuery = "SELECT applicantId FROM `rm_applicants` ORDER BY applicantId";
    $totalApplicants = mysqli_query($conn,$totalQuery);

    $ovrall = mysqli_num_rows($totalApplicants);
    echo $ovrall;
}
// functions for total in total Training
function totalTraining(){
    include "dbh.inc.php";
    $totalQuery = "SELECT id FROM `empinfo` ORDER BY id";
    $totalTraining = mysqli_query($conn,$totalQuery);

    $ovrall = mysqli_num_rows($totalTraining);
    echo $ovrall;
}
function notif(){
    include "dbh.inc.php";
    $notifQuery = "SELECT id FROM `rm_notif` WHERE `status` = 'unread' ORDER BY id";
    $totalNotif = mysqli_query($conn,$notifQuery);

    $ovrall = mysqli_num_rows($totalNotif);
    echo $ovrall;
}















































// Apply functions
// functions #1
// function invalidFile($fileName, $fileType, $fileTmpName){
//     $result;
   
//     $fileExplode = explode('.',$fileName);
//     $fileExt = end($fileExplode);

//     $extensions = ["doc", "docx", "pdf"];
//     if(!in_array($fileExt, $extensions) === true){
//         $types = ["$fileName/doc", "$fileName/docx", "$fileName/pdf"];
//         if(!in_array($fileType, $types) === true){
//             $result = true;        
//         }
//         else{
           
//         }
//     }
//     else{
         
//     }
// }
// functions #2
// function invalidEmail($applicantEmail){
//     $result;

//     if(!filter_var($applicantEmail,FILTER_VALIDATE_EMAIL)){
//         $result = true;
//     }
//     else{
//         $result = false;
//     }
// }
// functions #3
// function applicantExists($conn, $applicantName, $applicantEmail){
//    $sql = "SELECT * FROM rm_applicants WHERE applicantName = ? OR applicantEmail = ?;";
//    $stmt = mysqli_stmt_init($conn);

//    if(!mysqli_stmt_prepare($stmt, $sql)){
//     header("location: ../Applicant(Apply).php?error=stmtfailed");
//     exit();
//    }
//    mysqli_stmt_bind_param($stmt, "ss", $applicantName, $applicantEmail);
//    mysqli_stmt_execute($stmt);

//    $resultData = mysqli_stmt_get_result($stmt);

//    if(mysqli_fetch_assoc($resultData)){
//         return $row;
//    }
//    else{
//        $result = false;
//        return $result;
//    }

//    mysqli_stmt_close($stmt);
// }
// function createApplicant($conn, $applicantName, $applicantEmail, $applicantDepartment, $applicantJob, $applicantBranch, $fileName,$fileTmpName,$fileType){
//     $applicantStatus ="Recruitment";
//     $applicantSchedSet = "0";
//     $path = "resumeFile/".$fileName;

//     $sql = "INSERT INTO rm_applicants(applicantName, applicantEmail, applicantDepartment, applicantJob, applicantBranch, applicantFile, applicantStatus, applicantSchedSet)
//     VALUES ($applicantName, $applicantEmail, $applicantDepartment, $applicantJob, $applicantBranch, $fileName,$fileTmpName, $applicantStatus, $applicantSchedSet) ;";

//     $run = mysqli_query($conn,$sql);
//     if($run){
//         $fileExplode = explode('.',$fileName);
//         $fileExt = end($fileExplode);

//         $extensions = ["doc", "docx", "pdf"];
//         if(!in_array($fileExt, $extensions) === true){
//             $types = ["$fileName/doc", "$fileName/docx", "$fileName/pdf"];
//             if(!in_array($fileType, $types) === true){
//                 move_uploaded_file($fileTmpName,$path);
//                 header("Location:  ../Applicant(Apply).php?error=none");
//             }
//             else{
//                 header("location: ../Applicant(Apply).php?error=invalidFile");
//                 exit();
//             }
//         }
//         else{
//             header("location: ../Applicant(Apply).php?error=invalidFile");
//             exit();
//         }
       
//     }
//     else{
//         echo "error".mysqli_error($conn);
//     }
// }
// End of apply functions