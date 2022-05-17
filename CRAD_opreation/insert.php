
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
session_start();

require_once '../database/connection.php';

$insert= $db->prepare("INSERT INTO user(Card_ID,Dept_ID,Role_ID,Full_Name,Address,DOB,Blood_Group)
                                      VALUE(:ID,:Dept,:Roles,:FName,:Addres,:DOB,:BG)");


 if(  $insert->execute([
	'ID' => $_POST['Card_ID'],
 	'Dept' => $_SESSION['deppp'],
  'Roles' => $_SESSION['rolee'],
  'FName'=> $_POST['FullName'],
   'Addres' => $_POST['address'],
   'DOB' => $_POST['DOB'] ,
  'BG'=> $_POST['BloodGroup']
 ]) ){
  header("Location: ../Pages/list.php");
}else{
  echo "ERROR!";

}

?>


</body>
</html>