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

 <br/>
    <br/>


   <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card bg-light mb-6">
                  <div class="card-body">
                  
                    <span
                      class="text-primary font-weight-bold"
                      style="font-size: 25px"  >
                   <h1  style="text-align:center" > Contact Information</h1>                    
                    </span>
                    
                    <br />
                    <br />
                    
                    <p class="fa fa-map-marker">&nbsp; &nbsp; BUKC Stadium road Dalmia Karachi</p><br /><br />
                   <p class="fa fa-phone"> &nbsp; +1(455)545-454</p>
                   
                   <br />
                   <br />
                   
                     <p class="fa fa-envelope">  &nbsp; Rizwan123@gmail.com</p><br /><br />
                        <p class="fa fa-clock-o"> &nbsp;&nbsp; 06:00 AM to 22:00 PM</p>
                           <h1>Follow us on: 
                           </h1>
                           
                           <br/>
                           
<a href="#"><i style="color:#FFF; border-radius:50%; background-color:#00C; width:30px; height: 30px;" id="c1" class="fa fa-facebook"></i></a>
<a href="#"><i style="color:#FFF; border-radius:50%; background-color:#00C; width:30px; height: 30px;" id="c2" class="fa fa-twitter"></i></a>
<a href="#"><i style="color:#FFF; border-radius:50%; background-color:#00C; width:30px; height: 30px;" id="c3" class="fa fa-instagram"></i></a>
<a href="#"><i style="color:#FFF; border-radius:50%; background-color:#00C; width:30px; height: 30px;" id="c4" class="fa fa-youtube"></i></a>
                                
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">    
           <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card bg-light mb-6">
                  <div class="card-body">
 <span
                      class="text-primary font-weight-bold"
                      style="font-size: 25px;"  >
                   <h1 style="text-align:center" >Message Us Now!  </h1>              
                    </span>                    
                     <form method="post" action="contactphp.php">
   <div class="form-group">
   <input class="form-control" id="inputemailaddress1" type="text" placeholder="Enter Your Full Name" id="name" name="name" data-toggle="tooltip"  data-placement="right" title="Enter Your Valid Email!" required="required" /><br/>

<input class="form-control" id="inputemailaddress2" type="tel" placeholder="Enter Your Phone Number" id="phone" name="phone" data-toggle="tooltip"  data-placement="right" title="Enter Your phone number!" required="required" /><br/>

<input class="form-control" id="inputemailaddress" type="email" placeholder="Enter Email Address" id="emaill" name="email" data-toggle="tooltip"  data-placement="right" title="Enter your Full Name!" required="required" />
    <script>
       $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip();
           });
             </script>
             
             <script>
			 function myfunction()
			 {
			 var num = document.getElementById("emaill");
			 var num1 = document.getElementById("name");
             var num2 = document.getElementById("phone");
			 if(num=="")
			 {
				 alert("Please Enter Your Email Address!!!!");
			 }
              if(num2=="")
			 {
				 alert("Please Enter Your phone number!!!!");
			 }
              if(num1=="")
			 {
				 alert("Please Enter your Full Name!!!!");
			 }
			 }
			 </script>
               </div>
                 <div class="form-group">
                   <input class="form-control" id="inputmessage" name="inputmessage" type="text" placeholder="Message"/>
                     <img id="txtmessage1" src="images/speech-copy.png" alt="">
                       </div>
                         <div class="form-group">
                            <button  onclick="myfunction()">Message Sent</button>
                              </div>
                                </form>
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
    <br/>
   <!-- Map Section Begin -->
                  <div class="map">
              <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355676389!2d-118.69193052429003!3d34.02073049434915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1568665689853!5m2!1sen!2sbd"
            height="560" style="border:0; width:100%" allowfullscreen=""></iframe>
    </div>
            <!-- Map Section End -->


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

