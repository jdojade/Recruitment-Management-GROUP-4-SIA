<?php 
include_once "HR(Header).php";
?>
<main>
 <section class="profile-container">
        <div class="JobHeader">
            <h2>job posts</h2>
        </div>
        <?php 
        include "includes/addjobs.inc.php";
        ?>
        <form method="post" enctype="multipart/form-data">
            <div class="job-content">
            
                <div class="Job-labels">
                 <div class="title"><label for="job">POSITION</label></div>

                <select name="jobTitle" id="job" required>
                <option value=""></option>
                <option value="Customer Service Representative">Customer Service Representative</option>
                <option value="Technical Support Representative">Technical Support Representative</option>
                <option value="Training Coach">Training Coach</option>
                <option value="Quality Assurance">Quality Assurance</option>
                
                </select>
                </div>

                <div class="Job-labels">
                    <div class="title"><label for="dept">department</label></div>
   
                   <select name="jobDepartment" id="dept" required>
                   <option value=""></option>
                   <option value="AT & T">AT & T</option>
                   <option value="UVERSE">UVERSE</option>
                   <option value="Training Department">Training Department</option>
                   <option value="Quality Assurance Department">Quality Assurance Department</option>
                  
                   
                   </select>
                   </div>

                   <div class="Job-labels">
                    <div class="title"><label for="branch">branch</label></div>
   
                   <select name="jobBranch" id="branch" required>
                   <option value=""></option>
                   <option value="48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati">48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati</option>
                   <option value="31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig">31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig</option>
                   <option value="18F Octagon Bldg, San Miguel Avenue, Ortigas Center, Pasig">18F Octagon Bldg, San Miguel Avenue, Ortigas Center, Pasig</option>
                  
                  
                   
                   </select>
                   </div>

                   <div class="Job-labels-2">
                    <div class="title"><label for="desc">Description</label></div>
                    <input id="desc" type="text"  name="jobDescription" required><br><Br>	
                </div>

                <div class="Job-labels-2">
                    <div class="title"><label for="resp">Responsibilities</label></div>
                    <input id="resp" type="text"  name="jobResponsibilities" required><br><Br>	
                </div>

                <div class="Job-labels-2">
                    <div class="title"><label for="quali">Qualifications</label></div>
                    <input id="quali" type="text"  name="jobQualifications" required><br><Br>	
                </div>
                <div class="Job-labels-2">
                    <div class="title"><label for="quali">Compensation</label></div>
                    <input id="quali" type="text"  name="jobCompensation" required><br><Br>	
                </div> 
                <div class="Job-labels-2">
                    <div class="title"><label for="quali">Job Images</label></div>
                    <br>
                    <input type="file" name="jobImage" class="job-upload-box" required><br> 	
                </div>         
                    
            </div>

            <button type="submit" name="addJob" class="job-btn">create</button>
        </form>  
    </section>
</main>
<?php 
include_once "Footer.php";
?>