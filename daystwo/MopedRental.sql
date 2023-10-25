-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 25 2023 г., 20:52
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `MopedRental`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `PhoneNumber` int NOT NULL,
  `Password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `PhoneNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `UserEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `inDate` date DEFAULT NULL,
  `outDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `Name`, `BirthDate`, `PhoneNumber`, `UserEmail`, `inDate`, `outDate`) VALUES
(6, '1', '2023-10-05', 'e', 'e', '2023-10-13', '2023-10-07'),
(7, '1', '2023-10-05', '1', '1', '2023-10-05', '2023-10-05'),
(8, '1', '2023-09-29', '+7(1', '1', '2023-10-20', '2023-10-22'),
(9, ' 1', '2023-10-11', '1', '1', '2023-10-01', '2023-10-15'),
(10, '2', '2023-10-28', '2', '2', '2023-09-28', '2023-10-12');

-- --------------------------------------------------------

--
-- Структура таблицы `bookings`
--

CREATE TABLE `bookings` (
  `id` int NOT NULL,
  `id_moped` int NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dataCompany`
--

CREATE TABLE `dataCompany` (
  `id` int NOT NULL,
  `adress` varchar(255) NOT NULL,
  `linkVK` varchar(255) NOT NULL,
  `linkTG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `dataCompany`
--

INSERT INTO `dataCompany` (`id`, `adress`, `linkVK`, `linkTG`) VALUES
(1, '182882, Кировская область, город Пушкино, спуск Гоголя, 05', 'moped74/vk.com', 'moped74/tg.com');

-- --------------------------------------------------------

--
-- Структура таблицы `Mopeds`
--

CREATE TABLE `Mopeds` (
  `id` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int NOT NULL,
  `Speed` int NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Mopeds`
--

INSERT INTO `Mopeds` (`id`, `Name`, `Price`, `Speed`, `Image`) VALUES
(1, 'YamahaQ', 1000, 60, 'images/photo1.jpg'),
(2, 'YamahaW', 1599, 70, 'images/photo2.jpg'),
(3, 'YamahaE', 1400, 50, 'images/photo3.jpg'),
(4, 'YamahaR', 1700, 70, 'images/photo4.jpg'),
(5, 'YamahaT', 1500, 40, 'images/photo5.jpg'),
(6, 'YamahaY', 1790, 80, 'images/photo6.jpg'),
(7, 'YamahaU', 2000, 50, 'images/photo7.jpg'),
(8, 'YamahaI', 2100, 55, 'images/photo8.jpg'),
(9, 'YamahaO', 2200, 60, 'images/photo9.jpg'),
(10, 'YamahaP', 2399, 80, 'images/photo10.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Reviews`
--

CREATE TABLE `Reviews` (
  `id` int NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Reviews`
--

INSERT INTO `Reviews` (`id`, `Content`) VALUES
(1, 'Отличный сервис проката мопедов! Мопед был в отличном состоянии, процесс аренды был быстрым и удобным. Путешествие на мопеде оказалось веселым и незабываемым. Рекомендую!\"'),
(2, 'Спасибо за качественный прокат мопеда! Цены были разумными, а мопед был надежным и хорошо обслуживаемым. Проезд был комфортным, просто наслаждался видами.'),
(3, 'Удивительный опыт аренды мопеда! Сотрудники проката были дружелюбными и профессиональными. Мопед был чистым, с полным баком бензина. Порекомендую друзьям!'),
(4, 'Прокат мопедов - отличный способ осмотреть город! Я и мои друзья арендовали мопеды на целый день. Получили огромное удовольствие, и время пролетело незаметно.'),
(5, 'Очень рад, что выбрал этот прокат мопедов. Мопед был в идеальном состоянии, постоянно проверялся и обслуживался. Очень рекомендую всем, кто посещает этот город!'),
(6, 'Очень удобный прокат мопедов. Быстрая и простая процедура оформления. Мопеды предоставляются с полным баком топлива, что очень удобно. Прокат рядом с центром города.'),
(7, 'Моя поездка на мопеде была просто потрясающей! Прокат предоставил мне надежный и комфортный мопед. Я обошел все достопримечательности и получил массу впечатлений.'),
(8, 'Сервис проката мопедов сделал мой отпуск незабываемым! Мопеды были новыми, а обслуживание было на высшем уровне. Я с удовольствием повторю это в следующий раз.'),
(9, 'Никогда не думал, что поездка на мопеде может быть так веселой! Отличный выбор проката, мопеды были комфортными и проходимыми. Это было одно из лучших приключений!'),
(10, 'Прокат мопедов оказался отличным решением для осмотра окрестностей. Мопеды были легкими в управлении, а маршруты, которые порекомендовали в прокате, были очаровательными.'),
(11, 'Я арендовал мопед и провел целый день, наслаждаясь свежим воздухом и красивыми пейзажами. Расцветка мопедов была яркой и привлекательной. Приятный опыт!'),
(12, 'Прокат предоставил нам великолепные мопеды. Их состояние было безупречным, а цены весьма разумными. Прокат находится в удобном месте, что облегчило нашу поездку.'),
(13, 'Прекрасный опыт аренды мопеда! Получил много удовольствия от поездки по узким улочкам и побережью. Прокат предоставил нам карту с интересными местами для посещения.'),
(14, 'Прокат мопедов был безупречным. Мопеды были комфортными, и качество обслуживания было высоким. Наше путешествие на мопедах стало ярким и запоминающимся моментом.'),
(15, 'Прокат предложил отличный выбор мопедов по разным категориям. Цены были разумными, а обслуживание было дружелюбным и профессиональным. Отличный вариант для исследования города!'),
(16, 'Спасибо прокату мопедов за отличную услугу! Можно было выбрать мопеды различных моделей и размеров. Это было весело и увлекательно. Обязательно вернусь снова.'),
(17, 'Прокат мопедов оправдал все ожидания! Мопед был в отличном состоянии, получил полный бак бензина. Изумительное путешествие с ветерком и свободой перемещения.'),
(18, 'Отличный сервис и качественные мопеды! Прокат был легким и быстрым. Мопеды прокатились гладко и без каких-либо проблем. Определенно рекомендую этот прокат!'),
(19, 'Прокатный центр предоставил нам отличные мопеды. Они были чистыми и надежными. Организация проката была профессиональной и дружелюбной. Порекомендую всем!'),
(20, 'Великолепный прокат мопедов! Полный выбор моделей и размеров. Сотрудники проката были заботливыми и предоставили все необходимые инструкции. Приключение на мопеде оказалось захватывающим!');

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `id` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `SecondName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `BirthDate` date NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `passwordUser` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`id`, `Name`, `SecondName`, `LastName`, `PhoneNumber`, `BirthDate`, `UserEmail`, `passwordUser`, `isAdmin`) VALUES
(4, 'Иван', 'Иванов', 'Иванович', '+7(902)123-45-67', '2023-10-25', 'testtestte@mail.ru', '1234', 1),
(5, 'Виктор', 'Викторов', 'Викторович', '+7(902)891-01-11', '2023-10-20', 'test2test2@mail.ru', '12345', NULL),
(6, '1', '1', '1', '+7(1', '2023-09-29', 'testtestte@mail.ru', '1', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_moped` (`id_moped`);

--
-- Индексы таблицы `dataCompany`
--
ALTER TABLE `dataCompany`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Mopeds`
--
ALTER TABLE `Mopeds`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `dataCompany`
--
ALTER TABLE `dataCompany`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Mopeds`
--
ALTER TABLE `Mopeds`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`id_moped`) REFERENCES `Mopeds` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
