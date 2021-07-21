<?php 
require('session.php');
require('config.php');

$section1 = $_POST['section'];
$title1 = $_POST['title'];
$dis1 = $_POST['discription'];
$date1 = $_POST['date'];
echo $section1;
echo $title1;
?><input type="hidden" name="" id="go" value="<?php echo $section1; ?> "> <?php
$q = mysqli_query($connect, "UPDATE law.law SET title='$title1', discription = '$dis1' , date1='$date1' WHERE law.section= '$section1'");

if($q)
{ 
	header("location:/law/admin/dis.php?id=".$section1);
}
else
{
	echo "not";


}

?>
