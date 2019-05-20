<html>
<head>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>

<h2><b>Sorting Array</b></h2>

<?php
$str="";

$err="";

$flag=true;
if(empty($_POST['st']))
{
	$err = "Please enter elements*";
	$flag=false;
}
else
	$str = $_POST['st'];

?>

<form method="post">
<input type="text" placeholder='Enter elements of array seprated by comma(",")' name="st" size="75"><span><font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $err; ?>
</font> </span></br></br>

<input type="submit" value="Find" name="s"></br></br>
</form>


<div class="result">
<?php


    
if(isset($_POST['s']) && $flag)
{
	$str = $_POST['st'];
	$arr = array();
	$arr = explode(",",$str);
	for($i=0;$i<count($arr);$i++)
	echo $arr[$i]."  ";
	sort($arr);
	echo "<ul>";
	for($i=0;$i<count($arr);$i++)
	echo "<li>$arr[$i]</li>";
	echo "</ul>";

}
?>
</div>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>