<html>
<head>
<link rel="stylesheet" href="frame1.css">
</head>

<body class="back">
<center>

<h2><b>"Hello" in Multiple language</b></h2>



<form method="post">
<select name="lang" required>
<option value= "english">English</option>
<option value= "japanese">Japanese</option>
<option value= "spanish">Spanish</option>
<option value= "french">French</option>
<option value= "german">German</option>
<option value= "hindi">Hindi</option>
<option value= "urdu">Urdu</option>
</select>


<input type="submit" value="Submit" name="s"></br></br>
</form>


<div class="result">
<?php
if(isset($_POST['s'])){
	switch($_POST['lang']){
	case 'english': echo 'Hello';
	break;
	case 'japanese': echo 'こんにちは(konichiwa)';
	break;
	case 'spanish': echo 'Hola';
	break;
	case 'french': echo 'Bonjour';
	break;
	case 'german': echo 'Hallo';
	break;
	case 'urdu': echo 'ہیلو';
	break;
	case 'hindi': echo 'नमस्ते';
	break;
	}

}


?>
</div>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>
</html>