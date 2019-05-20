<!DOCTYPE html>
<html>

<head>
    <title>Main Page</title>
    <link rel="stylesheet" href="frame1.css">
    <style>
        button{
            border-radius: 10px;
            margin: 10px;
        }
    </style>
    <script>
        <?php
        session_start();
        if($_SESSION['loggedin']){
            header("location: welcome.php");
        }
        ?>
    </script>
</head>

<body class="back">
<center>
    <div style="color:white;background:green;">
        <h1>Main Page</h1>
    </div>
    <div>
    <button type="button">
        <a href="2.php" target="display">Register</a>
    </button>
    <button type="button">
        <a href="3.php" target="display">Login</a>
    </button>
    </div>
	</center>
</body>

</html>
