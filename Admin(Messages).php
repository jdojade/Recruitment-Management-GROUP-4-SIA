<?php 
include "Admin(Header).php";
?>
<main>
    <section id="testimonials">
        <div class="testimonial-heading">
            <span>Messages</span>
            <h1>Client Says</h1>
        </div>
        
        <div class="testimonial-box-container">
        <?php
            $query = "SELECT * FROM `rm_messages` ORDER BY id DESC";
            $queryRun = mysqli_query($conn,$query);

            if(mysqli_num_rows($queryRun)>0){
                foreach($queryRun as $messageRow){
        ?>
            <div class="testimonial-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="Images/User.png" alt="">
                        </div>
                        <div class="name-user">
                            <strong><?php echo $messageRow['fullName']?></strong>
                            <span><?php echo $messageRow['email']?></span>
                        </div>
                    </div>
                </div>

                <div class="client-comment">
                   <p><?php echo $messageRow['messages']?></p>
                </div>
            </div>
        <?php
            }
                }
        else{
                ?>
            <div class="testimonial-box-container">
                <div class="testimonial-box">
                <div class="client-comment">
                   <p>No Messages</p>
                </div>
                </div>
            </div>
        <?php
            }
         ?> 
    </div>
    </section>
</main>
<?php 
include "Footer.php";
?>