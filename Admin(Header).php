<?php
include_once "includes/dbh.inc.php";
include "includes/functions.inc.php";
session_start();
if(!isset($_SESSION['id'])){
    header("location: LoginPage.php");
  }
  
$userid = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM rm_accounts WHERE accountId = '$userid'");
            if(mysqli_num_rows($sql) > 0){
              $userRow = mysqli_fetch_assoc($sql);
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCTAGON</title>
    <link rel="icon" type="image/jpg" href="images/octagon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/MainStyle.css?version=1">
    <link rel="stylesheet" href="css/Styles.css">
    <link rel="stylesheet" href="css/Mailer.css">
    <link rel="stylesheet" href="css/Reviews.css">
    <link rel="stylesheet" href="css/style6.css">
    <link rel="stylesheet" href="css/style7.css">
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>

    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
       <div class="sidebar-header">
        <h3 class="brand">
            <span>ADMIN</span>
        </h3>
        <label  for="sidebar-toggle" class="ti-menu-alt"></label>
       </div>

 <div class="sidebar-menu">
     <ul>
        <li>
             <a href="Admin(Dashboard).php">
                <span class="bx bxs-dashboard"></span>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="Admin(Jobs).php">
               <span class="bx bxs-detail"></span>
               <span>Job Details</span>
           </a>
       </li>
       <li>
            <a href="Admin(Recruitment).php">
                <span class="bx bxs-user-plus"></span>
                <span>Recruitment</span>
            </a>
        </li>   
        <li>
            <a href="Admin(Screening).php">
                <span class="bx bxs-user-voice"></span>
                <span>Screening</span>
            </a>
        </li>
        <li>
            <a href="Admin(Interview).php">
                <span class="bx bxs-user-voice"></span>
                <span>Interview</span>
            </a>
        </li>
        <li>
            <a href="Admin(Training).php">
                <span class="bx bxs-user-pin"></span>
                <span>Training</span>
            </a>
        </li>
        <li>
            <a href="Admin(Reports).php">
                <span class="bx bxs-report"></span>
                <span>Reports</span>
            </a>
        </li>
        <li>
            <a href="Admin(Messages).php">
                <span class="bx bxs-message-alt-dots"></span>
                <span>Messages</span>
            </a>
        </li>
        <li>
            <a href="Admin(Accounts).php">
                <span class="ti-settings"></span>
                <span>Manage Accounts</span>
            </a>
        </li>      
        <li>
            <a href="includes/logout.inc.php">
                <span class="bx bx-log-out"></span>
                <span>Logout</span>
            </a>
        </li>
    </ul>
  </div>
</div>

<div class="main-content">
<header>
        <div class="search-wrapper">
            <div style="background-image: url('<?php echo "accountImages/".$userRow['accountImage'];?>')"></div>
            <h3><?php echo $userRow['accountName']?></h3>
        </div>
        
        <div class="social-icons">  
        </div>
    </header>