<?php
session_start();
include ("../includes/database.php");
$useremail=$_POST['useremail'];
$username=$_POST['username'];
$userpwd=$_POST['userpwd'];
if(!$_POST['username']||!$_POST['userpwd']||!$_POST['useremail']){
		$msg2 = "You left one or more of the required fields.";
	header("location:../pages/signup.php?msg2=$msg2");
	

exit();
}
	

 if (filter_var($useremail, FILTER_VALIDATE_EMAIL)){
	    if (preg_match('/^\w{4,20}$/', $username)){
 	
      if (preg_match("/^[0-9a-zA-Z_!$@#^&]{4,20}$/",$userpwd)){
         $select= "SELECT * From users WHERE (useremail = '$useremail'&& username='$username')";
		  $sel= "SELECT * From users WHERE username='$username'";	 
		  $se= "SELECT * From users WHERE useremail = '$useremail'";
		  
         $result=mysqli_query($conn,$select);
         $num = mysqli_num_rows($result);
		 $res=mysqli_query($conn,$sel);
         $num1 = mysqli_num_rows($res);
		 $re=mysqli_query($conn,$se);
         $num2 = mysqli_num_rows($re);
			if($num == 1||$num2==1){
					$msg6 = "You already have an account";
		header("Location:../pages/signup.php?msg6=$msg6");exit();
			} if($num1==1){
							$msg5= "user name is taken";
		header("Location:../pages/signup.php?msg5=$msg5");exit();
			
			}if($num == 0 && $num1 == 0){
	
	$reg="INSERT INTO users (useremail,username,userpwd) VALUES ('$useremail','$username','$userpwd')";
	
	mysqli_query($conn,$reg);
	$_SESSION['useremail']=$useremail;
	$_SESSION['username']=$username;
	$_SESSION['userpwd']=$userpwd;
			$msg4 = "siggned up successfully";
	header("Location:../pages/home.php?msg4=$msg4");

			}
		}else{
	$msg = "invalid password length the password must be between 4 and 20";
	header("Location:../pages/signup.php");
	exit();
	
			}
 }else{
	 $msg3 = "invalid username length must be between 4 and 20";
	header("Location:../pages/signup.php?msg3=$msg3");
	exit();
 }
 }else{
	
	$msg1 = "invalid email";
	header("Location:../pages/signup.php?msg1=$msg1");
	exit();
}
     
	