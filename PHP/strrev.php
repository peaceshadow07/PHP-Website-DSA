<html>
<head>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>

<h2><b> Reverse of String</b></h2>

<?php
$str="";
$err="";
$flag=true;
if(empty($_POST['st']))
{
	$err = "Please enter a string*";
	$flag=false;
}
else
	$str = $_POST['st'];
?>

<form method="post">
<input type="text" placeholder="Enter String" name="st" size="45"><span><font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $err; ?>
</font> </span></br></br>
<input type="submit" value="Reverse" name="s"></br></br>
</form>


<div class="result">
<?php


if(isset($_POST['s']) && $flag)
{
	$string = (string)$_POST['st'];
	$n = strlen($string);
		for( $i=0; $i<$n/2 ; $i++)
		{
					
			$temp = $string[$i];
			$string[$i]=$string[$n-1-$i];
			$string[$n-1-$i]=$temp;
		}
	echo $string;
}
?>
</div>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>