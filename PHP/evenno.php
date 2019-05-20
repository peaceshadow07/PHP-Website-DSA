<html>

<head>
<title>Numbers</title>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">

<?php
$flag=true;
$n1=0;
$nerr="";
if(empty($_GET['n']))
{
	$nerr="Value required*";
	$flag=false;
}
else
	$n1=$_GET['n'];
?>
<center>
<h2>First N Even Numbers<h2>
<form>
<input type="text" name="n" size="35" placeholder="Enter value of N" ><br><br>
<input type="submit" name="s" value="Print"><br><br>
</form>

<font class="result">
<?php
	if(isset($_GET['s'])&& is_numeric($_GET['n']))
	{
		$e=2;
		for($i=1;$i<=$_GET['n'];$i++)
		{
			echo "$e  ";
			$e=$e+2;
		}
	}
	else if(isset($_GET['s']) && !is_numeric($_GET['n']))
		echo "Non-Numeric input !!!";
?>

</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>

</html>