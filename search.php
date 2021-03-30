<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4 - Mikerin</title>

    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="page">
    <?php include 'php/header.php' ?>
    <main class="page__content content">
        <div class="page__container content__wrapper">
            <div class="content__left">
                <h2 class="content__header">
                    Введите данные о новом смартфоне
                </h2>
                <form class="form" method="post" action="index.php">
                    <input class="form__input" type="search" name="model" placeholder="Модель смартфона">
                    <button class="button form__submit" type="submit">Найти</button>
                </form>

                <div class="smartphone">
                    <div class="smartphone__data">HUAWEI P40 Lite, 6.4 дюйма, 6/128 Гб</div>
                    <a class="button" href="#">Редактировать</a>
                    <a class="button" href="#">Удалить</a>
                </div>
                <div class="smartphone">
                    <div class="smartphone__data">HUAWEI P40 Lite, 6.4 дюйма, 6/128 Гб</div>
                    <a class="button" href="#">Редактировать</a>
                    <a class="button" href="#">Удалить</a>
                </div>
            </div>
            <div class="content__right">
                <h2 class="content__header">
                    Содержимое файла data.txt
                </h2>
                <?php require 'php/smartphones.php' ?>
            </div>
        </div>
    </main>
    <?php include 'php/footer.php' ?>
</body>
</html>