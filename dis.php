<?php
require 'C:\xampp\htdocs\law\admin\config.php';
require 'nav.php';
$section = $_GET['id'];
$q= mysqli_query($connect,"SELECT * FROM law WHERE section = '$section' ");
$row= mysqli_fetch_array($q);
//echo $row['section'];
//echo $row['title'];
//echo $row['discription'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		#dis {
 			background-color: #f2f2f2;
 		}
 		h2 , h3{
 			padding: 10px;
 		}
 		#dis1 {
 			padding: 25px;
 			font-size: 23px;

 		}
 		
 		#adv {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    padding:10px;
}

#adv td, #adv th {
    border: 1px solid #ddd;
    padding: 8px;
}

#adv tr:nth-child(even){background-color: #f2f2f2;}

#adv tr:hover {background-color: #ddd;}

#adv th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
#vpo {
	padding: 20px;
}
#head {
	padding: 10px;
}

 	</style>
 </head>
 <body>
 <div id="dis">
 	<h2>section <?php echo $row['section']." : ".$row['title']; ?></h2> 
 	<div id="dis1">
 	<?php echo nl2br($row['discription']); 
 	$title=$row['title'];?>
 	<br> <p><?php echo ($row['date1']); ?></p><br>
 </div>
 </div>
 <?php 
 $city = $_COOKIE['prath'];
 //echo $city; 
if (isset($_COOKIE['prath'])) {
	$q1= mysqli_query($connect,"SELECT * from adv WHERE city='$city'") or die(mysqli_error($connect));
	if($q1)
	{
		$r = mysqli_num_rows($q1);
		if ($r!=0) {
			
?><hr><table id="adv">
	<thead>
		<tr><th>name</th>
			<th>expert in</th>
			<th>contact</th>
			<th>email</th>
			<th>address</th>
		</tr>
	</thead>
	<tbody><?php
	
		while ($row1= mysqli_fetch_array($q1)) {
			
		?><tr>
			<td><?php echo $row1['name']; ?></td>
			<td><?php echo $row1['expert']; ?></td>
			<td><?php echo $row1['contact']; ?></td>
			<td><?php echo $row1['email']; ?></td>
			<td><?php echo $row1['address']; ?></td>
		</tr><?php

}
	}
	else
	{
		?><hr><div style="color:red; padding: 20px;">no advocate found</div><?php
	}
	}

 ?>
</tbody>
</table>
<hr>
<div id="head"><b>police station details:</b></div>
<?php $qqq= mysqli_query($connect,"SELECT * FROM police WHERE city = '$city'");
if ($qqq) {
	$rr=mysqli_num_rows($qqq);
	if ($rr!=0) {
		while ($ro=mysqli_fetch_array($qqq)) {
			?><div id="vpo">
				<b>city = </b><?php echo $ro['city']; ?>
<br> <b>address = </b><?php echo $ro['address']; ?><br><b>contact =</b> <?php echo $ro['contact'];  ?></div><hr>			<?php
		}
	}
}
}
?>
</body>
 <script type="text/javascript">
 	var d = document.getElementById("banner");
d.className += "active";
 </script>
 </html>