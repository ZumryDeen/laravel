-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2019 at 07:10 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.1.30-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_17_024322_create_post_models_table', 1),
(4, '2019_06_17_031619_add_columns_post_model', 2),
(5, '2019_06_18_100735_create_customer_table', 2),
(6, '2019_06_27_043031_create_orders_table', 3),
(7, '2019_07_17_051059_create_jobs_table', 4),
(8, '2019_07_22_025513_add_varificationmail', 5),
(9, '2019_07_23_092815_create_failed_jobs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `item_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `item_id`, `created_at`, `updated_at`) VALUES
(1, 1, 10, NULL, NULL),
(2, 1, 12, NULL, NULL),
(3, 3, 13, NULL, NULL),
(4, 1, 10, NULL, NULL),
(5, 1, 12, NULL, NULL),
(6, 3, 13, NULL, NULL),
(7, 1, 10, NULL, NULL),
(8, 1, 12, NULL, NULL),
(9, 3, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_models`
--

CREATE TABLE `post_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_models`
--

INSERT INTO `post_models` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Post 5', 'Ut ipsum velit sed quia rerum explicabo at. Occaecati error id et placeat alias atque soluta.', 1, NULL, '2019-06-27 05:27:19'),
(2, 'Prof.', 'A doloremque ut voluptatibus aperiam fugit neque dolor qui. Distinctio saepe nostrum ut eum eligendi fugit quo ullam. Quisquam est qui non alias quibusdam accusamus ut.', 1, NULL, NULL),
(3, 'Miss', 'Ex soluta consectetur minus et. Maiores ad deserunt et molestiae aut. Corporis aut et odio.', 1, NULL, NULL),
(4, 'Prof.', 'Et voluptas qui ducimus at totam enim aut. Earum nisi impedit eveniet enim enim. Rem non beatae in dolorem pariatur veritatis. Iste id quas accusantium doloribus inventore deserunt.', 3, NULL, NULL),
(5, 'Mr.', 'Natus vero nobis sequi quod corrupti accusantium. Atque maiores sit consequatur natus quam omnis dolore. Culpa enim voluptas aperiam consequatur. Culpa sit eum ea sed.', 2, NULL, NULL),
(6, 'Ms.', 'Labore ut cum ut aut et sint. Omnis minima unde possimus saepe. Labore voluptatem tempora et eveniet totam.', 2, NULL, NULL),
(7, 'Dr.', 'Deleniti amet non voluptatem sunt. Qui animi et autem autem corrupti. Autem cum iste eius perspiciatis nam aut delectus. Adipisci deleniti quo voluptates qui minus sunt ipsum.', 1, NULL, NULL),
(8, 'Miss', 'Sit nihil voluptatem ullam dolorem provident deserunt quod. Nisi doloremque aut voluptate eligendi. Fugit in aperiam delectus tempore ipsam in quae sit.', 2, NULL, NULL),
(9, 'Prof.', 'Voluptate nobis eum dicta incidunt. Qui ab omnis quis sint esse nihil autem. Accusamus adipisci quia quia veritatis aut ad aspernatur.', 1, NULL, NULL),
(10, 'Mr.', 'Ullam veritatis cupiditate quaerat nisi dolorem rerum asperiores eaque. Est sed et hic eum. Quasi nam aut est laudantium. Maiores ea inventore dolor animi.', 1, NULL, NULL),
(11, 'Dr.', 'Sint a molestiae quis assumenda rem. Et sunt optio quisquam est incidunt. Suscipit velit alias minus distinctio distinctio nobis.', 2, NULL, NULL),
(12, 'Dr.', 'Repellat recusandae non aspernatur qui. Odit voluptatum recusandae ut et. Eos voluptatem eos esse molestiae ex. Nisi cupiditate aut ratione harum perferendis molestiae.', 1, NULL, NULL),
(13, 'Dr.', 'Voluptatem nisi sequi minima possimus dolorum quam qui. Quia repellat quia aut aut. Est fugit culpa et voluptatibus maiores. Voluptas dolorem quia cumque ut possimus nesciunt ab.', 1, NULL, NULL),
(14, 'Mr.', 'Deserunt quia rerum quod dolor earum exercitationem itaque. Consectetur occaecati dolor molestiae qui molestiae. Qui aliquid et fugiat. Neque non ratione error dolorem sed architecto consectetur.', 2, NULL, NULL),
(15, 'Miss', 'Dolores ullam sapiente laudantium accusamus. Aut facilis assumenda earum sunt minus amet. Est velit fugit vel commodi et repellat. Molestiae ea voluptatem voluptas corporis ut omnis.', 1, NULL, NULL),
(16, 'Dr.', 'Nam iste atque sed illo dolores quis. Consequatur ipsam quis et aut hic molestiae vel. Voluptatibus quibusdam aperiam ut tenetur et optio omnis suscipit. Minima illo minus omnis consequuntur.', 2, NULL, NULL),
(17, 'Swwfa', 'its ma own post', 4, '2019-06-27 05:30:40', '2019-06-27 05:30:40'),
(18, 'Mr.', 'Corrupti et itaque qui nam explicabo. Tempore qui non ab provident. Et porro voluptatem iusto alias impedit non necessitatibus. Ratione ad dolorem mollitia et perspiciatis totam accusantium.', NULL, '2019-06-28 05:13:59', '2019-06-28 05:13:59'),
(19, 'Prof.', 'Velit vel eos et ab est. Laudantium eius mollitia officiis atque ipsa ipsa sequi. Est natus veritatis et consequatur ut repellat consequatur.', NULL, '2019-06-28 05:13:59', '2019-06-28 05:13:59'),
(20, 'Dr.', 'Autem quas quae et. Iusto perferendis qui debitis et. Voluptatem rerum cum omnis eum. Non dicta officia eveniet repudiandae ab.', NULL, '2019-06-28 05:16:19', '2019-06-28 05:16:19'),
(21, 'Dr.', 'Molestias blanditiis qui ut distinctio iure omnis. Et quae autem tenetur. Architecto omnis exercitationem sapiente. Corporis aut recusandae harum laboriosam.', NULL, NULL, NULL),
(22, 'Prof.', 'Vel doloremque dolorem eos rem doloribus quidem. Sint fugiat tempora quibusdam aut facilis voluptatem. Fugiat id adipisci eius culpa. Labore qui perferendis officia tempora aut culpa.', NULL, NULL, NULL),
(23, 'Et natus dolorum quos qui quidem nobis.', 'Dolorum quia corrupti nulla at culpa non occaecati. Et maxime et est omnis. Fugiat ipsum quidem placeat nisi illum necessitatibus sunt. Suscipit dolores reiciendis blanditiis qui odio praesentium autem. Adipisci labore totam velit et expedita rem.', 4, NULL, NULL),
(24, 'Debitis incidunt est velit ipsa.', 'Mollitia sint tenetur ut odit. Magni sit magni officia. Architecto deserunt rem fugiat quam.', 4, NULL, NULL),
(25, 'Ea quidem vel officia et ipsa.', 'Ipsa laudantium doloribus libero ex quia in. Culpa voluptatem officiis et mollitia modi. Autem rerum sunt labore tempore natus veniam. Sunt et quo veniam nobis cum iste mollitia.', 2, NULL, NULL),
(26, 'Eos et ab est eos tempora.', 'Ut fuga ex alias ex omnis et. Perferendis sed ad odio error est sit laudantium. Ut est veritatis vero veniam aut voluptatem impedit. Velit nobis sed rerum libero impedit qui voluptatem.', 6, NULL, NULL),
(27, 'Eveniet asperiores similique fugit voluptas itaque nihil laborum qui.', 'Accusantium voluptatem quia necessitatibus corporis similique. Alias distinctio molestiae magni est ex voluptate sit quisquam. Voluptatem in ullam accusamus voluptatem fugit. Voluptates asperiores et aut amet.', 7, NULL, NULL),
(28, 'Harum architecto quia vero omnis aut.', 'Provident repellendus quia adipisci voluptatem aliquam error quia. Minus autem eius error cumque nobis. Natus ipsum animi quis. Qui quia earum perferendis. Quia animi ipsam tenetur aut laborum magnam.', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `email`, `age`) VALUES
(1, 'Demario', 'david.jacobs@ernser.com', '35'),
(2, 'Josiane', 'joanie28@keeling.com', '19'),
(3, 'Dexter', 'otha.gleason@mayer.com', '25'),
(4, 'Cullen', 'rempel.mabelle@collins.com', '23'),
(5, 'Lauriane', 'mertz.hobart@satterfield.com', '35'),
(6, 'Emie', 'doyle.rocio@hotmail.com', '24'),
(7, 'Vivianne', 'zora02@hotmail.com', '30'),
(8, 'Camila', 'trantow.dedric@mante.biz', '22'),
(9, 'Emerald', 'kian93@gmail.com', '25'),
(10, 'Providenci', 'jan47@yahoo.com', '25'),
(11, 'Marcella', 'bmayert@gmail.com', '34'),
(12, 'Marvin', 'reuben14@cronin.com', '34'),
(13, 'Gwen', 'erna33@gmail.com', '22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `super` tinyint(4) DEFAULT NULL,
  `verified_mail` tinyint(4) NOT NULL DEFAULT '0',
  `email_token` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `super`, `verified_mail`, `email_token`) VALUES
(1, 'Thora Abernathy', 'oconner.jerrod@example.com', '2019-06-26 05:34:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pF1HHhAdry', '2019-06-26 05:34:25', '2019-06-26 05:34:25', NULL, 0, NULL),
(2, 'Aylin Gleichner', 'stevie.bashirian@example.com', '2019-06-26 05:34:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '66xrkj9IOy', '2019-06-26 05:34:25', '2019-06-26 05:34:25', NULL, 0, NULL),
(3, 'Herminia Williamson', 'virgil.witting@example.org', '2019-06-26 05:34:25', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0ODN5y8wVp', '2019-06-26 05:34:26', '2019-06-26 05:34:26', NULL, 0, NULL),
(4, 'Deeno cool', 'salman@gmail.com', NULL, '$2y$10$3oV5fHEGJVXUXOMeD3raBujWIFnNNnZ3F7Vu2P23wNUrZ.6oWji2.', NULL, '2019-06-27 05:14:42', '2019-06-27 05:14:42', 1, 0, NULL),
(5, 'Baby Cruickshank', 'kris.haleigh@example.com', '2019-06-30 21:15:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '90D1rvyfwh', '2019-06-30 21:15:10', '2019-06-30 21:15:10', NULL, 0, NULL),
(6, 'Dr. Abbie Wunsch', 'zachery.bartell@example.org', '2019-06-30 21:15:44', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xzPIOYm62A', '2019-06-30 21:15:44', '2019-06-30 21:15:44', NULL, 0, NULL),
(7, 'Ms. Coralie Paucek', 'eda25@example.net', '2019-06-30 21:15:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g1u9OaW4ed', '2019-06-30 21:15:49', '2019-06-30 21:15:49', NULL, 0, NULL),
(8, 'Jovani Dooley III', 'heidenreich.brown@example.net', '2019-06-30 21:18:01', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3ieg7175cc', '2019-06-30 21:18:01', '2019-06-30 21:18:01', NULL, 0, NULL),
(9, 'Deen', 'zumrydeen55.prs@gmail.com', NULL, '$2y$10$fM2gGPdZR7DiLVWQ/b69f.Q1b5T.THSCOQnEWdgj7bv4HzWpL/yLm', NULL, '2019-07-21 21:06:57', '2019-07-21 21:06:57', NULL, 0, NULL),
(10, 'Deen', 'zumrydeen.prs@gmail.com', NULL, '$2y$10$B.vzW7eYElbMxpnGlewqG.3vIrFM5fFVKvZ65ecphVUdhuyaNyncC', NULL, '2019-07-22 06:06:16', '2019-07-22 06:06:16', NULL, 0, 'enVtcnlkZWVuLnByc0BnbWFpbC5jb20='),
(11, 'Abu', 'abu@gmail.com', NULL, '$2y$10$YxYfrXWM1NYWm6chlnq5e.YVJp3eCvWNS/.vkbeFPiUxaabzrg1f2', NULL, '2019-07-22 21:22:19', '2019-07-22 21:22:19', NULL, 0, 'YWJ1QGdtYWlsLmNvbQ=='),
(12, 'rome', 'romea@gmail.com', NULL, '$2y$10$rdgR7PZhZRJJIjuivEZgjOYHU2Y3C9qwKlhA76FTcBGlfxkE4sTSq', NULL, '2019-07-22 21:25:45', '2019-07-22 21:25:45', NULL, 0, 'cm9tZWFAZ21haWwuY29t'),
(13, 'Maria', 'mario@gmail.com', NULL, '$2y$10$emKjLMb5NAaAO.dNLXuKo.TdkFJexeD9i.iHSVzXmh33CLIxXT8fy', NULL, '2019-07-22 21:30:44', '2019-07-22 21:30:44', NULL, 0, 'bWFyaW9AZ21haWwuY29t'),
(14, 'Deens', 'deeno@gmail.com', NULL, '$2y$10$OuY1FHx.0l4YKDNLT0CchO1dxPWtVFtf1dfioib7kTLreyaNJubUW', NULL, '2019-07-22 21:32:26', '2019-07-22 21:32:26', NULL, 0, 'ZGVlbm9AZ21haWwuY29t'),
(15, 'Shenay', 'sehnaya@gmail.com', NULL, '$2y$10$vfCF4cdNDTFSx2gSj.JWR.bOC6BTN4lpk7heVdXgc5Nix.ahhzkbe', NULL, '2019-07-22 21:38:30', '2019-07-22 21:38:30', NULL, 0, 'c2VobmF5YUBnbWFpbC5jb20='),
(16, 'Shenay', 'sehnayar@gmail.com', NULL, '$2y$10$QwqXNRj3qXkV6QIKUoLpWuIVaU.bbKust15NnqXuhsGGeh1A91SjK', NULL, '2019-07-22 21:42:14', '2019-07-22 21:42:14', NULL, 0, 'c2VobmF5YXJAZ21haWwuY29t'),
(17, 'Shenay', 'sehnayarw@gmail.com', NULL, '$2y$10$pMnsKVPQtXnVcpQMTW.pW.MEe4mwxZLmnBVNCSnb91PAUHeHNC5vS', NULL, '2019-07-22 21:44:22', '2019-07-22 21:44:22', NULL, 0, 'c2VobmF5YXJ3QGdtYWlsLmNvbQ=='),
(18, 'shamla', 'shanayaz@gmail.com', NULL, '$2y$10$esXbL2e70JF.I/JQyhw36.GQMCYHyrcGTJLuazImYQxMFsenbYHQi', NULL, '2019-07-22 21:45:21', '2019-07-22 21:45:21', NULL, 0, 'c2hhbmF5YXpAZ21haWwuY29t'),
(19, 'Sham', 'shamla@gmail.com', NULL, '$2y$10$DzTWFzkHfN6U/BplLmdQ0uCDpqk.k2wDAczcKet2udAk1vE.xS/R.', NULL, '2019-07-22 21:49:00', '2019-07-22 21:49:00', NULL, 0, 'c2hhbWxhQGdtYWlsLmNvbQ=='),
(20, 'Spmia', 'sa@gmail.com', NULL, '$2y$10$OdNBkryIUhGwDcTgr0viRuDnGQGxa.Agi8DsLs1trtQWV1kF6txPy', NULL, '2019-07-22 21:51:20', '2019-07-22 21:51:20', NULL, 0, 'c2FAZ21haWwuY29t'),
(21, 'Delay', 'delat@gmail.com', NULL, '$2y$10$h5Vv9fx8gl.X3TVb7Gv1neVWJTzXkRp2/HeGSyDr1qUlm/Qlkm0xG', NULL, '2019-07-22 21:53:40', '2019-07-22 21:53:40', NULL, 0, 'ZGVsYXRAZ21haWwuY29t'),
(22, 'Delay', 'delata@gmail.com', NULL, '$2y$10$rB1WwAnQywfqk2lpmcJmduym3iG2XvXowU/NNrUQSj9rRYu35reDm', NULL, '2019-07-22 22:04:21', '2019-07-22 22:04:21', NULL, 0, 'ZGVsYXRhQGdtYWlsLmNvbQ=='),
(23, 'Delay', 'www@gmail.com', NULL, '$2y$10$YPP.B78Ud/ZolYCJBTYFZul7REhl/5DrycW3YI.OBm56rhgazgP/.', NULL, '2019-07-22 22:06:58', '2019-07-22 22:06:58', NULL, 0, 'd3d3QGdtYWlsLmNvbQ=='),
(24, 'AbuS', 'xdd@gmail.com', NULL, '$2y$10$2dR01ez7GwxYXkirC01mpum2XXZHKEElJwHu.WoxMCsRx58B63RnS', NULL, '2019-07-22 22:07:54', '2019-07-22 22:07:54', NULL, 0, 'eGRkQGdtYWlsLmNvbQ=='),
(25, 'New', 'new@gmail.com', NULL, '$2y$10$wYnLiJBnEEk42SLqeX.Pt..CpO.IJETlYw9xpqM0trTbeOpbDqp.S', NULL, '2019-07-22 22:09:32', '2019-07-22 22:09:32', NULL, 0, 'bmV3QGdtYWlsLmNvbQ=='),
(26, 'Deen', 'd4nj4yw@gmail.com', NULL, '$2y$10$rZj2qUltB8FZZdT9N8eRguBCPI8vMEyBBso10k2WFfN.dG27GmeLq', NULL, '2019-07-22 22:13:41', '2019-07-22 22:13:41', NULL, 0, 'ZDRuajR5d0BnbWFpbC5jb20='),
(27, 'Filver', 'holman@gmail.com', NULL, '$2y$10$I7J6k9559QZ44/Xo3N3wleWByUTSq1H7IDS7vgPLpCDl0EES4KPRW', NULL, '2019-07-22 22:39:25', '2019-07-22 22:39:25', NULL, 0, 'aG9sbWFuQGdtYWlsLmNvbQ=='),
(28, 'Sherimi', 'sanjay@gmail.com', NULL, '$2y$10$GltIwja5cBskmtE6SbGMW.R5PjYe5As/czLHwlaScVbyW3NyW0fla', NULL, '2019-07-22 22:40:55', '2019-07-22 22:40:55', NULL, 0, 'c2FuamF5QGdtYWlsLmNvbQ=='),
(29, 'Del', 'del@gmail.com', NULL, '$2y$10$pPTRKdyrwAHQH.jjK3Q8EeKEvydVdrEZHyf0Qb8XBxh9pKo07bEpe', NULL, '2019-07-22 23:07:04', '2019-07-22 23:07:04', NULL, 0, 'ZGVsQGdtYWlsLmNvbQ=='),
(30, 'Dis', 'dis@gmail.com', NULL, '$2y$10$/5uNtJFg7fTidCnbhdMQPeWvz28Of3zBaaAnEuEKAzvO/68Xat4JS', NULL, '2019-07-22 23:12:50', '2019-07-22 23:12:50', NULL, 0, 'ZGlzQGdtYWlsLmNvbQ=='),
(31, 'Sww', 'eew.prs@gmail.com', NULL, '$2y$10$LyPUo/DJJLUL64Md974F2.wbt6PMEhhXo.fXqpZpLwjrZ7qfxLFaS', NULL, '2019-07-22 23:14:57', '2019-07-22 23:14:57', NULL, 0, 'ZWV3LnByc0BnbWFpbC5jb20='),
(34, 'Deen', 'remo@gmail.com', NULL, '$2y$10$D64Yb85.rQCJqBkKDdxnF.nNwtCAX8Q8ggX0AiMOqwqK5TkjEbSay', NULL, '2019-07-23 05:05:48', '2019-07-23 05:05:48', NULL, 0, 'cmVtb0BnbWFpbC5jb20='),
(35, 'Thilothama', 'remoDeen@gmail.com', NULL, '$2y$10$xvvVz7bNkNpVsDinOBQQAu2TlpcYSgSmzQaXxg4BTpHiuvFkJDVTG', NULL, '2019-07-23 05:10:57', '2019-07-23 05:10:57', NULL, 0, 'cmVtb0RlZW5AZ21haWwuY29t'),
(36, 'Snowwhilte', 'snow@gmail.com', NULL, '$2y$10$U6H07mo.8C1xgUUX4jKOJOVKWy1SzGObJZtpWoE/mkBP/ByoD/0xC', NULL, '2019-07-23 05:12:46', '2019-07-23 05:12:46', NULL, 0, 'c25vd0BnbWFpbC5jb20='),
(37, 'Sonia', 'sonia@gmail.com', NULL, '$2y$10$DkaUa8W5qLbTvtQhiLdm/uFRGyiUhbewPhu7iOSC70erELDiiAlnK', NULL, '2019-07-23 05:18:23', '2019-07-23 05:18:23', NULL, 0, 'c29uaWFAZ21haWwuY29t'),
(38, 'Deni', 'de@gmail.com', NULL, '$2y$10$qv8hDcOaHMYNhvHQbRWtEe.ga9IWeeyYNmuq./fBaFB3XTn/1VDA.', NULL, '2019-07-23 05:22:52', '2019-07-23 05:22:52', NULL, 0, 'ZGVAZ21haWwuY29t'),
(39, 'ram', 'ram@gmail.com', NULL, '$2y$10$Xd7tqCB2kIJgML8m2kCWEutTJsyKqCYjmk4KoOsqLFHRUaYxQiOLO', NULL, '2019-07-23 05:25:00', '2019-07-23 05:28:47', NULL, 1, 'cmFtQGdtYWlsLmNvbQ=='),
(40, 'zainab', 'zai@gmail.com', NULL, '$2y$10$LiueASe8JgNxhn23joQxPeYtrVOFYBDQ.JvtF/oaQXqMgSXsI3Jrq', NULL, '2019-07-23 05:30:21', '2019-07-23 05:30:58', NULL, 1, 'emFpQGdtYWlsLmNvbQ==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post_models`
--
ALTER TABLE `post_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `post_models`
--
ALTER TABLE `post_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
