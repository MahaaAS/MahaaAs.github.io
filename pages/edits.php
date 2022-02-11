<?php date_default_timezone_set('Asia/Riyadh'); 
include '../includes/database.php';?> 
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Editing comment</title>
<link href="../global/st.css" rel="stylesheet" type="text/css" />
	
	
</head>	
<body>
        <?php include("../includes/header.php"); ?>   


 <div class="row">

	     
			<?php include("../includes/links.php"); ?>

  
  <div class="leftcolumn">
   
 <div class="card">
 

<?php

	 include("../includes/edit-c.php");
 
?>

	    </div>
  </div>
		<?php include("../includes/rightcolumn.php"); ?>
</div>




	
			<?php include("../includes/footer.php"); ?>

</body>
</html>