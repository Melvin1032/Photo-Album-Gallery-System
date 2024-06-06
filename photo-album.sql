-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 07:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photo-album`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `albumid` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `adesc` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`albumid`, `name`, `adesc`, `image`, `date`, `status`) VALUES
(1, 'Cars', 'My Cars Album', '13019lexus_lc_500_4k-HD.jpg', '2016-04-06 04:40:24', 'delete'),
(2, 'Sunset PIC', 'My Sunset Album ', '21038british_virgin_islands_sunset-wide.jpg', '2016-04-06 04:52:04', 'delete'),
(3, '3d wallpaers', 'My 3d wallpaers', '22862solid_abstract_colors-HD.jpg', '2016-04-06 04:54:51', 'delete'),
(4, 'Heros', 'Mysuper heros', '4710iron_man_4k-HD.jpg', '2016-04-06 10:27:58', 'delete'),
(5, 'Ladscape', 'My extrem ', '6567construction-40.jpg', '2016-04-06 10:28:52', 'delete'),
(6, 'Melvin', 'sdasdasdasdbhjseghjyeqrwhiueqrwhioudeqwbjkn;adsBJKLFSdbjkldfsjkln;dfsajklnadfsbjkladfsjkldfsd', '566672373328707081_1372795553476831_6329126665965624752_n.jpg', '2024-06-06 16:19:47', 'delete'),
(7, 'Melvin', 'Melvin', '1610303152328707081_1372795553476831_6329126665965624752_n.jpg', '2024-06-06 18:04:45', 'delete');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gid` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  `gname` varchar(1000) NOT NULL,
  `gimages` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gid`, `aid`, `gname`, `gimages`, `date`, `status`) VALUES
(1, 1, 'Cars', '0139052016_mclaren_570s_gt4-wide.jpg', '2016-04-06 04:41:00', 'process'),
(2, 1, 'Cars', '1324382016_rolls_royce_ghost_eternal_love-wide.jpg', '2016-04-06 04:41:00', 'process'),
(3, 1, 'Cars', '260712016_rosso_mars_novara_edizione_lamborghini_huracan-wide.jpg', '2016-04-06 04:41:00', 'process'),
(4, 1, 'Cars', '32852aston_martin_rapide.jpg', '2016-04-06 04:41:00', 'process'),
(5, 1, 'Cars', '426253bell_ross_design_aerogt_concept-wide.jpg', '2016-04-06 04:41:00', 'process'),
(6, 1, 'Cars', '520546mercedes_benz_glc_coupe_2017-HD.jpg', '2016-04-06 04:41:00', 'process'),
(7, 2, 'Sunset', '023803british_virgin_islands_sunset-wide.jpg', '2016-04-06 04:52:26', 'process'),
(8, 2, 'Sunset', '116664rocky_coastline_sunset-wide.jpg', '2016-04-06 04:52:26', 'process'),
(9, 2, 'Sunset', '214193sunrise_5k-wide.jpg', '2016-04-06 04:52:26', 'process'),
(10, 2, 'Sunset', '314678sunset_beach_mood-wide.jpg', '2016-04-06 04:52:26', 'process'),
(11, 3, '3d wallpaers', '08078aqua_abstract-HD.jpg', '2016-04-06 04:55:11', 'process'),
(12, 3, '3d wallpaers', '125519colorful_polygons-wide.jpg', '2016-04-06 04:55:11', 'process'),
(13, 3, '3d wallpaers', '229628glow_rays_abstract-HD.jpg', '2016-04-06 04:55:11', 'process'),
(14, 3, '3d wallpaers', '316197htc_one_m8_background-wide.jpg', '2016-04-06 04:55:11', 'process'),
(15, 3, '3d wallpaers', '49882the_great_race-wide.jpg', '2016-04-06 04:55:11', 'delete'),
(16, 6, 'Melvin', '025885638356396025_209670475367330_4668177569604699461_n.jpg', '2024-06-06 16:20:12', 'process'),
(17, 7, 'Melvin', '01549027219356396025_209670475367330_4668177569604699461_n.jpg', '2024-06-06 18:06:14', 'process'),
(18, 7, 'Melvin', '0499245457mnrv.jpg', '2024-06-06 18:52:10', 'delete'),
(19, 7, 'Melvin', '11051866813412122728_1087266922696249_1989827195504473999_n.jpg', '2024-06-06 18:52:10', 'delete');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `lid` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`lid`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`albumid`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`lid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `albumid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `lid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
