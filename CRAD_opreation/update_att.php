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
$username= $_SESSION["username"];
$password= $_SESSION["pass"];

if(isset($_GET['cardd'])){
  $xx = $_GET['cardd'];
  
$read = $db->prepare("SELECT *
FROM user 
WHERE Card_ID='$xx'");
$read->execute();

$users= $read->fetchAll(PDO::FETCH_ASSOC);
  

 foreach($users as $user  ){
    // setcookie("username", $username, time()+5);
    

?>

<div class=' bgg'>

<div class= 'menu d-flex justify-content-between '>
 

 <div class ='mx-4 mt-3'>
    <img src="https://raw.githubusercontent.com/Blacksuan19/Attendance-System/master/src/resources/window.png" width="60" height="60" alt="">
    
    <span class='d-inline p-2'>
            <h3 class='d-inline p-2 yel-col font-ss' >Category Based Attendance System</h3>
            <div style='margin-left:22%; margin-top:-3%;' class='yel-col  font-ss'><?php echo $_SESSION['username'];?></div>
     </span>
 </div>

 <form action="../logout.php" >
        <button type="submit" class="bgy btn px-5 mx-4 mt-3 py-2 font-ss rounded-pill ">Log Out</button>
    </form>

</div>



           <div class=' d-flex p-5 border-0 rounded box2 flex-column mx-2'>
             
           <h2 class="text-center ">Departments <?php echo $_SESSION["dep"]; ?> - Update User</h2> <br><br>
              
    
              <div class="text-center mb-5 ">
      <form method="post" action="./edits.php"  class='mx-5'>
                       
         <div class="row">  
         <input name="Card_ID" value="<?php echo $user['Card_ID'];?>" class=' input-bgg form-control p-4 m-2' id='inputUser' type="text" placeholder='CARD NUMBER' required
                  autofocus>           
         </div>

         <div class="row">
                <input name="FullName"  value="<?php echo $user['Full_Name'];?>"  class=' input-bgg form-control p-4 m-2' id='inputUser' type="text" placeholder='FULL NAME' required
                  autofocus>
         </div>

         <div class="row">
         <input name="BloodGroup" value="<?php echo $user['Blood_Group'];?>" class='  input-bgg form-control p-4 m-2' id='inputUser' type="text" placeholder='BLOOD GROUP' required
                  autofocus>
         </div>
                  <div class="row">       
              <input name="address" value="<?php echo $user['Address'];?>" class='  input-bgg form-control p-4 m-2' id='inputUser' type="text" placeholder='ADDRESS' required
                  autofocus>
         </div>

                <div class="row mb-4">
             <input name="DOB"  value="<?php echo $user['DOB']; ?>" type='date' class=' input-bgg form-control p-4 m-2 ' id='inputUser' type="text" placeholder='DATE OF BIRTHDAY' required
            autofocus>
        </div>

             <div class="row d-flex justify-content-end">
             <button onclick="cancel()" class='btn ml-3 px-3 p-2 text-danger rounded-pill'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Cancel</button> 
          
<form action="" method="post">

<button class='btn ml-3 p-2 px-4 bgy rounded-pill'  type="submit">Save</button>
               </form>
             </div>

       </form>
       
         </div>       
          
        </div>
  
           <br><br> 
           
           
      </div>


</div>

<?php 
 }
switch($_SESSION['dep']){
   
    case('Software'):
      $_SESSION['deppp']='soft442158';
      break;
    case('Petrochemica'):
      $_SESSION['deppp']='petr551426';
      break;
      
    case('Mechanics'):
      $_SESSION['deppp']='mech851245';
      break;

    case('Aams&water'):
      $_SESSION['deppp']='dams012456';
      break;

    case('Architecture'):
      $_SESSION['deppp']='arch125489';
      break;

    case('Geomatics'):
      $_SESSION['deppp']='geom123541';
      break;
    
    case('Civil'):
      $_SESSION['deppp']='civi334523';
      break;

    case('Electrical'):
      $_SESSION['deppp']='elec102548';
      break;


}


switch($_SESSION['role']){

    case('Employee'):
      
      $_SESSION['rolee']='4';
      break;

    case('Teacher'):
  $_SESSION['rolee']='3';
      break;

    case('Student'):
      $_SESSION['rolee']='1';
       break;


}

}
?>




<script>
      function cancel(){
        location.replace("../Pages/list.php");
    }
 </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
  localStorage.clear();

    </script>
</body>
</html>

<?php  



         if(array_key_exists('dep', $_POST)) {
          $department= $_POST['dep'];
$_SESSION["dep"]=$department; 
    goo();
          }


          function goo(){
            header("location: ./categories.php");
          }



    ?>