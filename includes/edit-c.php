<?php 


	$cid =$_POST['cid']; 
	$user =$_POST['user']; 
	$date = $_POST['date']; 
	$message = $_POST['message']; 

	echo"<form method='POST' action=''><table class='com-box'><tr>
	<td><input type='hidden' name='cid' value='".$cid."'></td> 
	<td><input type='hidden' name='user' value='".$user."'></td> 	
	<td><input type='hidden' name='date' value='".$date."'> </td>
	<td><textarea class='box'name='message'>".$message."</textarea></td><br>
	<td><button name='edits' type='submit'>Edit</button></td></tr></table></form><br><br>"; 
	
	 if(isset($_POST['edits'])) { 
	 	$cid =$_POST['cid']; 
 $user =$_POST['user']; 
 $date = $_POST['date']; 
 $message = $_POST['message']; 
 $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'"; 
 $result= mysqli_query($conn,$sql);
 header("Location:../pages/page1.php");
	 }



