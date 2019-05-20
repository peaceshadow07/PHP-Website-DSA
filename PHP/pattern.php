<html>

<head>
<title>Pattern</title>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>
<h2>PATTERN<h2>

<?php
$n=0;
$flag=true;
$nerr="";
if(empty($_GET['n']))
{
	$nerr=" Value required*";
	$flag=false;
}
else
	$n=$_GET['n'];
?>

<form>
<input type="text" name ="n" placeholder="Number of lines" ><span><font color="red" size="2" face="courier new"><?php if(isset($_GET['s'])) echo $nerr; ?></font></span><br><br>
<input type="submit" name="s" value="Print">
</form>

<font class="result">
<?php
if(isset($_GET['s'])&& $flag &&is_numeric($_GET['n']))
{
	for( $i=0;$i<=$_GET['n'];$i++)
	{
		for($j=0;$j<$i;$j++)
		{	echo "*  ";
		}
		echo "<br>";
	}
}
else if(isset($_GET['s']) && !empty($_GET['n']))
	exit("Invaid input!!!");
?>
</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>