<style type="text/css">
.main
{
	background-color:#099;
	color:#FFF;
}
.a1
{
	color:#FFF;
	font-size:24px;
}
</style>
<?php
session_start();
if(isset($_SESSION['username']))
{

}
else
{echo "<script>location.href='login.php'</script>";
}
?>

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

</head>

<body class="main">

<a href="RoomBooking.php" class="a1">Go Back</a>
<center><h1>WELLCOME TO USER PROFILE</h1></center><br />
<br />
<form method="get">

<table align="center" border="5px" bordercolor="#00FF00" cellpadding="0" cellspacing="0" style="text-align:center">

 <?php
 $s1 = $_SESSION['username'];
			include "db.php";
			$query = "select * from login where username = '$s1' ";//where approved = 'not approved'
			$query_run = mysqli_query($conn,$query);
			while($row=mysqli_fetch_array($query_run))
			{		
			?>
            
            <tr>
            <td>ID:
            </td>
            <td>
             <?php
			
			echo $row["id"];
			?>
            
            </td>
            </tr> <tr> <td>Name:
            </td>
             <td>
         <?php
			echo $row["username"];
			?>
            </td>
             </tr> <tr> <td>Email:
            </td>
             <td>
            <?php
			echo $row["email"];
			
			?>
            </td>
            </tr>
            <?php
			
			}
			?>
 </table>
 </form>
 <br />
 <br />
 <div class="container">
  <center><h2>change password</h2></center>
  <!-- Trigger the modal with a button -->
  <center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click Here</button></center>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>   
        </div>
        <div class="modal-body">
        <form method="post" action="updatephp.php">
         <table style="padding:30px">
         <tr><td>Enter New PAssword:</td><td><input type="password" placeholder="Enter New PAssword" id="pass" name="pass" required="required" /></td></tr>
         <tr><td>Confirm PAssword:</td><td><input type="password" placeholder="Confirm PAssword" id="pass2" name="pass2" required="required" /></td></tr>
         <tr><td colspan="2"><input type="submit" value="submit" id="btn1" name="btn1" style="width:100%" onClick="myfun()" /></td></tr>
         </table>
         </form>
        </div>
      </div>
      
    </div>
  </div>
  
</div> 
<script type="text/javascript">
function myfun()
{
	var pass1 = document.getElementById("pass");
	var pass2 = document.getElementById("pass2");
	
	if(!pass1.checkValidity())
	{
		alert ("Please Enter Your PAssword");
	}
	if(!pass2.checkValidity())
	{
		alert ("Please Enter Your Confirm PAssword");
	}
	if(pass1.value!=pass2.value)
	{
		alert ("PAssword Does Not MAtch Please Try Again");
		return false;
	}
}
</script>
<hr />
<br />
<br />
<hr />
            
            
 </form>
 <br />
 <br />
 <div class="container">
<center><button type="button"  data-toggle="modal" data-target="#myModal1" style=" margin-top:-35px; float:right">ADD</button></center>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>   
        </div>
        <div class="modal-body">
        <form method="post" action="add.php">
         <table style="padding:30px">
         <tr><td>Enter user Name:</td><td><input type="text" placeholder="Enter user Name" id="name1" name="name1" required="required" /></td></tr>
         <tr><td>Enter user Email:</td><td><input type="email" placeholder="Enter user Email" id="email1" name="email1" required="required" /></td></tr>
         <tr><td>Enter user Password:</td><td><input type="password" placeholder="Enter user password" id="p2" name="p2" required="required" /></td></tr>
         <tr><td colspan="2"><input type="submit" value="ADD" id="btn12" name="btn12" style="width:100%" /></td></tr>
         </table>
         </form>
        </div>
      </div>
      
    </div>
  </div>
  
</div> 
           
       
</table>


	<table width='80%' border=2px align="center" style="text-align:center">

	<tr bgcolor='#CCCCCC' >
		<td>ID</td>
        <td>Name</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 
	include "db.php";
	$result = mysqli_query($conn, "SELECT * FROM login ORDER BY id DESC"); 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>

<br /><br />
</body>
</html>