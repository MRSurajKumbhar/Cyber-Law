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
#section , #date {
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
<?php include('nav.php'); ?>


<div id="form">
  <form action="/law/admin/add_law1.php" method="post">
    <label for="section">Enter Section</label> <br>
    <input type="text" id="section" name="section" placeholder="" required=""> 
    <br>
    <label for="title">Title</label>
    <input type="text" id="title" name="title" placeholder="" required="">

    <label for="dis">Discription</label> <br>
    <textarea id="dis" name="discription" required=""></textarea>
    
    <label for="date">Date</label><br>
    <input type="date" id="date" name="date" placeholder="" required=""><br>
  
    <input id="sub" type="submit" value="Submit">

  </form>
</div>

</body>
</html>
 <script type="text/javascript">
    var d = document.getElementById("add_law");
d.className += "active";
 </script>
