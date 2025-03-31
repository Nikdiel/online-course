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
    <title>Главная - Образовательная платформа</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include "header.html"?>

    <section class="main">
        <h1>Добро пожаловать на образовательную платформу</h1>
        <p>Изучайте курсы, проходите тесты и получайте сертификаты.</p>
        <a href="catalog.php" class="btn">Перейти к курсам</a>
    </section>

    <?php include "footer.html"?>
</body>
</html>