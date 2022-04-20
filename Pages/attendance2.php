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
$read = $db->prepare("SELECT * FROM user ");
$read->execute();

$users= $read->fetchAll(PDO::FETCH_OBJ);

?>

<div class=' bgg'>
        <div class= 'menu d-flex justify-content-between p-3'>
 

 <div class ='mx-4 mt-3'>
  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi yel-col pb-2 bi-calendar2-check" viewBox="0 0 16 16">
   <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
   <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
   <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
 </svg>
 <h3 class='d-inline text-white p-2'><span class='yel-col'>CB</span>AS</h3>
 </div>

 <form action="../index.php" method="post">
        <button type="submit" class="bgy btn px-5 mx-4 mt-3 py-2 font-ss  rounded-pill">Log Out</button>
        </form>

</div>



           <div class=' d-flex p-5 border-0 m-2 rounded box1 flex-column'>
             
                <div class=''><span class='yel-col'>Full Name :  </span> <?php  ?> </div>

<?php
$password='adm124158';
if(substr($password,0,3) =='adm'){   
  echo 'yesss';  }

   else  echo 'no';    ?>



<form action="../index.php" method="post">

<table class='table'>
       <tr>
         <th>aa</th>
         <th>bb</th>
         <th>cc </th>
       </tr>

       <tr>
          <td>1</td>
          <td>2</td>
          <td><button type="submit">3</button></td>

       </tr>

</table>

</form>


             
                 

      </div>
      
</div>
  
           <br><br>

  
      </div>





</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
  localStorage.clear();

 

    </script>
</body>
</html>