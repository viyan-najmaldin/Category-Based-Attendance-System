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
require_once '../database/connection.php';
session_start();
$username=$_SESSION["username"];
$password=$_SESSION["pass"];

$read = $db->prepare("SELECT *
FROM user AS aa
JOIN attendance AS bb ON bb.Card_ID = aa.Card_ID
JOIN roles AS cc ON cc.Role_ID = aa.Role_ID 
JOIN leaves AS dd ON dd.Leave_ID = bb.Leave_ID 
WHERE aa.Full_Name = '$username' && aa.Card_ID= '$password'
GROUP BY aa.Card_ID");
$read->execute();

$users= $read->fetchAll(PDO::FETCH_ASSOC);
  
 foreach($users as $user  ){

?>

<div class=' bgg'>

<div class= 'menu d-flex justify-content-between p-3'>
 

 <div class ='mx-4 mt-3'>
    <img src="https://raw.githubusercontent.com/Blacksuan19/Attendance-System/master/src/resources/window.png" width="60" height="60" alt="">
    
    <span class='d-inline p-2'>
            <h3 class='d-inline p-2 yel-col ' >Category Based Attendance System</h3>
            <div style='margin-left:15%; margin-top:-3%;' class='yel-col font-ss'><?php echo $user['Full_Name']; ?></div>
     </span>
 </div>

   <form action="../logout.php">
        <button type="submit" class="bgy btn px-5 mx-4 mt-3 py-2 font-ss  rounded-pill">Log Out</button>
    </form>

</div>



           <div class='d-flex p-5 border-0 m-2 rounded box1 flex-column' >
           
           


           <div>
                  <div class="row p-2 font-ss">
                        <div class="col"><span class='bold-text'>Full Name :</span>  <?php echo $user['Full_Name']; ?></div>
                        <div class="col"><span class='bold-text'>Address :</span> <?php echo $user['Address']; ?></div>
                        <div class="col"><span class='bold-text'>Date :</span> <?php echo date("Y/m/d") . "<br>"?></div>
                  </div>

                  <div class="row p-2 font-ss">
                        <div class="col"><span class='bold-text'>Card ID :</span> <?php echo $user['Card_ID']; ?></div>
                        <div class="col"><span class='bold-text'>Role :</span><?php echo $user['Role_Name'];  ?></div>
                        <div class="col"><span class='bold-text'>Blood Group :</span> <?php echo $user['Blood_Group']; }  ?></div>
                  </div>

           </div>
<br>




           <table class="table">
               
                 <tr class='t-shape'>
                    <th scope="col">Date</th>
                    <th scope="col">Time In</th>
                    <th scope="col">Time Out</th>
                    <th scope="col">No hours</th>
                    

                    
                   
                 </tr>
               
                        
               

               <?php    
$start = date('Y-m-d', strtotime($_POST["start"]));
$end = date('Y-m-d', strtotime($_POST["end"]));
               
$read1 = $db->prepare("SELECT *
FROM user AS aa
JOIN attendance AS bb ON bb.Card_ID = aa.Card_ID
JOIN roles AS cc ON cc.Role_ID = aa.Role_ID 
JOIN leaves AS dd ON dd.Leave_ID = bb.Leave_ID 
WHERE aa.Full_Name = '$username' && aa.Card_ID= '$password'  && bb.Time between '$start' and '$end'
");
$read1->execute();

$users1= $read1->fetchAll(PDO::FETCH_ASSOC);
  
foreach($users1 as $us  ){

                ?>    
             
                <tr class='data-row'>
               
                    <td scope="col"><?php echo $us['Time']; ?></td>
                    <td scope="col"><?php echo $us['Time_In']; ?></td>
                    <td scope="col"><?php echo $us['Time_Out']; ?></td>
                    <td scope="col"><?php 
                    
                    $t1 =new DateTime($us['Time_In']);

                    $t2 = new DateTime($us['Time_Out']);
                    
                    $no_of_hours;
                    
                    $interval = $t1->diff($t2);
                    $diffInSeconds = $interval->s;
                    $diffInMinutes = $interval->s;
                    $diffInHours   = $interval->h;
                    
                    if ( $t1 <= new DateTime("15:00:00")) {
                    
                        $no_of_hours = print( $diffInHours .' hours');
                    } else {
                      echo  $no_of_hours = 0;
                    }

         
// ?>  
                     
                    
                     </td>

               </tr>
               <?php }
               ?>
                 

                
                 






               

           </table>
           <hr>   
           <div ><span class='font-ss bold-text'>No of days : </span> 
           
           <span class='font-ss'>
           <?php 
          
 $read2 = $db->prepare("SELECT COUNT(*)
FROM user AS aa
JOIN attendance AS bb ON bb.Card_ID = aa.Card_ID
JOIN roles AS cc ON cc.Role_ID = aa.Role_ID 
JOIN leaves AS dd ON dd.Leave_ID = bb.Leave_ID 
WHERE aa.Full_Name = '$username' && aa.Card_ID= '$password'  && bb.Time between '$start' and '$end'
GROUP BY aa.Card_ID");
 $read2->execute();

 $users2= $read2->fetchAll(PDO::FETCH_ASSOC);
  
 foreach($users2 as $uss  ){

   echo($uss['COUNT(*)']);  }
            
            ?>
</span>
           </div>

      <button class='back' onclick="back()"> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi back-i bi-arrow-left-circle" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                      </svg>
                   </button>
          </div>
  
           <br><br>

  
      </div>

      



</div>


<script>function back(){
        location.replace("./admin_page.php");
    }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="../js/login.js"></script> 
    <script>
  
  console.log(localStorage.getItem("username").value)
  //localStorage.clear();

 

    </script>
</body>
</html>