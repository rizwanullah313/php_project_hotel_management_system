<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    

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
.vl {
  border-left: 5px solid red;
  height: 140px;
  margin-left:20px;
}
.line1
{
	margin-top:10px;
	margin-left:20px;
	text-align:justify;
}
.line2
{
	margin-top:-10px;
	margin-left:20px;
	text-align:justify;
}
</style>

</head>

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
                <a class="nav-link" href="index.php">Home </a>
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
                     <li class="nav-item"><a class="nav-link" href="About.php">About<span class="sr-only">(current)</span></a></li>
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


<br/>

                
         <div class="container-fluid">
   <div class="container">   
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="card mb-12">
              <div class="card-body">
                <div class="container">  
                   <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-8">
                       <div class="card bg-light mb-8">
                         <div class="card-body">
                         
                         <div class="newline1" id="newline1">
                          <div class="vl"><br><i><p class="line1">Ideally located in the heart of Karachi, provide its guests an uncompromising level
                           of services – personal yet efficient with a high level comfort.</p></i></div><br>
              
The hotel has 182 centrally air-conditioned well furnished rooms with modern facilities including banqueting, conferences, Board Rooms, round the clock room services, Cofffee Shop, well equipped Gymnasium and the laundry services.
<br><br>
Our Kanwal Restaurant offers buffet breakfast, luncheon, Hi-Tea, Dinner and Ala Cart’e includes traditional and International cuisine besides our open air Bar be Que Restaurant offers a vast variety of delicious Pakistani and International cuisine.
</div>

 <div class="hide1" id="dep1">
                         Rates:<br>
                         Rs. 1000 + Tax (Per Person)<br><br>
                         
                         <img src="images/Resturantsimage1.jpg" alt="" width="100%" height="200%" >
                         </div>
                         
                            <div class="hide2" id="dep2">
                         Rates:<br>
                         Rs. 1000 + Tax (Per Person)<br><br>
                         
                         <img src="images/Resturantsimage1.jpg" alt="" width="100%" height="200%" >
                         </div>
                         
                         
                        <div class="hide3" id="dep3">
                        CAKE SHOP:<br><br>

Freshly baked pastries, cakes and savoury delicacies—just try to resist<br><br>

There’s a reason our Cake Shop is famous. Every day our experienced team of talented pastry chefs concoct an array of delicious treats ranging from mouth-watering cakes to perfect scones, delicious sandwiches and decadent chocolates.
<br><br>
The Cake Shop is the ideal place to enjoy a quiet bite or to stay longer and savour our specialty beverages. With delicacies prepared in our kitchen, a visit to the Cake Shop is as much about the food as it is the experience.<br><br>

Alternatively, you can take your pastries away to enjoy in the comfort of your room or even order a custom-designed cake for a special occasion.<br><br>
                         <img src="images/Cakeimage.jpg" alt="" width="100%" height="200%" >
                         
                         </div>
                         
                         </div>
                      </div>
                    </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="card bg-light mb-4">
              <div class="card-body">
             
                HI-TEA 
           <hr
        style="
              width: 45px;
              border: 1.5px solid red;
              text-align: left;
              margin-left: 0;   "  />
             <br>
<a href="#" id="click1"><img src="images/Resturantsimage1.jpg" alt="" width="100%" height="200%" ></a><br><br>
  BBQ DINNER
    <hr
      style="
              width: 45px;
              border: 1.5px solid red;
              text-align: left;
              margin-left: 0;   "  />
              <br>
                 <br>
        <a href="#"  id="click2"> <img src="images/BBQimage.jpg" alt=""  width="100%" height="200%"  ></a><br><br>
                      CAKE SHOP
                      <hr
                style="
                  width: 45px;
                  border: 1.5px solid red;
                  text-align: left;
                  margin-left: 0;   "  />
                  <br><br>
          <a href="#"  id="click3"> <img src="images/Cakeimage.jpg" alt=""   width="100%" height="200%" ></a>
                  
                 </div>
                   </div>
                      </div>
                        </div>
                          </div>
                             </div>  
                               </div>
                                   </div>
                                     </div>
                                       </div>
                                         </div>
    
    
    <br/>
    

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

<script>
$(document).ready(function() {
$('#dep1').hide();

$('#click1').click(function(){
$('#dep1').show();
$('#newline1').hide();
$('#dep2').hide();
$('#dep3').hide();
})   
}) 
</script>

<script>
$(document).ready(function() {
$('#dep2').hide();

$('#click2').click(function(){
$('#dep2').show();
$('#newline1').hide();
$('#dep1').hide();
$('#dep3').hide();
})   
}) 
</script>

<script>
$(document).ready(function() {
$('#dep3').hide();

$('#click3').click(function(){
$('#dep3').show();
$('#newline1').hide();
$('#dep1').hide();
$('#dep2').hide();
})   
}) 
</script>

</html>
