<?php
include 'dbh.inc.php';

if(isset($_POST['addAccounts'])){
    $accountUsername = $_POST['accountUsername'];
    $accountPassword = $_POST['accountPassword'];
    $accountName = $_POST['accountName'];
    $accountType = $_POST['accountType'];


    if(!empty($accountUsername) && !empty($accountPassword) && !empty($accountName) && !empty($accountType)){
        $sqlCheck = mysqli_query($conn, "SELECT * FROM `rm_accounts` WHERE 	accountUsername = '{$accountUsername}' OR accountName = '{$accountName}'");
        if(mysqli_num_rows($sqlCheck) > 0){
            header("location: Admin(AddAccounts).php?error=existingUser");
            exit();
        }
        else{
            if(isset($_FILES['accountImage'])){
                $imageName = $_FILES['accountImage']['name'];
                $imageType = $_FILES['accountImage']['type'];
                $imageTmpName = $_FILES['accountImage']['tmp_name'];
                
                $imageExplode = explode('.',$imageName);
                $imageExt = end($imageExplode);
    
                $extensions = ['jpeg', 'png', 'jpg'];

                if(in_array($imageExt, $extensions) === true){
                    $path = "accountImages/".$imageName;
                    if(move_uploaded_file($imageTmpName,$path)){
                        $query_insert = mysqli_query($conn, "INSERT INTO rm_accounts(accountUsername, accountPassword, accountName, accountImage, accountType) 
                                        VALUES ('{$accountUsername}','{$accountPassword}','{$accountName}','{$imageName}','{$accountType}')");
                        if($query_insert){
                            header("Location: Admin(AddAccounts).php?error=none");
                        }
                    }
                }
                else{
                    header("location: Admin(AddAccounts).php?error=invalidImage");
                    exit();
                }
            }
        }
    }
    else{
        header("location: Admin(AddAccounts).php?error=emptyFields");
        exit();
    }
}