<?php 
require 'config.php';
require 'session.php';
$name = $_POST['name'];
$expert = $_POST['expert'];
$contact = $_POST['mob'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
if ($_POST['name']!= null && $_POST['expert'] && $_POST['mob']!= null && $_POST['email']!= null && $_POST['city']!= null && $_POST['address']!= null) {
	# code...


$q = mysqli_query($connect,"INSERT INTO adv (name,expert,contact,email,city,address)values('$name','$expert','$contact','$email','$city','$address')");
 if($q)
 	{
 		?>
 		<script type="text/javascript">
 			alert("data saved successfully");
 			window.location.href = '/law/admin/add_adv.php';
 		</script>
 		<?php
 	}
 	else
 	{
 		?>
 		<script type="text/javascript">
 			alert("cannot saved, try again");
 			window.location.href = '/law/admin/add_adv.php';
 		</script>
 		<?php
 	}

}
else
{
	?>
 		<script type="text/javascript">
 			alert("please Enter all data");
 			window.location.href = '/law/admin/add_adv.php';
 		</script>
 		<?php
 	
}


 	?>