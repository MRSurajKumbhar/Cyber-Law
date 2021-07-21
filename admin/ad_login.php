<?php
session_start();
require('config.php');
if($_POST["username"]=='admin' AND $_POST["pass"]=='admin')
{
	$_SESSION['username']="admin";
	$admin="admin";





	header("location:ad_home.php");


}
?>