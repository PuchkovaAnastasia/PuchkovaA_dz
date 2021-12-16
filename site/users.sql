-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2021 г., 00:05
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
-- База данных: `autorization`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `Login` varchar(30) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Login`, `Password`) VALUES
(1, 'Anastasia', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Ivan', '202cb962ac59075b964b07152d234b70'),
(3, 'Eva', '250cf8b51c773f3f8dc8b4be867a9a02'),
(4, 'Anastasia', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Ivan', '202cb962ac59075b964b07152d234b70'),
(6, 'Eva', '250cf8b51c773f3f8dc8b4be867a9a02'),
(7, 'Anastasia', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'Ivan', '202cb962ac59075b964b07152d234b70'),
(9, 'Eva', '250cf8b51c773f3f8dc8b4be867a9a02'),
(10, 'Anastasia', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'Ivan', '202cb962ac59075b964b07152d234b70'),
(12, 'Eva', '250cf8b51c773f3f8dc8b4be867a9a02'),
(13, 'Anastasia', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'Ivan', '202cb962ac59075b964b07152d234b70'),
(15, 'Eva', '250cf8b51c773f3f8dc8b4be867a9a02'),
(16, 'Anastasia', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'Ivan', '202cb962ac59075b964b07152d234b70'),
(18, 'Eva', '250cf8b51c773f3f8dc8b4be867a9a02'),
(19, 'Anastasia', '827ccb0eea8a706c4c34a16891f84e7b'),
(20, 'Ivan', '202cb962ac59075b964b07152d234b70'),
(21, 'Eva', '250cf8b51c773f3f8dc8b4be867a9a02'),
(22, 'Anastasia', '827ccb0eea8a706c4c34a16891f84e7b'),
(23, 'Ivan', '202cb962ac59075b964b07152d234b70'),
(24, 'Eva', '250cf8b51c773f3f8dc8b4be867a9a02');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
