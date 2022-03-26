<?php 
include 'dbh.inc.php';
session_start();
if (isset($_POST['accountLogin'])){

    $accountUsername = $_POST['accountUsername'];
    $accountPassword = $_POST['accountPassword'];

    $loginQuery = "SELECT * FROM `rm_accounts` WHERE accountUsername = '{$accountUsername}' AND accountPassword ='{$accountPassword}'";
    
    $result = mysqli_query($conn,$loginQuery);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if($row['accountUsername'] === $accountUsername && $row['accountPassword'] === $accountPassword && $row['accountType'] === 'Admin')
        {
            $_SESSION['id'] = $row['accountId'];
            $_SESSION['accountType'] = $row['accountType'];
            header('location: Admin(Dashboard).php');
            exit();
        }
        else if($row['accountUsername'] === $accountUsername && $row['accountPassword'] === $accountPassword && $row['accountType'] === 'HR')
        {
            $_SESSION['id'] = $row['accountId'];
            $_SESSION['accountType'] = $row['accountType'];
            header('location: HR(Dashboard).php');
            exit();
        }
    }
    else{
        header("location: LoginPage.php?error=incorrectuserpass");
        exit();
    }

}