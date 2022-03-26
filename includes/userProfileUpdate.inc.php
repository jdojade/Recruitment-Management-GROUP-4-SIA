<?php

include "dbh.inc.php";
if(isset($_POST['editProfile'])){
    $accountId = $_POST['accountId'];
    $accountPassword = $_POST['accountPassword'];
    $accountUsername = $_POST['accountUsername'];
    $accountName = $_POST['accountName'];
    $newAccountImage = $_FILES['accountImage']['name'];
    $oldAccountImage = $_POST['accountImage'];
    $path = "accountImages/".$newAccountImage;


    if($newAccountImage != ''){
        $update_filename = $_FILES['accountImage']['name'];
        }
    else{
        $update_filename = $oldAccountImage;
    }

        $query = "UPDATE rm_accounts SET accountUserName='$accountUsername', accountPassword='$accountPassword', accountName='$accountName',
        accountImage='$update_filename' WHERE accountId='$accountId'";

        $queryRun = mysqli_query($conn,$query);

        if($queryRun){
             move_uploaded_file($update_filename,$path);
             header("Location: Admin(Accounts).php?id=$accountId&error=none");
         }
         else{
            echo "error".mysqli_error($conn);
         }
}



// if($new_ProfileImg != ''){
//     $update_filename = $_FILES['profileImage']['name'];
// }
// else{
//     $update_filename = $old_ProfileImg;
// }

// $query = "UPDATE rm_accounts SET accountName='$profileUsername', accountPassword='$profilePassword', accountName='$profileName',
// accountImage='$update_filename' WHERE id='$profileId'";

// $query_run = mysqli_query($conn,$query);

// if($query_run){
//     move_uploaded_file($update_filename,$path);
//     header("Location: Admin(Accounts).php");
// }
// else{
//        echo "error".mysqli_error($conn);
// }