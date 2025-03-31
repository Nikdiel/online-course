<?php 
    $data = json_decode(file_get_contents("questions.json"), true);
    $course = $data[$_GET["course"]];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест - LearnWay</title>
    <link rel="stylesheet" href="css/test.css">
</head>
<body>

    <section class="test-page">
        <h1>Тест по курсу "<?=$course[0]["title"]?>"</h1>
        <form action="result.php?course=<?=$_GET["course"]?>" method="post">
            
            <div class="question">
                <p><strong>1. <?=$course[0]["question"]?></strong></p>
                <label><input type="radio" name="q1" value="a"><?=$course[0]["options"]["a"]?></label><br>
                <label><input type="radio" name="q1" value="b"><?=$course[0]["options"]["b"]?></label><br>
                <label><input type="radio" name="q1" value="c"><?=$course[0]["options"]["c"]?></label>
            </div>

            <div class="question">
                <p><strong>2. <?=$course[1]["question"]?></strong></p>
                <label><input type="radio" name="q2" value="a"><?=$course[1]["options"]["a"]?></label><br>
                <label><input type="radio" name="q2" value="b"><?=$course[1]["options"]["b"]?></label><br>
                <label><input type="radio" name="q2" value="c"><?=$course[1]["options"]["c"]?></label>
            </div>

            <div class="question">
                <p><strong>3. <?=$course[2]["question"]?></strong></p>
                <label><input type="radio" name="q3" value="a"><?=$course[2]["options"]["a"]?></label><br>
                <label><input type="radio" name="q3" value="b"><?=$course[2]["options"]["b"]?></label><br>
                <label><input type="radio" name="q3" value="c"><?=$course[2]["options"]["c"]?></label>
            </div>

            <button type="submit" class="btn">Отправить</button>
        </form>
    </section>

</body>
</html>
