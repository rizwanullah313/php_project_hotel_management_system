<?php
session_start();
if(isset($_SESSION['username']))
{

}
else
{echo "<script>location.href='login.php'</script>";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
</head>

<style type="text/css">
#id
{
	border:1px solid black;
	width:400px;
	text-align:center;
}
#name
{
	border:1px solid black;
	width:100px;
	text-align:center;
}
#phone
{
	border:1px solid black;
	width:400px;
	text-align:center;
}
#gmail
{
	border:1px solid black;
	width:400px;
	text-align:center;
}
#message
{
	border:1px solid black;
	width:2000px;
	text-align:center;
}
</style>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["username"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="userprofile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="mainmenu.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="News Letter.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
					<li>
                        <a href="RoomBooking.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>   
					</ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
            <form method="post">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="margin-left:35%" />
           </form>
            <table border="1px" style="text-align:center; margin-top:20px" id="myTable">
      <tr class="header"> <th id="id">Name</th> <th id="name">ID</th> <th id="phone">PhoneNO</th> <th id="gmail">Gmail</th> <th id="message">Message</th> </tr>
           
            <?php
			include "db.php";
			$query = "select * from message ";
			$query_run = mysqli_query($conn,$query);
			while($row=mysqli_fetch_array($query_run))
			{		
			?>
            
            <tr>
            <td>
            <?php
			echo $row["username"];
			?>
            </td>
            
             <td>
           <?php
			
			echo $row["id"];
			?>
            </td>
            
             <td>
            <?php
			echo $row["phone"];
			
			?>
            </td>
            
             <td>
            <?php
			echo $row["email"];
			?>
            </td>
            
             <td>
            <?php
			echo $row["message"];
			?>
            </td>
            
            </tr>
            <?php
			
			}
			?>
 </table>
</div>
</div>
</div>
           <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>