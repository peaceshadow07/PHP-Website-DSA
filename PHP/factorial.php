<html>
<head>
<title>
Factorial
</title>
<link rel="stylesheet" href="frame1.css">
</head>
<body class="back">
<center>
<h2 align="center">Factorial<h2>

<?php
$n=0;
$nerr="";
$flag=true;
if(empty($_GET['number']))
{
	$nerr=" Number is required*";
	$flag=false;
}
else
	$n=$_GET['number'];
?>

<form>
<input type="text" name="number" placeholder="To find factorial"><span><font color="red"  size="2" face="courier new"><?php if(isset($_GET['submit'])) echo $nerr; ?></font></span><br><br>
<input type="submit" name="submit" value="Find">
</form>

<font class="result">
<?php
if(isset($_GET['submit'])&&$flag=true && is_numeric($_GET['number']))
{
	$p=1;
	for( $i=1;$i<=$_GET['number'];$i++)
	$p = $p*$i;
	echo "Factorial of ".$_GET['number']." is $p.";
}
else if(isset($_GET['submit']))
	echo "No factorial for non-numeric input!!!"; 
?>
</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>

</html>