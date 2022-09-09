<?php
    //Подключение класса Api:
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    session_start();
    global $pdo;
    
    if(!isset($_SESSION["theme"]))
{
    $_SESSION["theme"] = "light";
}
    //Задание заголовка для страницы:
    $title = "Международный аэропорт Atlata";

    $per1= new Api();
    $per2= new Data();
    $per2->header="Новости";
    $per3=$per1->request($per2);
    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/temp/pages/index-page.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $body = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/temp/html.php");
?>
