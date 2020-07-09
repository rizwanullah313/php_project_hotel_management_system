<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    

<!-- CSS -->
<style type="text/css">
body
{
	background-color:#9CF;
}
.main {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    background-color:#03F;
	color:#FFF;
	flex-wrap:wrap;
}
.one {
	margin-left:20px;
	padding:10px;
	text-align:center;
	width: 250px;
}
.two {
	padding:10px;
	text-align:center;
	width: 250px;
}
.three {
	margin-right:40px;
	padding:10px;
	width: 250px;
}

.one1 {
	margin-left:20px;
	padding:10px;
	text-align:center;
	width: 300px;
}


.footerclass
{
	background-color:#000; 
	color:#FFF;
}
@media only screen and (max-width: 991px) {
    .navbar-hover .show > .dropdown-toggle::after{
        transform: rotate(-90deg);
    }
}
@media only screen and (min-width: 992px) {
    .navbar-hover .collapse ul li{position:relative;}
    .navbar-hover .collapse ul li:hover> ul{display:block}
    .navbar-hover .collapse ul ul{position:absolute;top:100%;left:0;min-width:150px;display:none}
    .navbar-hover .collapse ul ul ul{position:absolute;top:0;left:100%;min-width:150px;display:none}
    /*.navbar-hover .collapse ul ul ul ul{position:absolute;top:0;left:-100%;min-width:250px;display:none;z-index:1}*/
} 
  #c1,#c2,#c3,#c4
{
	display:inline-block;
	width:80px;
	height:100px;
	background:#CCC;
	border-radius:30%;
	box-shadow:0px 30px 40px -20px #00000070;
	font-size:18px;
	padding:20px;
	padding-left:8.5px;
	padding-top:7px
}
.carousel-inner img {
    width: 100%;
    height: 100%;
}
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides,.mySlides1,.mySlides12 {
  display: none;
}

.cursor {
  cursor: pointer;
}
/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo,.demo1,.demo12 {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

</head>


<!-- Start roject Body -->
<body>

<div class="main" style="flex-wrap:wrap;display">
  <div class="one" style="display:flex; justify-content: space-around; margin-left:-20px">
  <a href="https://www.facebook.com/"><i style="color:#FFF" id="a1" class="fa fa-facebook"></i></a>
  <a href="https://www.facebook.com/"><i style="color:#FFF" id="a2" class="fa fa-twitter"></i></a>
  <a href="https://www.facebook.com/"><i style="color:#FFF" id="a3" class="fa fa-instagram"></i></a>
  <a href="https://www.facebook.com/"><i style="color:#FFF" id="a4" class="fa fa-youtube"></i></a>
  <a href="https://www.facebook.com/"><i style="color:#0F3" id="a5" class="fa fa-whatsapp"></i></a>
  </div>
  
  <div class="two" style=" margin-left:10px">
  <span class="text-center">Most Wellcome To Rizwan Hotel</span>
  </div>
  
  <div class="three" style="text-align:center">
 
  <a href="admin/login.php" style="color:#FFF">Only Addministrator Login</a>
  </div>
  </div>

<nav class="navbar navbar-expand-md navbar-light bg-white navbar-hover" >
 <div class="navbar-brand" href="#"><img src="images/hotellogo.png".png" alt=""/ width="150px" height="80px" style="margin-right:200px"></div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation">
   <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarHover">
        <ul class="navbar-nav">
           <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Booking
                  </a>
               <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Roombooking.php">Room Booking </a></li>
            <li><a class="dropdown-item" href="HallBooking.php">Hall Booking</a></li> 
           <li><a class="dropdown-item" href="DisheshOrder.php">Room Rate </a></li>
          </ul> 
         </li> 
                  
       <li class="nav-item"><a class="nav-link" href="Services.php">Services</a></li>
     <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>

   <li class="nav-item"><a class="nav-link" href="Resturants.php">Resturants</a></li>
 <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
</ul>
  </div>
    </nav>   
                      
      <div id="demo" class="carousel slide" data-ride="carousel">
         <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/gallery/pic1.jfif" alt="Banner 1" width="1100" height="500">
                   </div>
                      <div class="carousel-item">
                   <img src="images/gallery/pic2.jfif" alt="Banner 2" width="1100" height="500">
                </div>
             <div class="carousel-item">
         <img src="images/gallery/ic3.jfif" alt="Banner 2" width="1100" height="500">
      </div>
  </div>
  
<!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
   <span class="carousel-control-prev-icon"></span>
    </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
       <span class="carousel-control-next-icon"></span>
         </a>
            </div>


<hr />
  <div class="form-group">
    <h2 class="form-control" data-placement="center" style="text-align:center"><b>WELL COME TO OUR HOTEL</b></h2>
      </div>
        </div>
           
           <hr />
             <h2 class="text-center"><b>Explore Our WonderFul Hotel</b></h2>
               <h3 class="text-center">Swimming Pool</h3>
                  <p class="text-center">Experience our awesome Pools.</p>
           
 <section id="gallery">
   <div class="container pb-5">
     <div class="row mt-4">
        <div class="col-md-12 p-0 ">
           <div class="gellary-items d-flex flex-wrap justify-content-center">
              <div class="gellary-item m-1">
                <img src="images/swimmingpool/download (1).jpg"  alt="" width="260px" onclick="openModal(); currentSlide(1)" class="hover-shadow cursor">
                  </div>
                    <div class="gellary-item m-1">
                      <img src="images/swimmingpool/download (2).jpg" alt="" width="260px" onclick="openModal(); currentSlide(2)" class="hover-shadow cursor">
                        </div>
                       <div class="gellary-item m-1">
                     <img src="images/swimmingpool/download (3).jpg"  alt="" width="260px" onclick="openModal(); currentSlide(3)" class="hover-shadow cursor">
                   </div>
                <div class="gellary-item m-1">
             <img src="images/swimmingpool/images (3).jpg"  alt="" width="260px" onclick="openModal(); currentSlide(4)" class="hover-shadow cursor">
           </div>
         </div>
       </div>
    </div>
   </div>
 </section>   
        
        <div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="images/swimmingpool/download (1).jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="images/swimmingpool/download (2).jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="images/swimmingpool/download (3).jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="images/swimmingpool/images (3).jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
    </div>
    </div>
   
<hr />

        
       <script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
  
                        
                       
<hr />

          <h2 class="text-center"><b>Bed Rooms & Resturant</b></h2>
          <p class="text-center">Experience our relaxing Bed Rooms and Resturant.</p>
           
           
         
             
            
 <section id="gallery">
        <div class="container pb-5">
            <div class="row mt-4">
                <div class="col-md-12 p-0 ">
                    <div class="gellary-items d-flex flex-wrap justify-content-center">
                        <div class="gellary-item m-1">
                   <img src="images/Resturants/download (0)d.jpg"  alt="" width="260px" onclick="openModal1(); currentSlide1(1)" class="hover-shadow cursor">
                        </div>
                        <div class="gellary-item m-1">
                        <img src="images/Resturants/download.jpg"  alt="" width="260px" onclick="openModal1(); currentSlide1(2)" class="hover-shadow cursor">
                        </div>
                        <div class="gellary-item m-1">
                       <img src="images/Resturants/download b.jpg" alt="" width="260px" onclick="openModal1(); currentSlide1(3)" class="hover-shadow cursor">
                        </div>
                        <div class="gellary-item m-1">
                       <img src="images/Resturants/downlod c.jpg"  alt="" width="260px" onclick="openModal1(); currentSlide1(4)" class="hover-shadow cursor">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>   
        
        <div id="myModal1" class="modal">
  <span class="close cursor" onclick="closeModal1()">&times;</span>
  <div class="modal-content">

    <div class="mySlides1">
      
      <img src="images/Resturants/download (0)d.jpg" style="width:100%">
    </div>

    <div class="mySlides1">
      <img src="images/Resturants/download.jpg" style="width:100%">
    </div>

    <div class="mySlides1">
      <img src="images/Resturants/download b.jpg" style="width:100%">
    </div>
    
    <div class="mySlides1">
      <img src="images/Resturants/downlod c.jpg" style="width:100%">
    </div>

    <div class="caption-container">
      <p id="caption1"></p>
    </div>
    </div>
    </div>
   
   <script>
function openModal1() {
  document.getElementById("myModal1").style.display = "block";
}

function closeModal1() {
  document.getElementById("myModal1").style.display = "none";
}

var slideIndex1 = 1;
showSlides1(slideIndex1);

function plusSlides1(n) {
  showSlides1(slideIndex1 += n);
}

function currentSlide1(n) {
  showSlides1(slideIndex1 = n);
}

function showSlides1(n) {
  var i;
  var slides1 = document.getElementsByClassName("mySlides1");
  var dots1 = document.getElementsByClassName("demo1");
  var captionText1 = document.getElementById("caption1");
  if (n > slides1.length) {slideIndex1 = 1}
  if (n < 1) {slideIndex1 = slides1.length}
  for (i = 0; i < slides1.length; i++) {
      slides1[i].style.display = "none";
  }
  for (i = 0; i < dots1.length; i++) {
      dots1[i].className = dots1[i].className.replace(" active", "");
  }
  slides1[slideIndex-1].style.display = "block";
  dots1[slideIndex-1].className += " active";
  captionText1.innerHTML = dots[slideIndex-1].alt;
}
</script>


        
        <hr />


        <h2 class="text-center"><b>WellCome To Merrage Hall</b></h2>
          <p class="text-center">Experience our Beautiful And Large Merrage Hall with Resturants.</p>
           
         
 <section id="gallery">
        <div class="container pb-5">
            <div class="row mt-4">
                <div class="col-md-12 p-0 ">
                    <div class="gellary-items d-flex flex-wrap justify-content-center">
                        <div class="gellary-item m-1">
     <img src="images/MErrage HAll/download (1).jpg" alt=""  alt="" width="260px" onclick="openModal12(); currentSlide(1) "class="hover-shadow cursor">
                        </div>
                        <div class="gellary-item m-1">
      <img src="images/MErrage HAll/download (4).jpg" alt=""  alt="" width="260px" onclick="openModal12(); currentSlide(2) "class="hover-shadow cursor">
                        </div>
                        <div class="gellary-item m-1">
      <img src="images/MErrage HAll/images (3).jpg"  alt="" width="260px" onclick="openModal12(); currentSlide(3) "class="hover-shadow cursor">
                        </div>
                        <div class="gellary-item m-1">
       <img src="images/MErrage HAll/images.jpg"  alt="" width="260px" onclick="openModal12(); currentSlide(4) "class="hover-shadow cursor">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>   
        
        <div id="myModal12" class="modal">
  <span class="close cursor" onclick="closeModal12()">&times;</span>
  <div class="modal-content">

    <div class="mySlides12">
      <div class="numbertext12">1 / 4</div>
      <img src="images/MErrage HAll/download (1).jpg" style="width:100%">
    </div>

    <div class="mySlides12">
      <div class="numbertext12">2 / 4</div>
      <img src="images/MErrage HAll/download (4).jpg" style="width:100%">
    </div>

    <div class="mySlides12">
      <div class="numbertext12">3 / 4</div>
      <img src="images/MErrage HAll/images (3).jpg">
    </div>
    
    <div class="mySlides12">
      <div class="numbertext12">4 / 4</div>
      <img src="images/MErrage HAll/images.jpg">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
    </div>
    </div>
         <script>
function openModal12() {
  document.getElementById("myModal12").style.display = "block";
}

function closeModal12() {
  document.getElementById("myModal12").style.display = "none";
}

var slideIndex12 = 1;
showSlides1(slideIndex1);

function plusSlides12(n) {
  showSlides12(slideIndex12 += n);
}

function currentSlide12(n) {
  showSlides12(slideIndex12 = n);
}

function showSlides12(n) {
  var i;
  var slides12 = document.getElementsByClassName("mySlides12");
  var dots12 = document.getElementsByClassName("demo12");
  var captionText12 = document.getElementById("caption12");
  if (n > slides12.length) {slideIndex12 = 1}
  if (n < 1) {slideIndex12 = slides12.length}
  for (i = 0; i < slides12.length; i++) {
      slides12[i].style.display = "none";
  }
  for (i = 0; i < dots1.length; i++) {
      dots1[i].className = dots1[i].className.replace(" active", "");
  }
  slides12[slideIndex-1].style.display = "block";
  dots12[slideIndex-1].className += " active";
  captionText12.innerHTML = dots[slideIndex-1].alt;
}
</script>     
               
        <hr />


<div class="main" style="flex-wrap:wrap;display; background-color:#000">
<div class="one1" style="display:flex; justify-content: space-around; margin-left:-20px">
<table>
<tr><td> <b> Headffice, </b></td></tr>
<tr><td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="color:#0F0" class="fa fa-phone"></i> MA Jinnah road Karachi</td></tr>
<tr><td> &nbsp;&nbsp;&nbsp;<i style="color:#0F0" class="fa fa-phone"></i> UAN: 111-729-526</td></tr>
<tr><td> &nbsp;&nbsp;&nbsp;<i style="color:#0F0" class="fa fa-phone"></i> +92-311-1729526</td></tr>
<tr><td><i style="color:#0F0" class="fa fa-phone"></i> +1(234)333-453</td></tr>
<tr><td><i style="color:#0F0" class="fa fa-phone"></i> +1(234)254-456</td></tr>
<tr><td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<i style="color:#0F0" class="fa fa-envelope"></i> info@rizwanhtel.com</td></tr>

</table>
</div>
<div class="two" style="margin-left:5px">
<b>Useful Links</b>
</div>
  
  <div class="three" style="text-align:center">
  <b>Contact With Us</b><br />
<a href="#"><i style="color:#FFF; border-radius:50%; background-color:#00C; width:30px; height: 30px;" id="c1" class="fa fa-facebook"></i></a>
<a href="#"><i style="color:#FFF; border-radius:50%; background-color:#00C; width:30px; height: 30px;" id="c2" class="fa fa-twitter"></i></a>
<a href="#"><i style="color:#FFF; border-radius:50%; background-color:#00C; width:30px; height: 30px;" id="c3" class="fa fa-instagram"></i></a>
<a href="#"><i style="color:#FFF; border-radius:50%; background-color:#00C; width:30px; height: 30px;" id="c4" class="fa fa-youtube"></i></a>
  </div>
  </div>
  
</div></div>

 <footer class="footer-area section_gp" style="background-color:#06F">
     <div class="container">
      <div class="row">
       <span style="color:#FFF">® All Rights Reserved by © 2020-2025</sp-an>
        </div>
               </div>
                </footer>

</body>
</html>