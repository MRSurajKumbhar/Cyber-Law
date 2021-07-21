<?php
require('config.php');
session_start();
session_unset();
session_destroy();
$q=mysqli_query($connect,"TRUNCATE TABLE session");
if($q)
header("location:index.html");
?>