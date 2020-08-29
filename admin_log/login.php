<?php
   session_start();
   require_once 'db_connect.php';  
   
   if(!isset($_SESSION['username'])){
      header('location:index.php');
   }
?>

<?php
   // require_once 'db_connect.php';

   if(isset($_POST['submit'])){
      $email = $_POST['email'];   //changes email to username
      $password = $_POST['password'];

      // if($email==""){
      //    echo"Enter Your Email";
      // }
      $sq = "SELECT * FROM `admin` WHERE username= '$email' && password = '$password' ";
      $result = mysqli_query($connect, $sq);
      $num = mysqli_num_rows($result);
      if($num ==1){
         $_SESSION['username'] = $email;
         header('location:dashboard.php');

         // header('location: index.php');
      }
      else{
         
         header('location:index.php');
         echo "Login Failed";
      }
   }
   

?>