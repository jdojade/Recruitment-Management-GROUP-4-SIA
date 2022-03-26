<?php
include 'dbh.inc.php';
if (isset($_POST["applyJob"])){
     

    $applicantName = mysqli_real_escape_string($conn, $_POST["applicantName"]);
    $applicantEmail = mysqli_real_escape_string($conn, $_POST["applicantEmail"]);
    $applicantDepartment = mysqli_real_escape_string($conn, $_POST["applicantDepartment"]);
    $applicantJob = mysqli_real_escape_string($conn, $_POST["applicantJob"]);
    $applicantBranch = mysqli_real_escape_string($conn, $_POST["applicantBranch"]);
    $jobId = mysqli_real_escape_string($conn, $_POST["jobId"]);

    $notifMessage ="Send their application";
    $notifType = "applications";
    $notifStatus = "unread";

        if(!empty($applicantName) && !empty($applicantEmail)){
            if(filter_var($applicantEmail, FILTER_VALIDATE_EMAIL)){
                $sql = mysqli_query($conn, "SELECT * FROM rm_applicants WHERE applicantName = '{$applicantName}' OR applicantEmail = '{$applicantEmail}'");
                if(mysqli_num_rows($sql) > 0){
                    header("location: Applicant(Apply).php?id=$jobId&error=existingUser");
                }else{
                    if(isset($_FILES['applicantFile'])){
                        $fileName = $_FILES['applicantFile']['name'];
                        $fileType = $_FILES['applicantFile']['type'];
                        $fileTmpName = $_FILES['applicantFile']['tmp_name'];
    
                        $fileExplode = explode('.',$fileName);
                        $fileExt = strtolower(end(explode('.', $_FILES['applicantFile']['name'])));
                        $extensions = ['doc', 'docx', 'pdf'];
                        if(in_array($fileExt, $extensions) === true){
                            // $types = ["applicantFile/doc", "applicantFile/docx", "applicantFile/pdf"];
                            // if(in_array($fileType, $types) === true){
                                $path = "resumeFile/".$fileName;
                                if(move_uploaded_file($fileTmpName,$path)){
                                    $applicantStatus ="Recruitment";
                                    $applicantSchedSet = "0";
                                    $query_insert = mysqli_query($conn, "INSERT INTO rm_applicants (applicantName, applicantEmail, applicantDepartment, applicantJob, applicantBranch, applicantFile, applicantStatus, applicantSchedSet)
                                        VALUES ('{$applicantName}', '{$applicantEmail}', '{$applicantDepartment}', '{$applicantJob}', '{$applicantBranch}', '{$fileName}', '{$applicantStatus}', '{$applicantSchedSet}')");
                                        if($query_insert){
                                            $query_notif = mysqli_query($conn,"INSERT INTO `rm_notif`(`name`, `message`, `type`, `status`) VALUES ('$applicantName','$notifMessage','$notifType','$notifStatus')");
                                            if($query_notif){
                                                header("Location: Applicant(Apply).php?id=$jobId&error=none");
                                            }
                                        }
                                }
                            // }
                            // else{
                            //     header("location: Applicant(Apply).php?error=invalidFile");
                            //     exit();
                            //     }
                        }
                        else{
                            header("location: Applicant(Apply).php?id=$jobId&error=invalidFile");
                            exit();
                        }
                    }
                }
            }
            else{
                header("location: Applicant(Apply).php?id=$jobId&error=invalidEmail");
                exit();
            }
        }
        else{
            header("location: Applicant(Apply).php?id=$jobId&error=emptyFields");
            exit();
        }
}

 // condition #1 (Invalid File)
    // if (invalidFile($fileName, $fileType, $fileTmpName) !== false) {
    //     header("location: ../Applicant(Apply).php?error=invalidFile");
    //     exit();
    // }
     // condition #2 (Invalid email)
    //  if(invalidEmail($applicantEmail) !== false) {
    //     header("location: ../Applicant(Apply).php?error=invalidEmail");
    //     exit();
    // }
    // condition #3 (Applicant Exists)
    // if (applicantExists($conn, $applicantName, $applicantEmail) !== false) {
    //     header("location: ../Applicant(Apply).php?error=applicantExists");
    //     exit();
    // }
    // if no error
//     createApplicant($conn, $applicantName, $applicantEmail, $applicantDepartment, $applicantJob, $applicantBranch, $fileName,$fileTmpNam