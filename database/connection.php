<?php

$host= "localhost";
$dbname= "category_based_attendance_system";
$username = "root";
$pass ="";
$db= null;

try{
  $db= new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $pass,[
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
  ]);
}
catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
   }





?>