<?php
	include "db.php";
// hall booking part

$htitle =  $_POST["htitle"];
$huname =  $_POST["hname"];
$hemail =  $_POST["hemail"];
$hphone =  $_POST["hphone"];
$hcount =  $_POST["hcountry"];
$hucity =  $_POST["hcity"];
$huguest =  $_POST["hguest"];
$date11 =  $_POST["date11"];
$date22 =  $_POST["date22"];
$huaddre =  $_POST["haddress"];

$query="INSERT INTO `hallbooking` (`hutitle`,`huname`,`huemail`,`huphone`,`hucountry`,`hucity`,`huguest`,`huaddress`,`idate`,`odate`)
VALUES ('$htitle','$huname','$hemail','$hphone','$hcount','$hucity','$huguest','$huaddre','$date11','$date22')";
$run=mysqli_query($conn,$query);
if($run==TRUE)
{
echo "Record inserted successfully";

}
else
{
echo "error";}

?>