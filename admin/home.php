
 <?php
include "db.php";
$uname=$_POST["username"];
$pwd=$_POST["password"];
session_start();
if(isset($_SESSION['username']))
{
}

$sql = "select * from login where username = '$uname' and password = '$pwd'";
 $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {  
       $_SESSION['username']=$uname;
echo "<script>location.href='mainmenu.php'</script>";}
else
{
echo "<script>alert('user name / password incorrect')</script>";
echo "<script>location.href='login.php'</script>";
}
?>