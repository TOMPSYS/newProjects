-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 24 2020 г., 11:22
-- Версия сервера: 8.0.12
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `exam`
--

-- --------------------------------------------------------

--
-- Структура таблицы `receipts`
--

CREATE TABLE `receipts` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `NumberRooms` int(255) NOT NULL,
  `Floor` int(255) NOT NULL,
  `Metryc` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `typeAd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `receipts`
--

INSERT INTO `receipts` (`id`, `Name`, `NumberRooms`, `Floor`, `Metryc`, `cost`, `typeAd`) VALUES
(1, 'Ветеранов 43', 4, 16, '33', '5 000 000', 'Покупка'),
(2, 'Тихоокеанская 1', 1, 16, '30', '1 000 000', 'Продажа'),
(3, 'Пушкина 13', 3, 1, '40', '4 000 000', 'Обмен'),
(4, 'Тихоокеанская 5', 2, 2, '30', '4 000 000', 'Обмен'),
(5, 'Морская улица 1', 2, 4, '23', '2 000 000', 'Покупка'),
(6, 'Новый Обмен', 1, 1, '1', '1', 'Обмен');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
