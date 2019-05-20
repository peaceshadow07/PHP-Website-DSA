<html>

<head>
<Title>Greatest of Three</title>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>
<h2>Greatest among Three Numbers</h2></br>
<font color="#459945" face="verdana">
<center>
<form>

<input type ="text" name="number1" size="35" placeholder=" First Number "><br><br>

<input type="text" name="number2" size="35" placeholder="Second Number"><br><br>
<input type ="text" name="number3" size="35" placeholder="Third Number"><br><br>
<input type="submit" value="Check" name="submit">
<input type="reset" value="Reset">
</form>
</center>
</font>

<font class="result">
<?php

if(isset($_GET['submit']))
{
echo "Greatest of given three is : ";
if($_GET['number1']>=$_GET['number2']&& $_GET['number1']>=$_GET['number3'])
	echo $_GET['number1'];
else if($_GET['number2'] >= $_GET['number3'])
	echo $_GET['number2'];
else
	echo $_GET['number3'];
}
?>
</font>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>

</html>