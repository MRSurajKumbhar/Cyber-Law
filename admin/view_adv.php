<?php 
require 'config.php';
require 'nav.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>view advocates</title>
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
#input {
  background-image: url('/law/img/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 60%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-left: 85px;
  margin-top: 12px;
}
tr:hover {background-color: #f5f5f5;}
	</style>
</head>
<body>
	<?php $q = mysqli_query($connect,"select * from adv");
$rer=mysqli_num_rows($q); 
 if ($rer!=0) { ?>
		

	<input type="search" class="light-table-filter" id="input" data-table="order-table" placeholder="seach for advocate ">
<table class="order-table table">
	<thead>
	<tr>
		<th width="200px">Name</th>
		<th width="100px">Expert In</th>
		<th width="100px">contact</th>
		<th width="200px">email</th>
		<th width="100px">city</th>
		<th>address</th>
		<th>action</th>
		<th>delete</th>
	
	</tr>
</thead>
<tbody>
	<?php 
	
	while($row = mysqli_fetch_array($q))
	{
		?>
		<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['expert'];?></td>
			<td><?php echo $row['contact'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['city'];?></td>
			<td><?php echo nl2br($row['address']);?></td>
			<td><a href="adv_delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
		</tr>
		<?php
	}
	?>
</tbody>
</table>
<?php } else { ?>
<div style="font-size:20px; color:red; margin:20px;">nothing to show</div>
<?php } ?>
<script type="text/javascript">
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>
</body>


 <script type="text/javascript">
 	var d = document.getElementById("view_adv");
d.className += "active";
 </script>
 </html>
