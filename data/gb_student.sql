-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 26 2022 г., 15:17
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb_student`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `session_id` text NOT NULL,
  `good_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `good_id`) VALUES
(2, 'inuoua850l17hoo6i16h5hpvt6truqpn', 2),
(3, 'inuoua850l17hoo6i16h5hpvt6truqpn', 2),
(4, 'inuoua850l17hoo6i16h5hpvt6truqpn', 3),
(5, 'inuoua850l17hoo6i16h5hpvt6truqpn', 4),
(6, 'inuoua850l17hoo6i16h5hpvt6truqpn', 8),
(7, 'inuoua850l17hoo6i16h5hpvt6truqpn', 6),
(8, 'inuoua850l17hoo6i16h5hpvt6truqpn', 10),
(9, 'inuoua850l17hoo6i16h5hpvt6truqpn', 6),
(10, 'inuoua850l17hoo6i16h5hpvt6truqpn', 10),
(11, '657v3vg3rebpod124dumd7ic6m75q5o1', 1),
(12, 'd4se27cl5sac5ljkt972ioor33cc8gkt', 2),
(13, 'd4se27cl5sac5ljkt972ioor33cc8gkt', 4),
(14, 'ob6fl7pu20nikrqlg4nfdh8tkvfke6eh', 1),
(16, 'h0d7kb549ga002e84pvjmvj14o568j6o', 1),
(17, 'h0d7kb549ga002e84pvjmvj14o568j6o', 1),
(18, '5kugohpei7l5qbaa2cffrus1v37226eb', 2),
(19, 'nbja32a1o7a24hfhlcfqnp462qki2s2s', 1),
(20, 'nbja32a1o7a24hfhlcfqnp462qki2s2s', 2),
(21, 'nbja32a1o7a24hfhlcfqnp462qki2s2s', 3),
(22, '5j3d2erocaiq8k01isabckescd5do14a', 1),
(23, '5j3d2erocaiq8k01isabckescd5do14a', 2),
(24, 'g8dmhckdaoc65cjmmq79dbst3n05gb8p', 2),
(25, 'ar926rt7i0ggqunkaq7836bc83upcoth', 5),
(27, '61q365fj64sj9rltneosp7eacvo0b8gc', 3),
(28, 'tk5t39gkcrh7vd5j5rc2ac7qto6h6ar6', 3),
(29, 'ib1f33re1vp3ab4pj28g2dd20epbev54', 1),
(30, 'ib1f33re1vp3ab4pj28g2dd20epbev54', 2),
(33, '8u3fjg808rk8t24bq1fgaersbcf0ipho', 3),
(34, '7k4645i8vvbsbfmbp945nbd6t8su9fi7', 3),
(35, '7k4645i8vvbsbfmbp945nbd6t8su9fi7', 4),
(37, 'g1p6bcbs0pu23pp3nqb97mptv1ba8slg', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'Алексей', 'Все супер!'),
(4, 'Виктор', 'Отлично'),
(5, 'Марина', 'Замечательно'),
(16, 'Маревская', 'Супер'),
(17, 'Александр', 'Спасибо'),
(18, 'Александр', 'Класс'),
(20, 'Сергей Иванович', 'Все понравилось! Замечательно');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `filename` text NOT NULL,
  `likes` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `filename`, `likes`) VALUES
(1, '01.jpg', 0),
(2, '02.jpg', 3),
(3, '03.jpg', 0),
(4, '04.jpg', 1),
(5, '05.jpg', 3),
(6, '06.jpg', 0),
(7, '07.jpg', 1),
(8, '08.jpg', 0),
(9, '09.jpg', 1),
(10, '10.jpg', 3),
(11, '11.jpg', 1),
(12, '12.jpg', 0),
(13, '13.jpg', 0),
(14, '14.jpg', 0),
(15, '15.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'Реконструкция систем водоснабжения Астрахани позволит построить 1 млн кв. м жилья', 'АСТРАХАНЬ, 23 марта. /ТАСС/. Запланированная реконструкция и капремонт сетей водоснабжения и водоотведения муниципального предприятия Астрахани \"Астрводоканал\" позволит построить свыше 1 млн кв. м жилья. Об этом сообщила пресс-служба губернатора региона Игоря Бабушкина по итогам его встречи с министром строительства и ЖКХ РФ Иреком Файзуллиным, на которой были обсуждены аспекты реализации нацпроекта \"Жилье и городская среда\", а также развития строительного блока и жилищно-коммунального комплекса региона в текущих экономических условиях.\r\n\r\n\"<...> В рамках инфраструктурного бюджетного кредита в области планируется провести реконструкцию и капремонт сетей водоснабжения и водоотведения МУП Астрахани \"Астрводоканал\", реализация которого позволит дополнительно построить более 1 млн кв. м жилья\", - говорится в сообщении.\r\n\r\nРанее сообщалось, что инфраструктурный кредит в размере 2,7 млрд рублей будет направлен на реконструкцию системы водоснабжения и водоотведения Астрахани, по итогам реализации данного проекта в регионе будет дополнительно создано более 1,5 тыс. рабочих мест.\r\n\r\n\"Без колоссальных вложений в реконструкцию очистных сооружений канализации города дальнейшее развитие Астраханской агломерации просто невозможно. Северные очистные сооружения построены в 70-е годы прошлого века и давно требуют восстановления. В проект мы заложили использование наилучших доступных технологий. Поддержка федерального Минстроя в данном вопросе для нас является как никогда актуальной\", - цитирует Бабушкина пресс-служба.\r\n\r\nФайзуллин также обратил внимание губернатора на необходимость в кратчайшие сроки заключить контракты и начать реализацию запланированных объектов по федеральным проектам \"Чистая вода\" и \"Оздоровление Волги\".\r\n\r\nВ Астраханской области, по данным на 1 марта текущего года, введено в эксплуатацию более 132 тыс. кв. м жилья, что выше аналогичного периода прошлого года практически в 2,5 раза. В рамках федпроекта по формированию комфортной городской среды на территории региона в 2022 году планируется реализовать 73 объекта, добавили в пресс-службе.'),
(2, 'Под Астраханью полиция нашла подземную ферму марихуаны', 'Москва. 14 марта. INTERFAX.RU - В Астраханской области полицейские при обыске дома и во дворе у жителя Наримановского района обнаружили подземную теплицу с марихуаной в горшках, сообщили в пресс-центре МВД.\r\n\r\nВ хозяйственной постройке во дворе оперативники нашли потайную дверь, которая вела в подземное помещение. Там под лампами искусственного освещения и с принудительной вентиляцией рос 61 куст конопли.\r\n\r\nВ МВД добавили, что там же находилась лаборатория по изготовлению и фасовке наркотиков, где высушенные и измельченные растения прессовались и упаковывались в тюбики от детского крема, а также 240 граммов готовой \"продукции\".\r\n\r\nВ отношении хозяина дома возбудили уголовные дела по ч. 2 ст. 228 УК (Незаконные приобретение, хранение, перевозка, изготовление наркотиков) и по ч. 1 ст. 231 (Незаконное культивирование растений, содержащих наркотические средства).\r\n\r\nОбыск проводили бойцы отряда спецназа \"Гром\".');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `phone` int NOT NULL,
  `session_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `likes` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `description`, `price`, `likes`) VALUES
(1, 'sudak.jpg', 'Судак вяленый', 'Астраханский вяленый судак в домашних уютных посиделках становится главным блюдом. ', 900, 5),
(2, 'sopa.jpg', 'Сопа вяленая', 'Сопа приготовлена по традиционным астраханским рецептам вяления', 700, 3),
(3, 'lesh.jpg', 'Лещ вяленый', 'Крупная (25+ см) мясистая рыбка лоснится жиром, брюшко наполнено отменной икрой с пикантной горчинкой.', 550, 1),
(4, 'Chehon.jpg', 'Чехонь вяленая', 'Из чехони готовят много блюд — но наиболее вкусным вариантом является засоленная чехонь, вяленая по старинным астраханским рецептам. ', 900, 2),
(5, 'Vobla-tubus.jpg', 'Вобла вяленая в подарочном тубусе', 'Астраханская вяленая вобла в сувенирном тубусе — аппетитный презент для любимого, родственника, друга или коллеги, предпочитающего вкусные подарки.', 1500, 0),
(6, 'vobla.jpg', 'Вобла вяленая', 'Вяленая вобла — традиционная астраханская закуска с узнаваемым ароматом, без которой не обходится ни одна дружеская встреча в сопровождении пенных напитков.', 1300, 0),
(7, 'ikra_vobla.jpg', 'Икра воблы вяленая', 'Икра воблы вяленая в тубусе — идеальный презент для ценителя солёненького по любому случаю.', 1250, 1),
(8, 'company.jpg', 'Набор \"Компанейский\"', 'Намечается дружеская посиделка в сопровождении пенных напитков? Тогда рекомендуем обратить внимание на набор «Компанейский» ', 4300, 1),
(9, 'balik.jpg', 'Балык филе из сома холодного копчения', 'Балык из сома холодного копчения украсит обеденный стол и станет любимым блюдом вашей семьи.', 1100, 0),
(10, 'balikos.jpg', 'Балык филе из осетра холодного копчения', 'Астраханский балык из осетра холодного копчения станет главным деликатесом праздничного стола, как в царские времена.', 4500, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '$2y$10$2qMwxKY7nxxiFZFBP4yzrePkz5WVzb9F7dKO2xux5.XLbPLXkmBEC', '86903396246f655ca56f1.24266610'),
(2, 'alexey', '$2y$10$hhMDbgBBRk8Wx5mo8zwB9uJWf16ellMcl4gOot..R0UmaFvxwV9xS', '1099833728624c2bbfdcae99.39069909');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
