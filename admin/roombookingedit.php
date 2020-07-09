
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
    
    $id = $_POST['id'];
	$username = $_POST['username'];
    $email = $_POST['email'];
	$total = $_POST['demo'];
    $approved = 'approved';
	
    // checking empty fields
   
       $result = mysqli_query($conn, "UPDATE roombooking SET approved='$approved',total='$total' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
       header("Location: RoomBooking.php");
	   
	  // echo $id;echo $username; echo $email; echo $total; echo $approved;
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
   
</body>
</html>
</body>
</html>
