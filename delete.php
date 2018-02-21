<?php

	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'spore');

	$sql = "DELETE FROM spoor WHERE id = '$_GET[id]'";

	if(mysqli_query($con,$sql))
		header("refresh:1; url=index.php");
	else
		echo "error"


?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id= '$_GET[id]'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>