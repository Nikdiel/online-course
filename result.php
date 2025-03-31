<?php
$data = json_decode(file_get_contents("questions.json"), true);
$course = $data[$_GET["course"]];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answers = [
        "q1" => $course[0]["answer"], 
        "q2" => $course[1]["answer"],  
        "q3" => $course[2]["answer"]   
    ];

    $score = 0;
    $totalQuestions = count($answers);

    foreach ($answers as $question => $correctAnswer) {
        if (isset($_POST[$question]) && $_POST[$question] == $correctAnswer) {
            $score++;
        }
    }

    $percentage = ($score / $totalQuestions) * 100;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты теста - LearnWay</title>
    <link rel="stylesheet" href="css/test.css">
</head>
<body>

    <?php include "header.html"?>

    <section class="result-page">
        <h1>Ваш результат</h1>
        <p>Вы правильно ответили на <strong><?php echo $score; ?></strong> из <?php echo $totalQuestions; ?> вопросов.</p>
        <p>Процент правильных ответов: <strong><?php echo round($percentage, 2); ?>%</strong></p>

        <?php if ($percentage >= 70): ?>
            <p>Поздравляем! Вы успешно прошли тест.</p>
            <a href="certificate.php?course=<?=$_GET["course"]?>" class="btn">Получить сертификат</a>
        <?php else: ?>
            <p>Вы не набрали достаточное количество баллов. Попробуйте снова.</p>
            <a href="test.php?course=<?=$_GET["course"]?>" class="btn">Пройти тест заново</a>
        <?php endif; ?>
    </section>

    <?php include "footer.html"?>

</body>
</html>
