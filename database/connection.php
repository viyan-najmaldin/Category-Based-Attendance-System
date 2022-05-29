<?php

$host= "sql5.freesqldatabase.com";
$dbname= "sql5496188";
$username = "sql5496188";
$pass ="L5ztG5lldr";
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