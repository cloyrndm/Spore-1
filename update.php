<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'spore');
$sql = "UPDATE spore SET appTitle='$_POST[appTitle]',emailAdd='$_POST[emailAdd]',phoneNumber='$_POST[phoneNumber]',dateSchedule='$_POST[dateSchedule]', arrivalTime='$_POST[arrivalTime]', WHERE id='$_POST[a_id]'";

if(mysqli_query($con,$sql))
header("refresh:1; url=index.php");
else
	echo "not updated";

?>

