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
<body class="page add-page">
    <?php include 'php/header.php' ?>
    <main class="page__content content">
        <div class="page__container content__wrapper">
            <div class="content__left">
                <h2 class="content__header">
                    Введите данные о новом смартфоне
                </h2>
                <?php 
                    if (isset($_POST["change"])) {
                        $data = json_decode(file_get_contents("data/data.json"), true);
                        $cur_id = $_POST["change"];
                        $cur_key = 0;
                
                        foreach ($data as $key => $value) {
                            if ($value["id"] == $cur_id) {
                                $cur_key = $key;
                                break;
                            }
                        }
                    }
                ?>
                <form class="form" method="post" action="index.php">
                    <input class="form__input" type="text" name="model" placeholder="Модель смартфона" value="<?php echo (isset($_POST["change"]) ? $data[$cur_key]["model"] : "") ?>" required>
                    <input class="form__input" type="text" name="inch" placeholder="Диагональ экрана" value="<?php echo (isset($_POST["change"]) ? $data[$cur_key]["inch"] : "") ?>" required>
                    <input class="form__input" type="text" name="ram" placeholder="Оперативная память (Гб)" value="<?php echo (isset($_POST["change"]) ? $data[$cur_key]["ram"] : "") ?>" required>
                    <button class="button form__submit" type="submit" name="<?php echo (isset($_POST["change"]) ? "change" : "add") ?>"<?php echo (isset($_POST["change"]) ? ' value="' . $data[$cur_key]["id"] . '"' : "") ?>><?php echo (isset($_POST["change"]) ? "Сохранить" : "Добавить") ?></button>
                </form>
            </div>
            <div class="content__right">
                <h2 class="content__header">
                    Содержимое файла
                </h2>
                <?php include 'php/smartphones.php' ?>
            </div>
        </div>
    </main>
    <?php include 'php/footer.php' ?>
</body>
</html>