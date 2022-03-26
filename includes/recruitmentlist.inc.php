<?php
include "dbh.inc.php";

$sql = "SELECT * FROM rm_applicants WHERE applicantStatus = 'Recruitment' ORDER BY applicantId DESC";

$result = mysqli_query($conn,$sql);
$files = mysqli_fetch_all($result,MYSQLI_ASSOC);
 
if(!empty($_GET['file'])){
    $fileName = basename ($_GET['file']);
    $filePath = "../resumeFile/".$fileName;

    if(!empty($fileName) && file_exists($filePath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        readfile($filePath);
        exit;
    }
    else{
    }
}