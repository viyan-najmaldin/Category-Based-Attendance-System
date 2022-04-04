<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css" />
    <title>CBAS</title>


</head>
<body >
   


<div class='bgg'>
 
<!-- the menu  -->
<div class= 'menu d-flex justify-content-between p-3'>
 

<!-- menu title and the icon  -->
<div>
 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi yel-col pb-2 bi-calendar2-check" viewBox="0 0 16 16">
  <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
</svg>
<h2 class='d-inline text-white p-2'><span class='yel-col'>CB</span>AS</h2>
</div>




<!-- three pages home ,about abd conract us 
which are three button and only the contains will change   -->
<div class=' font-ss' >
<nav >
  <div class="nav nav-tabs  " id="nav-tab" role="tablist">
  <button class="text-white  nav-link bgg active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="text-white nav-link bgg" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="false">About</button>
    <button class="text-white nav-link bgg" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact Us</button>
  </div>
</nav>

  
<!-- the home page -->
<div class="tab-content" id="nav-home">

  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
       <div class='text-center'>
 <br><br>
  <!-- contain of home page  -->
  <h1 class='yel-col fs-1'>CBAS</h1>
  <p class=' text-white pb-3 font-ss'>Category Based Attendance System</p>
  <img style="width: 20rem;"  src="https://i.pinimg.com/originals/49/e7/80/49e7800d6828dbf1abbb89c9f42a1f75.png" alt="">
  </div>
         </div>


         <!-- about page  -->
  <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
       <!-- contain about page  -->
     <div class='text-center text-white font-ss'>
      <br><br>
       <p>A <span class='yel-col'>Project</span> will be Submitted to the Department</p>
       <p>In the Partial Fulfillment of the Requirement for the Dgree of </p>
       <p>Bachelor of Science-BSc- in <span class='yel-col'>Software and Informatics Engineering</span></p>
     <p class='py-3'>Member 1, Member 2, Member 3, Member 4</p>
     <img style="width: 17rem;" src="https://sites.google.com/a/su.edu.krd/sarwa-dashti/_/rsrc/1466493608102/home/SUE.GIF" alt="">
     
      </div>

  </div>

    <!-- contact us page  -->
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
   
  <!-- contain contact us page  -->
     <div class='text-white d-grid gap-3'>
    <br><br>
    <div class='p-2'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mx-2 yel-col bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg> example@gmail.com</div>

    <div class='p-2'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mx-2 yel-col bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> +964 751 181 37 05</div>

    <div class='p-2'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mx-2 yel-col bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg> Erbil, Salahaddin University</div>
  </div>


  </div>
</div>

</div>


        <form action="login.php" method="post">
        <button type="submit" class="bgy btn px-5 py-2 font-ss mb-3 rounded-pill">Login</button>
        </form>
       

</div>
<br><br>
</div>


<?php include('Pages/footer.php') ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
  
  localStorage.clear();

    </script>
</body>
</html>