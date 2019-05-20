<?php
$hostnname = "localhost";
$user = "root";
$password="";
$db="login1";
$conn = new mysqli($hostnname,$user,$password,$db);
function display($table,$conn)
{
	$query = "SELECT * FROM $table";
	$result_id = $conn->query($query);
	$column = mysqli_num_fields($result_id);
	echo "<table border=1 >";
	while($row = mysqli_fetch_row($result_id))
	{
		echo "<tr>";
		for($c=0;$c<$column;$c++)
			echo "<td>$row[$c]</td>";
		echo "</tr><br>";
	}
	echo "</table>";
}

?>


<html lang="en">
<head>
<title>
Document
</title>
</head>

<body>
<?php display("Users",$conn); ?>
</body>

</html>
