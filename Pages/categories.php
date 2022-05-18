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
require_once '../database/connection.php';


// if (isset($_COOKIE['username'])) {
//     $username = $_COOKIE['username'];
   
$departmet=$_SESSION["dep"];

?>
   



   
<div class=' bgg'>

<div class= 'menu d-flex justify-content-between'>
 

 <div class ='mx-4 mt-3'>
    <img src="https://raw.githubusercontent.com/Blacksuan19/Attendance-System/master/src/resources/window.png" width="60" height="60" alt="">
    
    <span class='d-inline p-2'>
            <h3 class='d-inline p-2 yel-col ' >Category Based Attendance System</h3>
            <div style='margin-left:15%; margin-top:-3%;' class='yel-col font-ss'><?php echo $_SESSION["username"];  ?></div>
     </span>
 </div>

   <form action="../logout.php" method="post">
        <button type="submit" class="bgy btn px-5 mx-4 mt-3 py-2 font-ss  rounded-pill">Log Out</button>
    </form>

    </div>



           <div class=' d-flex p-5 border-0 m-2 rounded box1 cat-box flex-column'>
             
              <h2 class="text-center ">Departments <?php echo $_SESSION["dep"]; ?></h2> <br><br>
    
              <div class="text-center mb-5 ">
             
              <form method="post">
                       
      
              <div class="row mb-4">
        
                <button type="submit" class="col dep bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill"  name='role' value='Student' >STUDENTS </button>
                <button type="submit"class="col dep  bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill" name='role' value='Teacher'>TEACHERS </button>
                <button type="submit"class="col dep  bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill" name='role' value='Employee'>STAFF </button>    
              </div>

       </form>
         
    </div>       
          
<br><br>

           
               <button class='back' onclick="back()"> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi back-i bi-arrow-left-circle" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                      </svg>
                   </button>
      
</div>
  
           

      </div>





</div>

<script>function back(){
        location.replace("./departments.php");
    }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
  localStorage.clear();

</script>


</body>
</html>

<?php 



         if(array_key_exists('role', $_POST)) {
          $role= $_POST['role'];
          $_SESSION["role"]=$role;          
          goo();
          }


          function goo(){
            ?>
            <script>location.replace("./list.php");  </script>
            <?php 
          }

?>
