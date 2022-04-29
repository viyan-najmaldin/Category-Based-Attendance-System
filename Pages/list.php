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

$role=$_SESSION["role"];

// setcookie("role", $role, time()+5);
$departmet=$_SESSION["dep"];
$username=$_SESSION["username"];

// if (isset($_COOKIE['username'])) {
//     $username = $_COOKIE['username'];
    
//     if (isset($_COOKIE['dept'])) {
//     $departmet = $_COOKIE['dept'];
   
  

require_once '../database/connection.php';
$read = $db->prepare("SELECT * FROM user 
JOIN department ON department.Dept_ID=user.Dept_ID
JOIN roles ON roles.Role_ID = user.role_ID 
WHERE department.Name='$departmet' && roles.Role_Name='$role'
GROUP BY user.Card_ID
ORDER BY Full_Name ASC");
    $read->execute();

$users= $read->fetchAll(PDO::FETCH_ASSOC);


 
        

    
?>

<div class=' bgg'>
        <div class= 'menu d-flex justify-content-between'>
 


 <div class ='mx-4 mt-3'>
    <img src="https://raw.githubusercontent.com/Blacksuan19/Attendance-System/master/src/resources/window.png" width="60" height="60" alt="">
    
    <span class='d-inline p-2'>
            <h3 class='d-inline p-2 yel-col ' >Category Based Attendance System</h3>
            <div style='margin-left:15%; margin-top:-3%;' class='yel-col'><?php echo $_SESSION["username"];  ?></div>
     </span>
 </div>

      



   <form action="../index.php" >
        <button type="submit" class="bgy btn px-5 mx-4 mt-3 py-2 font-ss  rounded-pill">Log Out</button>
    </form>

    </div>





           <div class=' d-flex p-5 border-0 m-2 rounded box1 flex-column'>



             
             <h2 class="text-center ">department <?php echo $_SESSION["dep"]; ?> ~ <?php echo $_SESSION["role"]; ?>s</h2> <br><br>
            
           
           
             <div class='d-flex justify-content-between pb-4'>

    <div class="mr-5">
        <form action="search_User.php" method="post"  class=''>
		              <input type="text"	placeholder="Search by Name"	name="search" class='searchh white-text px-5  mb-3 py-2 font-ss  rounded-pil  rounded'  required>
                  <button type="submit" name="submit" class='back xnay  font-ss  rounded-pil'><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                       <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                         </svg>
                  </button>
	        </form>
      </div>
      

      


             <div class="ml-5">

             <button class='back  mr-3' onclick="add()"> 
             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi xnay mt-2 bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
             </svg>
        </button>

             </div>
          
             

    
</div>
             
            



        <div class=" mb-5 ">
            <form  method="post">
                <table class='table'>
                     <tr class='t-shape'>
                         <th scope="col">Full Name</th>
                         <th scope="col">Address</th>
                         <th scope="col">Day of birthday</th>
                         <th scope="col">Blood Group</th>
                         <th> </th>
                     </tr>            
            
            <?php    foreach($users as $user  ){

               
                ?>    
             
                <tr class='data-row'>

                            <td><?php echo $user['Full_Name']; ?></td>
                            <td><?php echo $user['Address']; ?></td>
                            <td><?php echo $user['DOB']; ?></td>
                            <td><?php echo $user['Blood_Group']; ?></td>
                            <td>
                                         <a href="../attendance2.php?cardd=<?php echo $user['Card_ID']; ?>" class='pl-2'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-dark bi bi-eye-fill" viewBox="0 0 16 16">
                                             <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                             <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg></a>  
                                        <a href="../CRAD_opreation/update_att.php?cardd=<?php echo $user['Card_ID']; ?>" class='pl-2'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi text-dark bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg></a>  
                                        <a href="../CRAD_opreation/delete_att.php?cardd=<?php echo $user['Card_ID']; ?>" class='pl-2'> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill text-danger" viewBox="0 0 16 16">
                                          <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg></a>
                                        
                               
                            </td>
                      
                     </tr>  
          <?php       }?>

                </table>
            </form>
      
         </div>
  
           <br><br>

                       <button class='back' onclick="back()"> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi back-i bi-arrow-left-circle" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                      </svg>
                   </button>
  
      </div>
<br><br>


</div>


<script>
      function back(){
        location.replace("./categories.php");
    }
    function add(){
        location.replace("../CRAD_opreation/add_Attendance.php");
    }

    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
  localStorage.clear();

  
    </script>
</body>
</html>


<?php   



