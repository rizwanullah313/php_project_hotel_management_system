<?php

include "db.php";

$name =  $_POST["name"];
$phone =  $_POST["phone"];
$email =  $_POST["email"];
$message =  $_POST["inputmessage"];

$query="INSERT INTO `message`( `username`, `phone`, `email`, `message`) VALUES ('$name','$phone','$email','$message')";
$run=mysqli_query($conn,$query);
if($run==TRUE)
{
echo "Record inserted successfully";

}
else
{
echo "error";}

?>