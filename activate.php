<?php

include('includes/config.php');
include('includes/db.php');

//this will add the user info to the db as well as allocate a token and value of 1. "Account Activated" will display on the screen

if(isset($_GET['token'])){
	$token = $_GET['token'];
	$query = "update users set status ='1' where token='$token'";
	if($db->query($query)){
		header("Location:index.php?success=Account Activated!!");
		exit();

}

?>