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
                <form class="form" method="post" action="search.php">
                    <input class="form__input" type="search" name="model" placeholder="Модель смартфона">
                    <button class="button form__submit" type="submit" name="search">Найти</button>
                </form>

                <?php 
                    
                    if (isset($_POST["search"])) {
                        
                        $data = json_decode(file_get_contents("data/data.json"), true);
                        $search_value = $_POST["model"];

                        foreach ($data as $item) {
                            if (strpos($item["model"], $search_value) !== false) {
                                echo '
                                    <form class="smartphone" method="POST">
                                        <div class="smartphone__data">' . $item["model"] . ", " . $item["inch"] . "', " . $item["ram"] . '</div>
                                        <a class="button" href="#">Редактировать</a>
                                        <button type="submit" name="delete" value="' . $item["id"] . '" class="button">Удалить</button>
                                    </form>
                                ';
                            }
                        }
                    }

                    if (isset($_POST["delete"])) {
                        $data = json_decode(file_get_contents("data/data.json"), true);
                        $id_to_del = $_POST["delete"];

                        foreach ($data as $key => $value) {
                            if ($value["id"] == $id_to_del) {
                                unset($data[$key]);
                                break;
                            }
                        }

                        file_put_contents("data/data.json", json_encode($data, JSON_UNESCAPED_UNICODE));
                    }
                ?>
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