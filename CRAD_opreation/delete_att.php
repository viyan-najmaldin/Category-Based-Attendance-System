<?php 

session_start();

require_once '../database/connection.php';

if(isset($_GET['cardd'])){
  $xx = $_GET['cardd'];

$delete=$db->prepare("DELETE FROM user WHERE Card_ID = :ID");

if(  $delete->execute([
	
     'ID' => $xx
   
    ]) ){
     header("Location: ../Pages/list.php");
   }else{
     echo "ERROR!";
   
   }

}

?>