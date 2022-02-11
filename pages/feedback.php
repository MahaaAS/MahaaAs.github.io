<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Feedback</title>
<link href="../global/st.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="../js/validation.js"></script> 

</head>	
<body>
  
        <?php include("../includes/header.php"); ?>   


 <div class="row">

	     
			<?php include("../includes/links.php"); ?>
			
  <div class="leftcolumn">
    <div class="card">
   <H1>  FeedBack form </H1>
  
	   
         <form name="feedback"  method="POST" action="../includes/feeds.php"  onsubmit ="return  valid()">
        
          <fieldset>
              <legend><mark>Personal Information</mark> </legend>

				 <label class="blockLabel">First Name</label><br>
                 <input type="text" name="firstname" /><br><br>
				 
                 <label class="blockLabel">Middle Name</label><br>
                 <input type="text" name="middlename"/><br>
				 
				 <label class="blockLabel">Last Name</label><br>
                 <input type="text" name="lastname"/><br>
                 
				 <label class="blockLabel">Email</label><br>
                 <input type="text" name="email"/><br>
                 
				 <label class="blockLabel"> Country</label><br>
                 <input type="text"  name="country"/><br>
                 
				 <label class="blockLabel"> City</label><br>
                 <input type="text"   name="city"/><br><br>

				 <label class="blockLabel">What do you describe your self?<span>(mom ,student,etc..)</span></label><br><br>
                 <input type="text" name="selfdescription"/><br><br>
				 
				<label class="blockLabel">Age Category<br>
		<select name="age" >
					<option value="-1"selected>[choose]</option>
							<option>Teenager [13-18]</option>
							<option>Young-Adult [19-35]</option>
							<option>Adult [36-59]</option>
							<option>Senior [60 and above]</option></select>
				</label><br>
			
				 <label class="blocklabel"> Gender</label><br><br>
                 <input type="radio" name="gender" value="male"> Male
				 <input type="radio" name="gender" value="female"> Female
				<br>
          </fieldset>
          <fieldset>
              <legend><mark>FeedBack Information</mark></legend><br>
             <label> Your Satisfaction on the website</label><br><br>
					<input type="radio" name="Satisfaction" value="verygood"> Very Good 
					<input type="radio" name="Satisfaction" value="good"> good 
					<input type="radio" name="Satisfaction" value="ok"> OK 
					<input type="radio" name="Satisfaction" value="bad"> Bad 
					<input type="radio" name="Satisfaction" value="verybad"> Very Bad
				
			<label><h4>What Do you like about the website?</h4></label>
            <input type="checkbox" name="likeabout" value="the_design_of_the_website">The Design of the website<br>
			<input type="checkbox" name="likeabout" value="the_recipes">The Recipes</label><br>
			<input type="checkbox" name="likeabout" value="the_content">The Content</label><br>
            <input type="checkbox" name="likeabout" value="how_active_the_blogger">How Active the Blogger<br>
			<input type="checkbox" name="likeabout" value="the_Simplesty">The Simplesty</label><br>
			<label>	<h4>What Are looking for in this website?</h4></label>
            <input type="checkbox" name="lookingfor" value="new_recipes">New Recipes<br>
			<input type="checkbox" name="lookingfor" value="inspiration">Inspiration<br>
            <input type="checkbox" name="lookingfor" value="just_browsing">Just Browsing</label><br>
            <input type="checkbox" name="lookingfor" value="looking_for_easy_recipes">Looking for easy Recipes<br><br>

              <label class="blockLabel">Write your suggestions</label>
              <textarea id="suggestions" name="suggestions" rows="5" cols="55"></textarea>
            </fieldset>
       	<button  type="submit" name="submit">Send</button>
	<button  type="reset" name="reset">Cancel</button>
</form>
   
   
   
   
   
    </div>
  </div>
		<?php include("../includes/rightcolumn.php"); ?>
</div>



	
			<?php include("../includes/footer.php"); ?>

</body>
</html>