<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/temp/styles/light.css" id="theme-link">
    <link rel="shortcut icon" href="assets/temp/img/favicon.ico" type="image/x-icon">
    <!-- Объявление переменной для вывода заголовка: -->
    <title><?=$title?></title>
</head>
<body>
    <div class="wrapper">
    
        <!-- Подключение шапки ресурса: -->
        <?php include("components/header.php")?>
        <!-- Объявление переменной для дальнейшего подключения
        целевой страницы внутри структурного описания: -->
        <?= $body?>
        <!-- Подключение подвала ресурса: -->
        <?php include("components/footer.php"); ?>
        
    </div>
</body>
</html>