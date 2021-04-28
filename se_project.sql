-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 28 2021 г., 13:58
-- Версия сервера: 10.1.19-MariaDB
-- Версия PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `se_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `att`
--

CREATE TABLE `att` (
  `id` int(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `idd2` int(100) NOT NULL,
  `date` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `att`
--

INSERT INTO `att` (`id`, `message`, `idd2`, `date`) VALUES
(31, 'hello ,sorry today i have some problems', 9, '23:44:02'),
(31, 'hello ,i have some problems1', 10, '17:37:56');

-- --------------------------------------------------------

--
-- Структура таблицы `job`
--

CREATE TABLE `job` (
  `id` int(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `start_date3` date NOT NULL,
  `start_time3` time NOT NULL,
  `end_time3` time DEFAULT NULL,
  `statusing` varchar(100) NOT NULL,
  `id22` int(100) NOT NULL,
  `uakyt` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `job`
--

INSERT INTO `job` (`id`, `subject`, `start_date3`, `start_time3`, `end_time3`, `statusing`, `id22`, `uakyt`) VALUES
(26, '', '2021-04-24', '05:27:28', '05:27:29', 'stopped', 155, '00:00:01'),
(26, '', '2021-04-24', '05:27:32', '05:27:36', 'stopped', 156, '00:00:01'),
(26, '', '2021-04-24', '05:27:38', '05:27:52', 'stopped', 157, '00:00:14'),
(26, '', '2021-04-24', '05:32:55', '05:32:57', 'stopped', 158, '03:59:58'),
(26, '', '2021-04-24', '05:33:02', '05:33:11', 'stopped', 159, '00:00:09'),
(26, '', '2021-04-24', '22:05:01', '22:05:03', 'finished', 160, '00:00:01'),
(26, '', '2021-04-24', '22:05:04', '22:05:05', 'stopped', 161, '00:00:01');

-- --------------------------------------------------------

--
-- Структура таблицы `status_come`
--

CREATE TABLE `status_come` (
  `id` int(100) NOT NULL,
  `come_to` date NOT NULL,
  `come_time` time NOT NULL,
  `go_out` time DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `oryndar` int(100) NOT NULL,
  `arasy` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status_come`
--

INSERT INTO `status_come` (`id`, `come_to`, `come_time`, `go_out`, `status`, `oryndar`, `arasy`) VALUES
(31, '2021-04-28', '03:03:21', '03:03:22', 'left', 620, '00:00:01'),
(31, '2021-04-28', '03:03:40', '03:03:41', 'left', 621, '00:00:01'),
(31, '2021-04-19', '08:00:00', '16:21:37', 'left', 622, '08:00:00'),
(31, '2021-04-20', '00:00:00', '16:21:38', 'left', 623, '11:00:00'),
(31, '2021-04-21', '00:00:00', '16:21:38', 'left', 624, '08:00:00'),
(31, '2021-04-22', '00:00:00', '16:21:38', 'left', 625, '16:00:00'),
(31, '2021-04-23', '14:31:33', '16:21:38', 'left', 626, '06:00:00'),
(31, '2021-04-24', '00:00:00', '16:21:38', 'left', 627, '12:00:23'),
(31, '2021-04-25', '00:00:00', '16:21:38', 'left', 628, '01:50:05'),
(31, '2021-04-28', '16:21:38', '16:21:40', 'left', 629, '00:00:02'),
(31, '2021-04-28', '16:21:41', '16:43:03', 'left', 630, '00:21:22'),
(31, '2021-04-28', '17:36:52', '17:36:58', 'left', 631, '00:00:06'),
(31, '2021-04-28', '17:37:02', '17:37:05', 'left', 632, '00:00:03'),
(31, '2021-04-28', '17:37:09', '17:37:11', 'left', 633, '00:00:02');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `tel` bigint(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `tel`, `job`, `password`, `login`) VALUES
(24, 'abai', 'zeinolla', 87471718559, 'frnt', 'abai1234', 'Abai_z'),
(25, 'd', 'd', 1, 'd', 'd', 'd'),
(26, 'abai12', 'zeinnol', 870104, 'dad', 'zz', 'zz@mail.ru'),
(27, 'zaq', 'zaq', 123, '801', 'zaq', 'zaq'),
(28, 'Temirlan', 'Kuttykozhanov', 87010705599, 'Backend developer', 'abai1234', 'QRyz@mail.ru'),
(29, 'Temirlan', 'Kuttykozhanov', 87010806569, 'ddddd', '123', 'Temirlan01@bk.ru'),
(30, 'dwda', 'dwadwad', 0, 'dwadwa', 'dwad12212', 'dawd'),
(31, 'Alisher', 'Konysbaev', 87015550369, 'Front-end Dev.', 'Aleka20011234', 'Aleka_superboy@mail.ru'),
(32, 'Tanirbergen', 'Ga', 87458238, 'cooker', 'Rank1234', 'Lsgr@mail.ru'),
(33, 'Alikhan', 'Ray', 8742585, 'Front', 'Rala1234', 'Raus@mail.ru'),
(46, 'A', 'a', 777, 'aaaa', 'Abai2001', 'a');

-- --------------------------------------------------------

--
-- Структура таблицы `week`
--

CREATE TABLE `week` (
  `id` int(100) NOT NULL,
  `nameW` int(100) NOT NULL,
  `uakyt` time NOT NULL,
  `flexi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `week`
--

INSERT INTO `week` (`id`, `nameW`, `uakyt`, `flexi`) VALUES
(31, 1, '49:00:00', 40),
(31, 1, '61:00:23', 40),
(31, 1, '61:00:23', 40);

-- --------------------------------------------------------

--
-- Структура таблицы `xxx`
--

CREATE TABLE `xxx` (
  `date1` time NOT NULL,
  `date2` time NOT NULL,
  `kun` date NOT NULL,
  `login` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `xxx`
--

INSERT INTO `xxx` (`date1`, `date2`, `kun`, `login`) VALUES
('08:13:09', '10:21:11', '2021-04-24', '02:00:00'),
('05:27:20', '18:33:38', '2021-04-19', '01:10:00'),
('10:26:19', '21:44:30', '2021-04-20', '01:20:00'),
('10:00:00', '19:48:00', '2021-04-21', '01:00:00'),
('15:42:33', '19:56:57', '2021-04-22', '01:10:00'),
('08:13:09', '19:48:00', '2021-04-23', '02:00:00'),
('06:00:00', '08:31:36', '2021-04-25', '02:00:00'),
('11:00:00', '15:00:00', '2021-04-26', '23:00:00'),
('10:43:44', '08:30:43', '2021-04-27', '14:39:46'),
('05:46:33', '10:26:28', '2021-04-17', '09:28:23'),
('13:28:35', '12:34:34', '2021-04-18', '09:41:27');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `att`
--
ALTER TABLE `att`
  ADD UNIQUE KEY `idd2` (`idd2`);

--
-- Индексы таблицы `job`
--
ALTER TABLE `job`
  ADD UNIQUE KEY `id22` (`id22`);

--
-- Индексы таблицы `status_come`
--
ALTER TABLE `status_come`
  ADD UNIQUE KEY `oryndar` (`oryndar`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `ffd` (`id`),
  ADD UNIQUE KEY `tel` (`tel`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `att`
--
ALTER TABLE `att`
  MODIFY `idd2` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `job`
--
ALTER TABLE `job`
  MODIFY `id22` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT для таблицы `status_come`
--
ALTER TABLE `status_come`
  MODIFY `oryndar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=634;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
