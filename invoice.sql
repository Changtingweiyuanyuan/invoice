-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-20 09:03:20
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `award_numbers`
--

CREATE TABLE `award_numbers` (
  `id` int(11) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `period` tinyint(1) NOT NULL,
  `number` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `award_numbers`
--

INSERT INTO `award_numbers` (`id`, `year`, `period`, `number`, `type`) VALUES
(5, 2020, 6, '13362795', 1),
(6, 2020, 6, '27580166', 2),
(7, 2020, 6, '53227282', 3),
(8, 2020, 6, '35082085', 3),
(9, 2020, 6, '37175928', 3),
(10, 2020, 6, '987', 4),
(11, 2020, 6, '614', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `period` tinyint(1) UNSIGNED NOT NULL,
  `payment` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `invoices`
--

INSERT INTO `invoices` (`id`, `code`, `number`, `period`, `payment`, `date`, `create_time`) VALUES
(1, 'FF', '30339525', 1, 91057, '2020-01-16', '2020-11-18 08:20:25'),
(2, 'FF', '03603227', 1, 27596, '2020-02-16', '2020-11-18 08:20:25'),
(3, 'AB', '85055610', 2, 139951, '2020-04-18', '2020-11-18 08:20:25'),
(4, 'KW', '92266817', 2, 129129, '2020-04-03', '2020-11-18 08:20:25'),
(5, 'PG', '89423000', 6, 154980, '2020-12-05', '2020-11-18 08:20:25'),
(6, 'QM', '59417967', 1, 61210, '2020-02-13', '2020-11-18 08:20:25'),
(7, 'PG', '17626533', 2, 1051, '2020-03-27', '2020-11-18 08:20:25'),
(8, 'IS', '92748202', 6, 183917, '2020-12-07', '2020-11-18 08:20:25'),
(9, 'KJ', '41374140', 2, 73892, '2020-04-10', '2020-11-18 08:20:25'),
(10, 'KW', '14079310', 3, 26359, '2020-05-29', '2020-11-18 08:20:25'),
(11, 'QM', '55957784', 5, 167695, '2020-09-09', '2020-11-18 08:20:25'),
(12, 'AB', '31301710', 5, 68192, '2020-10-22', '2020-11-18 08:20:25'),
(13, 'OE', '23427090', 2, 164386, '2020-04-08', '2020-11-18 08:20:25'),
(14, 'PG', '45222170', 6, 116082, '2020-11-03', '2020-11-18 08:20:25'),
(15, 'QM', '62945740', 6, 149854, '2020-12-05', '2020-11-18 08:20:25'),
(16, 'QM', '82226354', 3, 89494, '2020-06-29', '2020-11-18 08:20:25'),
(17, 'KJ', '65974996', 5, 53089, '2020-10-10', '2020-11-18 08:20:25'),
(18, 'OE', '29224515', 1, 8202, '2020-01-01', '2020-11-18 08:20:25'),
(19, 'PG', '04552536', 6, 158068, '2020-12-02', '2020-11-18 08:20:25'),
(20, 'KD', '07952165', 6, 18825, '2020-11-06', '2020-11-18 08:20:25'),
(21, 'AB', '48920270', 4, 49217, '2020-07-02', '2020-11-18 08:20:25'),
(22, 'KW', '41736872', 1, 89956, '2020-01-03', '2020-11-18 08:20:25'),
(23, 'KJ', '34487784', 6, 140375, '2020-12-11', '2020-11-18 08:20:25'),
(24, 'PG', '85831209', 1, 78868, '2020-01-31', '2020-11-18 08:20:25'),
(25, 'QM', '81617641', 4, 15734, '2020-08-14', '2020-11-18 08:20:25'),
(26, 'OE', '51218557', 6, 104493, '2020-11-29', '2020-11-18 08:20:25'),
(27, 'KW', '65393940', 1, 137399, '2020-02-15', '2020-11-18 08:20:25'),
(28, 'KD', '84427605', 1, 145052, '2020-01-07', '2020-11-18 08:20:25'),
(29, 'KD', '84864656', 3, 182193, '2020-06-17', '2020-11-18 08:20:25'),
(30, 'FF', '36978547', 3, 8530, '2020-06-26', '2020-11-18 08:20:25'),
(31, 'IS', '84312711', 4, 145896, '2020-08-16', '2020-11-18 08:20:25'),
(32, 'PG', '53847623', 3, 185678, '2020-05-07', '2020-11-18 08:20:25'),
(33, 'QM', '40387575', 4, 97427, '2020-07-06', '2020-11-18 08:20:25'),
(34, 'KD', '54196653', 2, 96008, '2020-03-17', '2020-11-18 08:20:25'),
(35, 'KW', '49195123', 1, 124995, '2020-02-29', '2020-11-18 08:20:25'),
(36, 'GD', '51442822', 4, 94932, '2020-08-28', '2020-11-18 08:20:25'),
(37, 'KD', '76661657', 2, 195971, '2020-04-11', '2020-11-18 08:20:25'),
(38, 'KW', '43003204', 4, 145359, '2020-07-23', '2020-11-18 08:20:25'),
(39, 'KW', '35121602', 6, 43799, '2020-11-23', '2020-11-18 08:20:25'),
(40, 'OE', '20257973', 1, 64319, '2020-02-12', '2020-11-18 08:20:25'),
(41, 'QM', '29887095', 3, 137621, '2020-06-15', '2020-11-18 08:20:25'),
(42, 'IS', '71057475', 2, 95959, '2020-04-09', '2020-11-18 08:20:25'),
(43, 'QM', '25865129', 2, 29941, '2020-04-16', '2020-11-18 08:20:25'),
(44, 'KJ', '48407566', 1, 57324, '2020-01-27', '2020-11-18 08:20:25'),
(45, 'QM', '29824319', 2, 130400, '2020-04-10', '2020-11-18 08:20:25'),
(46, 'KD', '98470278', 2, 89451, '2020-03-13', '2020-11-18 08:20:25'),
(47, 'IS', '74732722', 2, 22411, '2020-03-17', '2020-11-18 08:20:25'),
(48, 'PG', '23931926', 4, 88282, '2020-08-07', '2020-11-18 08:20:25'),
(49, 'QM', '09917524', 1, 12010, '2020-02-02', '2020-11-18 08:20:25'),
(50, 'GD', '78516609', 4, 43271, '2020-08-07', '2020-11-18 08:20:25'),
(51, 'IS', '79875502', 6, 77067, '2020-12-11', '2020-11-18 08:20:27'),
(52, 'QM', '02579494', 6, 136290, '2020-11-30', '2020-11-18 08:20:27'),
(53, 'KJ', '70508948', 1, 31206, '2020-01-06', '2020-11-18 08:20:27'),
(54, 'PG', '30597200', 6, 134309, '2020-11-15', '2020-11-18 08:20:27'),
(55, 'KD', '77425286', 6, 34347, '2020-12-01', '2020-11-18 08:20:27'),
(56, 'AB', '57603565', 6, 136678, '2020-12-22', '2020-11-18 08:20:27'),
(57, 'KD', '02536074', 5, 184043, '2020-10-27', '2020-11-18 08:20:27'),
(58, 'FF', '69701691', 4, 62949, '2020-07-17', '2020-11-18 08:20:27'),
(59, 'AB', '94163847', 3, 57677, '2020-05-18', '2020-11-18 08:20:27'),
(60, 'GD', '01973731', 4, 164456, '2020-08-01', '2020-11-18 08:20:27'),
(61, 'KJ', '99767091', 3, 122300, '2020-05-12', '2020-11-18 08:20:27'),
(62, 'PG', '77231819', 1, 197550, '2020-02-08', '2020-11-18 08:20:27'),
(63, 'FF', '09528854', 2, 138098, '2020-03-30', '2020-11-18 08:20:27'),
(64, 'QM', '64928971', 6, 1457, '2020-12-09', '2020-11-18 08:20:27'),
(65, 'PG', '21649502', 1, 106690, '2020-01-21', '2020-11-18 08:20:27'),
(66, 'IS', '03787937', 4, 90825, '2020-07-13', '2020-11-18 08:20:27'),
(67, 'OE', '03631132', 5, 37858, '2020-09-15', '2020-11-18 08:20:27'),
(68, 'AB', '35546190', 1, 51713, '2020-02-18', '2020-11-18 08:20:27'),
(69, 'FF', '28405687', 3, 53130, '2020-06-27', '2020-11-18 08:20:27'),
(70, 'QM', '27849132', 6, 108116, '2020-11-06', '2020-11-18 08:20:27'),
(71, 'GD', '65258104', 6, 28855, '2020-12-20', '2020-11-18 08:20:27'),
(72, 'FF', '85413158', 5, 193251, '2020-10-30', '2020-11-18 08:20:27'),
(73, 'GD', '40148692', 1, 150273, '2020-01-11', '2020-11-18 08:20:27'),
(74, 'OE', '45388688', 5, 84006, '2020-10-12', '2020-11-18 08:20:27'),
(75, 'FF', '39394439', 3, 3715, '2020-06-01', '2020-11-18 08:20:27'),
(76, 'AB', '66261085', 2, 157942, '2020-03-18', '2020-11-18 08:20:27'),
(77, 'GD', '85597034', 6, 145677, '2020-11-03', '2020-11-18 08:20:27'),
(78, 'KD', '54014091', 4, 31206, '2020-07-17', '2020-11-18 08:20:27'),
(79, 'GD', '61078192', 3, 34875, '2020-05-30', '2020-11-18 08:20:27'),
(80, 'KD', '64791917', 4, 3809, '2020-07-07', '2020-11-18 08:20:27'),
(81, 'IS', '72488536', 3, 108407, '2020-05-20', '2020-11-18 08:20:27'),
(82, 'OE', '31270488', 5, 118667, '2020-09-22', '2020-11-18 08:20:27'),
(83, 'IS', '90725495', 3, 186409, '2020-06-09', '2020-11-18 08:20:27'),
(84, 'QM', '54526443', 4, 87443, '2020-08-21', '2020-11-18 08:20:27'),
(85, 'IS', '55384238', 4, 172406, '2020-08-02', '2020-11-18 08:20:27'),
(86, 'IS', '41909135', 5, 80551, '2020-09-29', '2020-11-18 08:20:27'),
(87, 'FF', '35888836', 5, 12491, '2020-09-28', '2020-11-18 08:20:27'),
(88, 'PG', '33719063', 1, 37673, '2020-02-21', '2020-11-18 08:20:27'),
(89, 'FF', '64779930', 3, 163463, '2020-05-21', '2020-11-18 08:20:27'),
(90, 'KJ', '23684537', 4, 32125, '2020-07-29', '2020-11-18 08:20:27'),
(91, 'OE', '83530760', 3, 52456, '2020-06-13', '2020-11-18 08:20:27'),
(92, 'KD', '81701492', 4, 150852, '2020-08-28', '2020-11-18 08:20:27'),
(93, 'KJ', '55433922', 5, 114633, '2020-10-01', '2020-11-18 08:20:27'),
(94, 'QM', '28072512', 3, 32614, '2020-06-26', '2020-11-18 08:20:27'),
(95, 'KJ', '49581824', 6, 120086, '2020-12-12', '2020-11-18 08:20:27'),
(96, 'GD', '11217865', 4, 187470, '2020-07-07', '2020-11-18 08:20:27'),
(97, 'KW', '20896167', 3, 32216, '2020-06-14', '2020-11-18 08:20:27'),
(98, 'QM', '88159171', 3, 36833, '2020-05-12', '2020-11-18 08:20:27'),
(99, 'KW', '69273446', 4, 11212, '2020-07-22', '2020-11-18 08:20:27'),
(100, 'KW', '21968064', 1, 54768, '2020-02-12', '2020-11-18 08:20:27'),
(101, 'FF', '23488190', 4, 37661, '2020-08-11', '2020-11-18 08:20:27'),
(102, 'PG', '36007515', 2, 979, '2020-03-06', '2020-11-18 08:20:27'),
(103, 'FF', '22647974', 3, 46020, '2020-05-31', '2020-11-18 08:20:28'),
(104, 'KD', '50735235', 5, 47997, '2020-09-01', '2020-11-18 08:20:28'),
(105, 'OE', '47208435', 2, 55511, '2020-03-15', '2020-11-18 08:20:28'),
(106, 'AB', '43130530', 2, 159579, '2020-04-22', '2020-11-18 08:20:28'),
(107, 'OE', '99436560', 4, 38357, '2020-08-31', '2020-11-18 08:20:28'),
(108, 'IS', '79171894', 1, 96239, '2020-01-23', '2020-11-18 08:20:28'),
(109, 'KD', '50068790', 5, 161246, '2020-09-07', '2020-11-18 08:20:28'),
(110, 'KW', '36425458', 1, 382, '2020-01-29', '2020-11-18 08:20:28'),
(111, 'GD', '95601420', 6, 81384, '2020-11-12', '2020-11-18 08:20:28'),
(112, 'KJ', '28526769', 3, 172507, '2020-06-23', '2020-11-18 08:20:28'),
(113, 'FF', '43590684', 3, 20876, '2020-06-14', '2020-11-18 08:20:28'),
(114, 'PG', '88604201', 3, 98517, '2020-06-16', '2020-11-18 08:20:28'),
(115, 'PG', '98315796', 6, 161957, '2020-11-19', '2020-11-18 08:20:28'),
(116, 'GD', '72560864', 1, 89672, '2020-01-15', '2020-11-18 08:20:28'),
(117, 'AB', '41213749', 4, 83927, '2020-08-03', '2020-11-18 08:20:28'),
(118, 'GD', '56395568', 2, 111437, '2020-04-04', '2020-11-18 08:20:28'),
(119, 'IS', '13710666', 2, 123261, '2020-04-12', '2020-11-18 08:20:28'),
(120, 'OE', '89278151', 5, 119672, '2020-09-02', '2020-11-18 08:20:28'),
(121, 'QM', '33753276', 5, 171890, '2020-09-11', '2020-11-18 08:20:28'),
(122, 'OE', '68670600', 2, 124544, '2020-04-22', '2020-11-18 08:20:28'),
(123, 'FF', '08214171', 4, 25539, '2020-08-29', '2020-11-18 08:20:28'),
(124, 'GD', '87796710', 4, 113676, '2020-08-18', '2020-11-18 08:20:28'),
(125, 'QM', '18535079', 5, 59473, '2020-10-01', '2020-11-18 08:20:28'),
(126, 'KJ', '09872879', 2, 177213, '2020-03-06', '2020-11-18 08:20:28'),
(127, 'FF', '63214923', 2, 84478, '2020-03-06', '2020-11-18 08:20:28'),
(128, 'KD', '64610555', 4, 43619, '2020-08-02', '2020-11-18 08:20:28'),
(129, 'KW', '23628983', 2, 171893, '2020-03-07', '2020-11-18 08:20:28'),
(130, 'KD', '94356310', 1, 134077, '2020-02-27', '2020-11-18 08:20:28'),
(131, 'KJ', '40507858', 3, 56880, '2020-06-09', '2020-11-18 08:20:28'),
(132, 'AB', '62441344', 3, 92300, '2020-05-29', '2020-11-18 08:20:28'),
(133, 'PG', '06191748', 6, 194080, '2020-12-15', '2020-11-18 08:20:28'),
(134, 'OE', '54737013', 3, 142822, '2020-06-24', '2020-11-18 08:20:28'),
(135, 'IS', '54916421', 1, 111169, '2020-01-14', '2020-11-18 08:20:28'),
(136, 'KD', '41064970', 3, 40840, '2020-05-08', '2020-11-18 08:20:28'),
(137, 'GD', '07166448', 1, 174490, '2020-02-14', '2020-11-18 08:20:28'),
(138, 'IS', '44284331', 3, 48862, '2020-05-19', '2020-11-18 08:20:28'),
(139, 'GD', '83218608', 6, 127370, '2020-11-15', '2020-11-18 08:20:28'),
(140, 'GD', '04648237', 1, 90401, '2020-01-03', '2020-11-18 08:20:28'),
(141, 'KD', '43864393', 3, 70050, '2020-06-21', '2020-11-18 08:20:28'),
(142, 'KJ', '31353599', 5, 170862, '2020-10-21', '2020-11-18 08:20:28'),
(143, 'AB', '55720169', 5, 88266, '2020-09-16', '2020-11-18 08:20:28'),
(144, 'KD', '00057161', 5, 166428, '2020-10-04', '2020-11-18 08:20:28'),
(145, 'GD', '05521526', 5, 147766, '2020-10-14', '2020-11-18 08:20:28'),
(146, 'PG', '74384318', 5, 192544, '2020-10-07', '2020-11-18 08:20:28'),
(147, 'KD', '33082411', 5, 2822, '2020-09-26', '2020-11-18 08:20:28'),
(148, 'PG', '19772745', 1, 81685, '2020-02-02', '2020-11-18 08:20:28'),
(149, 'KJ', '95909050', 2, 28227, '2020-03-11', '2020-11-18 08:20:28'),
(150, 'GD', '31043235', 1, 106883, '2020-02-06', '2020-11-18 08:20:28');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award_numbers`
--
ALTER TABLE `award_numbers`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award_numbers`
--
ALTER TABLE `award_numbers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
