<?php

include "dbh.inc.php";


if(isset($_POST['updateNotif'])){
    $notifId  = $_POST['notifId'];
    $notifType = $_POST['notifType'];
    $updateStatus = "read";

    $queryUpdate = "UPDATE `rm_notif` SET `status`='read' WHERE id='$notifId'";
    $query_run = mysqli_query($conn,$queryUpdate);

    if($query_run){
        if($notifType == "applications"){
            header("Location: ../HR(Recruitment).php");
        }
        else if($notifType == "messages"){
            header("Location: ../HR(Messages).php");
        }
    }
    else{
        echo "error".mysqli_error($conn);
    }
}
