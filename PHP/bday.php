<html>
<head>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>

<h2><b>Birthday Counter</b></h2>

<?php
$str="";

$err="";

$flag=true;
if(empty($_POST['st']))
{
	$err = "Please Birthday*";
	$flag=false;
}
else
	$str = $_POST['st'];

?>

<form method="post">
<input type="text" placeholder='Enter Birthday date(yyyy-dd-mm)' name="st" size="75"><span><font color="red" size="2" face="courier new"><?php if(isset($_POST['s'])) echo $err; ?>
</font> </span></br></br>

<input type="submit" value="Find" name="s"></br></br>
</form>


<div class="result">
<?php
if(isset($_POST['s'])){

$bday = date_create($_POST['st']);
date_default_timezone_set("Asia/kolkata");
 	
$diff=date_diff(date_create(),$bday);
echo $diff->format("%R%a days");




}


?>
</div>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>