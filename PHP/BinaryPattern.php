<html>
<head>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>

<h2><b>Count Binary Pattern</b></h2>

<?php
$str="";

$err="";

$flag=true;
if(empty($_POST['st']))
{
	$err = "Please enter elements of array*";
	$flag=false;
}
else
	$str = $_POST['st'];

?>

<form method="post">
<input type="text" placeholder="Enter String" name="st" size="45"><span><font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $err; ?>
</font> </span></br></br>

<input type="submit" value="Find" name="s"></br></br>
</form>


<div class="result">
<?php


if(isset($_POST['s']) && $flag)
{
	$str = (string)$_POST['st'];
	$str = chunk_split($str,1," ");
	$arr = array();
	$arr = explode(" ",$str);
	$c=0;
	$p=0;
	for ($i =strpos($str,"1")+1 ;$i<COUNT($arr);$i++)
	{
		if($arr[$i]==1 && $arr[$i-1] ==0 and $c==0)
			$p++;
		else if($arr[$i] == 1 && $arr[$i-1]==0 and $c!=0)
			$c=0;
		else if (($arr[$i] >='a' and $arr[$i] <='z'))
		{
			$c++;
		}
	
	}
	echo "Binary pattern is present $p times";
}
?>
</div>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>