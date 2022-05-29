<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css" />
    <title>Login</title>
</head>
<body>

      <div class=' bgg'>

      
<br><br>
      <div class='text-center'>
 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi yel-col pb-2 bi-calendar2-check" viewBox="0 0 16 16">
  <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
</svg>
<h1 class='d-inline text-white'><span class='yel-col'>Category Based</span> Attendance System</h1>
</div>

<?php


function startsWith ($string, $startString) 
{ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
} 
$url='Pages/departments.php'

?>

           <form action="" method="post"  class=' d-flex p-5 border-0 bg-white rounded box flex-column'>
                 <input name="name" class='input-bgg form-control p-4 m-2' id='inputUser' type="text" placeholder='USERNAME' required
                  autofocus>
                 <input name="id" class=' input-bgg  form-control p-4 m-2' id='inputPassword' type="password" placeholder='CARD NUMBER' required
                  autofocus>

                  <!-- <select class="select-role" aria-label="Default select example">
                    <option selected>Select Your Roles</option>
                   <option value="adm">Admin</option>
                   <option value="user">Student</option>
                   <option value="user">Teacher</option>
                   <option value="user">employee</option>
                   <option value="user">Others</option>
                  </select> -->
         
                  <div class='null-input mt-3 mx-3 text-danger '></div>         

                 <div class='d-flex justify-content-center'>
                     
                 <button  class="cancel-btn btn my-5 m-3  p-2 px-3 rounded-pill"><a class="cancel-link" href="./index.php">Cancel</a> </button>
                 <button id='btn' name='submit' type="submit" onClick='loginn()' id="signinBtn" class="signinBtn bgy btn m-5 my-5  p-2 px-4 rounded-pill">Login</button>
                  
      </div>
      
           </form>
  
           <br><br>

  
      </div>


   
<?php 


include('Pages/footer.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- <script src='./js/login.js' ></script> -->
</body>
</html>

<?php  


?>


<?php 
   session_start();
       if(array_key_exists('id', $_POST)) {
            $username= $_POST['name'];
            $_SESSION["username"]=$username;
            $password= $_POST['id'];
            $_SESSION["pass"]=$password;
    checkUser();
          }

          function checkUser(){
         
         if(substr($_SESSION["pass"],0,3) =='adm') { ?>
                  <script>location.replace("./Pages/admin_page.php");  </script>
         <?php 
       }   else { ?>
          <script>location.replace("./Pages/attendance.php");  </script>
          <?php 
            }  } 
          ?>
         
         
         
     

