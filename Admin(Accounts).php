<?php 
include "Admin(Header).php";
?>

<main>
        <section class="recent">
            <div class="activity-grid">
                <div class="activity-card">
                    <h3>All Accounts</h3>
                    <div class="table-responsive">
                        <?php
                            
                            $query = "SELECT * FROM rm_accounts";
                            $query_run = mysqli_query($conn,$query);
                       ?>
                        <table>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Prolfe Image</th>
                                <th>Types</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(mysqli_num_rows($query_run)>0){
                                foreach($query_run as $accountRow){
                                            ?>
                                            <tr>
                                            <tr>
                                                <td><?php echo $accountRow['accountUsername']; ?></td>
                                                <td><?php echo $accountRow['accountName']; ?></td>
                                                <td><img src="<?php echo "accountImages/".$accountRow['accountImage'];?>" style="height: 50px; width: 50px; border-radius: 50%;"></td>
                                                <td><?php echo $accountRow['accountType']; ?></td>
                                                <td><a href="Admin(EditAccounts).php?id=<?php echo $accountRow['accountId']?>" class="btn-info">Edit</a></td>
                                                <td><!-- <a href="" class="btn-danger">Delete</a>-->
                                                    <form action="includes/deleteaccounts.inc.php" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $accountRow['accountId']; ?>" >
                                                        <input type="hidden" name="accountUsername" value="<?php echo $accountRow['accountUsername']; ?>" >
                                                        <input type="hidden" name="accountPassword" value="<?php echo $accountRow['accountPassword']; ?>" >
                                                        <input type="hidden" name="accountName" value="<?php echo $accountRow['accountName']; ?>" >
                                                        <input type="hidden" name="accountType" value="<?php echo $accountRow['accountType']; ?>" >
                                                        <button type="submit" class="btn-danger" name="deleteAccount">Delete</button>
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
                                        <center><small>Add Account</small></center>
                                        <a href="Admin(AddAccounts).php" class="btn-info">Add</a>
                                        </div>
                                </div>
                            </div> 
                        </div>    
            </div>           
        </section>
    </main>
<?php 
include "Footer.php";
?>