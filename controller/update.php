<?php

  require 'MysqlCon.php';

  $Conn = new SqlCon();

  $Conn->SetDb();
  
  $pdo = $Conn->SetSQLCon();
    $Firstname = $_POST['FirstName'];
    $Lastname = $_POST['LastName'];


     //MUST BE ID
      $sql = "update `tbl_user` SET `name`=:Firstname,`surname`=:Lastname WHERE name = :Firstname";

  
        $arraydata= array(
                'Firstname' => "$Firstname",
                'Lastname' => "$Lastname");
 


       echo  $Conn->SQLConTSQL($sql,$arraydata,$pdo);

?>