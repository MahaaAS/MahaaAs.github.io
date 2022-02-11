<?php
session_start();
include ("../includes/database.php");
if(isset($_POST['submit'])){
$useremail=$_POST['useremail'];
$username=$_POST['username'];
$userpwd=$_POST['userpwd'];
if(!$_POST['username']||!$_POST['userpwd']||!$_POST['useremail']){
		$msg2 = "<p>You left one or more of the required fields.</p>";
	header("location:../pages/signin.php?msg2=$msg2");
	

exit();
}
	
$select= "SELECT * From users WHERE useremail='$useremail'&&username = '$username'&& userpwd='$userpwd'";
$result=mysqli_query($conn,$select);
		 
$num = mysqli_num_rows($result);
if($num == 1){
$_SESSION['useremail']=$useremail;
$_SESSION['username']=$username;
$_SESSION['userpwd']=$userpwd;
$msg4="logged in successfully ";
	header("Location:../pages/home.php?msg4=$msg4");
exit;
}else{
	$msg3 = "<p>your info is wrong?!!</p>";
	header("Location:../pages/signin.php?msg=$msg3");
	
	exit();
}
}
