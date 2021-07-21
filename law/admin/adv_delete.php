<?php 
require 'config.php';
$id = $_GET['id'];
$q= mysqli_query($connect,"DELETE FROM adv where id = '$id'");
if($q)
{
	?>
	<script type="text/javascript">
		alert("advocate details succesfully deleted");
		window.location.href= "/law/admin/view_adv.php";
	</script>
	<?php
}
?>
