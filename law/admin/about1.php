<?php 
require 'C:\xampp\htdocs\law\admin\config.php';
require 'nav.php';
require('session.php');
if (isset($_POST['sub'])) {
    $about=$_POST['about'];
    $q=mysqli_query($connect,"SELECT * from about");
if ($q) {
   $r= mysqli_num_rows($q);
   if ($r!=1) {
      $qqq=mysqli_query($connect,"INSERT INTO about (about) values ('$about')");
      header("location:about.php");
  }
  else
  {
    $qq=mysqli_query($connect,"UPDATE about SET about='$about'");
      header("location:about.php");
  }
}
} ?>