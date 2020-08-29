<?php include 'includes/header.php'; ?>

<?php include 'includes/redirecto.php'; ?>

<body style="background-image: linear-gradient(to right, #e66465, #9198e5); background-color: #000000" > 
   <div class="main_div">
      <div class="container">

         <div class="row">
            <div class="caption col-md-12">
               <h1>Active Your System Today</h1>
            </div>
            <div class="active_paragraph col-md-12 col-sm-12 text-center">
               <p>Working On It!! Processing Your System</p>
            </div><br>
            <div style="color: #ffffff " font-size="22px" id="countdown">0</div>

         </div>
      </div>
      <div id="st_code"></div>

   
      <!-- <div id="countdown"></div> -->
   </div>

   <script>
         //Using setTimeout to execute a function after 5 seconds.     
         var timeleft = 4;
         var downloadTimer = setInterval(function(){
         if(timeleft <= 0){
            clearInterval(downloadTimer);
            document.getElementById("countdown").innerHTML = " ";
         } else {
            document.getElementById("countdown").innerHTML = timeleft + " ";
         }
         timeleft -= 1;
         }, 1000);

   </script>

<?php include 'includes/url.php'; ?>


</body>
</html>
