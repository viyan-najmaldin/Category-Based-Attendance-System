
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

$update= $db->prepare('UPDATE user SET 

Full_Name = :FName,
Address = :Addres,
DOB =:DOB ,
Blood_Group = :BG

WHERE Card_ID = :ID');
                                      


 if(  $update->execute([
	
 'FName'=> $_POST['FullName'],
   'Addres' => $_POST['address'],
   'DOB' => $_POST['DOB'] ,
  'BG'=> $_POST['BloodGroup'],
  'ID' => $_POST['Card_ID'],

 ]) ){
  header("Location: ../Pages/list.php");
}else{
  echo "ERROR!";

}

?>


</body>
</html>