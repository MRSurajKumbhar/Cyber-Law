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


 <?php
require('session.php');
?>
<!DOCTYPE html>
<html>
<style>
#title {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#section {
	 width:30%;
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

#form {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
textarea {
    width: 100%;
    height: 300px;
    padding: 14px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}
</style>
<body>
<?php
$sec1 = $row['section'];
$sec2 = $row['section']; 
?>
<div id="form">
  <form action="/law/admin/edit_law.php" method="post">
    <label for="section">Enter Section</label> <br>
    <input type="text" id="section"  placeholder="" value="<?php echo $sec1;?>" disabled=""  > 
    <input type="hidden"  name="section"  value="<?php echo $sec2; ?>" >
     <br>
    <label for="title">Title</label>
    <input type="text" id="title" name="title" placeholder="" value="<?php echo $row['title']; ?>">

    <label for="dis">Discription</label> <br>
    <textarea id="dis" name="discription"><?php echo $row['discription'];?></textarea> <br>
    <label for="date">Date</label>
    <input type="date" id="date" name="date" placeholder="" value="<?php echo $row['date1']; ?>"><br>
   
  
    <input id="sub" type="submit" value="update">

  </form>
</div>

</body>
</html>
