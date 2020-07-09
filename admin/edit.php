
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
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $name=$_POST['username'];
    $email=$_POST['email'];    
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
        $result = mysqli_query($conn, "UPDATE login SET username='$name',email='$email' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: userprofile.php");
    }
}
?>
<?php
//getting id from url
$sql = "SELECT * FROM login";
$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
 
while($res = mysqli_fetch_array($result))
{
    $name = $res['username'];
    $email = $res['email'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="userprofile.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="username" value="<?php echo $name;?>"></td>
            </tr>  
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
</body>
</html>
