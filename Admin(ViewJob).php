<?php 
include_once "Admin(Header).php";
?>
<main>
 <section class="profile-container">
        <div class="JobHeader">
            <h2>job posts</h2>
        </div>
        <?php   
        $jobId =$_GET['id'];

        $selectQuery = "select * from rm_jobs where jobId='$jobId' ";
        $queryRun = mysqli_query($conn,$selectQuery);

        if(mysqli_num_rows($queryRun)>0){
         foreach($queryRun as $jobRow){
            ?><form method="post" enctype="multipart/form-data">
            <div class="job-content">
            <input type="hidden" name="jobId" value="<?php echo $jobRow['jobId']?>"class="form-control">
                <div class="Job-labels">
                 <div class="title"><label for="job">POSITION</label></div>

                <select name="jobTitle" id="job">
                <option value="<?php echo $jobRow['jobTitle']?>"><?php echo $jobRow['jobTitle']?></option>
                <option value="Customer Service Representative">Customer Service Representative</option>
                <option value="Technical Support Representative">Technical Support Representative</option>
                <option value="Trainer">Trainer</option>
                <option value="Quality Assurance">Quality Assurance</option>
                </select>
                </div>

                <div class="Job-labels">
                    <div class="title"><label for="dept">department</label></div>
   
                   <select name="jobDepartment" id="dept">
                   <option value="<?php echo $jobRow['jobDepartment']?>"><?php echo $jobRow['jobDepartment']?></option>
                   <option value="T & T">AT & T</option>
                   <option value="UVERSE">UVERSE</option>
                   <option value="Training Department">Training Department</option>
                   <option value="Quality Assurance Department">Quality Assurance Department</option>
                   </select>
                   </div>

                   <div class="Job-labels">
                    <div class="title"><label for="branch">branch</label></div>
   
                   <select name="jobBranch" id="branch">
                   <option value="<?php echo $jobRow['jobBranch']?>"><?php echo $jobRow['jobBranch']?></option>
                   <option value="SM North Fairview">SM North Fairview</option>
                   <option value="Montalban">Montalban</option>
                   <option value="One San Miguel, Pasig City (main)">One San Miguel, Pasig City (main)</option>
                   </select>
                   </div>

                   <div class="Job-labels-2">
                    <div class="title"><label for="desc">Description</label></div>
                    <input id="desc" type="text"  name="jobDescription" value="<?php echo $jobRow['jobDescription']?>" required><br><Br>	
                </div>

                <div class="Job-labels-2">
                    <div class="title"><label for="resp">Responsibilities</label></div>
                    <input id="resp" type="text"  name="jobResponsibilities" value="<?php echo $jobRow['jobResponsibilities']?>" required><br><Br>	
                </div>

                <div class="Job-labels-2">
                    <div class="title"><label for="quali">Qualifications</label></div>
                    <input id="quali" type="text"  name="jobQualifications" value="<?php echo $jobRow['jobQualifications']?>" required><br><Br>	
                </div>
                <div class="Job-labels-2">
                    <div class="title"><label for="quali">Compensation</label></div>
                    <input id="quali" type="text"  name="jobCompensation" value="<?php echo $jobRow['jobCompensation']?>" required><br><Br>	
                </div> 
                <div class="Job-labels-2">
                    <div class="title"><label for="quali">Job Images</label></div>
                    <br>
                    <img src="<?php echo "jobimages/".$jobRow['jobImage'];?>" width="100px;">
                    <br>	
                </div>                     
            </div>
        </form> 
        <?php
            }
                }
         else{
             echo "No record avaible";
            }
        ?> 
    </section>
</main>
<?php 
include_once "Footer.php";
?>