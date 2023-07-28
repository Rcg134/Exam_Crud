<?php
require 'MysqlCon.php';
$Conn = new SqlCon();
$Conn->SetDb();
$pdo = $Conn->SetSQLCon();

$Firstname = $_POST['FirstName'];

 //MUST BE ID wala lang pong enough time po to get the id back after ma insert , if may time po gagawin ko po syang table list type then andun po ID
$sql = "DELETE FROM `tbl_user` WHERE name = :Firstname";


$arraydata = array(
    'Firstname' => $Firstname,
);


echo $Conn->SQLConTSQL($sql, $arraydata, $pdo);
?>
