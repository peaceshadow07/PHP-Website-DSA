<html>

<head>
<title>Armstrong number</title>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>
<h2>Armstrong Number<h2>

<?php
$n=0;
$flag=true;
$nerr="";
if(empty($_POST['n']))
{
	$nerr=" value required*";
	$flag=false;
}
else 
	$n=$_POST['n'];
?>

<form method="post">
<input type="text" name ="n" placeholder="Enter number to check" size="40"><span><font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $nerr;?></font></span><br><br>
<input type="submit" name="s" value="Check">
</form>

<font class="result">
<?php
if(isset($_POST['s']) && $flag && is_numeric($_POST['n']) && $_POST['n']>0)
{
	$k=$_POST['n'];
	$p=0;
	$c=0;
	while($k)
	{
		$c++;
		$k=floor($k/10);
	}
	$k=$_POST['n'];
	while($k)
	{
		$p =$p+ ($k%10)**$c;
		$k=floor($k/10);
	}	
	
	if($p==$_POST['n'])
		echo $_POST['n']." is an Armstrong number.";
	else 
		echo $_POST['n']." is not an Armstrong number.";
}
else if(isset($_POST['s']) && !empty($_POST['n']))
	exit("Invaid input!!!");
?>
</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>

</html>