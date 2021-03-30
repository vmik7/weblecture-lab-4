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
<body class="page main-page">
    <?php include 'php/header.php' ?>
    <main class="page__content content">
        <div class="page__container content__wrapper">
            <div class="content__left">
                <h2 class="content__header">
                    Смартфоны
                </h2>
                <div class="main-page__buttons-wrapper">
                    <a href="add.php" class="button">Добавить</a>
                    <a href="search.php" class="button">Найти</a>
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