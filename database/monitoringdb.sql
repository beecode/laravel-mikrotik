-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2014 at 01:27 PM
-- Server version: 5.5.32-0ubuntu0.12.04.1
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monitoringdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mikrotik`
--

CREATE TABLE IF NOT EXISTS `mikrotik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `connect` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mikrotik`
--

INSERT INTO `mikrotik` (`id`, `connect`, `username`, `password`) VALUES
(1, '172.18.1.1', 'admin', 'admin'),
(2, '192.168.1.1', 'sadam', 'admin'),
(4, '192.168.1.1', 'sadam', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `rools`
--

CREATE TABLE IF NOT EXISTS `rools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chain` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  `protocol` varchar(20) NOT NULL,
  `addresslist` varchar(20) NOT NULL,
  `addresslisttimeout` varchar(20) NOT NULL,
  `disable` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `rools`
--

INSERT INTO `rools` (`id`, `chain`, `action`, `protocol`, `addresslist`, `addresslisttimeout`, `disable`, `comment`) VALUES
(8, 'inputtttttt', 'accept', 'udp', 'false', 'false', 'false', 'alhamdulillahhhh'),
(9, 'ip address', 'accept', 'da', 'sd', 'ds', 'disable', 'ljlk'),
(11, 'chain', 'action', 'da', 'sd', 'ds', 'disable', 'ljlk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'admin', 'admin@gmail.com', 'eyJpdiI6IlRrWDRLTnIwT00wT3Nnd0ZvdmRyclwvaEphTGJwYkpIUGFPU29DK1NvSHcwPSIsInZhbHVlIjoiTjJYV2lSS0lBQm42UHZDTENoRExkUjRWdzlyN1hJR1pTcUJxc3I1bldKTT0iLCJtYWMiOiJhZTdhZmY5MzVkY2ZiNDU1YzU0MzMwMDhmZTFjZjI3MzEzNWRkYTY4MWJmOTI1ZmIwMTA1ZDI0MWQwYWFjMjM4In0=', '2j1HILn6EKlbdL6Rgl1XU3kM1HySMOEDXd5K6sVZfn9TAR5iEufIqPfWCZ2Y', '0000-00-00 00:00:00', '2014-07-08 19:00:40'),
(14, 'sadamhusen', 'admin@gmail.com', 'eyJpdiI6Ijh1cm9rT2hPc2owdmV6S25LZHZ2Z3FUUk1vRjkzZDVXeFdrdklEb2FoODQ9IiwidmFsdWUiOiJ4K3BkWE5kZnFJNWZCU3ZIMTVFOUNUQlB0VmF6eWlNNTJnVlhWeWhSWENVPSIsIm1hYyI6IjI1NmViNmJjZDAwNGRkYzgwNTA5N2FkYzZlNjYyOTdjNGY1Nzc1OTU2ZDc4M2JlNzQ2YjkzNDc4MjgzMTBkYjYifQ==', NULL, '2014-07-07 20:01:19', '2014-07-09 23:29:18'),
(16, 'sadam', 'admin@gmail.com', 'eyJpdiI6InFIK0ZVdTk4OHdPUnZhcGVvdHNFdmRQV1ZjMTI3dzNpaTBWZDdTOXd0Nnc9IiwidmFsdWUiOiJJeFllclUwbjkrSGxRRm9vT0NPUm52dFlUK2V1RzNZT3NYZ040amVsWkU4PSIsIm1hYyI6IjIyOTI3ZTA0N2RjZTUxYjRjZWE2OWE0NjY4NWIxNDQxOGE3ZGI3YWRiZmQwMWEwODc0YWEyOTVkMDk3Y2QwMjAifQ==', NULL, '2014-07-08 17:56:39', '2014-07-08 17:56:39'),
(17, 'sadamibnusalam', 'sadamcueg@gmail.com', 'eyJpdiI6Imlnb2RHZjRlWTk1VDcyb29rclZNTmhjeDRjOTN1QWJhSTBYaWlzbVpnVTg9IiwidmFsdWUiOiJcLzJuN2pPSHZtNGpyR25xcDA1aU9ocmpyVHFqWUkzcDNpRDVZKzRVUE8zYz0iLCJtYWMiOiJlNmMwZDA1OGFjZmE3YmU3Zjk0ZDZmNWFhMzBhZmY0MmI1MGY3MjI3NGY1OGFmNTY4MTI4M2VmN2NmOTc5OTdiIn0=', NULL, '2014-07-09 21:00:50', '2014-07-09 21:00:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
