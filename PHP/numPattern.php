<html>
<head>
<title>NumberPattern</title>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>
<h2>Numeric Pattern<h2>

<?php
$n=0;
$flag=true;
$nerr="";
if(empty($_POST['n']))
{
	$nerr=" Input required*";
	$flag=false;
}	
else
	$n=$_POST['n'];
?>

<form method="post">
<input type="text" name="n" placeholder="Number of lines in Pattern" size="35"	><span><font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $nerr;?></font></span><br><br>
<input type="submit" name="s" value="Print">
</form>

<font class="result">
<?php
if(isset($_POST['s']) && $flag && is_numeric($_POST['n']) && $_POST['n']>0)
{
	$k=0;
	while($k != $_POST['n'])
	{
		for($i=1; $i<=1+$k; $i++)
			echo $i." ";
		for($j=$k; $j>0; $j--)
			echo $j." ";
		echo "<br>";
		$k++;
	}
}
else if(isset($_POST['s']) && !empty($_POST['n']))
	echo "Invalid input !!!";
?>
</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>

</html>