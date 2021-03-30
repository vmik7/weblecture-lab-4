<?php 
    $result_text = 'Смартфон успешно добавлен!';
    if (empty($_POST)) {
        $result_text = 'Не удалось прочитать $_POST параметры';
    }
    else {
        $new_smartphone = "\n" . $_POST['model'] . ', ' . $_POST['inch'] . ', ' . $_POST['volume'] . "\n";

        $fp = fopen("data/data.txt", "a+");

        if (!fwrite($fp, $new_smartphone)) {
            $result_text = 'Не удалось записать данные в файл';
        }

        fclose($fp);
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
<body class="page">
    <?php include 'php/header.php' ?>
    <main class="page__content content">
        <div class="page__container">
            <?php echo "$result_text" ?>
            <a href="index.php" class="button">На главную</a>
        </div>
    </main>
    <?php include 'php/footer.php' ?>
</body>
</html>