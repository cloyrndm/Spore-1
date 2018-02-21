<?php
include_once('db.php');

$appTitle = $_POST['appTitle'];
$emailAdd = $_POST['emailAdd'];
$phoneNumber = $_POST['phoneNumber'];
$dateSchedule = $_POST['dateSchedule'];
$timeArrival = $_POST['timeArrival'];
$conn = mysqli_connect('localhost','root', '', 'spore');

if(mysqli_query($conn, "INSERT INTO sporeTable VALUES('$appTitle','$emailAdd','$phoneNumber','$dateSchedule','$timeArrival')"))
echo "success";
else
echo "failed";
?>