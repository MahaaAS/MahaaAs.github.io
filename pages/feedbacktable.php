
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View FeedBack Record </title>
<link href="../global/print.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table>
<?php
include_once '../includes/database.php';

$msql="SELECT * FROM feedback";
$re=mysqli_query($conn,$msql);
if($re === false) {
  echo "error while executing mysql: " . mysqli_error($conn);
 } else {
  // move on with your normal skript

		print("<tr><th rowspan='20'>Users</th></tr>");
	print("<tr><th colspan='15'>Information feedback</th></tr>");
	print("<tr>");  
	print("<th>first name</th>");
	print("<th>middle name</th>"); 
	print("<th>last name</th>");
	print("<th>email</th>");
	print("<th>country</th>"); 
	print("<th>city</th>");
	print("<th>selfdescription</th>");  
	print("<th>age</th>");
	print("<th>gender</th>"); 
	print("<th>Satisfaction</th>");
	print("<th>like about</th>"); 
	print("<th>look for</th>");
	print("<th>suggestions</th>");
	print("</tr>");
	while($row=mysqli_fetch_row($re)){	
	         print("<tr>");
	foreach($row as $key => $firstname)
	     print("<td>$firstname</td>");

		      print("</tr>");
}

 }
?>

</table>
  <button onclick="location.href = '../pages/home.php';">Home</button>


</body>
</html>