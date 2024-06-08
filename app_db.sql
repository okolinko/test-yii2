-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Июн 08 2024 г., 17:54
-- Версия сервера: 8.0.36
-- Версия PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `app_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1717850165),
('m240608_123216_create_user_demo_table', 1717863579),
('m240608_123247_create_user_table', 1717862530);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password_hash` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `phone`, `password_hash`, `auth_key`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sania', 'Test', 'qwe@gmail.com', '', '$2y$13$ZHMFoujgjCDExaJ.8OIXb.TzOT1yrEHpazzVQ6aCZut8FhhAMyy5q', '3wW49PoL6gJcQwyh5hKvYG_TDy-bLOLO', 1, 1717862566, 1717862566),
(4, 'qwe1', 'qwe1', 'qwe1@gmail.com', NULL, '$2y$13$mog9/Ndvgw0e7q.a6vnLYuINtYI1OtGQQNpuJsz2lSa6vvnbYJUq6', 'r4Kn24EBWNEoaG2iUJSHJEEI3kYAKzWF', 1, 1717862965, 1717862965),
(5, 'KEK', 'CHEBUREK', 'qwer@gmail.com', '+3 (063) 590-06-88', '$2y$13$fpx5o/4yv2KkqHzqYW1dWuzTUqr204cVBDC8p2bq9GOAo1Xg3z6.u', 'dSlb7n6nw2rBLcZFhUo5Lf5mP6UHlaJk', 1, 1717865407, 1717865407),
(6, 'GGG', 'GGG', 'GGG@gmail.com', NULL, '$2y$13$DXqm0CrFrXI.ldmFPo2mtezFx.ROY2.mPRCQLqA9EX/P8wjhQO/.O', 'azU8nq3xj67WL_BLx6FDMu1OL_meNayW', 1, 1717867266, 1717867266),
(7, 'LOL', 'KEK', 'adsdas@ttt.com', NULL, '$2y$13$SDzgB9IuOUvv7J239VVBCuWmVK.gUXPUUxP.B4AFPbY/UmD.JGLhy', 'hLBY4O2DcIjV3uXkCrLg3Cv53GXYHjT3', 1, 1717868235, 1717868235),
(8, 'fgdf', 'gdfgdfg', 'dfgdfg@sdgds.fdsf', NULL, '$2y$13$nbKXCVMA2fX8B1jwCvC4kuqCKuhHQf4HCOKhbzXyqYMI.w.Ca5bPq', 'a4DHX9oBburlZxlvfp2avgsVBny3S8Pt', 1, 1717868312, 1717868312);

-- --------------------------------------------------------

--
-- Структура таблицы `user_demo`
--

CREATE TABLE `user_demo` (
  `id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `user_demo`
--

INSERT INTO `user_demo` (`id`, `first_name`, `last_name`, `middle_name`, `email`, `phone`, `document`) VALUES
(1, 'qwe', 'qwe1', '', NULL, NULL, '123'),
(2, 'qwe', 'qwe1', '', NULL, NULL, '1234'),
(3, 'fdsfsd', 'fsdfsdf', '', NULL, NULL, '42342342'),
(4, 'fdsfsd', 'fsdfsdf', '', NULL, NULL, '423423423'),
(5, 'fdsfsd', 'fsdfsdf', '', NULL, NULL, '423423422'),
(6, 'kek', 'cheburek', '', NULL, NULL, '4234234223'),
(7, 'kek2', 'cheburek', '', NULL, NULL, '42342342231'),
(8, 'kek3', 'cheburek', '', NULL, NULL, '423423422311'),
(9, 'fgdfgdf', 'gdfgdfgdf', '', NULL, NULL, '867978'),
(10, 'dsaas', 'dasdas', '', NULL, NULL, 'dasdasd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Индексы таблицы `user_demo`
--
ALTER TABLE `user_demo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `document` (`document`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `user_demo`
--
ALTER TABLE `user_demo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
