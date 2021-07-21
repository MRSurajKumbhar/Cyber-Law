<?php
require 'session.php';
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
 		p {
 			width: 99%;
 			
 			padding: 10px;
 			margin: 10px;
 			border:none;
 			background-color: #f2f2f2;
 		}
 		#del:link, #del:visited {
 			border-style: solid;
   	border-color:  #f44336;
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin:10px;
}


#del:hover, #del:active {
    background-color: red;
    border-style: solid;
   	border-color:  red;
   	margin:10px;
}

#ed:link, #ed:visited {
	border-style: solid;
   	border-color: #4CAF50;
    color: black;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin:10px;
}


#ed:hover, #ed:active {
    background-color: #4CAF50;
    color: white;
    margin:10px;
}
 	</style>
 </head>
 <body>
 <div id="dis">
 	<h2>section <?php echo $row['section']." : ". $row['title']; ?></h2>
 	<p><?php echo nl2br($row['discription']); ?></p><br>
    <p><?php echo ($row['date1']); ?></p><br>
 	<a id="ed" href="/law/admin/edit.php?id=<?php echo $row['section']; ?>">edit</a><a id="del" onclick="getConfirmation()" href="#javascript:void(0);">delete</a>
 	<input type="hidden" name="sec" id="sec" value="<?php echo $row['section']; ?>">
 </div>
 </body>
 <script type="text/javascript">
 
        
            function getConfirmation(){
            	var sec = document.getElementById("sec").value;
               var retVal = confirm("Do you want to delete ?");
               if( retVal == true ){
                  window.location.href = "/law/admin/delete.php?id="+sec;
                  
               }
               
            }
       
      </script>
      
 </html>