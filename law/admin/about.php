<?php
require 'C:\xampp\htdocs\law\admin\config.php';
require 'nav.php';
require('session.php');
$q=mysqli_query($connect,"SELECT * from about");
if ($q) {
   $r= mysqli_num_rows($q);
   if ($r==1) {
      $ro=mysqli_fetch_array($q);
  }
}


?>
<!DOCTYPE html>
<html>
<style>
textarea {
    width: 100%;
    height: 150px;
    padding: 14px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    
    resize: none;
}
</style>
<body>
<form action="about1.php" method="post"> <textarea name="about"> <?php if (isset($ro['about'])) {
echo $ro['about']; }?></textarea><br> <input type="submit" name="sub" value="submit"></form>
* use HTML and css for better view

<hr> 
<div><?php echo  $ro['about'];?></div>
</body>

 <script type="text/javascript">
 	var d = document.getElementById("about");
d.className += "active";
 </script>
</html>
