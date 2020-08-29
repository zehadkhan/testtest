<?php 	

$localhost = "localhost";
$username = "zehadkhan_zehadkhan";
$password = "NJ6tc!q[tHkn";
$dbname = "zehadkhan_test";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>