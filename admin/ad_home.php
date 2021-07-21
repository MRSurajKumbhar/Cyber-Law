<?php
require('session.php');
require 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin home</title>
	
	<style type="text/css">
		#link {
			text-decoration: none;
			color: black;
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
  margin-left: 108px;
  margin-top: 12px;
}
#laws {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    margin-top: 10px;

    
    
}

#laws td, #laws th {
    border: 1px solid #ddd;
    padding: 8px;
}

#laws tr:nth-child(even){background-color: #f2f2f2;}

#laws tr:hover {background-color: #ddd;}

#laws th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
	</style>
</style>


</head>
<body>
<?php include('nav.php'); ?> 
<input type="search" class="light-table-filter" id="input" data-table="order-table" placeholder="seach for laws (use section or title) ">
<table align="center" class="order-table table" id="laws">
	<thead>
<tr>
	<th width="150px">section</th>
	<th width="900px">title</th>
	<th width="100px">action</th>
</tr>
</thead>
<tbody><?php
$q= mysqli_query($connect,"SELECT * FROM law");
while($res= mysqli_fetch_array($q))
{
?> 
<tr>

	<td><a id="link" href="dis.php?id=<?php echo $res['section']; ?>"><?php echo $res['section'];?></a></td>
	<td><a id="link" href="dis.php?id=<?php echo $res['section']; ?>"><?php echo $res['title'];?></a></td>
	<td><a href="/law/admin/edit.php?id=<?php echo $res['section']; ?>">edit</a>/
		<a href="/law/admin/delete.php?id=<?php echo $res['section']; ?>">delete</a></td>

</tr>
</tbody>

<?php
}




?>

</table>
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
</html>



<br>
 <script type="text/javascript">
 	var d = document.getElementById("ad_home");
d.className += "active";
 </script>
