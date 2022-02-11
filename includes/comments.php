<?php 

  if( (isset($_SESSION['username']) && !empty($_SESSION['username']))||(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])))
{

 date_default_timezone_set('Asia/Riyadh'); 
include '../includes/database.php';
echo"<form method='POST' action=''>
<table class='com-box'><tr>
<td> <input type='hidden' name='user' value='".$_SESSION['username']."'> </td>  
 <td><input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'> </td>  
 <td><textarea class='box'name='message'></textarea></td>  <br>
 <td><button name='commentSubmit' type='submit'>send</button> </td>  
 </tr></table></form><br><br>"; 

 if(isset($_POST['commentSubmit'])) { 
 $user =$_POST['user']; 
 $date = $_POST['date']; 
 $message = $_POST['message']; 
 $sql = "INSERT INTO comments (user,date,message) VALUES('$user','$date','$message')"; 
 $result= mysqli_query($conn,$sql);
  } 
		$msql="SELECT * FROM comments";
		$re=mysqli_query($conn,$msql);
		while($row = $re -> fetch_assoc()){
			echo"<div class='com-box'><p>";
			echo $row['user']."<br>";
		    echo $row['date']."<br>";
			echo nl2br($row['message']); 
			echo "</p>
			<form method='POST' action=''>
			<table class='del'>
			<tr >
			<td><input type='hidden' name='cid' value='".$row['cid']."'></td>  
			<td><button name='codel' type='submit'>Del</button></td> 
			</tr>
			</table></form>
			<form method='POST' action='../pages/edit.php'>
			<table class='edit'>
			<tr >
			<td><input type='hidden' name='cid' value='".$row['cid']."'></td>  
			<td><input type='hidden' name='user' value='".$row['user']."'> </td> 
			<td><input type='hidden' name='date' value='".$row['date']."'> </td> 
			<td><input type='hidden' name='message' value='".$row['message']."'></td>  
			<td><button>edit</button></td> 
			</tr>
			</table></form></div>";
			
		}
		
	
	
		if(isset($_POST['codel'])){
		$cid =$_POST['cid']; 		
				$mysql = "DELETE FROM comments WHERE cid='$cid'"; 
				$r= mysqli_query($conn,$mysql);
				 echo "<meta http-equiv='refresh' content='0'>";
				 
				 
				 
			
		}
}else{
	
	echo "you can't comment you have to sign in ";
}
		