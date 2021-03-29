-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2021 г., 21:20
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'sdsad', '2021-03-22 17:25:21', '2021-03-22 17:25:21'),
(3, 'Федор Абрамов', '2021-03-24 06:00:09', '2021-03-24 06:00:09'),
(4, 'Дмитрий Глуховский', '2021-03-24 06:00:19', '2021-03-24 06:00:19'),
(5, 'Аркадий Аверченко', '2021-03-24 06:00:28', '2021-03-24 06:00:28'),
(6, 'Михаил Анчаров', '2021-03-24 06:00:39', '2021-03-24 06:00:39'),
(7, 'Виктор Астафьев', '2021-03-24 06:00:46', '2021-03-24 06:00:46'),
(8, 'Исаак Бабель', '2021-03-24 06:00:56', '2021-03-24 06:00:56'),
(9, 'Леха Некр', '2021-03-24 06:01:06', '2021-03-29 07:59:10'),
(10, 'Зоя Богуславская', '2021-03-24 06:01:21', '2021-03-24 06:01:21'),
(11, 'Василий Белов', '2021-03-24 06:01:38', '2021-03-24 06:01:38');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripticn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_02_19_085211_create_tasks_table', 1),
(17, '2021_02_19_092718_create_contacts_table', 1),
(18, '2021_02_19_105022_create_table_news', 1),
(19, '2021_03_18_144946_create_table_authors', 1),
(20, '2021_03_18_145743_update_news', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `subject`, `message`, `name`, `email`, `created_at`, `updated_at`, `author_id`) VALUES
(2, 'Отрывок 2', 'Весна, по всем приметам, шла скорая, дружная. К середине апреля на Пинеге зачернела дорога, уставленная еловыми вешками, засинели забереги.', 'Федор Абрамов', 'Fedya228@mail.ru', '2021-03-24 06:03:21', '2021-03-24 06:04:56', 3),
(3, 'Отрывок 3', 'В темных далях чернолесья проглянули розовые рощи берез.', 'Федор Абрамов', 'Fedya228@mail.ru', '2021-03-24 06:05:41', '2021-03-24 06:05:41', 3),
(4, 'Отрывок из книги', 'Окно показывало смазанные ели, белый шум ноябрьской пурги; телеграфные столбы мельтешили, как поползшие рамки кадра в черно-белом кино.', 'Дмитрий Глуховский', 'Gluhovsry@mail.ru', '2021-03-24 06:07:45', '2021-03-24 06:07:45', 4),
(5, 'Отрывок из книги', 'Лейтенант сверился с паспортом, смяв без необходимости попутные страницы. Был он, наверное, такого же возраста, как и Илья, но погоны делали его старше.', 'Дмитрий Глуховский', 'Gluhovsry@mail.ru', '2021-03-24 06:08:39', '2021-03-24 06:08:39', 4),
(6, 'Отрывок из книги', 'Было ярко, как в детстве. Тусклая ноябрьская Москва резала глаза.', 'Дмитрий Глуховский', 'Gluhovsry@mail.ru', '2021-03-24 06:10:42', '2021-03-24 06:10:42', 4),
(7, 'Предыстория', 'Уже три дня королевствовал скромный писатель Ave. Нужно отдать ему справедливость — он не пользовался своей властью и преимуществом своего положения.', 'Аркадий Аверченко', 'AA@mail.ru', '2021-03-24 06:14:40', '2021-03-24 06:14:40', 5),
(8, 'Предыстория 2', 'Однажды (это было на четвертый день утром) Ave стоял в своем королевском кабинете у окна и рассеянно смотрел на улицу.', 'Аркадий Аверченко', 'AA@gmail.ru', '2021-03-24 06:15:32', '2021-03-24 06:15:32', 5),
(9, 'Неожиданность', 'Неожиданно внимание его было привлечено странным зрелищем: два полисмена тащили за шиворот прохожего, а третий пинками ноги подгонял его сзади.', 'Михаил Анчаров', 'Ancharov1337@mail.ru', '2021-03-24 06:16:56', '2021-03-24 06:16:56', 6),
(10, 'Стою', 'Стою на полустаночке В цветастом полушалочке, А мимо пролетают поезда.', 'Михаил Анчаров', 'Ancharov1337@mail.ru', '2021-03-24 06:18:03', '2021-03-24 06:18:03', 6),
(11, 'Пожилой окоп', 'За невысоким бруствером окопа, в аккуратно лопатой выбранной нише — по-солдатски — в кроличьей норе, уложив уютно ствол пулемета на низкие сошки', 'Виктор Астафьев', 'Ast@mail.ru', '2021-03-24 06:19:39', '2021-03-24 06:19:39', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripticn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
