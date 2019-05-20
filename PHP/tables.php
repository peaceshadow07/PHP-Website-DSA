<html>

<head>
<title>Tables</title>
</head>

<body bgcolor="#252525"  text="white" size="3">
<center>


<?php
echo "<table border=2 padding=2 cellspacing=6 cellpadding=10 bgcolor=aliceblue>";
echo "<tr align=center ><td colspan=10 bgcolor=grey>TABLES</td></tr>";

for($i=1;$i<=10;$i++)
{echo "<tr  align=center>";
	for($j=$i;$j<=$i*10;$j=$j+$i)
		echo "<td bgcolor=#$i$i+3$i+3$i$i+2$i+4>$j</td>";
	echo "</tr>";
}

echo "</table>";
?>
<font size="3"></br></br></br></br></br></br></br>&copy;Kartikeya</font>
</center>
</body>

</html>