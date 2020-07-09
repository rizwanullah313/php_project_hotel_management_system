<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<script type="text/javascript">

<?php 
include "db.php";

$title =  $_POST["title"];
$uname =  $_POST["uname"];
$email =  $_POST["uemail"];
$phone =  $_POST["uphone"];
$count =  $_POST["ucountry"];
$ucity =  $_POST["ucity"];
$roomt =  $_POST["uroomtype"];
$nroom =  $_POST["unumberofroom"];
$adult =  $_POST["uadults"];
$idate =  $_POST["date1"];
$odate =  $_POST["date2"];
$addre =  $_POST["uaddress"];

$query="INSERT INTO `roombooking` (`title`,`username`,`email`,`phoneno`,`country`,`city`,`roomtype`,`numberofrooms`,`adults`,`address`,    `checkindate`,`checkoutdate`)
VALUES ('$title','$uname','$email','$phone','$count','$ucity','$roomt','$nroom','$adult','$addre','$idate','$odate')";
$run=mysqli_query($conn,$query);
if($run==TRUE)
{
echo "Record inserted successfully";

}
else
{
echo "error";}
?>
