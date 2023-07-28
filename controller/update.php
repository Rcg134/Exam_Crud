<?php

  require 'MysqlCon.php';

  $Conn = new SqlCon();

  $Conn->SetDb();
  
  $pdo = $Conn->SetSQLCon();
    $Firstname = $_POST['FirstName'];
    $Lastname = $_POST['LastName'];


      //MUST BE ID wala lang pong enough time po to get the id back after ma insert , if may time po gagawin ko po syang table type then andun po ID
      $sql = "update `tbl_user` SET `name`=:Firstname,`surname`=:Lastname WHERE name = :Firstname";

  
        $arraydata= array(  
                'Firstname' => "$Firstname",
                'Lastname' => "$Lastname");
 


       echo  $Conn->SQLConTSQL($sql,$arraydata,$pdo);

?>