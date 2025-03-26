<?php
    session_start();
    require "connect.php";

    if(!isset($_SESSION['logged-in'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
</body>
</html>