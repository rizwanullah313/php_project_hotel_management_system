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

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  
<link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'rel='stylesheet'>

<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" > </script>

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
                                    <li><a class="dropdown-item" href="Roombooking.php">Room Booking<span class="sr-only">(current)</span> </a></li>
                                    <li><a class="dropdown-item" href="HallBooking.php">Hall Booking</a></li> 
                                    <li><a class="dropdown-item" href="DisheshOrder.php">Room Rate </a></li>
                                </ul> 
                                  </li> 
                  
                     <li class="nav-item"><a class="nav-link" href="Services.php">Services</a></li>
                     <li class="nav-item"><a class="nav-link" href="Contact.php">Contact<span class="sr-only">(current)</span></a></li>

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


<br>
<br>



<!-- What we are doing -->
    <div class="container-fluid bg-light">
      <div class="container text-center py-5">

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow-lg mb-12 py-12">
              <div class="card-body text-center">
              <script>
$(document).ready(function() {
$(function() {
$( "#date1" ).datepicker();
$( "#date2" ).datepicker();
});
})
</script>
       
<form method="post" action="roombookingphp.php">
     
<table cellpadding="10px" align="center">
<tr>
<td>
<input type="text" placeholder="Enter Your Title"  readonly style="background-color:#6CC; color:#000" /> 
</td> 
<td>
<select style="width:110%" id="title" name="title">
<option hidden="" value="0" >-Select-</option>
<option>Mr.</option>
<option>Ms.</option>
<option>Dr.</option>
<option>Mrs.</option>
</select>
</td>
</tr>

<tr>
<td>
<input type="text" placeholder="Enter Your Name"  readonly style="background-color:#6CC; color:#000" />      
</td> 
<td>
<input type="text" placeholder="Enter Your Full Name" id="uname" name="uname" required   style="width:110%" pattern="[A-Za-z]{0-30}" maxlength="20" />
</td>
</tr>

<tr>
<td>
<input type="text" placeholder="Enter Your Email" readonly style="background-color:#6CC; color:#000" /> 
</td> 
<td>
<input type="email" placeholder="Your Email Address" id="uemail" name="uemail" required style="width:110%" />
</td>
</tr>

<tr>
<td><input type="text" placeholder="Your Phone Number" readonly style="background-color:#6CC; color:#000" />
</td> <td><input type="tel" placeholder="Enter Your PhoneNo" id="uphone" name="uphone" required  style="width:110%" pattern="^\d{10}$" maxlength="11" />
</td>
</tr>

<tr>
<td><input type="text" placeholder="Your Country" readonly style="background-color:#6CC; color:#000" />   
</td> 
<td>
<select  style="width:110%" id="ucountry" name="ucountry">
<option hidden="" value="0">-Select-</option>
<option>PAkistan</option>
<option>India</option>
<option>England</option>
<option>Amreica</option>
</select>
<td>
</tr>

<tr>
<td><input type="text" placeholder="Your City" readonly style="background-color:#6CC; color:#000" />     
</td> 
<td>
<select  style="width:110%" id="ucity" name="ucity">
<option hidden="" value="0">-Select-</option>
<option>KArachi</option>
<option>Islamabad</option>
<option>Delhi</option>
<option>Channai</option>
<option>London</option>
<option>Bermengm</option>
<option>Newyork</option>
<option>Washington</option>
</select>
</td>
</tr>

<tr>
<td><input type="text" placeholder="Room Type" readonly style="background-color:#6CC; color:#000" />
</td> 
<td>
<select  style="width:110%" id="uroomtype" name="uroomtype">
<option hidden="" value="0">-Select-</option>
<option>SingleRoom</option>
<option>DoubleRoom</option>
<option>GuessHouse</option>
<option>Standard Room</option>
</select>
</td>
</tr>

<tr>
<td><input type="text" placeholder="Number of Rooms" readonly style="background-color:#6CC; color:#000" />
</td> 
<td>
<select  style="width:110%" id="unumberofroom" name="unumberofroom">
<option hidden="" value="0">-Select-</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select>
</td>
</tr>

<tr>
<td>
<input type="text" placeholder="Adults" readonly style="background-color:#6CC; color:#000" />     
</td> 
<td> 
<select  style="width:110%" id="uadults" name="uadults">
<option hidden="" value="0">-Select-</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select>
</td>
</tr>

<tr>
<td>
<input type="text" placeholder="Check in Date" readonly style="background-color:#6CC; color:#000" />
</td> 
<td><input type="text" required id="date1" name="date1"  style="width:110%"/>
</td>
</tr>

<tr>
<td>
<input type="text" placeholder="Check Out Date" readonly style="background-color:#6CC; color:#000" /> 
</td> 
<td>
<input type="text" required id="date2" name="date2" style="width:110%" />
</td>
</tr>

<tr>
<td>
<input type="text" placeholder="Enter Your addres" readonly style="background-color:#6CC; color:#000" />
</td> 
<td>
<textarea  style="width:110%" id="uaddress" name="uaddress" pattern="[A-Za-z]{0-30}" maxlength="100"></textarea>
</td>
</tr>
<tr>
<td colspan="2" ><input type="submit" value="submit" name="button"  style="width:100%" /></td>
</tr>

</table>
</form>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- What we are doing end -->



<br>
<br>
<br>



</script>
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