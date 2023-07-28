<?php

  require 'MysqlCon.php';

  $Conn = new SqlCon();

  $Conn->SetDb();
  
  $pdo = $Conn->SetSQLCon();
    $Firstname = $_POST['FirstName'];
    $Lastname = $_POST['LastName'];



      $sql = "insert into `tbl_user`(`name`, `surname`) 
              values (:Firstname,:Lastname)";

  
        $arraydata= array(
                'Firstname' => "$Firstname",
                'Lastname' => "$Lastname");
 


       echo  $Conn->SQLConTSQL($sql,$arraydata,$pdo);

?>