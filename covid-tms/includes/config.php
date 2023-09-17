<?php
//time zone
date_default_timezone_set('Asia/Kolkata');
//database connection
$con=mysqli_connect("dbemergentes.mysql.database.azure.com","benjiegonzalez","994411BFgs","covidtmsdb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
// 2012116664
  ?>
