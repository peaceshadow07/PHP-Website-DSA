<html>

<head><title>Fibonacci</title>
<link rel="stylesheet" href="frame1.css">
</head>
<body class="back">
<center>
<h2 align ="right">Fibonacci Series<h2>

<?php
$n=0;
$flag=true;
$nerr="";
if(empty($_GET['n']))
{
	$nerr=" Number of terms is required*";
	$flag=false;
}
else
	$n=$_GET['n'];
?>
<form>
<input type="text" name="n" size="35" placeholder="Number to terms"><span><font color="red" size="2" face="courier new"><?php if(isset($_GET['s'])) echo $nerr; ?></font></span><br><br>
<input type="submit" value="print" name="s">

</form>

<font class="result">
<?php
if(isset($_GET['s']) && is_numeric($_GET['n']) && $flag)
{
	function fib($n)
	{
		if($n==0||$n==1)
		return $n;
		else
		return fib($n-1)+fib($n-2);
	}
	echo "FIBONACCI SERIES : ";
	for($i=0;$i<$_GET['n'];$i++)
	echo fib($i)."  ";
}
else if(isset($_GET['s']) && !empty($_GET['n']))
	exit("Invalid input!!!");
?>
</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>


</html>