<?php 
include_once "Admin(Header).php";
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
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Birthday</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Branch</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM empinfo ORDER BY id DESC";
                        $queryRun = mysqli_query($conn,$query);

                            if(mysqli_num_rows($queryRun)>0){
                                foreach($queryRun as $queryRow){
                        ?>
                            <tr>
                                <td><?php echo $queryRow['FNAME']?></td>
                                <td><?php echo $queryRow['FNAME']?></td>
                                <td><?php echo $queryRow['LNAME']?></td>
                                <td><?php echo $queryRow['EMAIL']?></td>
                                <td><?php echo $queryRow['BDAY']?></td>
                                <td><?php echo $queryRow['GENDER']?></td>
                                <td><?php echo $queryRow['ADDRESS']?></td>
                                <td><?php echo $queryRow['CONTACTNO']?></td>
                                <td><?php echo $queryRow['POSITION']?></td>
                                <td><?php echo $queryRow['DEPT']?></td>
                                <td><?php echo $queryRow['BRANCH']?></td>
                            </tr>
                            <?php
                                }
                             }?>         
                    </table>
                    </div>
                    
                </div>
            </div>           
        </section>
    </main>
<?php 
include "Footer.php";
?>