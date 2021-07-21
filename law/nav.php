<?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
if (isset($_POST['city'])) {
  $city = $_POST['city'];
setcookie("prath", $city, time() + (86400 * 30), "/");
header("location:$actual_link");
}


?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
  html , body{
    margin:0;
    padding: 0;
  }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}


select {
  
 display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    background-color: #333;
    border:none;
}
.active {
  background-color: black;
  color: white;
}
#s
{
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    float: right; 
}
#banner
{
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-weight: 10%;
    font-size: 25px;
}

</style>
</head>
<body>

	<div>
<ul style="margin: 0">
  <li><a class="" href="index.php" id="banner">CYBER Law</a></li>
  <li><a class="" id="fad" href="view_adv.php">Find advocate</a></li>
  <li><a class="" id="vps" href="view_police.php">View Police Station</a></li>
  <li><a class="" id="about" href="about.php">about</a></li>
  <li id="s"><form action="<?php echo $actual_link; ?>" method="post"> <input  type="submit" name="submit" value="submit"></li>
  <li style="float: right;"><select name="city">
   <?php if (isset($_COOKIE['prath'])) { ?><option><?php echo $_COOKIE['prath']; ?></option><?php }
  
  $q = mysqli_query($connect,"SELECT DISTINCT city from adv");
  while($row=mysqli_fetch_array($q))
  {
    ?><option><?php echo $row['city']; ?></option><?php

  }

  ?>
</select></li><li id="s">select city </form></li>
</ul>

</div>  
</body>
</html>
