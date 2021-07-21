<?php 
require 'session.php';
require 'config.php';
$sec = $_GET['id'];
$q= mysqli_query($connect,"DELETE from law WHERE section = '$sec'");
if ($q) {
	# code...
	header('location:/law/admin/ad_home.php');
}
 ?>