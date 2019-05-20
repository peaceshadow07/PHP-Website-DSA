<html>
<head>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>

<h2><b>Number of occurences of a string</b></h2>

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

<input type="submit" value="Find" name="s"></br></br>
</form>


<div class="result">
<?php


if(isset($_POST['s']) && $flag)
{
	$string = (string)$_POST['st'];
		$s="";
		$str="";
		$i=0;
		$max=0;
		
		while($i<strlen($string)){
			$s .=$string[$i];
			if($max <= substr_count($string,$s)){
				$str = $s;
				$max = substr_count($string,$str);
			}
			$i++;
		}
		echo $str." present ".$max." times";
}
?>
</div>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>