

<!--php code to  logout

<?php
if(isset($_POST['logout'])){
session_start();
session_destroy();
$msg4="logged_out_successfully";
header("Locaton:../pages/home.php?msg4=$msg4");

}
?>
<!---
php code to print the message when logged in and out
and siggned up
-->
<p><?php if(isset($_GET['msg4']))
  echo $_GET['msg4'];
  
   ?></p>

<div class="header">
	<h1>Healthfully Mind Body and Soul</h1>

	

</div>
