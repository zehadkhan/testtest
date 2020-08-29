
<?php
session_start();

   include '../db_connect.php';

   if(!isset($_SESSION['username'])){
	header('location:../index.php');
}
	
   $exp_table = "users";
   
// Create and open new csv file
$csv  = $exp_table . "-" . date('d-m-Y-his') . '.csv';
$file = fopen($csv, 'w');

// Get the table
// $submit = $_POST['submit'];
if (!$mysqli_result = mysqli_query($connect, "SELECT * FROM {$exp_table}"))
    var_dump("Error: %s\n", $connect->error);

    // Get column names 
    while ($column = mysqli_fetch_field($mysqli_result)) {
        $column_names[] = $column->name;
    }
    
    // Write column names in csv file
    if (!fputcsv($file, $column_names))
        die('Can\'t write column names in csv file');
    
    // Get table rows
    while ($row = mysqli_fetch_row($mysqli_result)) {
        // Write table rows in csv files
        if (!fputcsv($file, $row))
            die('Can\'t write rows in csv file');
    }
       

fclose($file);

?>



<?php
   $s = $csv;
   $x = 6;
   do {
       echo "The number is: $s <br>";
       $x++;
   } while ($x <= 5);
?>


<?php  echo "<p ><a href=\"$csv\">Download CSV </a></p>\n"; 

// header('location:url=https://www.google.com' ); header('location:../dashboard.php')


?> 


