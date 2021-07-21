<?php 
require 'session.php';
require 'config.php';
$sec = $_GET['id'];

 ?>
<body onload="getConfirmation()">
	<input type="hidden" onload="" name="" id="sec" value="<?php echo $sec; ?>" />
	
</body>
 <script type="text/javascript">
 
        
            function getConfirmation(){
            	var sec = document.getElementById("sec").value;
               var retVal = confirm("Do you want to delete section "+sec+"?");
               if( retVal == true ){
                  window.location.href = "/law/admin/delete1.php?id="+sec;
                  
               }
               else
               {
               	window.location.href = "/law/admin/ad_home.php";
               }
               
            }
       
      </script>