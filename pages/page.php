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
    
   <h2>Healthy Banana Bread</h2>
      <h5>Healthy Deasert, Sep 2, 2019</h5>
      <img src="../images/p21.jpeg"><br><br><br>

	 <p> My all-time favorite Deasert for breakfast "Banana Bread" !! it's super delicious.</p><br>
	 <dl><dt><b>Ingredients</b></dt><br> 
 <dd><ol>
<li>2 cups flour of your choice.<br></li>
<li>1 teaspoon baking soda.<br></li>
<li>1/2 teaspoon ground cinnamon.<br></li>
<li>1/2 tsp baking powder<br></li>
<li>1/4 teaspoon salt.<br></li>
<li>1 1/2 cups mashed bananas.</li>
<li>1/3 cup oil or milk of choice.<br></li>
<li>1/2 cup  pure honey, maple syrup, or agave.<br></li>
<li>1/2 cup yogurt.<br></li>
<li>2 teaspoon pure vanilla extract. <br></li>
<li>1/2 cup chocolate chips,optional.<br></li>
</ol> </dd>
<br>


 
       
<dt><b>Instructions</b></dt><br> 
        

     <dd>Preheat oven to 350 F.Grease a loaf pan, or line with parchment.<br>
	 Set aside. Combine dry ingredients in a mixing bowl.Whisk liquid ingredients in a separate bowl.<br>
	 Pour wet into dry, and stir to form a batter. Smooth into the prepared pan.
	 If desired, press chocolate chips into the top.<br> Bake on the center rack 40-45 minutes,
	 after that turn off the heat and let sit in the closed oven 10 additional minutes.<br>
	 If your bread is still undercooked at this time, simply turn the oven back on and continue
	 baking—checking every 5 minutes–until a toothpick inserted into the center of the bread comes out clean.<bre> 
	 Let cool completely. Cover and refrigerate overnight. Taste and texture are much better the second day (and even better the third day as it gets sweeter).
	 Leftovers can be sliced and frozen for up to a month.
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
		 ?>
		
	    </div>
  </div>
		<?php include("../includes/rightcolumn.php"); ?>
</div>




	
			<?php include("../includes/footer.php"); ?>

</body>
</html>