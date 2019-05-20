<html>

<head>
<title>Sum</title>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>
<h2 align="center">Sum of First n ODD Numbers<h2>

<?php
$n=0;
$flag=true;
$nerr="";

if(empty($_GET['n']))
{
	$nerr=" Number is required*";
	$flag=false;
}
else
	$n= $_GET['n'];

?>

<form>
<input type="text" name ="n" placeholder="Enter number of terms "><span><font color="red" size="2" face="courier new"><?php if(isset($_GET['s'])) echo $nerr; ?></font></span><br><br>
<input type= "submit" name="s" value ="FIND">

</form>

<font class="result">
<?php
if(isset($_GET['s']) && $flag && is_numeric($_GET['n']))
{
	echo "Sum of first ".$_GET['n']." terms is ".$_GET['n']*$_GET['n'];
}
else if(isset($_GET['s'])&&!empty($_GET['n'])&&!is_numeric($_GET['n']))
	exit("Invalid input!!!");
?>
</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>

</html>