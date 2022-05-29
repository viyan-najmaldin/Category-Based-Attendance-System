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

<div class='d-flex justify-content-between px-2 pb-4 '>


        <div class='mt-3 '>
            <form action="../Pages/attendance.php" method="post">
              <button class='py-2 px-4 bgg text-white ' type="submit">Daily Attendance</button>
            </form>
        </div>


<div class="mr-5 ">
    <form action="search_date.php" method="post"  class='px-3 pt-2'>
            
           From   <input type="date"	placeholder="From"	name="start" class='date gray-text px-5 py-1  mb-3  font-ss  rounded-pil  rounded'  required>
             To <input type="date"	placeholder="To"	name="end" class='date gray-text px-5  mb-3 py-1  font-ss  rounded-pil  rounded'  required>
             <button type="submit" class='back xnay'>Search </button>
      </form>
  </div>
        
</div>


           <table class="table">
               
                 <tr class='t-shape'>
                    <th scope="col">Mounth</th>
                    <th scope="col">Total Attendances</th>
                    <th scope="col">Total Absences</th>
                    
                    

                    
                   
                 </tr>
               
                        
               

               <?php    

               
$read1 = $db->prepare("SELECT DISTINCT CONCAT(YEAR(Time),'-' ,MONTH(Time)) As timee, COUNT(Time),Time,MONTH(Time),YEAR(Time) 
FROM user AS aa
 JOIN attendance AS bb ON bb.Card_ID = aa.Card_ID 
 WHERE aa.Full_Name = '$username' 
 GROUP BY MONTH(Time)
");
$read1->execute();

$users1= $read1->fetchAll(PDO::FETCH_ASSOC);
  
foreach($users1 as $us  ){


  
       ?>     
 <div class="col">
                      
   
             
                <tr class='data-row'>
               
                    <td scope="col"><?php echo $us['timee']; ?></td>
                    <td scope="col"><?php echo $us['COUNT(Time)']; ?></td>
                    <td scope="col"><?php echo (abs(((cal_days_in_month(CAL_GREGORIAN,$us['MONTH(Time)'],$us['YEAR(Time)'])-8)-$us['COUNT(Time)']))); ?></td>
                    
                    
                     </td>

               </tr>
               <?php }
               ?>
                 

                
                 






               

           </table>
           <hr>   
      

      
          </div>
  
           <br><br>

  
      </div>





</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="../js/login.js"></script> 
    <script>
  
  console.log(localStorage.getItem("username").value)
  //localStorage.clear();

 

    </script>
</body>
</html>