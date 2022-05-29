<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css" />

    <title>Document</title>
</head>
<body class='bgg'>
<?php 
session_start();

$search = $_POST['search'];


$role=$_SESSION["role"];
$departmet=$_SESSION["dep"];
$username=$_SESSION["username"];


require_once '../database/connection.php';
$read = $db->prepare("SELECT * FROM user 
JOIN department ON department.Dept_ID=user.Dept_ID
JOIN roles ON roles.Role_ID = user.role_ID 
WHERE department.Name='$departmet' && roles.Role_Name='$role' && user.Full_Name like '%$search%'
GROUP BY user.Card_ID
");
    $read->execute();

$users= $read->fetchAll(PDO::FETCH_ASSOC);


 
        

    
?>

<div class=' bgg'>
        <div class= 'menu d-flex justify-content-between p-3'>
 


 <div class ='mx-4 mt-3'>
    <img src="https://raw.githubusercontent.com/Blacksuan19/Attendance-System/master/src/resources/window.png" width="60" height="60" alt="">
    
    <span class='d-inline p-2'>
            <h3 class='d-inline p-2 yel-col ' >Category Based Attendance System</h3>
            <div style='margin-left:15%; margin-top:-3%;' class='yel-col'><?php echo $_SESSION["username"];  ?></div>
     </span>
 </div>

      



   <form action="../logout.php" >
        <button type="submit" class="bgy btn px-5 mx-4 mt-3 py-2 font-ss  rounded-pill">Log Out</button>
    </form>

    </div>





           <div class=' d-flex p-5 border-0 m-2 rounded box1 flex-column'>

             
             <h2 class="text-center ">department <?php echo $_SESSION["dep"]; ?> ~ <?php echo $_SESSION["role"]; ?>s</h2> <br><br>
   
        <div class=" mb-5 ">
            <form  method="post">
                <table class='table'>
                     <tr class='t-shape'>
                         <th scope="col">Full Name</th>
                         <th scope="col">Address</th>
                         <th scope="col">Day of birthday</th>
                         <th scope="col">Blood Group</th>
                         <th> </th>
                     </tr>            
            
            <?php    foreach($users as $user  ){

               
                ?>    
             
                <tr class='data-row'>

                            <td><?php echo $user['Full_Name']; ?></td>
                            <td><?php echo $user['Address']; ?></td>
                            <td><?php echo $user['DOB']; ?></td>
                            <td><?php echo $user['Blood_Group']; ?></td>
                            <td><?php    $xx=$user['Card_ID']; ?><button type="submit" class='show' name='xx' value='<?php  $user['Card_ID']; ?>'>  
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                             <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                             <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg> show
                             </button></td>
                      
                     </tr>  
          <?php       }?>

                </table>
            </form>
      
         </div>
  
           <br><br>

                       <button class='back' onclick="back()"> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi back-i bi-arrow-left-circle" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                      </svg>
                   </button>
  
      </div>
<br><br>


</div>


<script>function back(){
        location.replace("./list.php");
    }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
  localStorage.clear();

  
    </script>
</body>
</html>


<?php   



if(array_key_exists('xx', $_POST)) {
  $cardID=$user['Card_ID']; 
$_SESSION["xx"]=$cardID; 
goo();
    }
   
    

    function goo(){
        ?>
        <script> location.replace("./attendance2.php"); </script>
        
        <?php
         
          
      }

?>