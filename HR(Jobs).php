<?php 
include_once "HR(Header).php";
?>
<main>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Job Listed</h3>
                    <div class="table-responsive">
                       <?php
                            
                            $queryJob = "SELECT * FROM rm_jobs ORDER BY jobId DESC";
                            $queryRun = mysqli_query($conn,$queryJob);
                       ?>
                        <table>
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Branch</th>
                                <th>Images</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    if(mysqli_num_rows($queryRun)>0){
                                        foreach($queryRun as $jobRow){
                                            ?>
                                            <tr>
                                                <td><?php echo $jobRow['jobTitle']; ?></td>
                                                <td><?php echo $jobRow['jobDepartment']; ?></td>
                                                <td><?php echo $jobRow['jobBranch']; ?></td>
                                                <td><img src="<?php echo "jobimages/".$jobRow['jobImage'];?>" width="100px;" height="100px;"></td>
                                                <td><a href="HR(EditJob).php?id=<?php echo $jobRow['jobId']?>" class="btn-info">Edit</a></td>
                                                <td><!-- <a href="" class="btn-danger">Delete</a>-->
                                                    <form action="includes/deletejobs.inc.php" method="post">    
                                                        <input type="hidden" name="jobId" value="<?php echo $jobRow['jobId']; ?>" >
                                                        <input type="hidden" name="jobTitle" value="<?php echo $jobRow['jobTitle']; ?>" >
                                                        <input type="hidden" name="jobDepartment" value="<?php echo $jobRow['jobDepartment']; ?>" >
                                                        <input type="hidden" name="jobBranch" value="<?php echo $jobRow['jobBranch']; ?>" >
                                                        <input type="hidden" name="jobDescription" value="<?php echo $jobRow['jobDescription']; ?>" >
                                                        <input type="hidden" name="jobResponsibilities" value="<?php echo $jobRow['jobResponsibilities']; ?>" >
                                                        <input type="hidden" name="jobQualifications" value="<?php echo $jobRow['jobQualifications']; ?>" >
                                                        <input type="hidden" name="jobCompensation" value="<?php echo $jobRow['jobCompensation']; ?>" >
                                                        <button type="submit" class="btn-danger" name="deleteJob">Delete</button>
                                                    </form>
                                                </td> 
                                            </tr>

                                            <?php
                                        }
                                    }
                                    else{
                                        ?>
                                        <tr>
                                            <td>No record</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                        </tbody>
                    </table>
                    </div>   
                </div>
                <div class="summary">
                            <div class="summary-card">
                                <div class="summary-single">
                                        <div>
                                        <center><small>Click here to add job</small></center>
                                        <a href="HR(AddJobs).php" class="btn-info">Add</a>
                                        </div>
                                </div>
                            </div> 
                        </div>    
            </div>           
        </section>
    </main>
<?php 
include_once "Footer.php";
?>