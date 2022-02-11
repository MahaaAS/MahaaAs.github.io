
<div>
      <ul>
		 <li><a href="home.php">Home</a></li>
		 <li><a href="recipes.php">MY Recipes</a></li>
		 <li><a href="posts.php">MY Favorites</a></li>  
		 <li><a href="slideshow.php">Photo Galary</a></li>	
		 <li><a href="feedback.php">FeedBack</a></li>  
		 <li><a href="contactme.php">Contact me</a></li> 
		
      

<?php
session_start();
 if( (isset($_SESSION['username']) && !empty($_SESSION['username']))||(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])))
{
?>  
</div></ul>
 <div class="rightcolumn">
  <div class="card" id="s">
	<?php echo $_SESSION['username'];  ?>

	<a ><img src="../images/my.png"></a>
	<form name="logform" method="post" action="../pages/home.php">
   <button type="submit" name="logout" > log out</button>
	</form>
	 </div> 
	 </div>
<?php }else{ ?>
  <div class="rightcolumn">
  
    <li class="s"><a href="../pages/signin.php">Login</a></li>
     <li class="s"><a href="../pages/signup.php">Register</a></li>
	  </div></div></ul>

<?php } ?>


  

