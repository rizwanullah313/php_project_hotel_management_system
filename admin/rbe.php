<?php
session_start();
if(isset($_SESSION['username']))
{

}
else
{echo "<script>location.href='login.php'</script>";
}
?>
<?php
// including the database connection file
include_once("db.php");
$s1 = $_POST['uemail'];
 include "db.php";
	$result = mysqli_query($conn, "SELECT * FROM roombooking where id='$s1'"); 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) {
    $name = $res['username'];
    $email = $res['email'];
	$roomt = $res['roomtype'];
	$ida = $res['checkindate'];
	$oda = $res['checkoutdate'];
	$iddd =$res['id'];
	$ty = $res['total'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
  <script>
		function myfun()
		{
            var d = document.getElementById("name").value;
			if(d=="Double Room")
			{
				var c = 400;
			}
			document.getElementById("name1").value=c;
			
			if(d=="Single Room")
			{
				var c = 300;
			}document.getElementById("name1").value=c;
        }
            
			
			function myFunction() {
            var p1 = document.getElementById("name12").value;
			var p2 = document.getElementById("name1").value;
			var totall = p1*p2;
			 document.getElementById("demo").value=totall;
            }
           
        </script>
<body>

<?php
$date1 = date_create("$ida");
$date2 = date_create("$oda");

//difference between two dates
$diff = date_diff($date1,$date2);

//count days
$diff->format("%a");
?>
    <a href="userprofile.php">Home</a>
    <br/><br/>
    <input type="text" id="name" value="<?php echo $roomt;?>"  />
        <input type="text" readonly id="name1" /> 
        <input type="text" name="username" readonly id="name12" value="<?php echo $diff->format("%a");
?>">
        <input type="button" value="Genertae" onClick="myfun()"/>
        <input type="button" value="Total" onClick="myFunction()"/>
        <br/><br/>
        
    <form name="form1" method="post" action="roombookingedit.php">
        <table border="0"> 
         <tr>
                <td>ID</td>
                <td><input type="text" name="id" id="id" readonly value="<?php echo $iddd;?>"></td>
            </tr>    
            <tr>
                <td>Name</td>
                <td><input type="text" name="username" id="username" readonly value="<?php echo $name;?>"></td>
            </tr>  
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email" readonly value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="text" name="demo" readonly id="demo" /></td>
            </tr>
            <tr>
            <tr></tr>
              <tr></tr>
                <!--<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td> -->
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
</body>
</html>
</body>
</html>

