<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="icon" type="image/jpg" href="images/octagon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background: #ddddd6;">
<div class="bg">
    <label class="head">OCTAGON</label>
    <p>RECRUITMENT</p>
    <br>


    <div class="log-form">
    <form method="post" enctype="multipart/form-data">
    <?php
        include_once 'includes/login.inc.php';
    ?>
        <div class="log-card" >
            <div class="mb-4">
                <label class="form-label-4">Username</label><br>
                <input type="text" class="form-control-4" name="accountUsername" placeholder="Enter your username" autocomplete="off" required>
            </div>
            <div class="mb-4">
                <label class="form-label-4">Password</label><br>
                <input type="password" class="form-control-4" name="accountPassword" placeholder="Enter your password" autocomplete="off" required>
            </div>
            
            <!-- <label class="validation">
                <i class="fa fa-exclamation-circle"></i> &nbsp; Incorrect email/password. Please try again.
            </label> -->
           <!-- <a href="" class="submit-btn2">submit</a> -->
           <button class="submit-btn2" name="accountLogin">Login</button>
           <br>
           <br>
           <?php 
                if(isset($_GET["error"])){
                    if($_GET["error"] == "incorrectuserpass"){
                     echo "<label class='validation'>
                                <i class='fa fa-exclamation-circle'></i> &nbsp; Incorrect email/password. Please try again.
                            </label>";
                        }
                    }
            ?>
                </div>
    </form>
        </div>
    </div>
          <div class="footer-bottom-login">
            <p>copyright &copy2021. Designed by <span>OCTAGON</span> </p>
        </div>  



</body>
</html>