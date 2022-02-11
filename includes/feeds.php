<?php
include_once '../includes/database.php';
if(isset($_POST["submit"])){
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$country=$_POST['country'];
$city=$_POST['city'];
$selfdescription=$_POST['selfdescription'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$Satisfaction=$_POST['Satisfaction'];
$likeabout=$_POST['likeabout'];
$lookingfor=$_POST['lookingfor'];
$suggestions=$_POST['suggestions'];

  $se= "SELECT * From users WHERE useremail = '$email'";
   $result=mysqli_query($conn,$se);
         $num = mysqli_num_rows($result);

		 
			if($num == 1){
					
		header("Location:../pages/feedback.php");exit();
			}else{
$sql="INSERT INTO feedback(firstname, middlename, lastname, email, country, city, selfdescription,age,gender,Satisfaction,likeabout,lookingfor,suggestions) VALUES ('$firstname', '$middlename', '$lastname', '$email', '$country', '$city', '$selfdescription','$age','$gender','$Satisfaction','$likeabout','$lookingfor','$suggestions');";

mysqli_query($conn,$sql);

	header("Location: ../pages/feedback.php?done");

}
}
