<?php date_default_timezone_set('Asia/Riyadh'); 
include '../includes/database.php';?> 
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="keywords" content="healthy food,healthy recipes,banana bread"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>HealthFully Banana Bread </title>
<link href="../global/st.css" rel="stylesheet" type="text/css" />
	
	
</head>	
<body>
        <?php include("../includes/header.php"); ?>   


 <div class="row">

	     
			<?php include("../includes/links.php"); ?>

  
  <div class="leftcolumn">
    <div class="card">
    
   <h2>VEGAN ICECREAM</h2>
      <h5>Healthy Deasert, Sep 2, 2019</h5>
      <img src="../images/b.jpeg"><br><br><br>

	 <p> My all-time favorite Deasert for breakfast "Banana Bread" !! it's super delicious.</p><br>
	 <dl><dt><b>Ingredients</b></dt><br> 
 <dd><ol>
<li>3 frozen bananas<br></li>
<li>2 table spoons pure honey, maple syrup or agave<br></li>
<li>2 tsp pure vanilla extract<br></li>
<li>1 tsp cinnamon <br></li>
<li>splash of water <br></li>
</ol> </dd>
<br>
  
<dt><b>Instructions</b></dt><br> 
        

     <dd>Pcombine all ingredient in a powerful blinder for 10 minutes until it gets into smooth ic creamy consistency You can serve immediately, or transfer to a container and freeze an additional 30 minutes, then scoop out with an ice cream scoop.
</dd> </dl>

	  
    </div>
 <div class="card">
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
			<form method='POST' action='../pages/edits.php'>
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
		?>
		
	    </div>
  </div>
		<?php include("../includes/rightcolumn.php"); ?>
</div>




	
			<?php include("../includes/footer.php"); ?>

</body>
</html>