
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
 
if(isset($_POST['update1']))
{    
    $id = $_POST['id'];
    $name=$_POST['username'];
    $email=$_POST['email'];  
	$t1 = $_POST['Total'];  
    // checking empty fields
    if(empty($name) || empty($email)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
 
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
       $result = mysqli_query($conn, "UPDATE hallbooking SET approved='approved',total='$t1' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: profit.php");
    }
}
?>
<?php
//getting id from url
$sql = "SELECT * FROM hallbooking";
$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
while($res = mysqli_fetch_array($result))
{
    $id = $res['id'];
    $name = $res['huname'];
    $email = $res['huemail'];
	$phone = $res['huphone'];
	$ida = $res['idate'];
	$oda = $res['odate'];
}
?>
<?php
$date1 = date_create("$ida");
$date2 = date_create("$oda");

//difference between two dates
$diff = date_diff($date1,$date2);

//count days
$t = $diff->format("%a")*40000;
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
  <a href="profit.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="hallbookingedit.php">
        <table border="0">
            
             <tr>
                <td>ID</td>
                <td><input type="text" name="id" id="id" readonly value="<?php echo $id;?>"></td>
            </tr>  
            <tr>
                <td>Name</td>
                <td><input type="text" name="username"  id="username" readonly value="<?php echo $name;?>"></td>
            </tr>  
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email" readonly value="<?php echo $email;?>"></td>
            </tr>
             <tr>
                <td>Phone</td>
                <td><input type="text" name="Phone" id="Phone" readonly value="<?php echo $phone;?>"></td>
            </tr> 
            <tr>
                <td>Total</td> 
                <td><input type="text" name="Total" id="Total" readonly value="<?php echo $t;?>"> </td>
            </tr>  
            <tr>
                <td><!-- <input type="hidden" name="id" value=<?php echo $_GET['id'];?>> --></td>
                <td><input type="submit" name="update1" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
</body>
</html>
