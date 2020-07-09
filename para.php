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
$app = "not Approved";
$tot = "6000";

echo $title;
echo '<br>';
echo $uname;
echo '<br>';
echo $email;
echo '<br>';
echo $phone;
echo '<br>';
echo $count;
echo '<br>';
echo $ucity;
echo '<br>';
echo $roomt;
echo '<br>';
echo $nroom;
echo '<br>';
echo $adult;
echo '<br>';
echo $idate;
echo '<br>';
echo $odate;
echo '<br>';

$s1 = "SingleRoom";
$s2 = "DoubleRoom";
$s3 = "GuessHouse";
$s4 = "Standard";

if('$roomt'=='$s1')
{
echo "100";
echo '<br>';
}
else if('$roomt'=='$s2')
{
echo "200";
echo '<br>';
}
else if('$roomt'=='$s3')
{
echo "300";
echo '<br>';
}
else if('$roomt'=='$s4')
{
echo "400";
echo '<br>';
}
?>