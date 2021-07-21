<?php 
require 'session.php';
require 'config.php';
$sec = $_GET['id'];
$q= mysqli_query($connect,"DELETE from police WHERE id = '$sec'");
if ($q) {
	# code...
	header('location:/law/admin/view_police.php');
}
 ?>