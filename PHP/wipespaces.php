<html>
<head>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>

<h2><b> Wipe out white spaces</b></h2>

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
<input type="submit" value="Clear spaces" name="s"></br></br>
</form>


<div class="result">
<?php


if(isset($_POST['s']) && $flag)
{
	$string = (string)$_POST['st'];
	$n = strlen($string)-1;
	$count=0;
	while(strpos($string," "))
	{
		for( $i=0; $i<strlen($string) ; $i++)
		{
			if($string[$i]==" ")
			{
				for( $j=$i ;$j<$n;$j++)
					$string[$j]=$string[$j+1];
				$n--;
			}
		}
	}
		for( $j=0 ;$j<=$n;$j++)
					echo $string[$j];
}
?>
</div>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>