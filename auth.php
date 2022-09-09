<?php
    //Подключение класса Api:
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    session_start();
    global $pdo;
    //Задание заголовка для страницы:
    $title = "Личный кабинет";
    $headline = "Вход в личный кабинет";
    $per6 = new Data();
    $per7 = new Api();
    if (!empty($_POST)) {
        if ($_POST["hide"]=="autharisation") {
            $per6->header="Авторизация";
            $per6->login=$_POST["login"];
            $per6->password=md5($_POST["password"]);
            $per8=$per7->request($per6);
            if ($per8["rows"]=="1") {
                $_SESSION["admin-lvl"]=$per8["items"]["0"]["Уровень админа"];
                $_SESSION["id_user"]=$per8["items"]["0"]["Код пользователя"];
                
                $per6->header="Создание токена";
                $per6->token=$per6->getRandomString(32);
                $_SESSION["token"]=$per6->token;
                $per6->session=session_id();
                $per6->id_user=$_SESSION["id_user"];
                $per7->request($per6);
                header("Location: personal-account1.php");
            } else {
                echo "Пароль неверный";
            }
            
        } else if ($_POST["hide"]=="regustration") {
            if ($_POST["repeat_password"]==$_POST["password2"]) {
                $per6->header="Создание пользователя";
                $per6->login=$_POST["login"];
                $per6->password=$_POST["password2"];
                $per6->mail=$_POST["email2"];
                $per6->name=$_POST["name"];
                $per7->request($per6);
            } else {
                echo "Пароли не совпадают";
            }   
        }
    } else {
        $per6->header="Проверка токена";
        $per6->token=$_SESSION["token"];
        $per6->session=session_id();
        $per10=$per7->request($per6);
        if ($per10["rows"]>0) {
            $_SESSION["admin-lvl"]=$per8["items"]["0"]["Уровень админа"];
            $per6->header="Обновление токена";
            $per7->request($per6);
            header("Location: personal-account1.php");
        } else {
            unset($_SESSION);
        }
    }
    

    

    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/temp/pages/auth-page.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $body = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/temp/html.php");
?>
