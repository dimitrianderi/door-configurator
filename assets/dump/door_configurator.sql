-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 28 2023 г., 18:47
-- Версия сервера: 5.5.62-log
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `door_configurator`
--

-- --------------------------------------------------------

--
-- Структура таблицы `config`
--

CREATE TABLE `config` (
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealership` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `config`
--

INSERT INTO `config` (`token`, `chat_id`, `dealership`) VALUES
('6603662089:AAEbXRxDepKOtv0Qn6GvrSwARlG5AkwiXQc', '-985732401', 1.2);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `painting_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tape_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handle_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width_door` int(10) NOT NULL,
  `height_door` int(10) NOT NULL,
  `opening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `painting_color`, `tape_color`, `handle_color`, `width_door`, `height_door`, `opening`, `accessories`, `sum`) VALUES
(27, 'yellow', 'red', 'green', 105, 205, 'left', 'peephole, bell', 1181380),
(28, 'red', 'yellow', 'blue', 150, 250, 'left', 'peephole, digits', 189810),
(29, 'red', 'blue', 'yellow', 150, 250, 'left', 'bell', 302475),
(30, 'blue', 'blue', 'red', 150, 250, 'right', 'peephole, bell, digits', 302000),
(31, 'red', 'blue', 'blue', 150, 250, 'right', 'peephole, bell', 302865),
(32, 'red', 'blue', 'red', 150, 250, 'left', 'peephole', 302325),
(33, 'red', 'blue', 'blue', 100, 250, 'left', NULL, 202110),
(34, 'red', 'yellow', 'blue', 150, 180, 'right', NULL, 137070),
(35, 'blue', 'yellow', 'green', 107, 213, 'right', 'peephole, bell', 115690),
(36, 'red', 'blue', 'yellow', 150, 180, 'right', 'peephole', 218050),
(37, 'blue', 'blue', 'red', 100, 250, 'right', NULL, 201300),
(38, 'red', 'green', 'blue', 150, 250, 'right', 'peephole', 265015),
(39, 'red', 'yellow', 'yellow', 100, 250, 'left', 'bell', 127275),
(40, 'red', 'blue', 'yellow', 150, 250, 'right', 'peephole', 302330),
(41, 'blue', 'blue', 'yellow', 150, 180, 'right', 'peephole', 217390),
(42, 'red', 'blue', 'green', 105, 190, 'left', 'bell', 161670),
(43, 'yellow', 'red', 'green', 101, 187, 'right', 'peephole, digits', 117032),
(44, 'red', 'blue', 'yellow', 150, 180, 'left', 'peephole', 218010),
(45, 'red', 'blue', 'yellow', 101, 187, 'right', 'bell', 153163),
(46, 'red', 'yellow', 'green', 150, 250, 'right', 'peephole', 189845),
(47, 'red', 'blue', 'red', 150, 250, 'right', 'peephole', 302365),
(48, 'yellow', 'blue', 'blue', 150, 234, 'right', 'peephole', 285555),
(49, 'blue', 'yellow', 'red', 150, 234, 'left', 'peephole', 176993),
(50, 'green', 'yellow', 'blue', 150, 250, 'right', 'peephole', 190815),
(51, 'blue', 'green', 'yellow', 100, 234, 'right', 'peephole, bell', 165548),
(52, 'blue', 'blue', 'blue', 150, 234, 'right', 'bell', 282668),
(53, 'yellow', 'blue', 'blue', 150, 234, 'right', 'peephole', 285555),
(54, 'blue', 'blue', 'red', 150, 180, 'right', 'bell', 217610),
(55, 'blue', 'yellow', 'yellow', 150, 250, 'left', 'peephole', 188990),
(56, 'blue', 'red', 'green', 150, 250, 'left', 'peephole', 226505),
(57, 'red', 'green', 'blue', 150, 234, 'left', 'peephole', 248111),
(58, 'red', 'green', 'blue', 150, 180, 'right', 'peephole', 191235),
(59, 'blue', 'red', 'yellow', 101, 201, 'right', 'peephole, bell', 123490),
(60, 'red', 'green', 'blue', 150, 234, 'left', 'peephole', 248111),
(61, 'red', 'blue', 'blue', 150, 234, 'right', 'peephole', 283251),
(62, 'red', 'yellow', 'green', 101, 180, 'right', 'peephole, bell', 93119),
(63, 'blue', 'yellow', 'yellow', 150, 180, 'left', 'peephole', 136350),
(64, 'blue', 'yellow', 'yellow', 150, 250, 'left', 'peephole', 188990),
(65, 'red', 'yellow', 'blue', 150, 250, 'left', 'peephole', 189975),
(66, 'red', 'blue', 'blue', 150, 250, 'right', 'peephole', 302515),
(67, 'blue', 'blue', 'blue', 100, 180, 'left', 'bell', 145620),
(68, 'blue', 'blue', 'blue', 150, 250, 'right', 'peephole', 301715),
(69, 'red', 'blue', 'yellow', 100, 250, 'left', 'peephole', 202090),
(70, 'yellow', 'blue', 'yellow', 150, 234, 'left', 'peephole', 285330),
(71, 'yellow', 'blue', 'blue', 100, 250, 'left', 'peephole', 204375),
(72, 'red', 'blue', 'yellow', 100, 250, 'right', 'bell', 202315),
(73, 'red', 'blue', 'blue', 100, 250, 'left', 'peephole', 202275),
(74, 'blue', 'blue', 'blue', 150, 250, 'right', 'peephole', 301715),
(75, 'blue', 'yellow', 'yellow', 150, 250, 'right', 'peephole, bell', 189380),
(76, 'blue', 'green', 'yellow', 150, 250, 'right', 'peephole, bell', 264380),
(77, 'red', 'blue', 'yellow', 101, 187, 'left', 'peephole, bell', 153288),
(78, 'red', 'yellow', 'blue', 100, 180, 'right', 'peephole, bell', 92385),
(79, 'red', 'blue', 'blue', 150, 250, 'right', 'peephole', 302515),
(80, 'red', 'blue', 'blue', 150, 250, 'right', 'peephole', 302515),
(81, 'blue', 'blue', 'blue', 101, 201, 'left', 'peephole, bell, digits', 164322),
(82, 'green', 'blue', 'yellow', 100, 234, 'right', 'peephole', 189934),
(83, 'blue', 'blue', 'blue', 111, 222, 'right', 'peephole, bell', 199067),
(84, 'yellow', 'blue', 'blue', 100, 250, 'left', 'peephole, bell', 204725);

-- --------------------------------------------------------

--
-- Структура таблицы `price`
--

CREATE TABLE `price` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `cost` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `price`
--

INSERT INTO `price` (`id`, `product_id`, `type_id`, `cost`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 3),
(3, 1, 3, 5),
(4, 1, 4, 1),
(5, 2, 1, 6),
(6, 2, 2, 7),
(7, 2, 3, 5),
(8, 2, 4, 8),
(9, 3, 1, 200),
(10, 3, 2, 180),
(11, 3, 3, 165),
(12, 3, 4, 350),
(13, 4, 5, 360),
(14, 4, 6, 400),
(15, 5, NULL, 165),
(16, 6, NULL, 350),
(17, 7, NULL, 85);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(1, 'painting'),
(2, 'tape'),
(3, 'handle'),
(4, 'opening'),
(5, 'peephole'),
(6, 'bell'),
(7, 'digits');

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'red'),
(2, 'green'),
(3, 'yellow'),
(4, 'blue'),
(5, 'left'),
(6, 'right');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `painting_color` (`painting_color`(191)),
  ADD KEY `tape_color` (`tape_color`(191)),
  ADD KEY `handle_color` (`handle_color`(191)),
  ADD KEY `opening` (`opening`(191)),
  ADD KEY `painting_color_2` (`painting_color`(191));

--
-- Индексы таблицы `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`,`type_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT для таблицы `price`
--
ALTER TABLE `price`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `price_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
