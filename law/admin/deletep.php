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
               var retVal = confirm("Do you want to delete police station ?");
               if( retVal == true ){
                  window.location.href = "/law/admin/deletep1.php?id="+sec;
                  
               }
               else
               {
               	window.location.href = "/law/admin/view_police.php";
               }
               
            }
       
      </script>