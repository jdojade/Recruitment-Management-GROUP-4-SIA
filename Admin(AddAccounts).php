<?php 
include "Admin(Header).php";
?>
<main> 
    <section class="contentAdmin">
            <div class="bgAdmin">
                <label class="head">OCTAGON</label>
                <p>RECRUITMENT</p>
                <br>
            </div>
   
        <div class="contactFormAdmin">
            <div class="profile-contentAd">
                <?php
                    include "includes/addaccounts.inc.php"; 
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="labelsAd">
                        <div class="titleAd">
                            <label for="">username</label>
                        </div>
                        <input id="username" type="text" name="accountUsername">
                        <br><br>
                    </div>
                    
                    <div class="labelsAd">
                        <div class="titleAd">
                            <label for="">password</label>
                        </div>
                        <input id="password" type="password" name="accountPassword">
                        <br><br>	
                    </div>

                    <div class="labelsAd">
                        <div class="titleAd">
                            <label for="">name</label>
                        </div>
                        <input id="name" type="text"  name="accountName">
                        <br><br>	
                    </div>
                    
                    <div class="labelsAd">
                        <div class="titleAd">
                            <label for="">Account type</label>
                        </div>
                        <select name="accountType" id="AccType" >
                            <option value=""></option>
                            <option value="Admin">Admin</option>
                            <option value="HR">HR</option>
                        </select>
                    </div>
                    <input type="file" name="accountImage" class="upload-box" required>
                    <br>
                    <button type="submit" class="btn-Ad" name="addAccounts">create</button>
                    <br>
                    <br>
                    <?php 
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyFields"){
                            echo "<center><label class='form-label'style='color:red;'>Fill in all fields</label></center>";
                        }
                        else if ($_GET["error"] == "invalidImage"){
                            echo "<center><label class='form-label'style='color:red;'>Please input valid file - jpeg, png ,jpg</label><center>";
                        }
                        else if ($_GET["error"] == "existingUser"){
                            echo "<center><label class='form-label'style='color:red;'>The User is exsisting</label><center>";
                        }
                        else if ($_GET["error"] == "none"){
                            echo "<center><label class='form-label'style='color:green;'>User Succesfully Added</label><center>";
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
    </section>

</main>
<?php 
include "Footer.php";
?>

