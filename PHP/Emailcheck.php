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
	$err = "Please enter an Email Address*";
	$flag=false;
}
else
	$str = $_POST['st'];

?>

<form method="post">
<input type="text" placeholder='Enter an E-mail address' name="st" size="75"><span><font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $err; ?>
</font> </span></br></br>

<input type="submit" value="Find" name="s"></br></br>
</form>


<div class="result">
<?php
if(isset($_POST['s'])){
	$str=$_POST['st'];
	$pat = "/^([a-zA-Z0-9\._\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/";
	if(!preg_match($pat,$str))
	echo "Invalid Email Address";
	else
	echo "Valid Email Address!!";

}


?>
</div>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>