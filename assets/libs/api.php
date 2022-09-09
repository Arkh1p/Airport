<?php
//Подключение базы данных:
require_once("database.php");
//Объявление нового класса Api:
class Api {
    //Объявление функции «Запрос» со входным параметром в виде объекта $data:
    public function request($data) {
        global $pdo;
        //Конструкция выбора действий в зависимости от заголовочного атрибута объекта $data:
        switch($data->header) {
            //Образец конструкции:
            case "Наименование заголовка":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "";
                //Подготовка SQL-запроса перед выполнением:
                $query = $pdo->prepare($sql);
                //Выполнение SQL-запроса:
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response["header"] = "news";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "Ключ" => $table["Столбец БД"]
                    );
                }
            break;
            case "Рейс":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `online_tablo`";
                //Подготовка SQL-запроса перед выполнением:
                $query = $pdo->prepare($sql);
                //Выполнение SQL-запроса:
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response["header"] = "flight";//не должен совпадатьс названием таблицы
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "Время" => $table["departure_time"],
                        "Номер рейса" => $table["id_flight"],
                        "Авиакомпания" => $table["airline"],
                        "Направление" => $table["final_destination"],
                        "Статус" => $table["status"]
                    );
                }
            break;
            case "Транспорт":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `transport`";
                //Подготовка SQL-запроса перед выполнением:
                $query = $pdo->prepare($sql);
                //Выполнение SQL-запроса:
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response["header"] = "ts";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "Изображение" => $table["img"],
                        "Заголовок" => $table["title"],
                        "Текст" => $table["text"]
                    );
                }
            break;
            case "Магазин":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `shops`";
                //Подготовка SQL-запроса перед выполнением:
                $query = $pdo->prepare($sql);
                //Выполнение SQL-запроса:
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response["header"] = "shop";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "Изображение" => $table["img"],
                        "Заголовок" => $table["title"],
                        "Текст" => $table["text"]
                    );
                }
            break;
            case "Новости":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `news`";
                //Подготовка SQL-запроса перед выполнением:
                $query = $pdo->prepare($sql);
                //Выполнение SQL-запроса:
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response["header"] = "shop";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "Изображение1" => $table["img1"],
                        "Изображение2" => $table["img2"],
                        "Заголовок" => $table["title"],
                        "Дата" => $table["date"],
                        "Текст" => $table["text"]
                    );
                }
            break;
            case "Авторизация":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `user` WHERE (`login` = :login OR `mail` = :login) AND `password` =:password LIMIT 1";
                $query = $pdo->prepare($sql);
                $query->execute(array(
                "login" =>$data->login,
                "password" => $data->password
            ));
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response["header"] = "user_info";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "Уровень админа" => $table["admin_lvl"],
                        "Код пользователя" => $table["id_user"],
                    );
                }
            break;
            case "Шаблон":
                $sql = "SELECT * FROM `user` WHERE `поле_таблицы1` = :имя_маркера1 AND `поле_таблицы2` =:имя_маркера2";
                $query = $pdo->prepare($sql);

                //только если есть параметры, если их нет - удаляем следующие 4 строки
                $query->execute(array(
                    "имя_маркера1" =>$data->свойство1,
                    "имя_маркера2" => $data->свойство2,
                ));

                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                $response ["rows"] = $query->rowCount();

                //$table["поле_таблицы"] - имена полей должны совпадать с теми, что выводятся в результате выполнения запроса
                foreach($result as $table) {
                    $response ["items"][] = array(
                        "Любое удобное имя" => $table["поле_таблицы"],
                        "Любое удобное имя" => $table["поле_таблицы"],
                    );
                }
            break;
            case "Вывод сотрудников указанного отдела":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `employees_&_departments` WHERE id_department = :department";
                $query = $pdo->prepare($sql);
                $query->execute(array(
                    "department" =>$data->department
                ));
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response ["header"] = "departments";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "id_employee" => $table["id_employee"],
                        "full_name" => $table["full_name"],
                        "phone" => $table["phone"],
                        "labor_book" => $table["labor_book"],
                        "passport" => $table["passport"],
                        "medical_book" => $table["medical_book"],
                        "id_position" => $table["id_position"],
                        "gender" => $table["gender"],
                        "date_of_employment" => $table["date_of_employment"],
                        "date_of_birth" => $table["date_of_birth"],
                        "children_count" => $table["children_count"],
                        "salary" => $table["salary"],
                        "id_department" => $table["id_department"],
                        "id_brigade" => $table["id_brigade"],
                    );
                }
            break;
            case "Сотрудники по возрасту":
                if (in_array($data->option, ["equals", "more", "less"])) {
                    if ($data->option === "equals") {
                        $sql = "SELECT * FROM `employee` WHERE year(from_days(datediff(now(), date_of_birth))) = :age";
                    } else if ($data->option === "more") {
                        $sql = "SELECT * FROM `employee` WHERE year(from_days(datediff(now(), date_of_birth))) > :age";
                    } else if ($data->option === "less") {
                        $sql = "SELECT * FROM `employee` WHERE year(from_days(datediff(now(), date_of_birth))) < :age";
                    }
                    
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "age" =>$data->age
                    ));
                    //Преобразование таблицы в ассоциативный массив:
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                    $response ["rows"] = $query->rowCount();
                    foreach($result as $table) {
                        //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                        $response ["items"][] = array(
                            //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                            "id_employee" => $table["id_employee"],
                            "full_name" => $table["full_name"],
                            "phone" => $table["phone"],
                            "labor_book" => $table["labor_book"],
                            "passport" => $table["passport"],
                            "medical_book" => $table["medical_book"],
                            "id_position" => $table["id_position"],
                            "gender" => $table["gender"],
                            "date_of_employment" => $table["date_of_employment"],
                            "date_of_birth" => $table["date_of_birth"],
                            "children_count" => $table["children_count"],
                            "salary" => $table["salary"],
                        );
                    }

                } else {
                    $response ["items"] = false;
                }
                //SQL-запрос для выборки значений из базыданных:
                
               
            break;
            case "Вывод всех пользователей":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `user`";
                $query = $pdo->prepare($sql);
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response ["header"] = "user_info";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "Код пользователя" => $table["id_user"],
                        "Логин" => $table["login"],
                        "Пароль" => $table["password"],
                        "Почта" => $table["mail"],
                        "Имя" => $table["name"],
                        "Код сотрудника" => $table["id_employee"],
                        "Уровень админа" => $table["admin_lvl"]
                    );
                }
            break;
            case "Число работников в бригаде":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `employees_&_departments` WHERE id_brigade=1";
                $query = $pdo->prepare($sql);
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "id_employee" => $table["id_employee"],
                        "phone" => $table["phone"],
                        "passport" => $table["passport"],
                        "id_position" => $table["id_position"],
                        "salary" => $table["salary"],
                        "id_brigade" => $table["id_brigade"],
                        "id_department" => $table["id_department"],
                        "date_of_birth" => $table["date_of_birth"],
                        "children_count" => $table["children_count"]
                    );
                }
            break;
            case "Пилоты, прошедшие медосмотр":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `med_exam_of_employees` WHERE id_position=2 and id_med_exam is not null";
                $query = $pdo->prepare($sql);
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "id_employee" => $table["id_employee"],
                        "full_name" => $table["full_name"],
                        "phone" => $table["phone"],
                        "passport" => $table["passport"],
                        "id_position" => $table["id_position"],
                        "salary" => $table["salary"],
                        "gender" => $table["gender"],
                        "date_of_birth" => $table["date_of_birth"],
                        "medical_book" => $table["medical_book"],
                        "id_med_exam" => $table["id_med_exam"],
                        "result" => $table["result"],
                        "date" => $table["date"]
                    );
                }
            break;
            case "Cамолёты, приписанные к аэропорту, отсортированные по времени поступления в аэропорт":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `airplane` ORDER BY `purchase_date` ASC";
                $query = $pdo->prepare($sql);
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "id_airplane" => $table["id_airplane"],
                        "purchase_date" => $table["purchase_date"],
                        "flight_altitude" => $table["flight_altitude"],
                        "flight_speed" => $table["flight_speed"],
                        "number_of_seats" => $table["number_of_seats"],
                        "id_airplane_model" => $table["id_airplane_model"],
                        "id_airplane_type" => $table["id_airplane_type"]
                    );
                }
            break;
            case "Получить перечень и общее число рейсов по длительности перелёта":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `flight` ORDER BY `travel_time` ASC";
                $query = $pdo->prepare($sql);
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "id_flight" => $table["id_flight"],
                        "departure_date" => $table["departure_date"],
                        "travel_time" => $table["travel_time"],
                        "id_flight_category" => $table["id_flight_category"],
                        "id_airplane" => $table["id_airplane"],
                        "id_route" => $table["id_route"],
                        "id_flight_delay" => $table["id_flight_delay"]
                    );
                }
            break;
            case "Получить перечень и общее число отменённых рейсов": 
                //SQL-запрос для выборки значений из базыданных:
                 $sql = "";
                $query = $pdo->prepare($sql);
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "id_flight_cancellation" => $table["id_flight_cancellation"],
                        "status" => $table["status"],
                        "id_flight" => $table["id_flight"],
                        "id_airplane" => $table["id_airplane"]
                    );
                }
            break;
            case "Рейсы, по которым летают самолёты указанного типа": 
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `flights_and_airplanes` ORDER BY `travel_time` ASC";
                $query = $pdo->prepare($sql);
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "id_flight" => $table["id_flight"],
                        "travel_time" => $table["travel_time"],
                        "departure_time" => $table["departure_time"],
                        "id_flight_category" => $table["id_flight_category"],
                        "id_airplane" => $table["id_airplane"],
                        "id_route" => $table["id_route"],
                        "id_airplane_type" => $table["id_airplane_type"]
                    );
                }
            break;
            case "Авиарейсы внутри страны": 
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `flights_and_airplanes` WHERE id_flight_category = 1";
                $query = $pdo->prepare($sql);
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "id_flight" => $table["id_flight"],
                        "travel_time" => $table["travel_time"],
                        "departure_time" => $table["departure_time"],
                        "id_flight_category" => $table["id_flight_category"],
                        "id_airplane" => $table["id_airplane"],
                        "id_route" => $table["id_route"],
                        "id_airplane_type" => $table["id_airplane_type"]
                    );
                }
            break;
            case "Отделы":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `department`";
                $query = $pdo->prepare($sql);
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "id" => $table["id_department"],
                        "name" => $table["name"],
                    );
                }
            break;
            case "Вывод начальников отдела":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM `employee_info` WHERE position  LIKE 'Начальник%отдела%'";
                $query = $pdo->prepare($sql);
                $query->execute();
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response ["header"] = "workers_info";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
                foreach($result as $table) {
                    //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                    $response ["items"][] = array(
                        //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                        "Код сотрудника" => $table["id_employee"],
                        "Имя" => $table["full_name"],
                        "Телефон" => $table["phone"],
                        "Трудовая" => $table["labor_book"],
                        "Паспорт" => $table["passport"],
                        "Медицинская книжка" => $table["medical_book"],
                        "Код должности" => $table["id_position"],
                        "Должность" => $table["position"],
                        "Пол" => $table["gender"],
                        "Дата приема на работу" => $table["date_of_employment"],
                        "Дата рождения" => $table["date_of_birth"],
                        "Количество детей" => $table["children_count"],
                        "Зарплата" => $table["salary"],
                    );
                }
            break;
            case "Проверка токена":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "SELECT * FROM tokens WHERE token = :token AND session_id = :session AND token_expiration > now()";
                $query = $pdo->prepare($sql);
                $query->execute(array(
                    "token" => $data->token,
                    "session" => $data->session
                ));
        
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response ["header"] = "tokens_info";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                $response ["rows"] = $query->rowCount();
            break;
            case "Создание токена":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "INSERT INTO tokens (id_user, token, session_id, token_expiration) VALUES (:user, :token, :session, DATE_ADD(now(), INTERVAL 24 MINUTE))";
                    //Подготовка запроса:
                    $query = $pdo->prepare($sql);
                    //Выполнение запроса с указанием маркерами:
                    $query->execute(array(
                        "user" => $data->id_user,
                        "token" => $data->token,
                        "session" => $data->session
                    ));

        
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response ["header"] = "tokens_create";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
            break;
            case "Обновление токена":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "UPDATE `tokens` SET `token_start` = now(),`token_expiration`= DATE_ADD(now(), INTERVAL 24 MINUTE) WHERE `tokens`.`token` = :token AND session_id = :session AND token_expiration > now()";
                $query = $pdo->prepare($sql);
                $query->execute(array(
                "token" => $data->token,
                "session" => $data->session
            ));

        
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response ["header"] = "tokens_update";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
            break;
            case "Создание пользователя":
                //SQL-запрос для выборки значений из базыданных:
                $sql = "INSERT INTO user (login, mail, name, password) VALUES (:login, :pochta, :name, :password)";
                        $query = $pdo->prepare($sql);
                        $query->execute(array(
                            "login" => $data->login,
                            "pochta" => $data->mail,
                            "name" => $data->name,
                            "password" => $data->password
                        ));


        
                //Преобразование таблицы в ассоциативный массив:
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                $response ["header"] = "user_create";
                //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
            break;
        }
        //Возвращение ответа от сервера:
        return $response ?? false;
    }
}
?>