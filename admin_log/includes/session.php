<?php
	session_start();
	include '../db_connect.php';

	if(!isset($_SESSION['email']) || trim($_SESSION['email']) == ''){
		header('location: index.php');
	}

	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['email']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>