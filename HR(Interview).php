<?php 
include_once "HR(Header).php";
?>
<main>
<div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span class="bx bx-user-plus"></span>
                    <div>
                        <h5>Recruitment</h5>
                        <h4><?php  
                        totalRecruitment();
                        ?></h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="Hr(Recruitment).php">View All</a>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="bx bx-user-voice"></span>
                    <div>
                        <h5>Screening</h5>
                        <h4><?php
                        totalScreening();
                        ?></h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="Hr(Screening).php">View All</a>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="bx bx-user-pin"></span>
                    <div>
                        <h5>Training</h5>
                        <h4><?php
                        totalTraining();
                        ?></h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="Hr(Training).php">View All</a>
                </div>
            </div>
            <div class="card-single">
                <div class="card-body">
                    <span class="bx bx-user"></span>
                    <div>
                        <h5>Total Applicant</h5>
                        <h4><?php 
                        totalApplicants();
                        ?></h4>
                    </div>
                </div>
                <div class="card-footer">
                    <a href=""></a>
                </div>
            </div>
        </div>
        <section class="recent">
            <div class="grid">
                <div class="activity-card">
                    <h3>Interview</h3>
                    <div class="table-responsive">
                        <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Job</th>
                                <th>Branch</th>
                                <th>Resume</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include "includes/interviewlist.inc.php"; 
                        foreach($files as $file): ?>
                            <tr>
                                <td><?php echo $file['applicantId']?></td>
                                <td><?php echo $file['applicantName']?></td>
                                <td><?php echo $file['applicantEmail']?></td>
                                <td><?php echo $file['applicantDepartment']?></td>
                                <td><?php echo $file['applicantJob']?></td>
                                <td><?php echo $file['applicantBranch']?></td>
                                <td>
                                <a href="includes/interviewlist.inc.php?file=<?php echo $file['applicantFile']?> "> View </a>
                                </td>
                                <td><?php echo $file['applicantStatus']?></td>
                                <td>
                                    <input type="hidden" name="applicantId" value="<?php echo $file['applicantId']; ?>" >
                                    <input type="hidden" name="schedId" value="<?php echo $file['applicantSchedSet']; ?>" >
                                    <?php 
                                        if($file['applicantSchedSet'] == 1){
                                            echo ("<a href='HR(ViewEmailDetails).php?id=$file[applicantId]&status=$file[applicantStatus]' class='btn-info'>View Details</a>");
                                        }
                                        else {
                                            echo ("<a href='HR(SetEmail).php?id=$file[applicantId]' class='btn-info'>Set Invterview</a>");       
                                        }
                                    ?>
                                    
                                </td>
                                <td>
                                <form action="includes/updatestatus.inc.php" method="post">
                                    <input type="hidden" name="updateId" value="<?php echo $file['applicantId']; ?>" >
                                    <input type="hidden" name="applicantName" value="<?php echo $file['applicantName']; ?>" >
                                    <input type="hidden" name="applicantEmail" value="<?php echo $file['applicantEmail']; ?>" >
                                    <input type="hidden" name="applicantDepartment" value="<?php echo $file['applicantDepartment']; ?>" >
                                    <input type="hidden" name="applicantJob" value="<?php echo $file['applicantJob']; ?>" >
                                    <input type="hidden" name="applicantBranch" value="<?php echo $file['applicantBranch']; ?>" >
                                    <input type="hidden" name="applicantStatus" value="<?php echo $file['applicantStatus']; ?>" >
                                    <button type="submit" class="btn-danger" name="rejectApplicant">Reject</button>
                                </form>
                                </td>
                            </tr>
                            <?php endforeach ; ?>          
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>           
        </section>
    </main>
<?php 
include "Footer.php";
?>