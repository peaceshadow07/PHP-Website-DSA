<html>
<head>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>

<h2><b> Check Substring</b></h2>

<?php
$str="";
$sstr="";
$err="";
$err2="";
$flag=true;
if(empty($_POST['st1']) || empty($_POST['st2']))
{
	if(empty($_POST['st1']))
		$err = "Please enter a string*";
	if(empty($_POST['st2']))
		$err2 = "Please enter a substring to check*";
	$flag=false;
}
else
{
	$str = $_POST['st1'];
	$sstr = $_POST['st2'];
}
	
?>

<form method="post">

<input type="text" placeholder="Enter Main String" name="st1" size="45"><span>
<font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $err; ?>
</font> </span></br></br>

<input type="text" placeholder="Check Substring to check" name="st2" size="45"><span>
<font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $err2; ?>
</font> </span></br></br>

<input type="submit" value="Check" name="s"></br></br>
</form>


<div class="result">
<?php


if(isset($_POST['s']) && $flag)
{
	$string = $_POST['st1'];
	$sstr = $_POST['st2'];
	if(strlen($string)<strlen($sstr))
		echo "Substring can never be greater than Main String";
	else
	{
		//$j=0;
		//$k=0;
		/*for($i = 0; $i<strlen($string) , $j<strlen($sstr); $i++)
		{	
			if($j==0)
				$k=$i;
			if(strcmp($string[$i],$sstr[$j])==0)
				$j++;
			else {
				$j=0;
				$i=$k+1;
			}
		}*/
	
		if(strpos($string,$sstr)>-1)
			echo "Substring present";
		else
			echo "Substring Not Present";
	}
}
?>
</div>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>