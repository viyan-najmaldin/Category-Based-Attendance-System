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



if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
 
    $departmet=$_POST['dep'];
   echo $departmet; 
    
    
    
   

    

        
        
     



    

?>
   




   
<div class=' bgg'>

<div class= 'menu d-flex justify-content-between p-3'>
 

 <div class ='mx-4 mt-3'>
    <img src="https://raw.githubusercontent.com/Blacksuan19/Attendance-System/master/src/resources/window.png" width="60" height="60" alt="">
    
    <span class='d-inline p-2'>
            <h3 class='d-inline p-2 yel-col ' >Category Based Attendance System</h3>
            <div style='margin-left:15%; margin-top:-3%;' class='yel-col'><?php echo $username; ?></div>
     </span>
 </div>

   <form action="../index.php" method="post">
        <button type="submit" class="bgy btn px-5 mx-4 mt-3 py-2 font-ss  rounded-pill">Log Out</button>
    </form>

    </div>



           <div class=' d-flex p-5 border-0 m-2 rounded box1 cat-box flex-column'>
             
              <h2 class="text-center ">DEPARTMENTS</h2> <br><br>
    
              <div class="text-center mb-5 ">
             
      <form action="list.php" method='post'>
                       
      
              <div class="row mb-4">
        
                <button type="submit" class="col dep bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill" name='student' >STUDENTS </button>
                <button type="submit"class="col dep  bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill" name='teacher'>TEACHERS </button>
                <button type="submit"class="col dep  bgg light-text btn px-5 mx-4 mt-3 py-3 font-ss  rounded-pill" name='employee'>STAFF </button>    
              </div>

       </form>
         
    </div>       
          

      
</div>
  
           <br><br><br>

  
      </div>





</div>
<?php } ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
  localStorage.clear();
</script>


</body>
</html>