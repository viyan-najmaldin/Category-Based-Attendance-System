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

require_once '../database/connection.php';
$username= $_SESSION["username"];
$password= $_SESSION["pass"];

$read = $db->prepare("SELECT *
FROM user AS aa
JOIN attendance AS bb ON bb.Card_ID = aa.Card_ID
JOIN roles AS cc ON cc.Role_ID = aa.Role_ID 
WHERE aa.Full_Name = '$username' && aa.Card_ID= '$password'
GROUP BY aa.Card_ID");
$read->execute();

$users= $read->fetchAll(PDO::FETCH_ASSOC);
  

 foreach($users as $user  ){
    // setcookie("username", $username, time()+5);
    

?>

<div class=' bgg'>

<div class= 'menu d-flex justify-content-between'>
 

 <div class ='mx-4 mt-3'>
    <img src="https://raw.githubusercontent.com/Blacksuan19/Attendance-System/master/src/resources/window.png" width="60" height="60" alt="">
    
    <span class='d-inline p-2'>
            <h3 class='d-inline p-2 yel-col font-ss' >Category Based Attendance System</h3>
            <div style='margin-left:22%; margin-top:-3%;' class='yel-col  font-ss'><?php echo $user['Full_Name'];} ?></div>
     </span>
 </div>

 <form action="../logout.php" >
        <button type="submit" class="bgy btn px-5 mx-5 mt-3 py-2 font-ss  rounded-pill">Log Out</button>
    </form>

</div>



           <div class=' d-flex p-5 border-0 m-2 rounded box1 flex-column'>
             
              <h2 class="text-center ">DEPARTMENTS  </h2> <br><br>
    
              <div class="text-center mb-5 ">
             
      <form method="post" >
                       
      
      <div class="row mb-4">
      
                <button type="submit" class="col dep bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill" name="dep"  value='Software' >SOFTWARE </button>
                <button type="submit"class="col dep  bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill" name='dep' value='Architecture'>ARCHITECTURE </button>
                <button type="submit"class="col dep  bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill" name='dep' value='Civil'>CIVIL </button>    
        </div>

         <div class="row mb-4">

              <button type="submit" class="col dep bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill" name='dep'  value='Electrical' >ELECTRICAL </button>
                <button type="submit"class="col dep  bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill"name='dep'  value='Aams&water'>DAM & WATER </button>
                <button type="submit"class="col dep  bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill"name='dep'  value='Mechanics'>MECHANICS</button>

              </div>
              <div class="row mb-4">

              <button type="submit" class="col dep bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill"name='dep'  value='Geomatics'>GEOMATICS</button>
                <button type="submit"class="col dep  bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill"name='dep'   value='Petrochemica'>PETROCHEMICAL</button>
                <button type="submit"class="col dep  bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill" >OTHERS </button>

              </div>
       </form>
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
    <script>
  localStorage.clear();

    </script>
</body>
</html>

<?php  



         if(array_key_exists('dep', $_POST)) {
          $department= $_POST['dep'];
$_SESSION["dep"]=$department; 
    go();
          }
 
          function go(){
            ?>
            <script>location.replace("./categories.php");  </script>
            <?php 
          }

    ?>