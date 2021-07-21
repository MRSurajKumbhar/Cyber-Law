<?php 
require 'nav.php';
require 'c:xampp/htdocs/law/admin/config.php';
$q=mysqli_query($connect,"SELECT *  FROM police");
$r=mysqli_num_rows($q);
$i=1;
?>
<head>
 	<style type="text/css">
 		table	{
		width: 100%;
		border-collapse: collapse;
	}
th{
	background-color: #4caf50;
	color: white;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: solid;
	border-color: #4caf50;

}
 	</style>
</head>
 <?php if ($r!=0){ ?>
<table>
 	<thead>
 		<tr>
 			<th>sr no</th>
 			<th>city</th>
 			<th>address</th>
 			<th>contact</th>
 		</tr>
 	</thead>
 	<thead>
 		<?php 
 		while ($row = mysqli_fetch_array($q)) { 
 			?>
 			<tr>
 				<td><?php echo $i; $i++; ?></td>
 				<td><?php echo $row['city'] ?></td>
 				<td><?php echo $row['address']; ?></td>
 				<td><?php echo $row['contact']; ?></td>
 			</tr>
 			<?php
 		}
 		 ?>
 	</thead>
 </table>
 <?php } else {
 	?><div style="font-size:20px; color:red; margin:20px;">nothing to show</div><?php
 } ?>
 <script type="text/javascript">
 	var d = document.getElementById("vps");
d.className += "active";
 </script>