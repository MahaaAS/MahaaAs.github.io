<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Sign in</title>
<link href="../global/st.css" rel="stylesheet" type="text/css" />
</head>
<form name="form1" method="post" action="../includes/login.php">
<div class="container">
   <h1>Login</h1>
    <p>Please fill in all fields to log in into your account.</p>
    <hr>
	<label >Email <br></label><input type="text" name="useremail"><br>
    <label>User Name
    <br><input type="text"  name="username"></label><br>
    <label>Password
    <br><input type="password"  name="userpwd"></label><br>
	<input class="registerbtn" type="submit" name="submit" value="Login">
</div>
   <?php if(isset($_GET['msg']))
  echo $_GET['msg'];
  
    ?>
	<?php if(isset($_GET['msg3']))
  echo $_GET['msg3'];
  
    ?>
		<?php if(isset($_GET['msg2']))
  echo $_GET['msg2'];
  
    ?><?php if(isset($_GET['msg6']))
  echo $_GET['msg6'];
  
    ?>
	<div class="container signin">
 	  <p>Already have an account?<a href="../pages/signup.php">Register</p></div>
	 </form>
 
   
</body>
</html>