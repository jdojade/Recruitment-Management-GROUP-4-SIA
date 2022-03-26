<?php 
include "Admin(Header).php";
?>
<main> 
    
    <section class="contentAdmin">
            <div class="bgAdmin">
                <label class="head">Profile</label>
                <p>Update</p>
                <br>
            </div>
   
        <div class="contactFormAdmin">
        <?php 
                        
             $accountId =$_GET['id'];
            
            $query = "SELECT * FROM rm_accounts WHERE accountId='$accountId' ";
            $queryRun = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($queryRun)>0){
            foreach($queryRun as $editRow){
        ?>
            <div class="profile-contentAd">
                <?php
                    include "includes/userProfileUpdate.inc.php"; 
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="labelsAd">
                        <div class="titleAd">
                            <label for="">username</label>
                        </div>
                        <input  type="hidden" name="accountId" value="<?php echo $editRow['accountId']?>">
                        <input id="username" type="text" name="accountUsername" value="<?php echo $editRow['accountUsername']?>" required>
                        <br><br>
                    </div>
                    
                    <div class="labelsAd">
                        <div class="titleAd">
                            <label for="">password</label>
                        </div>
                        <input id="password" type="password" name="accountPassword" value="<?php echo $editRow['accountPassword']?>" required>
                        <br><br>	
                    </div>

                    <div class="labelsAd">
                        <div class="titleAd">
                            <label for="">name</label>
                        </div>
                        <input id="name" type="text"  name="accountName" value="<?php echo $editRow['accountName']?>" required>
                        <br><br>	
                    </div>
                    
                    <div class="labelsAd">
                        <div class="titleAd">
                            <label for="">Account type</label>
                        </div>
                        <select name="accountType" id="AccType" required>
                            <option value="<?php echo $editRow['accountType']?>"><?php echo $editRow['accountType']?></option>
                            <option value="Admin">Admin</option>
                            <option value="HR">HR</option>
                        </select>
                    </div>
                    <input type="file" name="accountImage" class="upload-box">
                    <input type="hidden" name="accountImage" value="<?php echo $editRow['accountImage']?>" required>
                    <br>
                    <button type="submit" class="btn-Ad" name="editProfile">Update</button>
                    <br>
                    <br>
                </form>
            </div>
            <?php
                }
            }
            else{
                echo "<script>alert('Something Wrong')</script>";
                }
        ?>
        </div>
    </section>

</main>
<?php 
include "Footer.php";
?>

