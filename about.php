<?php require 'C:\xampp\htdocs\law\admin\config.php';
require 'nav.php'; 
$q=mysqli_query($connect,"SELECT * FROM about");
$r=mysqli_fetch_array($q);

?>
<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<body>
	<h2 style="padding: 10px;">about</h2>
	<div style="padding:20px;">
<?php 
echo $r['about']; ?> </div>

 <script type="text/javascript">
 	var d = document.getElementById("about");
d.className += "active";
 </script>
</body>

</html>