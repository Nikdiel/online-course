<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог курсов - LearnWay</title>
    <link rel="stylesheet" href="css/catalog.css">
</head>
<body>
    <?php include "header.html"?>

    <section class="catalog">
        <h1>Каталог курсов</h1>

        <div class="category">
            <h2>Языки</h2>
            <div class="course">
                <h3>Английский для начинающих</h3>
                <p>Основы английского языка для новичков.</p>
                <a href="course.php?course=eng" class="btn">Подробнее</a>
            </div>

            <div class="course">
                <h3>Немецкий язык</h3>
                <p>Изучение немецкого с нуля.</p>
                <a href="course.php?course=deu" class="btn">Подробнее</a>
            </div>
        </div>

        <div class="category">
            <h2>Программирование</h2>
            <div class="course">
                <h3>Основы Python</h3>
                <p>Изучите один из самых популярных языков программирования.</p>
                <a href="course.php?course=py" class="btn">Подробнее</a>
            </div>

            <div class="course">
                <h3>Веб-разработка</h3>
                <p>Создавайте сайты с помощью HTML, CSS и JavaScript.</p>
                <a href="course.php?course=web" class="btn">Подробнее</a>
            </div>
        </div>

    </section>

    <?php include "footer.html"?>

</body>
</html>
