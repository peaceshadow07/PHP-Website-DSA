<html>

<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" href="frame1.css">
	    <style>
        button{
            border-radius: 10px;
            margin: 10px;
        }
    </style>

</head>

<body class="back">
        <?php
        session_start();
        if($_SESSION['loggedin']==false){
            header("location: 1.php");
        }
        ?>

    <h1>Hello, <?php if($_SESSION['loggedin']) echo $_SESSION['username']; ?></h1>
	<div>
	<button><a <?php $_SESSION['loggedin']=false; ?> href="1.php" target="display">Logout</a></button>
	</div>
</body>

</html>
