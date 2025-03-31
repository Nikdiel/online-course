<?php 
    $data = json_decode(file_get_contents("courses.json"), true);
    $c =$_GET["course"];
    $course = $data[$c];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курс - LearnWay</title>
    <link rel="stylesheet" href="css/course.css">
</head>
<body>

    <?php include "header.html"?>

    <section class="course-page">
        <h1><?=$course["title"]?></h1>
        <p><?=$course["description"]?></p>

        <h2>Содержание курса</h2>
        <ul class="lesson-list">
            <li>Урок 1: <?=$course["content"][0]?></li>
            <li>Урок 2: <?=$course["content"][1]?></li>
            <li>Урок 3: <?=$course["content"][2]?></li>
            <li>Урок 4: <?=$course["content"][3]?></li>
            <li>Урок 5: <?=$course["content"][4]?></li>
        </ul>

        <a href="test.php?course=<?=$c?>" class="btn">Пройти тест</a>
    </section>

    <?php include "footer.html"?>
</body>
</html>
