<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ar" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Health Fully Mind Body and Soul</title>
<link href="../global/st.css" rel="stylesheet" type="text/css" />
			
</head>
<body>
 <!-- HEADER Container (included) -->
			<!-- This is the Container just for the header. -->
			<?php include("../includes/header.php"); ?>
 <div class="row">

	        <!-- LINKS Container (included) -->
			<!-- This is the Container for the links on the left side of the page. -->
			<?php include("../includes/links.php"); ?>

  <div class="leftcolumn">
    <div class="card">
     
 <h2 style="text-align:center">Slideshow Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 11</div>
<iframe width="500" height="300" src="https://www.youtube.com/embed/0g1uOi8K0mI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="mySlides">
    <div class="numbertext">2 / 11</div>
    <img src="../images/p11.jpeg">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 11</div>
    <img src="../images/p21.jpeg">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 11</div>
    <img src="../images/p31.jpeg">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">5 / 11</div>
    <img src="../images/p41.jpeg">
  </div>
  <div class="mySlides">
    <div class="numbertext">6 / 11</div>
    <img src="../images/p51.jpeg">
  </div>
  <div class="mySlides">
    <div class="numbertext">7 / 11</div>
    <img src="../images/p61.jpeg">
  </div>
    <div class="mySlides">
    <div class="numbertext">8 / 11</div>
    <img src="../images/p71.jpeg">
  </div>

  <div class="mySlides">
    <div class="numbertext">9 / 11</div>
    <img src="../images/p81.jpeg">
  </div>

  <div class="mySlides">
    <div class="numbertext">10 / 11</div>
    <img src="../images/p91.jpeg">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">11 / 11</div>
    <img src="../images/p111.jpeg">
  </div>


    
  <a class="prev" onclick="plusSlides(-1)"><</a>
  <a class="next" onclick="plusSlides(1)">></a>

 <br>

  <div class="row">
      <div class="column">
      <img class="demo cursor" src="../images/food.jpeg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="../images/p11.jpeg" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="../images/p21.jpeg" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="../images/p31.jpeg" style="width:100%" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="../images/p41.jpeg" style="width:100%" onclick="currentSlide(5)">
    </div>
	<div class="column">
      <img class="demo cursor" src="../images/p51.jpeg" style="width:100%" onclick="currentSlide(6)">
    </div>
	<div class="column">
      <img class="demo cursor" src="../images/p61.jpeg" style="width:100%" onclick="currentSlide(7)">
    </div>
	<div class="column">
      <img class="demo cursor" src="../images/p71.jpeg" style="width:100%" onclick="currentSlide(8)">
    </div>
	<div class="column">
      <img class="demo cursor" src="../images/p81.jpeg" style="width:100%" onclick="currentSlide(9)">
    </div>
	<div class="column">
      <img class="demo cursor" src="../images/p91.jpeg" style="width:100%" onclick="currentSlide(10)">
    </div>
	<div class="column">
      <img class="demo cursor" src="../images/p111.jpeg" style="width:100%" onclick="currentSlide(11)">
    </div>
  </div>
</div>
     </div>
  </div>


	<!-- right col Container -->
		<?php include("../includes/rightcolumn.php"); ?>


</div>


	<!-- FOOTER Container -->
			<!-- This is the Container for the footer of the Web site. -->
			<?php include("../includes/footer.php"); ?>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";

}
</script>
    
</body>
</html>
