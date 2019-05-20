<html>

<head>
<title>Prime No.</title>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>
<h2 align="center" color="green">CHECK PRIME<h2>
<?php
$flag=true;
$n=0;
$nerr="";

if(empty($_GET['n']))
{
	$nerr=" Number is required*";
	$flag=false;
}
else
	$n=$_GET['n'];

?>

<form>

<input type="text" name="n" placeholder="Enter number"><span><font color="red" size="2" face="courier new"><?php if(isset($_GET['submit'])) echo $nerr; ?></font></span><br><br>
<input type="submit" name="submit" value="Check">
</form>

<font class="result">
<?php
 if(isset($_GET['submit']) && $flag=true && is_numeric($_GET['n']))
{
	for( $i=2;$i<($_GET['n'])/2;$i++)
{ 
	if($_GET['n']%$i==0)
	{
		exit($_GET['n']." is not prime");
	}
}
	echo $_GET['n']." is prime";
}
else if(isset($_GET['submit']) && !is_numeric($_GET['n']) && !empty($_GET['n']))
	echo "Invalid input!!!";
?>
</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>


</html>