<?php
require 'MysqlCon.php';
$Conn = new SqlCon();
$Conn->SetDb();
$pdo = $Conn->SetSQLCon();

$Firstname = $_POST['FirstName']; // Correct the typo in the variable name (change "FirstName" to "FirstName")

// SQL query to delete the user by first name
$sql = "DELETE FROM `tbl_user` WHERE name = :Firstname";

// Bind the parameter for the first name only
$arraydata = array(
    'Firstname' => $Firstname,
);

// Call the SQLConTSQL function to execute the query
echo $Conn->SQLConTSQL($sql, $arraydata, $pdo);
?>
