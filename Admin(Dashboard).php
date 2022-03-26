<?php 
include_once "Admin(Header).php";
include_once "includes/showtable.inc.php";
?>
<main>
        <h2 class="dash-title">Overview</h2>
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
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>Latest Apllicants</h3>
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
                            if(mysqli_num_rows($tableRow)>0){
                                foreach($tableRow as $row){
                                ?>
                            <tr>
                                <td><?php echo $row['applicantId']?></td>
                                <td><?php echo $row['applicantName']?></td>
                                <td><?php echo $row['applicantEmail']?></td>
                                <td><?php echo $row['applicantDepartment']?></td>
                                <td><?php echo $row['applicantJob']?></td>
                                <td><?php echo $row['applicantBranch']?></td>
                                <td><?php echo $row['applicantStatus']?></td>
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
                                    <span class="ti-id-badge"></span>
                                        <div>
                                        <h5><?php totalStaff()?></h5>
                                        <small>Number of Staff</small>
                                        </div>
                                </div>
                            </div>
                            <div class="summary-card">
                            <div class="summary-single">
                                <span class="ti-id-badge"></span>
                                        <div>
                                        <h5><?php totalAdmin()?></h5>
                                        <small>Number of Admin staff</small>
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