<?php
$serverName = "mysql:host=localhost;dbname=business;charset=UTF8";$userNamel;$userPassword;
$userName = "root";
$userPassword = "";

try
{
    $conn = new PDO($serverName, $userName, $userPassword);  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       

} catch (PDOException $e) {
    echo "Sorry! You cannot connect to database";
}
?>