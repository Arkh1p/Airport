<?php
    //Подключение класса Api:
    require_once("assets/libs/api.php");
    session_start();
    global $pdo;
    //Задание заголовка для страницы:
    $title = "Парковка";
    $headline = "Парковка";
    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/temp/pages/parking-page.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $body = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/temp/html.php");
?>