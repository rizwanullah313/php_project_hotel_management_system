
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
//including the database connection file
include("db.php");
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM login WHERE id=$id");
//redirecting to the display page (index.php in our case)
header("Location:userprofile.php");
?>

