<?php 
include "HR(Header).php";
?>
<main>
    <form method="post" enctype="multipart/form-data">
    <?php 
    include "includes/profileupdate.inc.php";
    ?>
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
                    <input type="hidden" name="profileId" value="<?php echo $userRow['accountId']?>">
                   </div>
                   <div class="profile-labels">
                    <div class="title"><label for="hr">HR</label></div>
                    <input id="hr" type="text" name="profileName"  value="<?php echo $userRow['accountName']?>"><br><Br>	
                   </div>
                   <label for="">Profile Image</label>
                   <input type="file" name="profileImage" class="upload-box"><br>
                   <input type="hidden" name="profileImage" value="<?php echo $userRow['accountImage']?>">

                   <button type="submit" name="updateProfile" class="btn">Update Profile</button>
            </div>
        </div>
    </section>
</main>
<?php 
include "Footer.php";
?>