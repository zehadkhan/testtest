<?php 
   session_start();
   
   
   include 'includes/header.php'; 
   include 'db_connect.php';
   // $exp_table = "users";
   // $query = "SELECT * FORM users Where '' ";
   $result = mysqli_query($connect,"SELECT * FROM users");
   
   if(!isset($_SESSION['username'])){
      header('location:index.php');
   }
   
?>


<body>

   <div class="container-fluid">
      <div class="row">

         <div class="left_side col-md-2 p-1 bg-dark text-white">
            <div class="left_side_inner text-center">
               <div class="p-1 p-3 mb-2 bg-danger text-white dashboard_head">
                   <h2>DashBoard</h2>
               </div>
               <div class="download_csv btn btn-outline-success">
                  <form action="includes/csv.php" method="POST">
                     <button type="submit">Download</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="dashboard_log col-md-8">

               <table align="center",  style="max-width:1000px; width:100%; line-height:30px;" class="table table-striped ">
                  <div class="email__head text-center table-active p-3 mb-2 bg-dark text-white">
                   <h2>Email Record</h2>
                  </div>
               <!-- <tr > 
                     <th><h2>Email Record</h2></th>  
               </tr> -->
               <tr class="p-3 mb-2 bg-primary text-white col-md-6">

                  <th>ID</th>
                  <th>Email</th>
                  <th>Password</th>
               </tr>

               <?php
                  while ($rows = mysqli_fetch_assoc($result)) 
                  {
               ?>
               <tr class="col-md-6">
                  <td><?php echo $rows['id']; ?> </td>
                  <td><?php echo $rows['email']; ?> </td>
                  <td><?php echo $rows['password']; ?> </td>

               </tr>
               <?php
                  }
               ?>
            </table>

         </div>

         <div class="logut_btn">
         <a class="btn btn-danger" href="logout.php">Logout</a>
         </div>
      </div>
   </div>
   
</body>
</html>