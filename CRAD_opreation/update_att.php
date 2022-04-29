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

<div class= 'menu d-flex justify-content-between '>
 

 <div class ='mx-4 mt-3'>
    <img src="https://raw.githubusercontent.com/Blacksuan19/Attendance-System/master/src/resources/window.png" width="60" height="60" alt="">
    
    <span class='d-inline p-2'>
            <h3 class='d-inline p-2 yel-col font-ss' >Category Based Attendance System</h3>
            <div style='margin-left:22%; margin-top:-3%;' class='yel-col  font-ss'><?php echo $user['Full_Name'];} ?></div>
     </span>
 </div>

   <form action="../index.php">
        <button type="submit" class="bgy btn px-5 mx-4 mt-3 py-2 font-ss rounded-pill ">Log Out</button>
    </form>

</div>



           <div class=' d-flex p-5 border-0 rounded box2 flex-column mx-2'>
             
           <h2 class="text-center ">Departments <?php echo $_SESSION["dep"]; ?> - Update User</h2> <br><br>
              
    
              <div class="text-center mb-5 ">
             
      <form method="post" class='mx-5'>
                       
         <div class="row">  
         <input name="card" class=' input-bgg form-control p-4 m-2' id='inputUser' type="text" placeholder='CARD NUMBER' required
                  autofocus>           
         </div>

         <div class="row">
                <input name="fullname" class=' input-bgg form-control p-4 m-2' id='inputUser' type="text" placeholder='FULL NAME' required
                  autofocus>
         </div>

         <div class="row">
         <input name="bgroup" class='  input-bgg form-control p-4 m-2' id='inputUser' type="text" placeholder='BLOOD GROUP' required
                  autofocus>
         </div>
                  <div class="row">       
              <input name="address" class='  input-bgg form-control p-4 m-2' id='inputUser' type="text" placeholder='ADDRESS' required
                  autofocus>
         </div>

                <div class="row mb-4">
             <input name="DOBB" type='date' class=' input-bgg form-control p-4 m-2 ' id='inputUser' type="text" placeholder='DATE OF BIRTHDAY' required
            autofocus>
        </div>
       
        <div class="row d-flex justify-content-end">
             <button onclick="cancel()" type="submit" class='btn ml-3 px-3 p-2 text-danger rounded-pill'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Cancel</button> 
             <form action="" method="post">
<button class='btn ml-3 p-2 px-3 bgy rounded-pill'  type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg> Done</button>
               </form>
             </div>


       </form>
       
         </div>       
          
           </div>
  
           <br><br> 
           
           
      </div>


</div>



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