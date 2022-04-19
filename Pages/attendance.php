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
require_once '../database/connection.php';
$username= $_POST['name'];
$password= $_POST['id'];
$read = $db->prepare("SELECT *
FROM user AS aa
JOIN attendance AS bb ON bb.Card_ID = aa.Card_ID
JOIN roles AS cc ON cc.Role_ID = aa.Role_ID 
WHERE aa.Full_Name = '$username' && aa.Card_ID= '$password'
GROUP BY aa.Card_ID");
$read->execute();

$users= $read->fetchAll(PDO::FETCH_ASSOC);
  

 foreach($users as $user  ){







?>

<div class=' bgg'>

<div class= 'menu d-flex justify-content-between p-3'>
 

 <div class ='mx-4 mt-3'>
  <img src="https://raw.githubusercontent.com/Blacksuan19/Attendance-System/master/src/resources/window.png" width="50" height="50" alt="">
 <h3 class='d-inline p-2'><span class='yel-col'>CB</span>AS</h3>
 </div>

 <form action="../index.php" method="post">
        <button type="submit" class="bgy btn px-5 mx-4 mt-3 py-2 font-ss  rounded-pill">Log Out</button>
        </form>

</div>



           <div class=' d-flex p-5 border-0 m-2 rounded box1 flex-column'>
           
           <div>
                  <div class="row">
                        <div class="col">Full Name : <?php echo $user['Full_Name']; ?></div>
                        <div class="col">Address : <?php echo $user['Address']; ?></div>
                        <div class="col">Date :<?php echo $user['Time']; ?></div>
                  </div>

                  <div class="row">
                        <div class="col">Card ID :<?php echo $user['Card_ID']; ?></div>
                        <div class="col">Role :<?php echo $user['Role_Name'];  ?></div>
                        <div class="col">Blood Group : <?php echo $user['Blood_Group'];   }?></div>
                  </div>

           </div>
<br><br>



           <table class="table">
               <thead>
                
               
               
               
               
               
               
                 <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Time In</th>
                    <th scope="col">Time Out</th>
                    
                   
                 </tr>
               </thead>
                        
               <tbody>




               <tr>
                    <td scope="col">User ID</td>
                    <td scope="col">User ID</td>
                    <td scope="col">User ID</td>
                    

               </tr>

                 

                
                 







               </tbody>

           </table>   

      
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