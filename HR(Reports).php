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
                    <h3>Recruitment</h3>
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
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include "includes/reportlist.inc.php";
                        foreach($files as $file): ?>
                            <tr>
                                <td><?php echo $file['applicantId']?></td>
                                <td><?php echo $file['applicantName']?></td>
                                <td><?php echo $file['applicantEmail']?></td>
                                <td><?php echo $file['applicantDepartment']?></td>
                                <td><?php echo $file['applicantJob']?></td>
                                <td><?php echo $file['applicantBranch']?></td>
                                <td><?php echo $file['applicantStatus']?></td>
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