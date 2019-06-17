-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2019 lúc 11:21 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_em_salon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `cus_gender` int(11) DEFAULT '2',
  `cus_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cus_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cus_phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `brand_id` int(3) NOT NULL,
  `app_service` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_address`, `brand_email`, `brand_phone`, `created_at`, `updated_at`) VALUES
(1, 'Address 1', '53 Phó Đức Chính, Ba Đình, Hà Nội', 'emsalon@gmail.com', '0123456789', NULL, '2019-06-10 01:44:39'),
(2, 'Address 2', '2 Trung Yên, Cầu Giấy, Hà Nội', 'emsalon2@gmail.com', '0123467891', NULL, '2019-06-10 01:44:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hot News', NULL, '2019-05-30 23:44:48'),
(3, 'Man', NULL, '2019-06-17 09:06:31'),
(4, 'Woman', '2019-05-30 04:37:28', '2019-06-17 09:06:40'),
(7, 'Hair fashion', '2019-06-17 09:08:22', '2019-06-17 09:08:22'),
(8, 'Grooming', '2019-06-17 09:08:32', '2019-06-17 09:08:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(10) UNSIGNED NOT NULL,
  `cus_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cus_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`cus_id`, `cus_name`, `phone`, `cus_email`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Khởi My', '0326508787', 'JHvp@gmail.com', 1, NULL, NULL),
(2, 'Phương Khánh', '0367159900', 'whuk@gmail.com', 0, NULL, NULL),
(3, 'Minh Tiến', '0394616663', 'n97u@gmail.com', 1, NULL, NULL),
(4, 'Tùng Sơn', '0323817874', 'i581@gmail.com', 1, NULL, NULL),
(5, 'Mai Phương', '0350496405', '8yqM@gmail.com', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2019_05_15_013729_create_brands_table', 1),
(10, '2019_05_15_014848_create_users_table', 1),
(11, '2019_05_15_022727_create_stylists_table', 1),
(12, '2019_05_15_063229_create_customers_table', 1),
(13, '2019_05_15_063819_create_service_categories_table', 1),
(14, '2019_05_15_063928_create_services_table', 1),
(15, '2019_05_15_064417_create_service_types_table', 1),
(16, '2019_05_15_064623_create_appointments_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `category_id`, `image`, `name`, `description`, `content`, `posted_by`, `created_at`, `updated_at`) VALUES
(1, 3, '1559185283.jpg', 'Messy bob hairstyles', 'Messy bob hairstyles are super chic, convenient, trendy and easy to style. All you need is to get a flattering bob haircut and select the right hair product for your hair type. Naturally straight, there are ways to achieve the popular messy texture. But even if your locks are wavy hair is the direct indication for a messy bob.', NULL, NULL, '2019-05-16 12:42:23', '2019-05-29 20:01:23'),
(3, 3, '1559188555.jpg', 'BALAYAGE', 'Lighten things up with a Balayage haircolor technique . The Balayage trend\'s name comes from the French term \"to sweep,\" and can be applied to any natural or processed haircolor. Think soft, subtle hints of blonde color placement on a slightly darker shade of hair. If you\'re ready to go blonde but want to keep a natural look, a blonde Balayage haircolor is perfect for you!', NULL, NULL, '2019-05-16 12:57:49', '2019-05-29 20:55:55'),
(4, 3, '1559188949.jpg', 'Pixie Haircut - 2019 Trending', 'A bit shorter style than the shoulder length neck bob but longer than a buzz, the pixie sets midway between these trendy haircuts. This style is a classic choice for the enthusiastic woman with an edgy yet vintage appeal, with benefits like easy to care for and maintain. And all pixies are not short, the long pixie features layered hair on the top so as a bonus, when you sleep the tapered hair on the sides and the back of the head are not compromised.', NULL, NULL, '2019-05-16 12:59:30', '2019-05-29 21:02:29'),
(5, 4, '1559352961.jpg', 'Undercut hairstyle', 'Undercut hairstyles are cut close to the lower hairline, the top of the head is longer than the classic, and is brushed off to the side, possibly adding a block line.', NULL, NULL, '2019-05-16 14:46:40', '2019-05-31 18:36:01'),
(6, 4, '1559352902.jpg', 'Classic Undercut hairstyle', 'This is a hairstyle that is cut close and the roof is 5-7cm long, and the bangs are hardened. Sometimes, they are even more accentuated with impressive shaving lines.', NULL, NULL, '2019-05-16 17:01:49', '2019-05-31 18:35:02'),
(7, 4, '1559353072.jpg', 'Short hairstyle of Undercut', 'With a way of swiping backwards and forwards the entire hair above and cutting it close to the sides, this hairstyle promises to bring a handsome, masculine, strong look to gentlemen.', NULL, NULL, '2019-05-31 18:37:52', '2019-05-31 18:37:52'),
(8, 4, '1559353148.jpg', 'Pompadour Undercut hairstyle', 'This is an Undercut hairstyle with a length of 7-10cm. Wax is used to create a stand at the root of the hair, the ends of the hair to naturally curl, can be thrown back or slightly tangled.', NULL, NULL, '2019-05-31 18:39:08', '2019-05-31 18:39:08'),
(9, 1, '1559602992.jpg', 'Man-bun', 'The hairstyle is known as a wonderful choice for anyone wanting to change the look with a different hairstyle. Furthermore, for males aged 40 and long hair, this will be the perfect hairstyle for them. The hair is brushed backward and tied to the tail will bring a romantic and calm mood for the gentleman.', NULL, NULL, '2019-06-03 16:03:12', '2019-06-03 16:03:12'),
(10, 4, '1559603123.jpg', 'Sexy hairstyle', 'Wet hair along with seductive body and wild eyes are a common image in the ads which is very sexy and the most fascinating image of women. But men who prefer to have this type of life are often introverted and somewhat “dangerous”. Therefore, it is always the first choice of almost men in the world.', NULL, NULL, '2019-06-03 16:05:23', '2019-06-03 16:05:23'),
(11, 1, '1559603167.jpg', 'Korean hairstyle', 'When talking about famous and attractive hairstyles, you can not miss out Korean hairstyle which attracted a lot of men. Korean hairstyles often need to be dyed. Men to this hairstyle often work in the fields of gentle, elegant and formidable.', NULL, NULL, '2019-06-03 16:06:07', '2019-06-03 16:06:07'),
(12, 1, '1559787246.jpg', 'Curly hair', '<p>They are romantic and the artist when deciding on this hairstyle. For these women are sentimental, sweet and sweet men, giving them a warm feeling of being around. Therefore, curly hair is always the number one with men when deciding to change their hair.</p>', NULL, NULL, '2019-06-03 16:07:30', '2019-06-11 09:12:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci,
  `trademark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_id`, `image`, `name`, `price`, `trademark`, `detail`, `created_at`, `updated_at`) VALUES
(4, 2, '1559183497.jpg', 'Olaplex', NULL, NULL, '<p>Our simple three-step process includes a patented active ingredient that works on a molecular level to seek out broken bonds in the hair that are caused by chemical, thermal, and mechanical damage. You can use Olaplex to restore compromised hair, or add it to another service to provide the ultimate breakage insurance. 🍀 Olaplex No. 1🍀 Bond Multiplier - Beginning The Rebuilding This concentrated first salon step rebuilds broken disulfide bonds and begins the process of preventing damage and repairing hair. 🌼 Olaplex No. 2🌼 Bond Perfector - Pursuing Hair Perfection Our second salon step continues to rebuild and restore any remaining broken bonds ensuring the strongest, shiniest, and healthiest hair possible. 🌺Olaplex No. 3🌺 Hair Perfector - Lasting Protection at Home This final retail step provides our client\'s continuous protection from ongoing damage at home.</p>', NULL, '2019-06-11 08:43:48'),
(5, 2, '1559182529.jpg', 'JOICO MOISTURE RECOVERY TREATMENT LEGEND', '350.000 - 400.000 - 450.000 VND', NULL, 'Moisture Recovery’s water-loving formulas deeply quench dry, dehydrated hair with our bio-diverse Hydramine sea Complex,TM where botanicals and amino acids from the sea meet the richest, most nourishing botanical butters and oils found on land to transform even the most parched hair into a vision of softness and manageability.\r\n\r\nBENIFITS:\r\n- Provides intense hydration in just five minutes\r\n- Enrichs with murumuru, olive and shea butters\r\n- Repair stressed hair, increases strength and reduces breakages by up to 80%\r\n- Reduce frizz, leaves hair more manageable, with increased fluidity, shine and movement', '2019-05-25 06:41:43', '2019-05-30 02:15:29'),
(6, 1, '1560074432.jpg', 'Colmav Kingdom Pomade', '260.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Wax tạo kiểu tóc nam Colmav Kingdom Pomade là sản phẩm sáp vuốt tóc tạo kiểu cho nam, phù hợp với chất tóc của nam giới khu vực châu á vì được sản xuất tại Việt Nam. Wax Colmav Kingdom Pomade là sự lựa chọn hoàn hảo cho các bạn trẻ năng động hay các quý ông yêu cầu tóc luôn nằm trong nếp và trên tóc luôn có mùi hương thơm thoang thoáng nhẹ nhàng tạo sự cuốn hút cho người khác giới.</span></p>', '2019-05-25 06:42:20', '2019-06-09 10:00:32'),
(7, 1, '1560074570.jpg', 'Colmav Barber Pomade Green', '250.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Wax tạo kiểu tóc nam Colmav Barber Pomade Xanh là sản phẩm sáp vuốt tóc tạo kiểu cho nam, phù hợp với chất tóc của nam giới khu vực châu á vì được sản xuất tại Việt Nam. Wax Colmav Barber Pomade Blue là sự lựa chọn hoàn hảo cho các bạn trẻ năng động hay các quý ông yêu cầu tóc luôn nằm trong nếp và trên tóc luôn có mùi hương thơm thoang thoáng nhẹ nhàng tạo sự cuốn hút cho người khác giới.</span></p>', '2019-05-25 06:43:22', '2019-06-09 10:02:50'),
(8, 1, '1560074687.jpg', 'Cock Crease', '125.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Sáp tạo kiểu tóc Cock Crease chuyên dùng tạo kiểu tóc cho nam dùng cá nhân hoặc tại các tiệm cắt tóc nam, salon tóc, barbershop chuyên nghiệp.</span></p>', '2019-05-25 06:43:39', '2019-06-09 10:04:47'),
(9, 1, '1560074778.jpg', 'Uprepcut deluxe 80g', '120.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Sáp tạo kiểu tóc Uprepcut deluxe 80g chuyên dùng để vuốt tóc, tạo kiểu tóc cho nam phù hợp dùng cá nhân, dùng trong các salon tóc, barbershop.</span></p>', '2019-05-25 06:44:00', '2019-06-09 10:06:18'),
(10, 1, '1560074847.jpg', 'CK Hair Clay', '120.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Sáp tạo kiểu tóc CK Hair Clay chuyên dùng cho nam giới tạo kiểu tóc dễ dàng với mùi thơm rất nam tính, phù hợp xài cá nhân hay tiệm salon tóc nam.</span></p>', '2019-05-25 06:44:50', '2019-06-09 10:07:27'),
(11, 1, '1560304993.jpg', 'COCO hair Clay', '120.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Sáp tạo kiểu tóc COCO hair Clay chuyên dùng để vuốt tóc và tạo kiểu tóc cho nam. Sáp tạo kiểu tóc này phù hợp với các salon tóc, tiệm tóc chuyên nghiệp, barbershop và ngay cả cá nhân.</span></p>', '2019-05-25 06:45:11', '2019-06-12 02:03:13'),
(12, 2, '1560075209.jpg', 'Set of 3 products for Nashi Phyto damaged hair repair Collagen', NULL, NULL, '<p><span style=\"font-family:roboto,sans-serif; font-size:17.6px\">Đây là bộ sản phẩm xuất xứ từ Ý có sử dụng công nghệ Pure Collagen tinh khiết để đẩy nhanh quá trình phục hồi tóc yếu và hư tổn nặng. Sản phẩm có tác dụng kích thích quá trình sinh năng lượng tự nhiên cho sợi tóc trở về cấu trúc ban đầu trong thời gian ngắn.</span></p>', '2019-05-25 06:45:29', '2019-06-09 10:13:29'),
(13, 2, '1560075260.jpg', 'Bộ 3 sản phẩm chuyên phục hồi tóc hư tổn Milbon Deesse\'s', NULL, NULL, '<p><span style=\"font-family:roboto,sans-serif; font-size:17.6px\">Bộ chuyên dụng chăm sóc tóc hư tổn này có xuất xứ từ Nhật Bản và thường được các salon tóc chuyên nghiệp lựa chọn. Một bộ 3 sản phẩm tương ứng với 3 bước phục hồi tóc theo quy trình tiêu chuẩn, với dưỡng chất Collagen, phục hồi chuyên sâu cho sợi tóc hư tổn do hoá chất, làm tóc suôn mềm chắc khỏe.</span></p>', '2019-05-25 06:45:53', '2019-06-09 10:14:20'),
(14, 2, '1560075314.jpg', 'Bộ 6 sản phẩm phục hồi tóc hư tổn Leonor Greyl', NULL, NULL, '<p><span style=\"font-family:roboto,sans-serif; font-size:17.6px\">Sản phẩm chăm sóc tóc Leonor Greyl luôn hướng đến việc bảo toàn vẻ đẹp tự nhiên của mái tóc. Bộ sản phẩm&nbsp;</span><em>chuyên phục hồi tóc hư tổn</em><span style=\"font-family:roboto,sans-serif; font-size:17.6px\">&nbsp;Leonor Greyl vì thế cũng được tinh chế từ những nguyên liệu có nguồn gốc tự nhiên kết hợp với công thức độc quyền. Sản phẩm được đánh giá là giải quyết hiệu quả tình trạng tóc khô, xơ, bạc màu, chẻ ngọn… và nuôi dưỡng mái tóc bóng khỏe ngay từ chân tóc. Nhờ vậy, nó có thể trả lại cho bạn mái tóc bồng bềnh, bóng khỏe mà chính bạn cũng phải ngạc nhiên.</span></p>', '2019-05-25 06:46:27', '2019-06-09 10:15:14'),
(15, 1, '1560221391.jpg', 'Wax Loreal Hair Claw', '35.000', NULL, '<p><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>Sáp Vuốt Tóc Loreal</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><span style=\"color:rgb(29, 33, 41)\">- Khả năng giữ nếp cực tốt trên 12 tiếng</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><span style=\"color:rgb(29, 33, 41)\">- Tạo độ phồng, dễ dàng tạo kiểu sau khi đội mũ bảo hiểm</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><span style=\"color:rgb(29, 33, 41)\">- Không gây cứng, bết, không bóng</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><span style=\"color:rgb(29, 33, 41)\">- Phù hợp với các kiểu tóc Undercut, Slick Back, Pompadour...</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><span style=\"color:rgb(29, 33, 41)\">- Dễ dàng gội rửa, không kích ứng da đầu</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2019-06-05 02:24:07', '2019-06-11 09:19:18'),
(16, 1, '1560244740.jpg', 'Wax Hair styling CK Hair Clay', '109.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Sáp tạo kiểu tóc CK Hair Clay chuyên dùng cho nam giới tạo kiểu tóc dễ dàng với mùi thơm rất nam tính, phù hợp xài cá nhân hay tiệm salon tóc nam.</span></p>', '2019-06-05 02:24:26', '2019-06-11 09:19:00'),
(17, 1, '1560244866.jpg', 'Hair Clay Hair Wax Q10 80g', '120.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Sáp vuốt tóc Hair Clay Q10 80g sáp chuyên dùng tạo kiểu tóc, vuốt tóc nam, chất lượng, giá rẻ dành cho cá nhân, tiệm salon.</span></p>\r\n\r\n<p>&nbsp;</p>', '2019-06-05 02:24:52', '2019-06-11 09:21:06'),
(18, 1, '1560244968.jpg', 'Shaweisite Duluxe Pomade 100g wax', '150.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Sáp tạo kiểu Shaweisite Duluxe Pomade 100g chuyên dùng để vuốt tóc và tạo kiểu tóc cho nam. Sáp tạo kiểu tóc này phù hợp với các salon tóc, tiệm tóc chuyên nghiệp, barbershop và ngay cả cá nhân. Liên hệ: 0948484827</span></p>', '2019-06-05 02:25:05', '2019-06-11 09:22:48'),
(19, 3, '1560245198.jpg', 'KORIA K201 CUTTING AND HAIR SCRAP', '250.000', NULL, '<p><span style=\"color:rgb(51, 51, 51); font-family:tahoma,geneva,sans-serif; font-size:14px\">Bạn là học viên đang học ngành tóc? Hay bạn đang muốn mua 1 món quà dành tặng cho người thân mình đang là thợ cắt tóc? Hoặc bạn muốn tự cắt tóc tạo kiểu cho chính mình tại nhà?</span></p>\r\n\r\n<p><span style=\"font-family:tahoma,geneva,sans-serif\">Tất cả sẽ được&nbsp;<strong>bộ kéo cắt và tỉa tóc Koria K201</strong>&nbsp;giúp bạn giải quyết vấn đề.</span></p>', '2019-06-05 02:25:38', '2019-06-11 09:26:38'),
(20, 3, '1560245308.jpg', 'Barber scissors Barber cheap BC602', '99.000', NULL, '<p><span style=\"font-family:tahoma,geneva,sans-serif; font-size:14px\">Nếu bạn đang cần một bộ kéo cắt tỉa với chất lượng, giá cả vừa phải để cắt tóc cho những người thân trong gia đình thì&nbsp;</span><strong><a href=\"http://barbershop.vn/bo-keo-cat-toc-barber-gia-re-bc602-p2274.html\" style=\"box-sizing: border-box; background: transparent; color: rgb(68, 68, 68); text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; outline: none;\">bộ kéo cắt tóc Barber giá rẻ BC602</a>&nbsp;</strong><span style=\"font-family:tahoma,geneva,sans-serif; font-size:14px\">là bộ kéo phù hợp với bạn.&nbsp;</span></p>', '2019-06-05 02:26:11', '2019-06-11 09:28:28'),
(21, 3, '1560245378.jpg', 'Barber Crown hair cutting scissors BB-600', '250.000', NULL, '<p><span style=\"font-family:tahoma,geneva,sans-serif; font-size:14px\">Kéo cắt tóc Barber Crown BB-600 là 1 cây kéo cắt trong bộ kéo Barber Crown BB-600 tách ra bán rời để tiện cho khách hàng chỉ có nhu cầu mua 1 cây kéo cắt mà không cần đến kéo tỉa.</span></p>', '2019-06-11 08:31:13', '2019-06-11 09:29:38'),
(22, 3, '1560245458.jpg', 'Barber Dragon Left Hand Barber Scissors BD-02', '1.140.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Khoác lên mình vẻ đẹp sang trọng với tông vàng ánh kim khiến Bộ kéo cắt tóc tay trái Barber Dragon BD-02 tăng thêm phần vẻ đẳng cấp. Bộ kéo gồm 1 Kéo Cắt &amp; 1 Kéo Tỉa có chiều dài là 6 Inch, là mẫu kéo được thiết kế theo form chuẩn nhằm phù hợp nhất với các thợ - tay kéo Việt.</span></p>', '2019-06-11 09:30:58', '2019-06-11 09:30:58'),
(23, 3, '1560304549.jpg', 'Barber scissors Barber Sasion high-end BS-60', '350.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Kéo cắt tóc barber sasion cao cấp bs-60 là chiếc kéo cắt được làm từ chất liệu thép 440c, được các thợ tay nghề cao gia cộng tại nhật bản, là mẫu kéo mang phong cách hiện đại phù hợp với tất cả các tiệm barbershop và salon.</span></p>', '2019-06-11 09:31:50', '2019-06-12 01:55:49'),
(24, 3, '1560245587.jpg', 'Barber Jupay BJ-918 hair cutting scissors', '550.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Bộ kéo cắt tóc Barber Jupay BJ-918 làm từ chất liệu thép Nhật cao cấp, là sản phẩm kéo chuyên nghiệp dành cho các salon tóc, barber.</span></p>', '2019-06-11 09:33:07', '2019-06-11 09:33:07'),
(25, 3, '1560245671.jpg', 'Hair scissors Gold Barber WM-8006', '210.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Kéo tỉa tóc Barber Vàng WM-8006 được làm từ chất liệu thép không rỉ, sắc bén và bóng sáng chuyên dùng cắt tóc nam nữ dùng trong salon tóc, tiệm tóc.</span></p>', '2019-06-11 09:34:31', '2019-06-11 09:34:31'),
(26, 3, '1560245742.jpg', 'Barber Dragon Ruby JS-60 Hair Cutting Scissors', '400.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Kéo tỉa tóc Barber Dragon Ruby JS-60 là sản phẩm bao gồm cây kéo tỉa có 30 răng, độ ăn tóc tới 30%, chuyên dùng cho tiệm tóc, salon tóc chuyên nghiệp.</span></p>', '2019-06-11 09:35:42', '2019-06-11 09:35:42'),
(27, 3, '1560245860.jpg', 'Barber scissors Barber Rose BFZ-60', '400.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Bộ kéo cắt tóc Barber Rose BFZ-60 chuyên dùng trong việc cắt tóc nam nữ tại các tiệm cắt tóc, salon tóc, dùng cho cả nam lẫn nữ.</span></p>', '2019-06-11 09:37:40', '2019-06-11 09:37:40'),
(28, 3, '1560245911.jpg', 'Barber Dragon Ruby JS-60 hair cutting scissors', '600.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Kéo cắt tóc Barber Dragon Ruby JS-60 là cây kéo có thiết kế khá bắt mắt, đẹp, sang trọng và chất lượng khá tốt, là cây kéo phù hợp cho thợ tóc chuyên nghiệp.</span></p>', '2019-06-11 09:38:31', '2019-06-11 09:38:31'),
(29, 3, '1560246035.jpg', 'Barber Buffalo Barber BB-601', '2.200.000', NULL, '<p><span style=\"color:rgb(102, 102, 102); font-family:open sans; font-size:12px\">Bộ kéo cắt tóc Barber Buffalo BB-601 sang trọng, đẳng cấp dành cho barber chuyên nghiệp, salon tóc và thợ cắt tóc nam, nữ chuyên. Liên hệ mua kéo cao cấp tại barbershop.vn</span></p>', '2019-06-11 09:40:35', '2019-06-11 09:40:35'),
(30, 1, '1560304577.jpg', 'KEM KERATIN PHỤC HỒI TÓC CAO CẤP KASIBAO 1000ml - PHT007', '400.000', NULL, '<p><span style=\"font-size:12pt\">PHỤC HỒI TÓC KERATIN KASIBAO 1000ml</span></p>\r\n\r\n<p><span style=\"font-size:12pt\">Được sản xuất theo công nghệ của Mỹ và Canada , kem Keratin KSB có công dụng:&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:12pt\">- Phục hồi cấu trúc tóc trước khi sử dụng hoá chất uốn , duỗi , nhuộm</span></p>\r\n\r\n<p><span style=\"font-size:12pt\">- Chuyên phục hồi tóc nát , tóc cháy , tóc sun , tóc hư tổn nặng</span></p>\r\n\r\n<p><span style=\"font-size:12pt\">- Hiệu quả ngay lần sử dụng đầu tiên&nbsp;</span></p>', '2019-06-11 09:42:27', '2019-06-12 01:56:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_type`
--

CREATE TABLE `product_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'waxing hair', '2019-05-24 03:57:30', '2019-06-11 16:57:02'),
(2, 'recovery products', '2019-05-24 22:59:38', '2019-05-30 02:06:58'),
(3, 'hair cutting and hair cutting', '2019-06-11 09:24:38', '2019-06-11 09:24:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` double NOT NULL,
  `status` tinyint(4) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `duration`, `status`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Hair wash', 'Shampoo + head massage + face cleaning + face massage + normal blow dry. Options: Standard shampoo/ Premium Shampoo/ Olaplex Shampoo', 45, 1, 1, NULL, '2019-06-08 03:24:14'),
(2, 'Facial mask', 'Face cleaning + face massage + masking Face cleaning + face massage + masking', 30, 1, 1, NULL, '2019-06-11 07:15:56'),
(3, 'Skin Peeling', 'Face cleaning + Face massage + Peeling', 30, 1, 1, NULL, '2019-06-10 09:22:34'),
(4, 'Hair wash for kids', 'Shampoo for kid + head massage + face cleaning + face massage + normal blow dry', 45, 1, 1, NULL, '2019-06-10 09:22:46'),
(5, 'Kid hair cut', 'Shampoo + head massage + face cleaning + face massage + normal blow dry', 75, 1, 2, NULL, '2019-06-08 03:27:27'),
(6, 'Men hair cut', 'Shampoo + head massage + face cleaning + face massage + normal blow dry', 90, 1, 2, '2019-06-06 17:00:00', '2019-06-08 03:28:11'),
(7, 'Women hair cut', 'Shampoo + head massage + face cleaning + face massage + normal blow dry', 90, 1, 2, '2019-06-06 00:00:00', '2019-06-08 03:28:48'),
(8, 'Bangs', 'Bangs cut', 20, 1, 2, '2019-06-07 07:03:15', '2019-06-08 03:30:29'),
(10, 'Wavy Hair Style', 'Wavy Hair Style', 30, 1, 2, '2019-06-07 07:26:04', '2019-06-08 03:30:19'),
(11, 'Dập phồng', 'Dập phồng', 30, 2, 2, '2019-06-07 07:26:18', '2019-06-08 03:31:09'),
(12, 'Coloring (chemicals of you)', 'Coloring + shampoo + head massage + face cleaning + style hair', 150, 1, 3, '2019-06-07 10:25:07', '2019-06-08 03:32:17'),
(13, 'Coloring (chemicals of salon)', 'Coloring + shampoo + head massage + face cleaning + style hair', 150, 1, 3, '2019-06-08 03:33:11', '2019-06-08 03:33:11'),
(14, 'Herbal dying', 'Coloring + shampoo + head massage + face cleaning + style hair', 150, 1, 3, '2019-06-08 03:33:36', '2019-06-08 03:33:36'),
(15, 'Hot perm/ straightening', 'Curling/ Straightening + shampoo + head massage + face cleaning + style hair', 180, 1, 3, '2019-06-08 03:34:17', '2019-06-08 03:34:17'),
(16, 'Cold perm', 'Curling/ Straightening + shampoo + head massage + face cleaning + style hair', 180, 1, 3, '2019-06-08 03:34:36', '2019-06-08 03:34:36'),
(17, 'Bangs curling/ straightening', 'Curling/ Straightening + shampoo + head massage + face cleaning + style hair', 60, 1, 3, '2019-06-08 03:35:14', '2019-06-08 03:35:14'),
(18, 'Hair Bleaching only', 'Hair Bleaching+ Purple shampoo + head massage + face cleaning + style hair', 120, 1, 4, '2019-06-08 03:35:51', '2019-06-08 03:35:51'),
(19, 'Hair toner only', 'Hair toner+ shampoo + head massage + face cleaning + style hair', 120, 1, 4, '2019-06-08 03:36:24', '2019-06-08 03:36:24'),
(20, 'Highlight', 'Doing highlight+ toner color+ Purple shampoo + head massage + face cleaning + style hair', 240, 1, 4, '2019-06-08 03:36:47', '2019-06-08 03:36:47'),
(21, 'Balayage/ Ombre', 'Doing Balayage/ Ombre+ toner color + Purple shampoo + head massage + face cleaning + style hair', 240, 1, 4, '2019-06-08 03:37:11', '2019-06-08 03:37:11'),
(22, 'Adding Olaplex', 'Olaplex treatment will be adding during process', 0, 2, 5, '2019-06-08 03:37:52', '2019-06-08 03:37:52'),
(23, 'Olaplex treatment', 'Olaplex treatment + shampoo + head massage + face cleaning + style hair', 90, 1, 5, '2019-06-08 03:38:25', '2019-06-08 03:38:25'),
(24, 'Joico treatment', 'Joico treatment + shampoo + head massage + face cleaning + style hair', 90, 1, 5, '2019-06-08 03:38:54', '2019-06-08 03:38:54'),
(25, 'Standard treatment', 'Standard treatment (with coconut or not) + shampoo + head massage + face cleaning + style hair', 90, 1, 5, '2019-06-08 03:39:51', '2019-06-08 03:39:51'),
(26, 'Lights extension', 'Color + doing extension + shampoo + head massage + Face cleaning + Style hair', 120, 1, 6, '2019-06-08 03:41:03', '2019-06-08 03:41:03'),
(27, '40 – 50 cm hair extension', 'Color + doing extension + shampoo + head massage + Face cleaning + Style hair', 300, 1, 6, '2019-06-08 03:41:37', '2019-06-08 03:41:37'),
(28, '60 -65 cm hair extension', 'Color + doing extension + shampoo + head massage + Face cleaning + Style hair', 300, 1, 6, '2019-06-08 03:42:02', '2019-06-08 03:42:02'),
(29, 'Adding color', 'Adding color for extension', 0, 2, 6, '2019-06-08 03:42:39', '2019-06-08 03:42:39'),
(30, 'Shampoo (buy 10 get 1)', 'Shampoo (buy 10 get 1)/ Thẻ gội đầu (mua 10 tặng 1)', 0, 2, 7, '2019-06-08 03:43:20', '2019-06-08 03:43:20'),
(31, 'Olaplex treatment (4 times)', 'Olaplex treatment (4 times)/ Thẻ hấp Olaplex giảm 10% 10% OFF', 0, 2, 7, '2019-06-08 03:44:32', '2019-06-08 03:44:32'),
(32, 'Joico treatment (buy 4 get 1)', 'Joico treatment (buy 4 get 1)/ Thẻ Hấp Joico mua 4 tặng 1', 0, 2, 7, '2019-06-08 03:44:49', '2019-06-08 03:44:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_categories`
--

CREATE TABLE `service_categories` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service_categories`
--

INSERT INTO `service_categories` (`cate_id`, `cate_image`, `cate_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '$2y$10$LJJjr9BuaYv6K4RSYzlGZOB/HROjdnB1OtA5A/JNVnOM6MIyXoZpigoi-dau.jpg', 'HAIR WASH AND FACIAL CARE', 1, NULL, '2019-06-08 02:45:18'),
(2, '$2y$10$GK28MAkJmbT8q.Kix7k1zup3FEg6lbbGJxpijI3oRE9V9obTimX6.img_2173.jpg', 'HAIR CUT', 1, NULL, '2019-06-08 02:45:40'),
(3, '$2y$10$cn0H3QPVxkvkd1zgMTFIS.cYV.C79LZlrFo/yRr3qJcUw.j2LpSqmnhuom-toc.png', 'CHEMICAL COLORING/ HOT PERM/ COLD PERM/ STRAIGHTENING', 1, NULL, '2019-06-08 02:46:05'),
(4, '$2y$10$kQQfSi2b82u4YFMA/wELKu242lUBQbdQ/WbYo9mdBge2//6/kevGi6ed813267db664c1cd6910fc3789313d.jpg', 'HAIR BLEACHING/ CREATIVE COLORING', 1, NULL, '2019-06-08 02:46:36'),
(5, '$2y$10$Ofy55vX2AO/kvdJ4ioub..8yg9YYHj7kAmnu0.MPbi45mlDzsurDOhair treatment.jpeg', 'HAIR TREATMENT', 1, '2019-06-04 03:00:00', '2019-06-08 02:48:20'),
(6, '$2y$10$5I8Rr9AVtYr30O8FeC0eL.PPg5/8H6ELdegEHWktrpylWckWKjIgmhair extension.jpeg', 'HAIR EXTENSION', 1, '2019-06-06 07:32:58', '2019-06-08 02:50:46'),
(7, '$2y$10$rw7qO.6lIKXo/6hU79xs4Oy/h5mkQJRM4RsMnIPW87lPYhNrTc5cKin-the-hoi-vien-the-vip.gif', 'CARDS (WITH UNLIMITED TIME)', 1, '2019-06-06 07:35:34', '2019-06-08 02:51:12'),
(8, '$2y$10$rM23Z3xYRaCFy.gaiPpozOf6khOxtlnzLi4Q5.EyBLRQEIxIHOGJOgoi-dau.jpg', 'Test Service Category', 0, '2019-06-08 02:52:19', '2019-06-08 02:52:19'),
(9, '$2y$10$POrTEnLdXTW6YkZYQNf11OJSYvt8q0z1Gct028kkh8Iw4FOLsnTDu6ed813267db664c1cd6910fc3789313d.jpg', 'Test Service Category 2', 0, '2019-06-08 02:52:43', '2019-06-08 02:52:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_types`
--

CREATE TABLE `service_types` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_price` double NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service_types`
--

INSERT INTO `service_types` (`type_id`, `type_name`, `type_price`, `unit`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 'Standard shampoo', 40000, 'head', 1, NULL, '2019-06-08 06:54:53'),
(2, 'Premium Shampoo', 60000, 'head', 1, NULL, '2019-06-08 06:55:20'),
(3, 'Olaplex Shampoo', 120000, 'head', 1, NULL, '2019-06-08 06:55:35'),
(4, 'No', 50000, 'once', 2, NULL, '2019-06-08 06:57:12'),
(5, 'No', 50000, 'once', 3, NULL, '2019-06-08 06:57:40'),
(6, 'No', 30000, 'head', 4, NULL, '2019-06-08 06:58:06'),
(7, 'No', 50000, 'head', 5, NULL, '2019-06-08 06:58:40'),
(8, 'No', 100000, 'head', 6, NULL, '2019-06-08 06:59:14'),
(9, 'No', 200000, 'head', 7, NULL, '2019-06-08 06:59:35'),
(10, 'No', 30000, 'head', 8, NULL, '2019-06-08 07:00:07'),
(11, 'No', 50000, 'head', 10, NULL, '2019-06-08 07:00:25'),
(12, 'No', 30000, 'head', 11, '2019-06-08 04:18:54', '2019-06-08 07:00:48'),
(14, 'Short', 200000, 'head', 12, '2019-06-08 06:49:21', '2019-06-08 07:01:36'),
(15, 'Medium', 200000, NULL, 12, '2019-06-08 07:02:04', '2019-06-08 07:02:04'),
(16, 'Long and thick', 300000, NULL, 12, '2019-06-08 07:02:54', '2019-06-08 07:02:54'),
(17, 'Roots (<10cm)', 500000, NULL, 13, '2019-06-08 07:04:25', '2019-06-08 07:04:25'),
(18, 'Short (upper - touching the shoulder)', 800000, NULL, 13, '2019-06-08 07:04:56', '2019-06-08 07:04:56'),
(19, 'Medium', 1200000, NULL, 13, '2019-06-08 07:05:15', '2019-06-08 07:05:15'),
(20, 'Long (below the shoulder to middle back)', 1200000, NULL, 13, '2019-06-08 07:05:34', '2019-06-08 07:05:34'),
(21, 'Super Long (below middle back)', 1500000, NULL, 13, '2019-06-08 07:05:49', '2019-06-08 07:05:49'),
(22, 'Roots', 300000, NULL, 14, '2019-06-08 07:06:16', '2019-06-08 07:06:16'),
(23, 'Short', 400000, NULL, 14, '2019-06-08 07:06:32', '2019-06-08 07:06:32'),
(24, 'Medium', 500000, NULL, 14, '2019-06-08 07:06:56', '2019-06-08 07:06:56'),
(25, 'Long', 500000, NULL, 14, '2019-06-08 07:07:07', '2019-06-08 07:07:07'),
(26, 'Super Long', 600000, NULL, 14, '2019-06-08 07:07:24', '2019-06-08 07:07:24'),
(27, 'Short', 800000, NULL, 15, '2019-06-08 07:07:36', '2019-06-08 07:07:36'),
(28, 'Medium', 120000, NULL, 15, '2019-06-08 07:08:01', '2019-06-08 07:08:01'),
(29, 'Long', 1200000, NULL, 15, '2019-06-08 07:08:19', '2019-06-08 07:08:19'),
(30, 'Super Long', 1500000, NULL, 15, '2019-06-08 07:08:43', '2019-06-08 07:08:43'),
(31, 'Roots', 400000, NULL, 16, '2019-06-08 07:09:09', '2019-06-08 07:09:09'),
(32, 'Short', 400000, NULL, 16, '2019-06-08 07:09:24', '2019-06-08 07:09:24'),
(33, 'Medium - Long', 600000, NULL, 16, '2019-06-08 07:09:37', '2019-06-08 07:09:37'),
(34, 'Super Long', 800000, NULL, 16, '2019-06-08 07:09:54', '2019-06-08 07:09:54'),
(35, 'No', 100000, NULL, 17, '2019-06-08 07:10:05', '2019-06-08 07:10:05'),
(36, 'No', 400000, 'once', 18, '2019-06-08 07:10:30', '2019-06-08 07:10:30'),
(37, 'No', 500000, NULL, 19, '2019-06-08 07:10:49', '2019-06-08 07:10:49'),
(38, 'Each light', 50000, 'a light', 20, '2019-06-08 07:12:02', '2019-06-08 07:12:02'),
(39, 'Half head/ roots', 1200000, NULL, 20, '2019-06-08 07:12:21', '2019-06-08 07:12:21'),
(40, 'Full head of short hair', 1800000, NULL, 20, '2019-06-08 07:12:51', '2019-06-08 07:12:51'),
(41, 'Full head of medium hair', 2300000, NULL, 20, '2019-06-08 07:13:07', '2019-06-08 07:13:07'),
(42, 'Full head of long hair', 2500000, NULL, 20, '2019-06-08 07:13:22', '2019-06-08 07:13:22'),
(43, 'Short', 1800000, NULL, 21, '2019-06-08 07:13:39', '2019-06-08 07:13:39'),
(44, 'Long', 2300000, NULL, 21, '2019-06-08 07:14:05', '2019-06-08 07:14:05'),
(45, 'Super Long', 2500000, NULL, 21, '2019-06-08 07:14:21', '2019-06-08 07:14:21'),
(46, 'No', 400000, 'once', 22, '2019-06-08 07:14:37', '2019-06-08 07:14:37'),
(47, 'Short', 700000, NULL, 23, '2019-06-08 07:14:51', '2019-06-08 07:14:51'),
(48, 'Medium - Long', 800000, NULL, 23, '2019-06-08 07:15:16', '2019-06-08 07:15:16'),
(49, 'Super Long', 900000, NULL, 23, '2019-06-08 07:15:40', '2019-06-08 07:15:40'),
(50, 'Short', 350000, NULL, 24, '2019-06-08 07:15:59', '2019-06-08 07:15:59'),
(51, 'Medium - Long', 400000, NULL, 24, '2019-06-08 07:16:47', '2019-06-08 07:16:47'),
(52, 'Long', 450000, NULL, 24, '2019-06-08 07:16:57', '2019-06-08 07:16:57'),
(53, 'No', 250000, NULL, 25, '2019-06-08 07:20:47', '2019-06-08 07:20:47'),
(54, 'No', 250000, 'a light', 26, '2019-06-08 07:21:24', '2019-06-08 07:21:24'),
(55, 'No', 1500000, 'a gram', 27, '2019-06-08 07:21:53', '2019-06-08 07:21:53'),
(56, 'No', 1900000, 'a gram', 28, '2019-06-08 07:22:08', '2019-06-08 07:22:08'),
(57, 'No', 500000, 'a gram', 29, '2019-06-08 07:22:27', '2019-06-08 07:22:27'),
(58, 'No', 400000, 'card', 30, '2019-06-08 07:23:14', '2019-06-08 07:23:14'),
(59, 'Short', 2520000, 'card', 31, '2019-06-08 07:23:29', '2019-06-08 07:23:29'),
(60, 'Medium - Long', 2880000, 'card', 31, '2019-06-08 07:23:46', '2019-06-08 07:23:46'),
(61, 'Super Long', 3240000, 'card', 31, '2019-06-08 07:24:02', '2019-06-08 07:24:02'),
(62, 'Short', 1400000, 'card', 32, '2019-06-08 07:24:15', '2019-06-08 07:24:15'),
(63, 'Medium', 1600000, 'card', 32, '2019-06-08 07:24:40', '2019-06-08 07:24:40'),
(64, 'Long', 1800000, 'card', 32, '2019-06-08 07:25:37', '2019-06-08 07:25:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stylists`
--

CREATE TABLE `stylists` (
  `stylist_id` int(10) UNSIGNED NOT NULL,
  `stylist_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `brand_id` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `stylists`
--

INSERT INTO `stylists` (`stylist_id`, `stylist_name`, `avatar`, `age`, `brand_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nhan vien A', 'MZhSNgdhuV', 27, 1, 1, NULL, NULL),
(2, 'Nhan vien B', '9qkVmT4yzT', 20, 1, 1, NULL, NULL),
(3, 'Nhan vien C', 'irFVYXusdp', 26, 2, 1, NULL, NULL),
(4, 'Nhan vien D', 'jU5RRXPAId', 26, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level` tinyint(4) NOT NULL,
  `brand_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `avatar`, `email`, `address`, `phone`, `user_level`, `brand_id`, `created_at`, `updated_at`) VALUES
(3, 'admin1', '$2y$10$TUSyx10mEGmAw5JkfigR9epKWUEIzdc13WrP20NkAbk4LpHKwpdG2', '$2y$10$AL5vo1stq6BbeBEWLUPc8ezU9KDDLBtpgkXK3oDm.BSYcCosEiPMO1.png', 'admin1@gmail.com', 'Hà Nội', '0385840395', 1, 2, NULL, '2019-06-05 19:26:26'),
(4, 'Nguyen Van A', '$2y$10$LGXQ1UiyHmSXS1okJVD3heYyB.t9pqHQbSef7NO2Iz9x7Fk1Ct4be', '$2y$10$rV0ZJ6Sq7fFn8nx91lp6w.BZq3LQcVg8wWRoYJdK3loWFDwciKeZm2.jpeg', 'vana@gmail.com', 'hn', '1415464', 0, 1, '2019-05-22 04:14:20', '2019-06-05 19:26:53'),
(5, 'Nguyen Van C', '$2y$10$.lZ4oFxdQDlQasMSXVI9V.JNHJq6scIR/bcoEMf8qDMHJSuLgdEae', '$2y$10$jNHr1H6s2eTnVPlT3N.vI.B1JLrdodIvtUuoUjRFhwwsSdOejcXfW2.jpeg', 'admin@gmail.com', 'Hà Nội', '0123456789', 0, 1, '2019-05-22 04:31:12', '2019-06-05 19:27:14'),
(6, 'Administrator', '$2y$10$8qhx5zAiM.FBXJ/tRVOKReFHtL0qzoLVD29i2MYTauIjrWIDxvGYG', '$2y$10$esxHT0wVwSKfpvX1/48LtORuxX/kt3P6sRlszyd5jrsKOBWDz8fCq1.png', 'admin@gmail.com', 'Hà Nội', '0838893412', 0, 1, '2019-05-22 23:55:57', '2019-06-05 18:46:45'),
(7, 'admin3', '$2y$10$wIh6Ms8wGa8SnlM3Fxkkp.81WKCUZHIQQBy3NrDU88BrCMCDkTR5K', '$2y$10$3rAPUsWg17R6UZPoLHy9k.v9ndatj3BozB4dYButAI64sPM3kifs2avatar.jpg', 'admin3@gmail.com', 'Cầu Giấy', '0383438843', 0, 1, '2019-06-02 20:54:23', '2019-06-05 18:48:31'),
(14, 'Nhan Vien ABC', '$2y$10$Ygq5o9bzY1J3S.nYEQeS5.y9zDiG1XSpbRoCj9jP2RAjM/YY/QUZ.', '$2y$10$OVDAboPtIMZefPjLnO4XZOcjMRsw.qfzfz0ilC5jsClDZS.TKtvyq1.png', 'nhanviena@gmail.com', 'Hà Nội sửa', '45267971', 1, 1, '2019-06-05 05:31:37', '2019-06-05 19:47:53');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `stylists`
--
ALTER TABLE `stylists`
  ADD PRIMARY KEY (`stylist_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `service_types`
--
ALTER TABLE `service_types`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `stylists`
--
ALTER TABLE `stylists`
  MODIFY `stylist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
