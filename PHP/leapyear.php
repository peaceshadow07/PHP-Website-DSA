<html>

<head>
<title>Leap Year</title>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>
<h2>Leap Year<h2><br>
<?php
$n=0;
$flag=true;
$nerr="";
if(empty($_POST['n']))
{
	$nerr=" Value required*";
	$flag=true;
}
else
	$n=$_POST['n'];
?>

<form method="post">
<input type="text" name="n" placeholder="Enter year" maxlength="4" size="30"><span><font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $nerr;?></font></span><br><br>
<input type="submit" name="s" value="Check">
</form>

<font class="result">
<?php
if(isset($_POST['s']) && $flag && is_numeric($_POST['n']) && $_POST['n']>0)
{
	if($_POST['n']%100 == 0)
	{
		if($_POST['n']%400==0)
			exit($_POST['n']." is a Leap Year.");
		exit($_POST['n']." is not a Leap Year.");
	}
	else if($_POST['n']%4==0)
		exit($_POST['n']." is a Leap Year.");
	exit($_POST['n']." is not a Leap Year.");
}
else if(isset($_POST['s']) && !empty($_POST['n']))
	exit("Invalid input !!!");
?>
</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>

</html>