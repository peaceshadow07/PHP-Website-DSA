<html>
<head>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>

<h2><b>Subset of Max. Sum</b></h2>

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
<input type="text" placeholder="Enter array elements seprated by ","(comma)" name="st" size="45"><span><font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $err; ?>
</font> </span></br></br>

<input type="submit" value="Show Result" name="s"></br></br>
</form>


<div class="result">
<?php

if(isset($_POST['s']) && $flag)
{
		$arr = array();	
		$arr = explode(',',$_POST['st']);
		$sum = "";
		for($i = 0;$i<count($arr);$i++)
		{
			for($j = $i+1;$j<count($arr);$j++)
			{
				$c=0;
			$c = $arr[$i]+$arr[$j];
				$sum.=(string)$c;
			}
		}
		$max=0;
		$k=0;
		for($i=0;$i<strlen($sum);$i++)
			if($max<substr_count($sum,$sum[$i]))
			{
				$k = $sum[$i];
				$max = substr_count($sum,$sum[$i]);
			}
			
		for($i = 0;$i<count($arr);$i++)
		{
			for($j = $i+1;$j<count($arr);$j++)
			{
				if($arr[$i]+$arr[$j]==$k){
					echo '{'."$arr[$i],$arr[$j]}<br>";
				}
			}
		}
			
		
}
?>

</div>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>