<?php 
require_once 'php_action/db_connect.php';

// session_start();
?>


<?php

  
      $email = $_POST['email'];
      $password = $_POST['password'];
   
      $sq = "SELECT * FROM `users` WHERE `email`= '$email' ";
      $result = mysqli_query($connect, $sq);
      $num = mysqli_num_rows($result);
      
      if($num ==1){

         echo '<script type="text/javascript"> alert("This Email is Already Used!"); window.location = "index.php"; </script>';        
         // header('location: index.php');
      }
      else{
         $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
         if($connect->query($sql)){
            // echo "Thanks For Apply";
            header('location: welcome.php');
         }
         else{
            echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
         }
      }

   

?>
