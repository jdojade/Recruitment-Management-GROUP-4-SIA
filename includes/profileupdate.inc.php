<?php
include "dbh.inc.php";
if(isset($_POST['updateProfile'])){
    $profileId = $_POST['profileId'];
    $profileName = $_POST['profileName'];
    $old_ProfileImg = $_POST['profileImage'];
    $new_ProfileImg = $_FILES['profileImage']['name'];
    $path = "accountImages/".$new_ProfileImg;
    if($new_ProfileImg != ''){
        $update_filename = $_FILES['profileImage']['name'];
    }
    else{
        $update_filename = $old_ProfileImg;
    }
    $query = "UPDATE rm_accounts SET accountName='$profileName', accountImage='$update_filename' WHERE accountId='$profileId'";

    $query_run = mysqli_query($conn,$query);

    if($query_run){
        move_uploaded_file($update_filename,$path);
        echo "<script>window.location.href='HR(Profile).php';</script>";
        // header("Location: HR(Profile).php?error=none");
    }
    else{
        echo "error".mysqli_error($conn);
    }
}
?>