<html>
<head>
	<title>Update Records</title>
</head>
<body>
<?php
//connecting to the database/mysql
//localhost, root-username, ''-password
$con = mysqli_connect('localhost','root','');
//@mysql_connect("localhost","root","");
//select database
//$con - connection reference, 'getdata'-database name
mysqli_select_db($con,'spore');
//mysql_select_db("getdata");
//select query
//data - table name
$sql = "SELECT * FROM spore";

//executing query
$records = mysqli_query($con,$sql);
?>
<table>
	<tr>
		
		<th>Appointment Name</th>
		<th>Current Location</th>
		<th>Destined Location</th>
		<th>Time</th>
		<th>Date</th>
		<th>Mode Of Transportation</th>
	</tr>
	<?php
	while($row = mysqli_fetch_array($records))
	{
		
//['id'] - name of the columns in the table
		echo "<tr><form action =update.php method = post>";
		echo "<td><input type=text name=a_name value='".$row['appointment_name']."'></td>";
		echo "<td><input type=text name=c_location value='".$row['current_location']."'></td>";
		echo "<td><input type=text name=d_location value='".$row['destined_location']."'></td>";
		echo "<td><input type=time name=a_time value='".$row['appointment_time']."'></td>";
		echo "<td><input type=date name=a_date value='".$row['appointment_date']."'></td>";
		echo "<td><input type=text name=t_kind value='".$row['transportation_kind']."'></td>";
		echo "<input type=hidden name=a_id value='".$row['id']."'>";
		echo "<input type=hidden name=u_id value='".$row['user_id']."'>";
		echo "<input type=hidden name=t_id value='".$row['transportation_id']."'>";
		echo "<td><input type=submit>";
		echo "</form><tr>";

	}

	?>
</table>
</body>
</html>