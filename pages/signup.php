<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Sign up</title>
<link href="../global/st.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form class="form1"name="form1" method="post" action="../includes/sign.php">		
   <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
<label >Email <br></label><input type="text" id="user_email" name="useremail"><br>
	<label > User Name<br></label><input type="text" id="user_name" name="username"><br>
	<label >Password<br></label><input type="password" id="user_pwd" name="userpwd"><br>
	<input class="registerbtn" type="submit" name="submit" value="Signup">
</div>
<p>
<?php if(isset($_GET['msg1']))
  echo $_GET['msg1'];
  
    ?>
   <?php if(isset($_GET['msg2']))
  echo $_GET['msg2'];
  
    ?>
   <?php if(isset($_GET['msg3']))
  echo $_GET['msg3'];
  
    ?>
   <?php if(isset($_GET['msg4']))
  echo $_GET['msg4'];
  
   ?>
	   <?php if(isset($_GET['msg5']))
  echo $_GET['msg5'];
  
    ?>	   <?php if(isset($_GET['msg6']))
  echo $_GET['msg6'];
  
    ?>	   <?php if(isset($_GET['msg']))
  echo $_GET['msg'];
  
    ?></p>

  <div class="container signin">
  <p>Already have an account?<a href="../pages/signin.php">Login</a></p>
  </div>
  	</form>	

	


</body>
</html>