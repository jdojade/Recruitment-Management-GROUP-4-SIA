<?php 
include "HR(Header).php";
?>
<main>
    <section class="">
        <div class="header">
            <h4><?php echo $userRow['accountName']?></h4>
            <div class="prof-img">
                <img src="<?php echo "accountImages/".$userRow['accountImage'];?>">
            </div>
            <div class="profile-content">
                
                <div class="profile-labels">
                    <div class="title"><label for="username">username</label></div>
                    <input id="username" type="text" readonly value="<?php echo $userRow['accountUsername']?>"><br><Br>	
                   </div>
                   <div class="profile-labels">
                    <div class="title"><label for="hr">HR</label></div>
                    <input id="hr" type="text" readonly value="<?php echo $userRow['accountName']?>"><br><Br>	
                   </div>
                   <!-- <input type="file" name="resume" class="upload-box"><br> -->
                   <a href="HR(editProfile).php"><button type="submit" class="btn">Update Profile</button></a>
            </div>
        </div>
    </section>
    </main>
<?php 
include "Footer.php";
?>