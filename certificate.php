<?php
session_start();
require "connect.php";

$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_SESSION["id"]);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();

$full_name = $row["full_name"];
$date = date("d.m.Y");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сертификат - LearnWay</title>
    <link rel="stylesheet" href="css/test.css">
</head>
<body>

    <?php include "header.html"?>

    <section class="certificate-page">
        <h1>Сертификат о прохождении курса</h1>
        <p>Выдан: <strong><?= $full_name; ?></strong></p>
        <p>Дата: <strong><?php echo $date; ?></strong></p>
        <p>Поздравляем с успешным завершением курса!</p>
    </section>

    <a href="certificate.html">Скачать в PDF</a>

    <?php include "footer.html"?>

</body>
</html>
