<?php 
require 'nav.php'; ?><!DOCTYPE html>
<html>
<head>
	<title>add police</title>
	<style type="text/css">
		input[type=text] ,input[type=email]
		
			{
    width:50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

		}
		form
		{
			margin: 20px;
		}
		textarea
		{
			 width:50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
		}
		#sub {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#sub:hover {
    background-color: #45a049;

}
	</style>
</head>
<body>
<form action="" method="post">
	<label for="city">City</label> <br>
    <input type="text" id="city" name="city" placeholder="" > 
    <br>
    <label for="Address">Address</label><br><textarea id="Address" name="address"></textarea><br>
    <label for="contact">Contact</label><br>
	<input id="contact" type="text" name="mob"><br>
	<input id="sub" type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php 
require 'config.php';
if (isset($_POST['submit'])) {
	$city = $_POST['city'];
	$address  = $_POST['address'];
	$contact  =$_POST['mob'];
	 $q= mysqli_query($connect,"INSERT INTO police (city,address,contact) VALUES ('$city','$address','$contact')");
	 if($q)
	 {
	 	?><script type="text/javascript">
	 		alert("police station added successfully");
	 		window.location.href = "/law/admin/view_police.php";
	 	</script><?php
	 }
}
 ?>
  <script type="text/javascript">
 	var d = document.getElementById("add_police");
d.className += "active";
 </script>