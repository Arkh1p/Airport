-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 09 2022 г., 20:55
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `airport`
--

-- --------------------------------------------------------

--
-- Структура таблицы `airplane`
--

CREATE TABLE `airplane` (
  `id_airplane` int(11) NOT NULL,
  `purchase_date` datetime NOT NULL,
  `flight_altitude` varchar(18) NOT NULL,
  `flight_speed` varchar(18) NOT NULL,
  `number_of_seats` varchar(18) NOT NULL,
  `id_airplane_model` int(18) NOT NULL,
  `id_airplane_type` int(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `airplane`
--

INSERT INTO `airplane` (`id_airplane`, `purchase_date`, `flight_altitude`, `flight_speed`, `number_of_seats`, `id_airplane_model`, `id_airplane_type`) VALUES
(1, '2020-12-10 15:26:26', '11000m', '988', '700', 1, 1),
(2, '2021-01-19 14:25:44', '10000m', '900', '800', 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `airplane_model`
--

CREATE TABLE `airplane_model` (
  `id_airplane_model` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `airplane_model`
--

INSERT INTO `airplane_model` (`id_airplane_model`, `name`) VALUES
(1, 'Boeing 737-800'),
(2, 'Boeing 757-200'),
(3, 'Boeing 747-400'),
(4, 'Airbus A330-200'),
(5, 'ATR-72');

-- --------------------------------------------------------

--
-- Структура таблицы `airplane_service`
--

CREATE TABLE `airplane_service` (
  `id_airplane_service` int(18) NOT NULL,
  `id_brigade` int(18) NOT NULL,
  `id_airplane` int(18) NOT NULL,
  `date` datetime NOT NULL,
  `result` varchar(128) NOT NULL,
  `number_of_repairs` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `airplane_service`
--

INSERT INTO `airplane_service` (`id_airplane_service`, `id_brigade`, `id_airplane`, `date`, `result`, `number_of_repairs`) VALUES
(1, 1, 1, '2021-04-13 10:40:21', 'Т.О. успешно завершен', 3),
(2, 2, 2, '2021-05-12 09:36:29', 'Т.О. успешно завершен', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `airplane_type`
--

CREATE TABLE `airplane_type` (
  `id_airplane_type` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `airplane_type`
--

INSERT INTO `airplane_type` (`id_airplane_type`, `name`) VALUES
(1, 'Пассажирский'),
(2, 'Санитарный'),
(3, 'Пожарный'),
(4, 'Учебно-тренировочный');

-- --------------------------------------------------------

--
-- Структура таблицы `appointment_of_employees`
--

CREATE TABLE `appointment_of_employees` (
  `id_appointment_of_employees` int(11) NOT NULL,
  `id_department` int(11) NOT NULL,
  `id_employee` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `appointment_of_employees`
--

INSERT INTO `appointment_of_employees` (`id_appointment_of_employees`, `id_department`, `id_employee`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 3, 4),
(4, 3, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `baggage`
--

CREATE TABLE `baggage` (
  `id_baggage` int(11) NOT NULL,
  `id_baggage_type` int(11) NOT NULL,
  `id_passenger` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `baggage`
--

INSERT INTO `baggage` (`id_baggage`, `id_baggage_type`, `id_passenger`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `baggage_type`
--

CREATE TABLE `baggage_type` (
  `id_baggage_type` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `baggage_type`
--

INSERT INTO `baggage_type` (`id_baggage_type`, `name`) VALUES
(1, 'Багаж'),
(2, 'Ручная кладь'),
(3, 'Сверхнормативный'),
(4, 'Животное');

-- --------------------------------------------------------

--
-- Структура таблицы `brigade`
--

CREATE TABLE `brigade` (
  `id_brigade` int(18) NOT NULL,
  `name` varchar(256) NOT NULL,
  `id_department` int(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `brigade`
--

INSERT INTO `brigade` (`id_brigade`, `name`, `id_department`) VALUES
(1, 'Бригада техников №1', 3),
(2, 'Бригада техников №2', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `class`
--

CREATE TABLE `class` (
  `id_class` int(18) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `class`
--

INSERT INTO `class` (`id_class`, `name`) VALUES
(1, 'Эконом'),
(2, 'Комфорт'),
(3, 'Бизнес'),
(4, 'Первый');

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE `department` (
  `id_department` int(18) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`id_department`, `name`) VALUES
(1, 'Пилоты'),
(2, 'Диспетчеры'),
(3, 'Техники'),
(4, 'Кассиры'),
(5, 'Служба безопасности'),
(6, 'Справочная служба');

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(18) NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `labor_book` varchar(8) NOT NULL,
  `passport` varchar(11) NOT NULL,
  `medical_book` varchar(8) NOT NULL,
  `id_position` int(18) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `date_of_employment` date NOT NULL DEFAULT current_timestamp(),
  `date_of_birth` date NOT NULL DEFAULT current_timestamp(),
  `children_count` int(11) DEFAULT 0,
  `salary` decimal(8,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `employee`
--

INSERT INTO `employee` (`id_employee`, `full_name`, `phone`, `labor_book`, `passport`, `medical_book`, `id_position`, `gender`, `date_of_employment`, `date_of_birth`, `children_count`, `salary`) VALUES
(1, 'Токарев Антон Русланович', '9651234578', '1234567', '1245123412', '73451982', 1, 'man', '2020-06-20', '1995-04-14', 2, '80000.00'),
(2, 'Киселев Илья Львович', '9111245636', '7894561', '7894561214', '4561279', 1, 'man', '2020-11-11', '1982-08-13', 2, '80000.00'),
(3, 'Лебедев Михаил Леонидович', '9764543157', '4567318', '4567213892', '4516234', 2, 'man', '2019-02-14', '1999-12-22', 3, '150000.00'),
(4, 'Гришин Арсений Ильич', '9135276184', '72531682', '9561243578', '7286491', 2, 'man', '2020-01-11', '1988-05-20', 1, '150000.00'),
(5, 'Хомякова Александра Демидовна', '9746531671', '4652734', '4652738648', '8243167', 3, 'woman', '2020-02-12', '1992-11-20', 0, '100000.00'),
(6, 'Иванова Кира Тимофеевна', '9465316782', '8642735', '1246537824', '6431876', 3, 'woman', '2020-03-17', '1995-11-20', 2, '100000.00'),
(7, 'Зацепов Андрей Викторович', '9339684960', '4958690', '4958694738', '5068493', 5, 'man', '2020-04-12', '1992-04-03', 1, '100000.00'),
(8, 'Гусманова Анастасия Михайловна', '9546859687', '4937589', '5968493758', '5948506', 6, 'woman', '2019-12-12', '1990-02-09', 1, '100000.00');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `employees_&_departments`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `employees_&_departments` (
`id_employee` int(18)
,`full_name` varchar(256)
,`phone` varchar(11)
,`labor_book` varchar(8)
,`passport` varchar(11)
,`medical_book` varchar(8)
,`id_position` int(18)
,`gender` varchar(128)
,`date_of_employment` date
,`date_of_birth` date
,`children_count` int(11)
,`salary` decimal(8,2)
,`id_department` int(11)
,`id_brigade` int(18)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `employee_info`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `employee_info` (
`id_employee` int(18)
,`full_name` varchar(256)
,`phone` varchar(11)
,`labor_book` varchar(8)
,`passport` varchar(11)
,`medical_book` varchar(8)
,`id_position` int(18)
,`gender` varchar(128)
,`date_of_employment` date
,`date_of_birth` date
,`children_count` int(11)
,`salary` decimal(8,2)
,`position` varchar(256)
);

-- --------------------------------------------------------

--
-- Структура таблицы `flight`
--

CREATE TABLE `flight` (
  `id_flight` int(18) NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time NOT NULL,
  `travel_time` time DEFAULT NULL,
  `id_flight_category` int(18) NOT NULL,
  `id_airplane` int(18) NOT NULL,
  `id_route` int(18) NOT NULL,
  `id_flight_delay` int(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `flight`
--

INSERT INTO `flight` (`id_flight`, `departure_date`, `departure_time`, `travel_time`, `id_flight_category`, `id_airplane`, `id_route`, `id_flight_delay`) VALUES
(1, '2021-05-20', '04:36:00', '01:15:00', 1, 1, 1, 1),
(2, '2021-04-07', '05:45:00', '04:10:00', 1, 2, 2, 1);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `flights_and_airplanes`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `flights_and_airplanes` (
`id_flight` int(18)
,`travel_time` time
,`departure_time` time
,`id_flight_category` int(18)
,`id_airplane` int(18)
,`id_route` int(18)
,`id_airplane_type` int(18)
);

-- --------------------------------------------------------

--
-- Структура таблицы `flight_cancellation`
--

CREATE TABLE `flight_cancellation` (
  `id_flight_cancellation` int(18) NOT NULL,
  `status` varchar(128) NOT NULL,
  `id_flight` int(18) NOT NULL,
  `id_airplane` int(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `flight_cancellation`
--

INSERT INTO `flight_cancellation` (`id_flight_cancellation`, `status`, `id_flight`, `id_airplane`) VALUES
(1, 'Не отменен', 1, 1),
(2, 'Не отменен', 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `flight_category`
--

CREATE TABLE `flight_category` (
  `id_flight_category` int(18) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `flight_category`
--

INSERT INTO `flight_category` (`id_flight_category`, `name`) VALUES
(1, 'Внутренний'),
(2, 'Международный'),
(3, 'Чартерный'),
(4, 'Грузовой'),
(5, 'Специальный');

-- --------------------------------------------------------

--
-- Структура таблицы `flight_delay`
--

CREATE TABLE `flight_delay` (
  `id_flight_delay` int(18) NOT NULL,
  `reasons` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `flight_delay`
--

INSERT INTO `flight_delay` (`id_flight_delay`, `reasons`) VALUES
(1, 'Не задержан'),
(2, 'Погодные условия');

-- --------------------------------------------------------

--
-- Структура таблицы `med_exam`
--

CREATE TABLE `med_exam` (
  `id_med_exam` int(18) NOT NULL,
  `result` varchar(128) NOT NULL,
  `date` datetime(6) NOT NULL,
  `id_employee` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `med_exam`
--

INSERT INTO `med_exam` (`id_med_exam`, `result`, `date`, `id_employee`) VALUES
(1, 'Сотрудник здоров', '2021-04-15 10:36:21.000000', 1),
(2, 'Сотрудник здоров', '2021-04-13 11:36:17.000000', 2),
(3, 'Сотрудник здоров', '2021-11-18 07:31:10.000000', 3),
(4, 'Сотрудник здоров', '2021-11-20 09:20:36.000000', 4);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `med_exam_of_employees`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `med_exam_of_employees` (
`id_employee` int(18)
,`full_name` varchar(256)
,`phone` varchar(11)
,`labor_book` varchar(8)
,`passport` varchar(11)
,`medical_book` varchar(8)
,`id_position` int(18)
,`gender` varchar(128)
,`date_of_employment` date
,`date_of_birth` date
,`children_count` int(11)
,`salary` decimal(8,2)
,`id_med_exam` int(18)
,`result` varchar(128)
,`date` datetime(6)
);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id_news` int(18) NOT NULL,
  `img1` varchar(256) NOT NULL,
  `img2` varchar(256) NOT NULL,
  `title` varchar(64) NOT NULL,
  `text` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `img1`, `img2`, `title`, `text`, `date`) VALUES
(1, 'assets/temp/img/news1-1.svg', 'assets/temp/img/news1-2.svg', 'News item 1', 'text of news item', '2021-06-22'),
(2, 'assets/temp/img/news2-1.svg', 'assets/temp/img/news2-2.svg', 'News item 2', 'text of news item', '2021-06-23'),
(3, 'assets/temp/img/news3-1.svg', 'assets/temp/img/news3-2.svg', 'News of item 3', 'text of news item', '2021-06-20');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `online_tablo`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `online_tablo` (
`airline` varchar(256)
,`status` varchar(64)
,`id_flight` int(18)
,`departure_time` time
,`final_destination` varchar(256)
);

-- --------------------------------------------------------

--
-- Структура таблицы `passanger`
--

CREATE TABLE `passanger` (
  `id_passenger` int(18) NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `passport` varchar(11) NOT NULL,
  `international_passport` varchar(10) NOT NULL,
  `customs_inspection_status` varchar(16) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `passanger`
--

INSERT INTO `passanger` (`id_passenger`, `full_name`, `passport`, `international_passport`, `customs_inspection_status`, `phone`) VALUES
(1, 'Сидоров Александр Никитич', '4315764681', '561873564', '-', '9675213461'),
(2, 'Титов Артём Андреевич', '8246187352', '461572893', '-', '9774652187');

-- --------------------------------------------------------

--
-- Структура таблицы `position`
--

CREATE TABLE `position` (
  `id_position` int(18) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `position`
--

INSERT INTO `position` (`id_position`, `name`) VALUES
(1, 'Техник'),
(2, 'Пилот'),
(3, 'Кассир'),
(5, 'Начальник технического отдела'),
(6, 'Начальник отдела продаж');

-- --------------------------------------------------------

--
-- Структура таблицы `reinforcement_of_pilots`
--

CREATE TABLE `reinforcement_of_pilots` (
  `id_reinforcement_of_pilots` int(18) NOT NULL,
  `id_airplane` int(18) NOT NULL,
  `id_employee` int(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `reinforcement_of_pilots`
--

INSERT INTO `reinforcement_of_pilots` (`id_reinforcement_of_pilots`, `id_airplane`, `id_employee`) VALUES
(1, 1, 3),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `route`
--

CREATE TABLE `route` (
  `id_route` int(18) NOT NULL,
  `starting_point` varchar(256) NOT NULL,
  `final_destination` varchar(256) NOT NULL,
  `transfer_point` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `route`
--

INSERT INTO `route` (`id_route`, `starting_point`, `final_destination`, `transfer_point`) VALUES
(1, 'Moscow', 'Saint-Petersburg', '-'),
(2, 'Moscow', 'Novosibirsk', '-');

-- --------------------------------------------------------

--
-- Структура таблицы `shops`
--

CREATE TABLE `shops` (
  `id_shops` int(11) NOT NULL,
  `img` varchar(256) NOT NULL,
  `title` varchar(64) NOT NULL,
  `text` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shops`
--

INSERT INTO `shops` (`id_shops`, `img`, `title`, `text`) VALUES
(1, 'assets/temp/img/shop.svg', 'Duty Free', 'It works around the clock'),
(2, 'assets/temp/img/pharmacy.svg', 'Pharmacy', 'It works around the clock'),
(3, 'assets/temp/img/restorant.svg', 'Restorant', 'It is open from 8 am to 10 pm');

-- --------------------------------------------------------

--
-- Структура таблицы `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(18) NOT NULL,
  `cost` varchar(256) NOT NULL,
  `airline` varchar(256) NOT NULL,
  `purchase_date` datetime(6) NOT NULL,
  `departure_date` datetime(6) NOT NULL,
  `id_flight` int(18) NOT NULL,
  `id_airplane` int(18) NOT NULL,
  `id_employee` int(18) NOT NULL,
  `id_class` int(18) NOT NULL,
  `id_passenger` int(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `cost`, `airline`, `purchase_date`, `departure_date`, `id_flight`, `id_airplane`, `id_employee`, `id_class`, `id_passenger`) VALUES
(1, '12560', 'Аэрофлот', '2021-04-13 15:16:44.000000', '2021-03-16 08:34:15.000000', 1, 1, 5, 1, 2),
(2, '11240', 'S7 Arilines', '2021-04-01 11:41:12.000000', '2021-05-10 05:36:19.000000', 2, 2, 6, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ticket_return`
--

CREATE TABLE `ticket_return` (
  `id_ticket_return` int(18) NOT NULL,
  `status` varchar(256) NOT NULL,
  `id_ticket` int(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `ticket_return`
--

INSERT INTO `ticket_return` (`id_ticket_return`, `status`, `id_ticket`) VALUES
(1, 'Не возвращен', 1),
(2, 'Возвращен', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `timetable`
--

CREATE TABLE `timetable` (
  `id_timetable` int(18) NOT NULL,
  `id_flight` int(18) NOT NULL,
  `id_airplane` int(18) NOT NULL,
  `airline` varchar(256) NOT NULL,
  `status` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `timetable`
--

INSERT INTO `timetable` (`id_timetable`, `id_flight`, `id_airplane`, `airline`, `status`) VALUES
(1, 1, 1, 'assets/temp/img/airline.svg', 'Cancelled'),
(2, 2, 2, 'assets/temp/img/airline.svg', 'Departed');

-- --------------------------------------------------------

--
-- Структура таблицы `tokens`
--

CREATE TABLE `tokens` (
  `id_token` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `session_id` varchar(64) NOT NULL,
  `token_start` timestamp NOT NULL DEFAULT current_timestamp(),
  `token_expiration` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tokens`
--

INSERT INTO `tokens` (`id_token`, `id_user`, `token`, `session_id`, `token_start`, `token_expiration`) VALUES
(1, 123, '1234', '12345', '2021-06-25 22:48:07', '2021-06-25 23:12:07'),
(2, 1, 'GKHeWaIZ0TeyFBIWJaI6OiR2NFc958sb', 'hf6nknisokask1be3oat86aa89', '2021-06-25 22:49:49', '2021-06-25 23:13:49'),
(3, 1, 'uHlZHI1orrvqthHTiuL88CSpUEQtzbu3', 'hf6nknisokask1be3oat86aa89', '2021-06-25 22:59:20', '2021-06-24 22:23:20'),
(4, 8, 'DAUrtCsU8PalMpbh5NgQL4T47IZErrFe', 'hf6nknisokask1be3oat86aa89', '2021-06-26 09:56:09', '2021-06-26 10:20:09'),
(5, 1, 'J7ZMpTFbojGX8Vk8WTHmG0pkl7FZnXUq', 'hf6nknisokask1be3oat86aa89', '2021-06-26 10:51:38', '2021-06-26 11:15:38'),
(6, 1, '3f5UItbcB2HQbak3qaakBd7WtcAQVhpX', 'hf6nknisokask1be3oat86aa89', '2021-06-26 14:44:59', '2021-06-26 15:08:59'),
(7, 1, 'vjtKmchriu7bOGBGtfqamGegrAcfOYoq', 'hf6nknisokask1be3oat86aa89', '2021-06-26 16:44:19', '2021-06-26 17:08:19'),
(8, 9, 'KwKz7LerL6kJpkpJNavEgmDdOTgNu4kw', 'be97rq1v301btlh81q4o0vj926', '2022-03-17 19:15:12', '2022-03-17 19:39:12');

-- --------------------------------------------------------

--
-- Структура таблицы `transport`
--

CREATE TABLE `transport` (
  `id_transport` int(18) NOT NULL,
  `img` varchar(256) NOT NULL,
  `title` varchar(64) NOT NULL,
  `text` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `transport`
--

INSERT INTO `transport` (`id_transport`, `img`, `title`, `text`) VALUES
(1, 'assets/temp/img/bus.svg', 'Public transport', 'You can use public transport'),
(2, 'assets/temp/img/electric_train.svg', 'Electric trains', 'You can use electric trains'),
(3, 'assets/temp/img/taxi.svg', 'Taxi', 'You can use taxi'),
(4, 'assets/temp/img/carsharing.svg', 'Carsharing', 'You can use public tcarsharing');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(18) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `name` varchar(256) NOT NULL,
  `id_employee` int(18) NOT NULL,
  `admin_lvl` varchar(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `mail`, `name`, `id_employee`, `admin_lvl`) VALUES
(1, 'tokarevAR', '4297f44b13955235245b2497399d7a93', 'tokarev@gmail.com', 'Tokarev Anton Ruslanovich', 1, '1'),
(2, 'KiselevIL', 'feea72e8b875cbcfbb7dfdfe6b8f0049', 'kiselev@gmail.com', 'Kiselev Ilya L\'vovich', 2, '2'),
(9, 'dsadas', '202cb962ac59075b964b07152d234b70', 'romanar2002@mail.ru', 'dasdsa', 0, '');

--
-- Триггеры `user`
--
DELIMITER $$
CREATE TRIGGER `insertHush` BEFORE INSERT ON `user` FOR EACH ROW SET 
NEW.password = MD5(NEW.password)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateHush` BEFORE UPDATE ON `user` FOR EACH ROW SET 
NEW.password = MD5(NEW.password)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура для представления `employees_&_departments`
--
DROP TABLE IF EXISTS `employees_&_departments`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employees_&_departments`  AS  select `employee`.`id_employee` AS `id_employee`,`employee`.`full_name` AS `full_name`,`employee`.`phone` AS `phone`,`employee`.`labor_book` AS `labor_book`,`employee`.`passport` AS `passport`,`employee`.`medical_book` AS `medical_book`,`employee`.`id_position` AS `id_position`,`employee`.`gender` AS `gender`,`employee`.`date_of_employment` AS `date_of_employment`,`employee`.`date_of_birth` AS `date_of_birth`,`employee`.`children_count` AS `children_count`,`employee`.`salary` AS `salary`,`appointment_of_employees`.`id_department` AS `id_department`,`brigade`.`id_brigade` AS `id_brigade` from ((`employee` left join `appointment_of_employees` on(`employee`.`id_employee` = `appointment_of_employees`.`id_employee`)) left join `brigade` on(`brigade`.`id_department` = `appointment_of_employees`.`id_department`)) ;

-- --------------------------------------------------------

--
-- Структура для представления `employee_info`
--
DROP TABLE IF EXISTS `employee_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employee_info`  AS  select `employee`.`id_employee` AS `id_employee`,`employee`.`full_name` AS `full_name`,`employee`.`phone` AS `phone`,`employee`.`labor_book` AS `labor_book`,`employee`.`passport` AS `passport`,`employee`.`medical_book` AS `medical_book`,`employee`.`id_position` AS `id_position`,`employee`.`gender` AS `gender`,`employee`.`date_of_employment` AS `date_of_employment`,`employee`.`date_of_birth` AS `date_of_birth`,`employee`.`children_count` AS `children_count`,`employee`.`salary` AS `salary`,`position`.`name` AS `position` from (`employee` left join `position` on(`employee`.`id_position` = `position`.`id_position`)) ;

-- --------------------------------------------------------

--
-- Структура для представления `flights_and_airplanes`
--
DROP TABLE IF EXISTS `flights_and_airplanes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `flights_and_airplanes`  AS  select `flight`.`id_flight` AS `id_flight`,`flight`.`travel_time` AS `travel_time`,`flight`.`departure_time` AS `departure_time`,`flight`.`id_flight_category` AS `id_flight_category`,`flight`.`id_airplane` AS `id_airplane`,`flight`.`id_route` AS `id_route`,`airplane`.`id_airplane_type` AS `id_airplane_type` from (((`flight` left join `airplane` on(`flight`.`id_airplane` = `airplane`.`id_airplane`)) left join `airplane_type` on(`airplane`.`id_airplane_type` = `airplane_type`.`id_airplane_type`)) left join `flight_category` on(`flight`.`id_flight_category` = `flight_category`.`id_flight_category`)) ;

-- --------------------------------------------------------

--
-- Структура для представления `med_exam_of_employees`
--
DROP TABLE IF EXISTS `med_exam_of_employees`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `med_exam_of_employees`  AS  select `employee`.`id_employee` AS `id_employee`,`employee`.`full_name` AS `full_name`,`employee`.`phone` AS `phone`,`employee`.`labor_book` AS `labor_book`,`employee`.`passport` AS `passport`,`employee`.`medical_book` AS `medical_book`,`employee`.`id_position` AS `id_position`,`employee`.`gender` AS `gender`,`employee`.`date_of_employment` AS `date_of_employment`,`employee`.`date_of_birth` AS `date_of_birth`,`employee`.`children_count` AS `children_count`,`employee`.`salary` AS `salary`,`med_exam`.`id_med_exam` AS `id_med_exam`,`med_exam`.`result` AS `result`,`med_exam`.`date` AS `date` from (`employee` left join `med_exam` on(`employee`.`id_employee` = `med_exam`.`id_employee`)) ;

-- --------------------------------------------------------

--
-- Структура для представления `online_tablo`
--
DROP TABLE IF EXISTS `online_tablo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `online_tablo`  AS  select `timetable`.`airline` AS `airline`,`timetable`.`status` AS `status`,`flight`.`id_flight` AS `id_flight`,`flight`.`departure_time` AS `departure_time`,`route`.`final_destination` AS `final_destination` from ((`timetable` left join `flight` on(`timetable`.`id_flight` = `flight`.`id_flight`)) left join `route` on(`flight`.`id_route` = `route`.`id_route`)) ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `airplane`
--
ALTER TABLE `airplane`
  ADD PRIMARY KEY (`id_airplane`),
  ADD KEY `id_airplane_model` (`id_airplane_model`),
  ADD KEY `id_airplane_type` (`id_airplane_type`);

--
-- Индексы таблицы `airplane_model`
--
ALTER TABLE `airplane_model`
  ADD PRIMARY KEY (`id_airplane_model`);

--
-- Индексы таблицы `airplane_service`
--
ALTER TABLE `airplane_service`
  ADD PRIMARY KEY (`id_airplane_service`),
  ADD KEY `id_airplane` (`id_airplane`),
  ADD KEY `id_brigade` (`id_brigade`);

--
-- Индексы таблицы `airplane_type`
--
ALTER TABLE `airplane_type`
  ADD PRIMARY KEY (`id_airplane_type`);

--
-- Индексы таблицы `appointment_of_employees`
--
ALTER TABLE `appointment_of_employees`
  ADD PRIMARY KEY (`id_appointment_of_employees`),
  ADD KEY `id_department` (`id_department`),
  ADD KEY `id_employee` (`id_employee`);

--
-- Индексы таблицы `baggage`
--
ALTER TABLE `baggage`
  ADD PRIMARY KEY (`id_baggage`),
  ADD KEY `id_baggage_type` (`id_baggage_type`),
  ADD KEY `id_passenger` (`id_passenger`);

--
-- Индексы таблицы `baggage_type`
--
ALTER TABLE `baggage_type`
  ADD PRIMARY KEY (`id_baggage_type`);

--
-- Индексы таблицы `brigade`
--
ALTER TABLE `brigade`
  ADD PRIMARY KEY (`id_brigade`),
  ADD KEY `id_department` (`id_department`);

--
-- Индексы таблицы `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`);

--
-- Индексы таблицы `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`);

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`),
  ADD KEY `id_position` (`id_position`);

--
-- Индексы таблицы `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id_flight`) USING BTREE,
  ADD KEY `id_airplane` (`id_airplane`),
  ADD KEY `id_flight_category` (`id_flight_category`),
  ADD KEY `id_flight_delay` (`id_flight_delay`),
  ADD KEY `id_route` (`id_route`);

--
-- Индексы таблицы `flight_cancellation`
--
ALTER TABLE `flight_cancellation`
  ADD PRIMARY KEY (`id_flight_cancellation`),
  ADD KEY `id_airplane` (`id_airplane`),
  ADD KEY `id_flight` (`id_flight`);

--
-- Индексы таблицы `flight_category`
--
ALTER TABLE `flight_category`
  ADD PRIMARY KEY (`id_flight_category`);

--
-- Индексы таблицы `flight_delay`
--
ALTER TABLE `flight_delay`
  ADD PRIMARY KEY (`id_flight_delay`);

--
-- Индексы таблицы `med_exam`
--
ALTER TABLE `med_exam`
  ADD PRIMARY KEY (`id_med_exam`),
  ADD KEY `id_employee` (`id_employee`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Индексы таблицы `passanger`
--
ALTER TABLE `passanger`
  ADD PRIMARY KEY (`id_passenger`);

--
-- Индексы таблицы `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`);

--
-- Индексы таблицы `reinforcement_of_pilots`
--
ALTER TABLE `reinforcement_of_pilots`
  ADD PRIMARY KEY (`id_reinforcement_of_pilots`),
  ADD KEY `id_airplane` (`id_airplane`),
  ADD KEY `id_employee` (`id_employee`);

--
-- Индексы таблицы `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id_route`);

--
-- Индексы таблицы `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id_shops`);

--
-- Индексы таблицы `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_airplane` (`id_airplane`),
  ADD KEY `id_class` (`id_class`),
  ADD KEY `id_employee` (`id_employee`),
  ADD KEY `id_flight` (`id_flight`),
  ADD KEY `id_passenger` (`id_passenger`);

--
-- Индексы таблицы `ticket_return`
--
ALTER TABLE `ticket_return`
  ADD PRIMARY KEY (`id_ticket_return`) USING BTREE,
  ADD KEY `id_ticket` (`id_ticket`);

--
-- Индексы таблицы `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id_timetable`),
  ADD KEY `id_airplane` (`id_airplane`),
  ADD KEY `id_flight` (`id_flight`);

--
-- Индексы таблицы `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id_token`);

--
-- Индексы таблицы `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id_transport`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_employee` (`id_employee`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `airplane`
--
ALTER TABLE `airplane`
  MODIFY `id_airplane` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `airplane_model`
--
ALTER TABLE `airplane_model`
  MODIFY `id_airplane_model` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `airplane_service`
--
ALTER TABLE `airplane_service`
  MODIFY `id_airplane_service` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `airplane_type`
--
ALTER TABLE `airplane_type`
  MODIFY `id_airplane_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `appointment_of_employees`
--
ALTER TABLE `appointment_of_employees`
  MODIFY `id_appointment_of_employees` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `baggage`
--
ALTER TABLE `baggage`
  MODIFY `id_baggage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `baggage_type`
--
ALTER TABLE `baggage_type`
  MODIFY `id_baggage_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `brigade`
--
ALTER TABLE `brigade`
  MODIFY `id_brigade` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `flight`
--
ALTER TABLE `flight`
  MODIFY `id_flight` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `flight_cancellation`
--
ALTER TABLE `flight_cancellation`
  MODIFY `id_flight_cancellation` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `flight_category`
--
ALTER TABLE `flight_category`
  MODIFY `id_flight_category` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `flight_delay`
--
ALTER TABLE `flight_delay`
  MODIFY `id_flight_delay` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `med_exam`
--
ALTER TABLE `med_exam`
  MODIFY `id_med_exam` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `passanger`
--
ALTER TABLE `passanger`
  MODIFY `id_passenger` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `reinforcement_of_pilots`
--
ALTER TABLE `reinforcement_of_pilots`
  MODIFY `id_reinforcement_of_pilots` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `route`
--
ALTER TABLE `route`
  MODIFY `id_route` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `shops`
--
ALTER TABLE `shops`
  MODIFY `id_shops` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `ticket_return`
--
ALTER TABLE `ticket_return`
  MODIFY `id_ticket_return` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id_timetable` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `transport`
--
ALTER TABLE `transport`
  MODIFY `id_transport` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
