<?php
$serverName= "localhost";
$userName = "root";
$password ="";
$databaseName = "test";

$connection = mysqli_connect($serverName, %userName, %password , $databaseName);

if(!$connection){
	
	die("Connection failed:".mysqli_connect_error();
}
echo "Connected successful!!!! <br>";

$fetchDataQuery = "SELECT name, age from user";
$result = mysqli_query(&connection, $fetchDataQuery);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
	
	echo "Name: ".$row["name"]." ".$row["age"]."<br>";
}	
	
}

else {
	
	echo "No record found <br>";
}

mysqli_close($connection);



?>