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
include "db.php";
$s1 = $_SESSION['username'];
$p1 = $_POST["pass2"];

$query = "update login set password  = '$p1' where username = '$s1' ";//where approved = 'not approved'
			if( mysqli_query($conn,$query))
			{
				echo "<script>location.href='userprofile.php'</script>";
			}
			else
			{
				echo "Error Please Try Again";
			}
?>