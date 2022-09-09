<?php
    //Подключение класса Api:
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    session_start();
    global $pdo;
    //Задание заголовка для страницы:
    $title = "Панель администратора";
    $headline = "Панель администратора";

    $data = new Data();
    $api = new Api();

    $data->header = "Отделы";
    $departments=$api->request($data);
        
    if($departments["rows"] > 0) {
        $departments = $departments["items"];
    } else {
        $departments = false;
    }

    // Шаблон запроса для нового динамического селекта, $переменная - сопадает с той, что используется в select'е
    $data->header = "заголовок";
    $переменная=$api->request($data);
        
    if($переменная["rows"] > 0) {
        $переменная = $переменная["items"];
    } else {
        $переменная = false;
    }


    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/temp/pages/admin-panel-page.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $body = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/temp/html.php");
?>
