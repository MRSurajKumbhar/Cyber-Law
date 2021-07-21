<?php
require('session.php');
require('config.php');
$section = $_POST['section'];
$title = $_POST['title'];
$dis  = $_POST['discription'];
$date  = $_POST['date'];

//echo $section;
//echo $title;
//echo $dis;

$q=mysqli_query($connect,"INSERT INTO law (section,title,discription,date1) VALUES ('$section','$title','$dis','$date')");
if($q)
	header("location:/law/admin/ad_home.php");
else
	{
		?> <script type="text/javascript">
			alert("check section and try again");
			window.location.href = "/law/admin/ad_home.php";
		</script><?php



 } ?>