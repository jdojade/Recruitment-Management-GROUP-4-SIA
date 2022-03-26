<?php 

include "dbh.inc.php";

if (isset($_POST['deleteAccount'])){
    $accountId = $_POST['id'];
    $accountUsername = $_POST['accountUsername'];
    $accountPassword = $_POST['accountPassword'];
    $accountName = $_POST['accountName'];
    $accountType = $_POST['accountType'];

   $arcQuery = "INSERT INTO `archived_accounts`
                (`accountId`, `accountUsername`, `accountPassword`, `accountName`, `accountType`)
                 VALUES ('$accountId','$accountUsername','$accountPassword','$accountName','$accountType')";
    $arcQueryRun = mysqli_query($conn, $arcQuery);

    if($arcQueryRun){
        $query = "DELETE FROM rm_accounts WHERE accountId ='$accountId' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            header("Location: ../Admin(Accounts).php");
        }
        else{
            echo "error".mysqli_error($conn);
        }
    }
    else{
        echo "error".mysqli_error($conn);
    }
}