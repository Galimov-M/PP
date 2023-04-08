-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 14 2022 г., 13:13
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tracking`
--

-- --------------------------------------------------------

--
-- Структура таблицы `track`
--

CREATE TABLE `track` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `ves` varchar(50) NOT NULL,
  `data` varchar(50) NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `track`
--

INSERT INTO `track` (`id`, `title`, `descrip`, `ves`, `data`, `country`) VALUES
(1, 'Посылочка', 'Экономичная наземная доставка для частных лиц', 'До 12 кг', 'От 2 дней', 'Россия, Беларусь, Казахстан, Киргизия'),
(2, 'Экспресс-лайт', 'Экспресс доставка документов и мелких грузов', 'До 29 кг', 'От 1 дня', 'Россия, Беларусь, Казахстан, Киргизия'),
(3, 'Экспресс-тежеловесы', 'Экспресс доставка грузов', 'До 30 кг', 'От 1 дня', 'Россия, Беларусь, Казахстан, Киргизия'),
(4, 'Супер-экспресс', 'Срочная доставка к определенному часу документов и мелких грузов', 'До 1 кг', 'От 1-2 дня', 'Россия, Беларусь, Казахстан, Киргизия'),
(5, 'Блиц-экспресс', 'Срочная доставка в течение суток', 'До 5 кг', '1 сутки', 'Россия');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `track`
--
ALTER TABLE `track`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
