<?php
  $servername = 'localhost';
  $username  = 'task_admin';
  $password = 'T0p_S3cRet_P4sssssw0rD_592424';
  $database = 'task';
  $flag = "Empire{Acce55_Flag_n1ce_start1ng__but_this_is_the_begining}";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
      die("Unable to connect to MYSQL server");
  }
?>
