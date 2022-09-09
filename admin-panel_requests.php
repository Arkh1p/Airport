<?php
    //Подключение класса Api:
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    session_start();
    global $pdo;
    $data = new Data();
    $api = new Api();

    if(isset($_GET["type"])) {
        $type = $_GET["type"];
        switch($type) {
            case 1:
                $data->header="Вывод начальников отдела";
            break;

            case 2: 
                $data->header="Вывод сотрудников указанного отдела";
                if (isset($_GET["department"])) {
                    $data->department = $_GET["department"];
                } else {
                    $data->department = "";
                }
            break;

            case 3:
                $data->header="Число работников в бригаде";
            break;

            // case образец с параметрами: //цифра-номер запроса
            //     $data->header="заголовок из case в api";
            //     if (isset($_GET["свойство1"]) && isset($_GET["свойство2"])) {
            //         $data->свойство1 = $_GET["свойство1"];
            //         $data->свойство2 = $_GET["свойство2"];
            //     } else {
            //         $data->свойство1 = "";
            //         $data->свойство2 = "";
            //     }
            //     break;
            //  case образец без параметров: //цифра-номер запроса
            //     $data->header="заголовок из case в api";
            //     break;
            case 4:
                $data->header="Сотрудники по возрасту";
                if (isset($_GET["age"]) && isset($_GET["option"])) {
                    $data->age = $_GET["age"];
                    $data->option = $_GET["option"];
                } else {
                    $data->age = "";
                    $data->option = "";
                }
            break;

            case 5: 
                $data->header="Пилоты, прошедшие медосмотр";
            break;

            case 6: 
                $data->header="Cамолёты, приписанные к аэропорту, отсортированные по времени поступления в аэропорт";
            break;

            case 7: 
                $data->header="Получить перечень и общее число рейсов по длительности перелёта";
            break;

            case 8: 
                $data->header="Получить перечень и общее число отменённых рейсов";
            break;

            case 9: 
                $data->header="Рейсы, по которым летают самолёты указанного типа";
            break;

            case 10: 
                $data->header="Авиарейсы внутри страны";
            break;
        }
        
        $result=$api->request($data);
        
        if($result["rows"] > 0) {
            $result = $result["items"];
        } else {
            $result = false;
        }
    }

    


    //Задание заголовка для страницы:
    $title = "Запросы к базе данных";
    $headline = "Запросы к базе данных";
    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/temp/pages/requests.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $body = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/temp/html.php");
?>