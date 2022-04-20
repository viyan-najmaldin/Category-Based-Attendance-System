<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css" />

    




    <title>Document</title>
</head>
<body class='bgg'>
<?php 
session_start();

$role=$_SESSION["role"];

$departmet=$_SESSION["dep"];
$username=$_SESSION["username"]; 

require_once '../database/connection.php';
$read = $db->prepare("SELECT * FROM user 
JOIN department ON department.Dept_ID=user.Dept_ID
JOIN roles ON roles.Role_ID = user.role_ID 
WHERE department.Name='$departmet' && roles.Role_Name='$role'
GROUP BY user.Card_ID
ORDER BY Full_Name ASC");
    $read->execute();

$users= $read->fetchAll(PDO::FETCH_ASSOC);

 
?>


<form  method="post">
 <table>
     <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>
     </tr>


      
     <?php    foreach($users as $user  ){

$t1 = $us['Time_In'];
$t2= $us['Time_Out'];

$no_of_hours;

$interval = $t1->diff($t2);
$diffInSeconds = $interval->s;
$diffInMinutes = $interval->i;
$diffInHours   = $interval->h;

if ($t1 >= new DateTime("08:00:00") && $t2 <= new DateTime("15:00:00")) {

    $no_of_hours = print('number of hours = ' . $diffInHours . ':' . $diffInMinutes . ':' . $diffInSeconds);
} else {
    $no_of_hours = 0;
}


     }             
?>    
     <tr>
         <dt></dt>
         <td>2222</td>
         <button type="submit"><td>okk</td></button>
     </tr>
 </table>



</form>

</body>
</html>

