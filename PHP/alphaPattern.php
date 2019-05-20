<html>

<head>
<title>Patterm</title>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>
<h2>Alphabet Pattern<h2>


<?php
$n1=0;
$flag=true;
$nerr="";
if(empty($_GET['n']))
{
	$nerr=" Value required*";
	$flag=false;
}
else
$n1=$_GET['n'];
?>

<form>
<input type="text" name="n" placeholder="Enter number of lines"><span><font color="red" size="2" face="courier new"><?php if(isset($_GET['s'])) echo $nerr;?></font></span><br><br>
<input type="submit" name="s" value="Print">
</form>

<font class="result">
<?php
	if(isset($_GET['s'])&& $flag=true && is_numeric($_GET['n'])&& $_GET['n']<=26)
	{
		$k=0;
		while($k != $_GET['n'])
		{
			for($i=65 ; $i<=65+$k ; $i++)
				echo chr($i)." ";

			for($j=65+$k-1; $j>=65; $j--)
				echo chr($j)." ";
			echo "<br>";
			$k++;
		}
	}
	else if(isset($_GET['s'])&& $flag=true && !empty($_GET['n']))
		echo "Invalid input!!!";
?>
</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>


</html>