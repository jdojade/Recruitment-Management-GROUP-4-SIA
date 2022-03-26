<?php 
 include "dbh.inc.php";
 $tableQuery= "SELECT * FROM `rm_applicants` ORDER BY applicantId DESC LIMIT 10";
 $tableRow = mysqli_query($conn,$tableQuery);
