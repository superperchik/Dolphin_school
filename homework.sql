-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 18 2022 г., 22:25
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dolphinschool`
--

-- --------------------------------------------------------

--
-- Структура таблицы `homework`
--

CREATE TABLE `homework` (
  `Tittle` varchar(40) NOT NULL,
  `Topic` varchar(40) NOT NULL,
  `Deadline` date NOT NULL,
  `Description` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `homework`
--

INSERT INTO `homework` (`Tittle`, `Topic`, `Deadline`, `Description`, `ID`) VALUES
('Занятие 1', 'Welcome to UK', '2022-01-11', 'Это текст домашки.', 1),
('Занятие 2', 'London id the Capital of Great Britain', '2022-01-31', 'Что-то умное для изучения английского', 2),
('Занятие 3', 'City life or country life?', '2022-01-25', ' 333333333333', 3),
('Занятие 4', 'My favourite author', '2022-02-01', '44444444444', 4),
('Занятие 5', 'Teenage Problems with parents', '2022-02-08', '55555555555555', 5),
('Занятие 6', 'Higher Education', '2022-02-15', '666666666', 6),
('Занятие 7', 'Experiments on Animals', '2022-02-22', '7777777777', 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `homework`
--
ALTER TABLE `homework`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
