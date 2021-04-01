<?php 
    if (isset($_POST["add"])) {
        $data = json_decode(file_get_contents("data/data.json"), true);

        $cur_id = 1;
        if (!empty($data)) {
            $cur_id = $data[array_key_last($data)]["id"] + 1;
        }

        array_push($data, [
            "id" => $cur_id,
            "model" => $_POST["model"],
            "inch" => $_POST["inch"],
            "ram" => $_POST["ram"]
        ]);

        file_put_contents("data/data.json", json_encode($data, JSON_UNESCAPED_UNICODE));

        header("Location: ".$_SERVER['REQUEST_URI']);
    }
?>

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
                    Содержимое файла
                </h2>
                <?php require 'php/smartphones.php' ?>
            </div>
        </div>
    </main>
    <?php include 'php/footer.php' ?>
</body>
</html>