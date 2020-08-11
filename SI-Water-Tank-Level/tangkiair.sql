-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 03:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tangkiair`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kontrol`
--

CREATE TABLE `tabel_kontrol` (
  `id` int(11) NOT NULL,
  `CH_1` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kontrol`
--

INSERT INTO `tabel_kontrol` (`id`, `CH_1`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_monitoring`
--

CREATE TABLE `tabel_monitoring` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nilai` varchar(10) NOT NULL,
  `keterangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_monitoring`
--

INSERT INTO `tabel_monitoring` (`id`, `waktu`, `nilai`, `keterangan`) VALUES
(1, '2020-08-06 02:14:03', '', 'Aman'),
(2, '2020-08-06 02:14:08', '25', 'Aman'),
(3, '2020-08-07 01:56:03', '120', 'Tidak Aman'),
(4, '2020-08-07 01:56:21', '20', 'Aman'),
(5, '2020-08-07 02:11:47', '20', 'Aman'),
(6, '2020-08-07 02:14:47', '20', 'Aman'),
(7, '2020-08-07 02:16:18', '20', 'Aman'),
(8, '2020-08-07 03:14:42', '188', 'Tidak Aman'),
(9, '2020-08-07 03:14:45', '166', 'Tidak Aman'),
(10, '2020-08-07 03:14:48', '166', 'Tidak Aman'),
(11, '2020-08-07 03:14:52', '169', 'Tidak Aman'),
(12, '2020-08-07 03:14:55', '168', 'Tidak Aman'),
(13, '2020-08-07 03:14:58', '165', 'Tidak Aman'),
(14, '2020-08-07 03:15:01', '166', 'Tidak Aman'),
(15, '2020-08-07 03:15:04', '168', 'Tidak Aman'),
(16, '2020-08-07 03:15:07', '165', 'Tidak Aman'),
(17, '2020-08-07 03:15:10', '166', 'Tidak Aman'),
(18, '2020-08-07 03:15:14', '1', 'Aman'),
(19, '2020-08-07 03:15:17', '168', 'Tidak Aman'),
(20, '2020-08-07 03:15:20', '165', 'Tidak Aman'),
(21, '2020-08-07 03:15:23', '167', 'Tidak Aman'),
(22, '2020-08-07 03:15:26', '166', 'Tidak Aman'),
(23, '2020-08-07 03:15:29', '168', 'Tidak Aman'),
(24, '2020-08-07 03:15:32', '14', 'Aman'),
(25, '2020-08-07 03:15:36', '177', 'Tidak Aman'),
(26, '2020-08-07 03:15:39', '177', 'Tidak Aman'),
(27, '2020-08-07 03:15:42', '165', 'Tidak Aman'),
(28, '2020-08-07 03:15:45', '180', 'Tidak Aman'),
(29, '2020-08-07 03:15:48', '178', 'Tidak Aman'),
(30, '2020-08-07 03:15:52', '19', 'Aman'),
(31, '2020-08-07 03:15:55', '167', 'Tidak Aman'),
(32, '2020-08-07 03:15:58', '167', 'Tidak Aman'),
(33, '2020-08-07 03:16:01', '1', 'Aman'),
(34, '2020-08-07 03:16:04', '176', 'Tidak Aman'),
(35, '2020-08-07 03:16:07', '1', 'Aman'),
(36, '2020-08-07 03:16:10', '183', 'Tidak Aman'),
(37, '2020-08-07 03:16:14', '167', 'Tidak Aman'),
(38, '2020-08-07 03:16:17', '168', 'Tidak Aman'),
(39, '2020-08-07 03:16:20', '177', 'Tidak Aman'),
(40, '2020-08-07 03:16:23', '174', 'Tidak Aman'),
(41, '2020-08-07 03:16:26', '168', 'Tidak Aman'),
(42, '2020-08-07 03:16:29', '180', 'Tidak Aman'),
(43, '2020-08-07 03:16:32', '175', 'Tidak Aman'),
(44, '2020-08-07 03:16:35', '166', 'Tidak Aman'),
(45, '2020-08-07 03:16:38', '175', 'Tidak Aman'),
(46, '2020-08-07 03:16:42', '194', 'Tidak Aman'),
(47, '2020-08-07 03:16:45', '168', 'Tidak Aman'),
(48, '2020-08-07 03:16:48', '178', 'Tidak Aman'),
(49, '2020-08-07 03:16:51', '191', 'Tidak Aman'),
(50, '2020-08-07 03:16:54', '167', 'Tidak Aman'),
(51, '2020-08-07 03:16:57', '167', 'Tidak Aman'),
(52, '2020-08-07 03:17:00', '186', 'Tidak Aman'),
(53, '2020-08-07 03:17:04', '168', 'Tidak Aman'),
(54, '2020-08-07 03:17:07', '168', 'Tidak Aman'),
(55, '2020-08-07 03:17:10', '171', 'Tidak Aman'),
(56, '2020-08-07 03:17:13', '168', 'Tidak Aman'),
(57, '2020-08-07 03:17:16', '167', 'Tidak Aman'),
(58, '2020-08-07 03:17:19', '167', 'Tidak Aman'),
(59, '2020-08-07 03:17:22', '167', 'Tidak Aman'),
(60, '2020-08-07 03:17:25', '168', 'Tidak Aman'),
(61, '2020-08-07 03:17:28', '168', 'Tidak Aman'),
(62, '2020-08-07 03:17:31', '167', 'Tidak Aman'),
(63, '2020-08-07 03:17:34', '164', 'Tidak Aman'),
(64, '2020-08-07 03:17:38', '169', 'Tidak Aman'),
(65, '2020-08-07 03:17:41', '166', 'Tidak Aman'),
(66, '2020-08-07 03:17:44', '166', 'Tidak Aman'),
(67, '2020-08-07 03:17:47', '179', 'Tidak Aman'),
(68, '2020-08-07 03:17:50', '169', 'Tidak Aman'),
(69, '2020-08-07 03:17:53', '168', 'Tidak Aman'),
(70, '2020-08-07 03:17:56', '166', 'Tidak Aman'),
(71, '2020-08-07 03:17:59', '165', 'Tidak Aman'),
(72, '2020-08-07 03:18:02', '176', 'Tidak Aman'),
(73, '2020-08-07 03:18:06', '167', 'Tidak Aman'),
(74, '2020-08-07 03:18:09', '167', 'Tidak Aman'),
(75, '2020-08-07 03:18:12', '174', 'Tidak Aman'),
(76, '2020-08-07 03:18:15', '188', 'Tidak Aman'),
(77, '2020-08-07 03:18:18', '173', 'Tidak Aman'),
(78, '2020-08-07 03:18:21', '183', 'Tidak Aman'),
(79, '2020-08-07 03:18:24', '167', 'Tidak Aman'),
(80, '2020-08-07 03:18:27', '168', 'Tidak Aman'),
(81, '2020-08-07 03:18:30', '165', 'Tidak Aman'),
(82, '2020-08-07 03:18:33', '169', 'Tidak Aman'),
(83, '2020-08-07 03:18:36', '165', 'Tidak Aman'),
(84, '2020-08-07 03:18:40', '167', 'Tidak Aman'),
(85, '2020-08-07 03:18:43', '168', 'Tidak Aman'),
(86, '2020-08-07 03:18:46', '164', 'Tidak Aman'),
(87, '2020-08-07 03:18:49', '172', 'Tidak Aman'),
(88, '2020-08-07 03:18:52', '168', 'Tidak Aman'),
(89, '2020-08-07 03:18:55', '164', 'Tidak Aman'),
(90, '2020-08-07 03:18:58', '166', 'Tidak Aman'),
(91, '2020-08-07 03:19:01', '165', 'Tidak Aman'),
(92, '2020-08-07 03:19:04', '167', 'Tidak Aman'),
(93, '2020-08-07 03:19:07', '166', 'Tidak Aman'),
(94, '2020-08-07 03:19:11', '168', 'Tidak Aman'),
(95, '2020-08-07 03:19:14', '169', 'Tidak Aman'),
(96, '2020-08-07 03:19:17', '167', 'Tidak Aman'),
(97, '2020-08-07 03:19:20', '168', 'Tidak Aman'),
(98, '2020-08-07 03:19:23', '166', 'Tidak Aman'),
(99, '2020-08-07 03:19:26', '177', 'Tidak Aman'),
(100, '2020-08-07 03:19:29', '164', 'Tidak Aman'),
(101, '2020-08-07 03:19:32', '167', 'Tidak Aman'),
(102, '2020-08-07 03:19:35', '167', 'Tidak Aman'),
(103, '2020-08-07 03:19:39', '166', 'Tidak Aman'),
(104, '2020-08-07 03:19:42', '168', 'Tidak Aman'),
(105, '2020-08-07 03:19:45', '165', 'Tidak Aman'),
(106, '2020-08-07 03:19:48', '167', 'Tidak Aman'),
(107, '2020-08-07 03:19:51', '165', 'Tidak Aman'),
(108, '2020-08-07 03:19:54', '166', 'Tidak Aman'),
(109, '2020-08-07 03:19:57', '167', 'Tidak Aman'),
(110, '2020-08-07 03:20:00', '165', 'Tidak Aman'),
(111, '2020-08-07 03:20:03', '167', 'Tidak Aman'),
(112, '2020-08-07 03:20:06', '168', 'Tidak Aman'),
(113, '2020-08-07 03:20:10', '177', 'Tidak Aman'),
(114, '2020-08-07 03:20:13', '169', 'Tidak Aman'),
(115, '2020-08-07 03:20:16', '168', 'Tidak Aman'),
(116, '2020-08-07 03:20:19', '167', 'Tidak Aman'),
(117, '2020-08-07 03:20:22', '165', 'Tidak Aman'),
(118, '2020-08-07 03:20:25', '167', 'Tidak Aman'),
(119, '2020-08-07 03:20:28', '179', 'Tidak Aman'),
(120, '2020-08-07 03:20:31', '175', 'Tidak Aman'),
(121, '2020-08-07 03:20:34', '180', 'Tidak Aman'),
(122, '2020-08-07 03:20:38', '181', 'Tidak Aman'),
(123, '2020-08-07 03:20:41', '193', 'Tidak Aman'),
(124, '2020-08-07 03:20:44', '181', 'Tidak Aman'),
(125, '2020-08-07 03:20:47', '169', 'Tidak Aman'),
(126, '2020-08-07 03:20:50', '165', 'Tidak Aman'),
(127, '2020-08-07 03:20:53', '167', 'Tidak Aman'),
(128, '2020-08-07 03:20:56', '36', 'Aman'),
(129, '2020-08-07 03:20:59', '179', 'Tidak Aman'),
(130, '2020-08-07 03:21:02', '168', 'Tidak Aman'),
(131, '2020-08-07 03:21:06', '167', 'Tidak Aman'),
(132, '2020-08-07 03:21:09', '168', 'Tidak Aman'),
(133, '2020-08-07 03:21:12', '168', 'Tidak Aman'),
(134, '2020-08-07 03:21:15', '167', 'Tidak Aman'),
(135, '2020-08-07 03:21:18', '165', 'Tidak Aman'),
(136, '2020-08-07 03:21:21', '164', 'Tidak Aman'),
(137, '2020-08-07 03:21:24', '168', 'Tidak Aman'),
(138, '2020-08-07 03:21:27', '172', 'Tidak Aman'),
(139, '2020-08-07 03:21:30', '169', 'Tidak Aman'),
(140, '2020-08-07 03:21:34', '177', 'Tidak Aman'),
(141, '2020-08-07 03:21:37', '168', 'Tidak Aman'),
(142, '2020-08-07 03:21:40', '168', 'Tidak Aman'),
(143, '2020-08-07 03:21:43', '165', 'Tidak Aman'),
(144, '2020-08-07 03:21:46', '34', 'Aman'),
(145, '2020-08-07 03:21:49', '167', 'Tidak Aman'),
(146, '2020-08-07 03:21:52', '166', 'Tidak Aman'),
(147, '2020-08-07 03:21:55', '165', 'Tidak Aman'),
(148, '2020-08-07 03:21:58', '165', 'Tidak Aman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_kontrol`
--
ALTER TABLE `tabel_kontrol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_monitoring`
--
ALTER TABLE `tabel_monitoring`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_kontrol`
--
ALTER TABLE `tabel_kontrol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_monitoring`
--
ALTER TABLE `tabel_monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
