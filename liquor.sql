-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 27, 2021 lúc 08:45 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `liquor`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `BillDate` date DEFAULT NULL,
  `ShipPhone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ShipAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `total` double NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CustomerId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `BillDate`, `ShipPhone`, `ShipAddress`, `Status`, `total`, `Note`, `CustomerId`, `created_at`, `updated_at`) VALUES
(5, '2021-05-13', '+84911130712', 'aaaaaaaaaaaaaaa', 1, 5498000, 'aaaaaaaaaaa', 5, '2021-05-12 18:00:10', '2021-05-12 18:00:10'),
(6, '2021-05-13', '+84911130712', 'aaaaaaaaaaaaaaa', 1, 1244000, 'aaaaaaaaaaa', 6, '2021-05-12 19:04:27', '2021-05-12 19:04:27'),
(7, '2021-05-13', '+84911130712', 'aaaaaaaaaaaaaaa', 1, 1244000, 'aaaaaaaaaaa', 7, '2021-05-12 19:47:50', '2021-05-12 19:47:50'),
(9, '2021-05-19', '+84911130712', 'aaaaaaaaaaaaaaa', 1, 6220000, 'aaaaaaaaaaa', 9, '2021-05-19 01:18:47', '2021-05-19 01:18:47'),
(10, '2021-05-19', '+84911130712', 'aaaaaaaaaaaaaaa', 1, 813520, 'aaaaaaaaaaa', 10, '2021-05-19 01:19:29', '2021-05-19 01:19:29'),
(11, '2021-05-26', '+84911130712', 'aaaaaaaaaaaaaaa', 1, 330000, 'aaaaaaaaaaa', 11, '2021-05-25 19:40:47', '2021-05-25 19:40:47'),
(12, '2021-05-26', '+84911130712', 'aaaaaaaaaaaaaaa', 1, 51680000, 'aaaaaaaaaaa', 12, '2021-05-25 23:02:00', '2021-05-25 23:02:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `BillId` int(10) UNSIGNED NOT NULL,
  `ProductId` int(10) UNSIGNED NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 0,
  `UnitPrice` double NOT NULL DEFAULT 0,
  `AddDate` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`id`, `BillId`, `ProductId`, `Quantity`, `UnitPrice`, `AddDate`, `created_at`, `updated_at`) VALUES
(5, 5, 10, 1, 330000, '2021-05-13', '2021-05-12 18:00:10', '2021-05-12 18:00:10'),
(6, 5, 5, 1, 5168000, '2021-05-13', '2021-05-12 18:00:10', '2021-05-12 18:00:10'),
(7, 6, 3, 1, 1244000, '2021-05-13', '2021-05-12 19:04:27', '2021-05-12 19:04:27'),
(8, 7, 3, 1, 1244000, '2021-05-13', '2021-05-12 19:47:50', '2021-05-12 19:47:50'),
(10, 9, 3, 5, 1244000, '2021-05-19', '2021-05-19 01:18:47', '2021-05-19 01:18:47'),
(11, 10, 2, 1, 813520, '2021-05-19', '2021-05-19 01:19:29', '2021-05-19 01:19:29'),
(12, 11, 10, 1, 330000, '2021-05-26', '2021-05-25 19:40:47', '2021-05-25 19:40:47'),
(13, 12, 5, 10, 5168000, '2021-05-26', '2021-05-25 23:02:00', '2021-05-25 23:02:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `UserId` int(11) NOT NULL,
  `CustomerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `UserId`, `CustomerName`, `DateOfBirth`, `Address`, `Phone`, `Email`, `created_at`, `updated_at`) VALUES
(2, 1, 'aaaaaaa1', '2021-05-13', 'aaaaaaaaaaaaaaa', '+84911130712', 'vuivatva179@gmail.com', '2021-05-12 02:05:22', '2021-05-12 02:20:02'),
(4, 1, 'nhat 1', '2021-05-29', 'aaaaaaaaaaaaaaa', '+84911130712', 'vuivatva179@gmail.com', '2021-05-12 02:07:33', '2021-05-24 19:29:45'),
(5, 1, 'nhat 123', '2021-05-15', 'aaaaaaaaaaaaaaa', '+84911130712', 'vuivatva179@gmail.com', '2021-05-12 18:00:10', '2021-05-24 19:29:53'),
(6, 1, 'aaaaaaa', '2021-05-15', 'aaaaaaaaaaaaaaa', '+84911130712', 'vuivatva179@gmail.com', '2021-05-12 19:04:27', '2021-05-12 19:04:27'),
(7, 1, 'aaaaaaa2', '2021-05-21', 'aaaaaaaaaaaaaaa', '+84911130712', 'vuivatva179@gmail.com', '2021-05-12 19:47:50', '2021-05-12 19:47:50'),
(8, 1, 'nhat 12345', '2021-05-13', 'aaaaaaaaaaaaaaa', '+84911130712', 'vuivatva179@gmail.com', '2021-05-12 19:50:53', '2021-05-24 19:30:00'),
(9, 1, 'aaaaaaa', '2021-05-21', 'aaaaaaaaaaaaaaa', '+84911130712', 'vuivatva179@gmail.com', '2021-05-19 01:18:47', '2021-05-19 01:18:47'),
(10, 1, 'aaaaaaa', '2021-05-19', 'aaaaaaaaaaaaaaa', '+84911130712', 'vuivatva179@gmail.com', '2021-05-19 01:19:29', '2021-05-19 01:19:29'),
(11, 1, 'aaaaaaa', '2021-05-26', 'aaaaaaaaaaaaaaa', '+84911130712', 'zaedankuhr1987@hotmail.com', '2021-05-25 19:40:47', '2021-05-25 19:40:47'),
(12, 1, 'aaaaaaa', '2021-05-26', 'aaaaaaaaaaaaaaa', '+84911130712', 'zaedankuhr1987@hotmail.com', '2021-05-25 23:02:00', '2021-05-25 23:02:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_29_044335_create_products_table', 1),
(5, '2021_04_29_045620_create_product_singles_table', 1),
(6, '2021_04_29_062231_create_pictures_table', 2),
(7, '2021_04_29_062656_create_pictures_table', 3),
(8, '2021_05_05_090344_create_customers_table', 4),
(9, '2021_05_05_090412_create_bills_table', 4),
(10, '2021_05_05_090438_create_bill_details_table', 4),
(11, '2021_05_20_083721_roles', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pictures`
--

CREATE TABLE `pictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `picture1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pictures`
--

INSERT INTO `pictures` (`id`, `product_id`, `picture1`, `created_at`, `updated_at`) VALUES
(1, 1, '1619940829.jpg', '2021-05-02 00:33:49', '2021-05-02 00:33:49'),
(2, 2, '1619944333.jpg', '2021-05-02 01:32:13', '2021-05-02 01:32:13'),
(3, 3, '1619944359.jpg', '2021-05-02 01:32:39', '2021-05-02 01:32:39'),
(4, 4, '1619944373.jpg', '2021-05-02 01:32:53', '2021-05-02 01:32:53'),
(5, 5, '1619944393.jpg', '2021-05-02 01:33:13', '2021-05-02 01:33:13'),
(10, 10, '1619944530.jpg', '2021-05-02 01:35:30', '2021-05-02 01:35:30'),
(11, 11, '1619944548.jpg', '2021-05-02 01:35:48', '2021-05-02 01:35:48'),
(12, 12, '1619944561.jpg', '2021-05-02 01:36:01', '2021-05-02 01:36:01'),
(13, 13, '1619944573.jpg', '2021-05-02 01:36:13', '2021-05-02 01:36:13'),
(14, 14, '1619944584.jpg', '2021-05-02 01:36:24', '2021-05-02 01:36:24'),
(15, 15, '1619944604.jpg', '2021-05-02 01:36:44', '2021-05-02 01:36:44'),
(16, 16, '1619944616.jpg', '2021-05-02 01:36:56', '2021-05-02 01:36:56'),
(18, 18, '1619944671.jpg', '2021-05-02 01:37:51', '2021-05-02 01:37:51'),
(19, 19, '1620034297.jpg', '2021-05-02 01:38:03', '2021-05-03 02:31:37'),
(20, 20, '1619944693.jpg', '2021-05-02 01:38:13', '2021-05-02 01:38:13'),
(21, 21, '1619944740.png', '2021-05-02 01:39:00', '2021-05-02 01:39:00'),
(22, 22, '1619944752.jpg', '2021-05-02 01:39:12', '2021-05-02 01:39:12'),
(23, 23, '1619944764.jpg', '2021-05-02 01:39:24', '2021-05-02 01:39:24'),
(24, 24, '1619944776.jpg', '2021-05-02 01:39:36', '2021-05-02 01:39:36'),
(25, 25, '1619944788.jpg', '2021-05-02 01:39:48', '2021-05-02 01:39:48'),
(26, 26, '1619944813.jpg', '2021-05-02 01:40:13', '2021-05-02 01:40:13'),
(28, 27, '1620869346.jpg', '2021-05-12 18:29:06', '2021-05-12 18:29:06'),
(29, 28, '1620869440.jpg', '2021-05-12 18:30:40', '2021-05-12 18:30:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `manufacturer`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Gin', 'Rượu Gin là một loại rượu có mặt trong các loại cocktail kinh điển. Rượu Gin không phổ biến và được nhiều người biết đến như Whisky, Rum hay Vodka. Tuy nhiên, ở phương Tây đây là một trong những loại rượu mạnh được ưa chuộng', NULL, NULL),
(3, 'Rum', 'Rum là một thức uống có cồn chưng cất được làm từ các sản phẩm phụ từ mía, chẳng hạn như mật, hoặc trực tiếp từ nước mía, bằng một quá trình lên men và chưng cất. Rượu chưng cất được, một chất lỏng trong suốt, sau đó thường được ủ trong thùng gỗ sồi.', NULL, NULL),
(4, 'Vodka', 'Vodka (tiếng Ba Lan: wódka [Vutka], tiếng Nga: водка [Votkə]) là một loại đồ uống có cồn được chưng cất có nguồn gốc từ Ba Lan và Nga, bao gồm chủ yếu là nước và ethanol nhưng đôi khi có dấu vết của tạp chất và hương liệu. Theo truyền thống, rượu được tạo', NULL, NULL),
(5, 'Brandy', 'Brandy là một loại rượu chưng cất được sản xuất bằng cách chưng cất rượu vang. Brandy thường chứa 35–60% độ cồn (70–120 chứng nhận Hoa Kỳ) và thường được tiêu thụ như món trợ tiêu hóa sau bữa tối. Một số rượu brandy được ủ trong thùng gỗ. Một số khác được', NULL, NULL),
(6, 'Tequila', 'Tequila (phát âm như tê-ki-la) là một loại đồ uống chưng cất được làm từ cây agave tequilana, chủ yếu ở khu vực xung quanh thành phố Tequila 65 km (40 dặm) về phía tây bắc của Guadalajara, và trong cao nguyên Jaliscan (Los Altos de Jalisco) của trung tâm ', NULL, NULL),
(7, 'Liqueurs', 'Liqueurs( Mỹ : / l ɪ k ɜːr / ; Anh : / l ɪ k j ʊər / ; tiếng Pháp:  [likœʁ] ) là một thức uống có cồn gồm rượu chưng cất và hương liệu bổ sung như đường , trái cây , thảo mộc , và gia vị . Thường được phục vụ cùng hoặc sau món tráng miệng, chúng thường đư', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_singles`
--

CREATE TABLE `product_singles` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `wine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alcohol_concentration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_singles`
--

INSERT INTO `product_singles` (`id`, `product_id`, `wine_name`, `alcohol_concentration`, `capacity`, `amount`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gordons London Dry', '37,5%', '750ml', 100, 275000, NULL, NULL),
(2, 1, 'Plymount', '41.2%', '700ml', 100, 813520, NULL, NULL),
(3, 1, 'Slingsby Old Tom', '43%', '700ml', 100, 1244000, NULL, NULL),
(4, 1, 'Four Pillars Navy Strength', '58.8%', '500ml', 100, 1500000, NULL, NULL),
(5, 1, 'Sloe Gin', '50%', '700ml', 100, 5168000, NULL, NULL),
(10, 3, 'Bacardi Gold', '40%', '750ml', 100, 330000, NULL, NULL),
(11, 3, 'Malibu Coconut', '21%', '750ml', 100, 360000, NULL, NULL),
(12, 3, 'Rhum Chauvet', '39%', '1000ml', 100, 190000, NULL, NULL),
(13, 3, 'Captain Morgan', '35%', '750ml', 100, 300000, NULL, NULL),
(14, 3, 'Bundaberg', '37%', '700ml', 100, 430000, NULL, NULL),
(15, 4, 'Smirnoff Red', '39%', '700ml', 100, 230000, NULL, NULL),
(16, 4, 'Danzka Original', '40%', '1000ml', 100, 350000, NULL, NULL),
(18, 5, 'Remy Martin XO', '40%', '700ml', 100, 3600000, NULL, NULL),
(19, 5, 'Armagnac Delord 15 YO ', '40%', '750ml', 100, 2100000, NULL, NULL),
(20, 5, 'Berta Villa Prato', '40%', '1000ml', 100, 974941, NULL, NULL),
(21, 6, 'El Jimador', '40%', '700ml', 100, 670000, NULL, NULL),
(22, 6, 'Corralejo Blanco', '39%', '700ml', 100, 668857, NULL, NULL),
(23, 6, 'Don Julio', '38%', '750ml', 100, 1650000, NULL, NULL),
(24, 6, 'Cazcanes No. 9 Blanco', '50%', '750ml', 100, 2007000, NULL, NULL),
(25, 6, 'Herradura Plata', '40%', '750ml', 100, 1900000, NULL, NULL),
(26, 6, 'La Luna Ensamble', '48%', '750ml', 100, 890000, NULL, NULL),
(27, 7, 'Campari', '25%', '750ml', 100, 360000, '2021-04-28 23:18:54', '2021-04-28 23:18:54'),
(28, 4, 'Absolut', '40%', '750ml', 100, 300000, '2021-05-02 07:59:11', '2021-05-02 08:01:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, '2021-05-20 02:52:51', '2021-05-25 20:02:28'),
(2, 'user', 0, '2021-05-20 02:59:29', '2021-05-25 21:03:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'vuivatva179@gmail.com', NULL, '$2y$10$VlWdVKQn0PLR4dtluCIUL.U26X0ztIB0wmefLLDLRcGIHXo8.q5eS', 1, 1, 'AnmGDUmj6ACTyyS0Whqp2NF54Rr7LjjS33q5hHP0DlsE2cZtOwJ8AWDNpqzv', '2021-05-06 00:37:58', '2021-05-06 00:37:58'),
(2, 'duyanh', 'vuivatva123@gmail.com', NULL, '$2y$10$6R/T34sWAZURBWjvx.alQOZeLNdFWwbmvanfw25uf1Cv7YdPogUDC', 2, 1, NULL, '2021-05-19 23:38:08', '2021-05-25 22:31:13'),
(3, 'duyanh1', 'vuivatva1792@gmail.com', NULL, '$2y$10$KFhuHp794U0I4GaEapCVNOEpXIXVDdK3EYIstp.tUFY9i8rIjAm..', 2, 1, NULL, '2021-05-25 21:00:24', '2021-05-25 22:31:59');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_customerid_foreign` (`CustomerId`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_billid_foreign` (`BillId`),
  ADD KEY `bill_details_productid_foreign` (`ProductId`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pictures_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_singles`
--
ALTER TABLE `product_singles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_singles_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `product_singles`
--
ALTER TABLE `product_singles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_customerid_foreign` FOREIGN KEY (`CustomerId`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_billid_foreign` FOREIGN KEY (`BillId`) REFERENCES `bills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_details_productid_foreign` FOREIGN KEY (`ProductId`) REFERENCES `product_singles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product_singles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_singles`
--
ALTER TABLE `product_singles`
  ADD CONSTRAINT `product_singles_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
