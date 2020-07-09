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

$idate =  $_POST["name1"];
$odate =  $_POST["p2"];
$addre =  $_POST["email1"];

$query="INSERT INTO `login` (`username`,`password`,`email`)
VALUES ('$idate','$odate','$addre')";
$run=mysqli_query($conn,$query);
if($run==TRUE)
{
echo "<script>location.href='userprofile.php'</script>";}
else
{
echo "error";}

?>