<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php
                        include_once 'includes/addaccounts.inc.php';
                        ?>
                        <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="accountUsername" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="accountPassword" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="accountName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Account Types</label>
                            <select class="form-select" aria-label="Default select example" name="accountType">
                            <option selected></option>
                            <option value="Admin">Admin</option>
                            <option value="HR">HR</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Images</label>
                            <input type="file" name="accountImage" class="form-control" required>
                        </div>
                        <br>
                        <?php 
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyFields"){
                                echo "<label class='form-label'style='color:red;'>Fill in all fields</label>";
                            }
                            else if ($_GET["error"] == "invalidImage"){
                                echo "<label class='form-label'style='color:red;'>Please input valid file - jpeg, png ,jpg</label>";
                            }
                            else if ($_GET["error"] == "existingUser"){
                                echo "<label class='form-label'style='color:red;'>The User is exsisting</label>";
                            }
                            else if ($_GET["error"] == "none"){
                                echo "<label class='form-label'style='color:green;'>User Succesfully Added</label>";
                            }
                        }
                        ?>
                        <br>
                        <div class="form-group">
                            <button type="submit "name="addAccounts" class="btn btn-primary">Create</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
</body>
</html>