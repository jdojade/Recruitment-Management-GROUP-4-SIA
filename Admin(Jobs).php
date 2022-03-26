<?php 
include_once "Admin(Header).php";
?>
<main>
        <section class="recent">
            <div class="grid">
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
                                                <td><a href="Admin(ViewJob).php?id=<?php echo $jobRow['jobId']?>" class="btn-info">View More</a></td>
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
            </div>           
        </section>
    </main>
<?php 
include_once "Footer.php";
?>