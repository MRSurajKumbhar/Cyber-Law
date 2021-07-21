<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4caf50;;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

</style>
</head>
<body>
<div class="topnav">
  <a class="" id="ad_home" href="/law/admin/ad_home.php">Home</a>
  <a class="" id="add_law" href="add_law.php">Add Law</a>
   <a class="" id="add_adv" href="add_adv.php">Add Advocate</a>
   <a class="" id="view_adv" href="view_adv.php">view Advocate</a>
   <a class="" id="add_police" href="add_police.php">Add Police station</a>
   <a  class="" id="view_police" href="view_police.php">view Police Station</a>
   <a  class="" id="about" href="about.php">about</a>

 <a style="float:right; color:white; background-color: black;" href="logout.php">logout</a>
 

</div>
</body>
</html>