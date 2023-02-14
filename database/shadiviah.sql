-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 14, 2023 at 03:36 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shadiviah`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `date` varchar(20) NOT NULL,
  `passcode` varchar(200) NOT NULL,
  `deletestatus` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `username`, `date`, `passcode`, `deletestatus`) VALUES
(1, 'Vipin', 'VipinRao', '2021-02-08', 'weswyutu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bless`
--

DROP TABLE IF EXISTS `bless`;
CREATE TABLE IF NOT EXISTS `bless` (
  `id` int NOT NULL AUTO_INCREMENT,
  `blesser_name` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `blessto` varchar(20) NOT NULL,
  `blesser_message` text NOT NULL,
  `bless_code` varchar(60) NOT NULL,
  `wedding_code` varchar(30) NOT NULL COMMENT 'abbusive 2 ,\r\ndelete by user 1,\r\nundelete 0.\r\n\r\n',
  `deletestatus` int NOT NULL,
  `pin` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bless`
--

INSERT INTO `bless` (`id`, `blesser_name`, `email`, `blessto`, `blesser_message`, `bless_code`, `wedding_code`, `deletestatus`, `pin`) VALUES
(1, 'Team Shadiviah  <i class=\"fas fa-check-circle\"></i>', 'shadiviah.in@gmail.com', 'both', '“Two special people, one amazing love! Dear friends, enjoy your love that grows with every single day and knows no ending. the most heart congratulations on your wedding day!”', 'BLESS', 'All', 0, 1),
(2, 'Vipin', 'sttarvipinrao@gmail.com', 'Both', 'Congrats\r\n', '#X10A39635510A10A1640FXT32563', 'WEDS_7TD', 0, 1),
(3, 'Vipin', 'sttarvipinrao@gmail.com', 'Both', 'Hii', '#R1N6112861N9K7174GKU11574', 'WEDS_7TD', 0, 0),
(4, 'muskan', 'muskkiiydvnsi@gmail.com', 'Both', 'you both are the perfect couple♥️\r\nthanks babhi ji for comming iur house...and broo also for completing her all wishes...\r\nlove u soooo much bhaiya and babhi ji♥️', '#I1D3120801D8T1784VAB74695', 'MOHWEDSSAP_1AQ', 0, 1),
(5, 'Tanuj yadav', 'tanujyadav2002@gmail.com', 'Gromm', 'Congratulation bhai ', '#L14W28871514W4T6001BED79700', 'MOHWEDSSAP_1AQ', 0, 1),
(6, 'Rupesh', 'raoravinder9350@gmail.com', 'Both', 'Congratulations bhai and our sweet bhabhi ji', '#U18P56227818P25J6491LZN93736', 'MOHWEDSSAP_1AQ', 0, 1),
(7, 'Ajay Kumar', 'ajaykumarindia79@gmail.com', 'Both', 'Congratulations dear', '#H13J61369413J16A8403UOZ23479', 'MOHWEDSSAP_1AQ', 0, 1),
(8, 'Vipin', 'sttarvipinrao@gmail.com', 'Both', 'Have a good start to your journey. ????', '#A11U43771311U26Q5144BTN29371', 'YOGWEDSDIV_2BY', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int NOT NULL AUTO_INCREMENT,
  `wedding_code` varchar(25) NOT NULL,
  `pagename` varchar(100) NOT NULL,
  `location_url` text NOT NULL,
  `deletestatus` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `wedding_code`, `pagename`, `location_url`, `deletestatus`) VALUES
(4, 'WEDS_7TD', 'PoiuyjhgwedsLihkugjyhtq_O722', 'https://maps.google.com/maps?q=28.2593115,76.6060693&hl=es;z=14&amp;output=embed', 0),
(5, 'MOHWEDSSAP_1AQ', 'MohitwedsSapna_G071', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d831.430394568623!2d76.67962832899697!3d28.207194028808903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d457e40000001%3A0xb2f36efdf5ea8712!2sItsmonuraobaby!5e0!3m2!1sen!2sin!4v1617084582492!5m2!1sen!2sin', 0),
(6, 'YOGWEDSDIV_2BY', 'DivyawedsYogesh_F618', 'https://maps.google.com/maps?q=28.9930823,77.0150735&hl=es;z=14&amp;output=embed', 0),
(7, 'RAHWEDSNEH_1NZ', 'RahulwedsNeha_Q622', 'leave_me_as_it_is', 0);

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

DROP TABLE IF EXISTS `getintouch`;
CREATE TABLE IF NOT EXISTS `getintouch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `deletestatus` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `getintouch`
--

INSERT INTO `getintouch` (`id`, `code`, `name`, `email`, `message`, `deletestatus`) VALUES
(1, 'BBLEFO__65579', 'Vipin', 'sttarvipinrao@gmail.com', 'is it working', 0),
(2, 'FFBFIN__29958', 'Monu', 'monusharma216588@email.com', 'I love Jaan ????????????????????????????????????????', 0),
(3, 'DVMSTZ__10939', 'Monu', 'monusharma216588@email.com', 'i love you????????????????????????????', 0),
(4, 'GCZPAA__79372', 'Pawan Rao', 'pawanraokharsaniya@gmail.com', '', 0),
(5, 'UNFWQO__55532', 'Rahul goyal', 'rahulgoyal1245@gmail.com', '', 0),
(6, 'YCBNMY__60201', 'Vipin', 'sttarvipinrao@gmail.com', 'is it working?\r\n', 0),
(7, 'EHIXLV__18209', 'Manoj', 'goluyadav122001@gmail.com', 'M', 0),
(8, 'SRHBWG__58814', 'Babita', 'by619735@gmail.com', 'Will i get married to my bf who is from other caste??\r\n', 0),
(9, 'IJVGZM__35899', 'Rakshak', '', '', 0),
(10, 'LTNURO__13740', 'Mandeep singh', 'mandeepsondh19@gmail.com', 'Hiii ', 0),
(11, 'SBHIZN__91024', 'Vipin', 'sttarvipinrao@gmail.com', 'sqwdqwdqw', 0);

-- --------------------------------------------------------

--
-- Table structure for table `insight`
--

DROP TABLE IF EXISTS `insight`;
CREATE TABLE IF NOT EXISTS `insight` (
  `id` int NOT NULL AUTO_INCREMENT,
  `indexvisit` int NOT NULL,
  `newvisit` int NOT NULL,
  `contactvisit` int NOT NULL,
  `aboutvisit` int NOT NULL,
  `helpvisit` int NOT NULL,
  `mediatorvisit` int NOT NULL,
  `themeonevisit` int NOT NULL,
  `themetwovisit` int NOT NULL,
  `themethreevisit` int NOT NULL,
  `themefourvisit` int NOT NULL,
  `themefivevisit` int NOT NULL,
  `date` int NOT NULL,
  `control` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `insight`
--

INSERT INTO `insight` (`id`, `indexvisit`, `newvisit`, `contactvisit`, `aboutvisit`, `helpvisit`, `mediatorvisit`, `themeonevisit`, `themetwovisit`, `themethreevisit`, `themefourvisit`, `themefivevisit`, `date`, `control`) VALUES
(1, 12, 12, 0, 0, 1, 1, 1, 1, 1, 0, 0, 26, 1),
(2, 15, 12, 1, 2, 0, 0, 0, 0, 0, 1, 0, 27, 2),
(3, 14, 13, 0, 0, 1, 1, 0, 1, 1, 0, 0, 28, 3),
(4, 15, 12, 1, 2, 0, 0, 1, 0, 0, 1, 0, 29, 4),
(5, 18, 15, 0, 1, 1, 1, 0, 1, 0, 0, 0, 30, 5),
(6, 12, 12, 1, 1, 0, 0, 1, 0, 0, 1, 0, 31, 6),
(7, 15, 15, 0, 1, 1, 1, 0, 1, 0, 0, 0, 1, 7),
(8, 15, 14, 2, 1, 0, 0, 1, 0, 0, 1, 0, 2, 8),
(9, 6, 7, 0, 1, 1, 1, 0, 1, 0, 0, 0, 3, 9),
(10, 6, 4, 1, 1, 0, 0, 1, 0, 1, 1, 0, 4, 10),
(11, 24, 20, 0, 1, 1, 1, 0, 0, 2, 0, 0, 5, 11),
(12, 11, 9, 2, 1, 0, 0, 2, 0, 0, 1, 0, 6, 12),
(13, 11, 12, 0, 1, 1, 1, 0, 1, 1, 0, 0, 7, 13),
(14, 8, 7, 1, 1, 0, 0, 1, 0, 2, 0, 0, 8, 14),
(15, 3, 4, 0, 1, 1, 1, 0, 1, 2, 0, 0, 9, 15),
(16, 15, 14, 2, 2, 0, 0, 1, 0, 2, 0, 0, 10, 16),
(17, 7, 7, 0, 2, 1, 1, 0, 1, 1, 0, 0, 11, 17),
(18, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 18),
(19, 47, 1, 0, 0, 0, 1, 1, 1, 3, 1, 0, 4, 19),
(20, 4, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 23, 20),
(21, 17, 14, 1, 2, 0, 0, 0, 0, 0, 1, 0, 25, 21);

-- --------------------------------------------------------

--
-- Table structure for table `mediators`
--

DROP TABLE IF EXISTS `mediators`;
CREATE TABLE IF NOT EXISTS `mediators` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `shopname` varchar(40) NOT NULL,
  `address` varchar(145) NOT NULL,
  `mobileone` varchar(15) NOT NULL,
  `mobiletwo` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL,
  `passcode` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_as_cs NOT NULL,
  `dateofregister` varchar(20) NOT NULL,
  `totalactionperform` int NOT NULL,
  `deletestatus` int NOT NULL,
  `registerby` varchar(25) NOT NULL,
  `pay_upto` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mediators`
--

INSERT INTO `mediators` (`id`, `name`, `username`, `shopname`, `address`, `mobileone`, `mobiletwo`, `email`, `image`, `passcode`, `dateofregister`, `totalactionperform`, `deletestatus`, `registerby`, `pay_upto`) VALUES
(1, 'SHADIVIAH OFFICIAL', 'shadiviah_official', 'Only E-Card provider', 'Rewari, Haryana (India) ', '8930395227', '7206865227', 'contact@shadiviah.in', 'nophoto.jpg', 'c3Ryb25ncGFzc3dvcmQ=', '2021-03-01', 4, 0, 'vipinrao', 0),
(5, 'manish', 'manish16_1465', 'manish designer & printers', 'near sai mandir, dharuhera chungi, rewari (hr)', '9255146600', '9416890470', 'manishkalra56@gmail.com', 'nophoto.jpg', 'OTI1NTE0NjYwMA==', '03/03/21', 0, 0, 'vipinrao', 0),
(6, 'karan sain', 'karansain15_2568', 'jj printing press', 'gujjarwada rewari, near bhagat ji jalebi wala', '8950403313', '9253025925', 'jjprinters001@gmail.com', 'nophoto.jpg', 'ODk1MDQwMzMxMw==', '03/03/21', 0, 0, 'vipinrao', 0),
(7, 'vipin', 'vipin26_7451', 'e-cards', 'rewari', '8930395227', '8930395227', 'sttarvipinrao@gmail.com', 'image (2).png', 'qjqpjg0qoe3lqwweqjqjav0qjgtu', '04/11/22', 1, 0, 'vipinrao', 0);

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

DROP TABLE IF EXISTS `target`;
CREATE TABLE IF NOT EXISTS `target` (
  `id` int NOT NULL AUTO_INCREMENT,
  `targetcolumn` int NOT NULL,
  `sp` varchar(20) NOT NULL,
  `totalnewvisitor` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`id`, `targetcolumn`, `sp`, `totalnewvisitor`) VALUES
(1, 21, '1bqp', 4853);

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

DROP TABLE IF EXISTS `users_info`;
CREATE TABLE IF NOT EXISTS `users_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `myuser_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `recovery_email` varchar(50) NOT NULL,
  `passcode` varchar(300) NOT NULL,
  `wedding_code` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `user_power` int NOT NULL,
  `deletestatus` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `myuser_name`, `email`, `recovery_email`, `passcode`, `wedding_code`, `mobile`, `user_power`, `deletestatus`) VALUES
(1, 'Vipin rao', 'sttarvipinrao@gmail.com', 'sttarvipinrao@gmail.com', 'VmlwaW5AMTIzNDU=', 'WEDS_7TD', '8930395227', 1, 0),
(2, 'Mohit', 'itsmonuraobaby@gmail.con', 'ermohityadav1997@gmail.com', 'ODgxODAzMzE3MEtk', 'MOHWEDSSAP_1AQ', '8818033170', 1, 0),
(3, 'Divya kumari ', 'divyayadav25122002@gmail.com', 'divyayadav25122002@gmail.com', 'RGlWeWEqOTU4OA==', 'YOGWEDSDIV_2BY', '9588310816', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

DROP TABLE IF EXISTS `wedding`;
CREATE TABLE IF NOT EXISTS `wedding` (
  `id` int NOT NULL AUTO_INCREMENT,
  `weddingof` varchar(10) NOT NULL,
  `boy` varchar(35) NOT NULL,
  `girl` varchar(35) NOT NULL,
  `boy_father` varchar(35) NOT NULL,
  `boy_mother` varchar(35) NOT NULL,
  `girl_father` varchar(35) NOT NULL,
  `girl_mother` varchar(35) NOT NULL,
  `boy_address` varchar(45) NOT NULL,
  `girl_address` varchar(45) NOT NULL,
  `lagan_date` varchar(25) NOT NULL,
  `barat_date` varchar(25) NOT NULL,
  `wedding_venue` varchar(80) NOT NULL COMMENT 'barat address\r\n',
  `program_address` varchar(80) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `wedding_code` varchar(25) NOT NULL,
  `registerby` varchar(25) NOT NULL,
  `public` int NOT NULL,
  `insight` int NOT NULL,
  `invitation_insight` int NOT NULL,
  `deletestatus` int NOT NULL,
  `register_date` varchar(20) NOT NULL,
  `register_time` varchar(20) NOT NULL,
  `pagename` varchar(100) NOT NULL,
  `user_power` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `weddingof`, `boy`, `girl`, `boy_father`, `boy_mother`, `girl_father`, `girl_mother`, `boy_address`, `girl_address`, `lagan_date`, `barat_date`, `wedding_venue`, `program_address`, `mobile`, `theme`, `wedding_code`, `registerby`, `public`, `insight`, `invitation_insight`, `deletestatus`, `register_date`, `register_time`, `pagename`, `user_power`) VALUES
(1, 'boy', 'Ronit yadav', 'Supriya Yadav', 'Mahinder Yadav', 'Sunita Kumari', 'Praveen Kumar', 'Kavita yadav', 'Model Town, New Delhi', 'Mayur vihar, New Delhi', '2023-03-22', '2023-03-24', 'Saraswati Garden, Mayur Vihar, New Delhi', 'Home - Model Town, New Delhi', '8930395227', '3-1', 'WEDS_7TD', 'shadiviah_official', 1, 310, 40, 0, '01/03/21', '11:36', 'PoiuyjhgwedsLihkugjyhtq_O722', 0),
(2, 'girl', 'rohit yadav', 'neetu yadav', 'praveen kumar', 'sunita devi', 'mohit', 'meena', 'Rewari', 'Rewari', '2021-03-27', '2021-03-29', 'Rewari', 'Rewari', '8930395227', '2-1', 'ROHWEDSNEE_9CT', 'shadiviah_official', 1, 0, 0, 1, '03/03/21', '03:23', 'NeetuwedsRohit_A722', 0),
(3, 'boy', 'MOHIT YADAV', 'SAPNA YADAV', 'devender singh', 'sunita', 'ashok kumar', 'santosh', 'Hansaka, Rewari  (Hr)', 'Vill sundrah , mohindergarh', '2021-04-24', '2021-04-26', 'Sundrah , Mohindergarh', 'Hansaka, Rewari (Hr)', '8818033170', '1-1', 'MOHWEDSSAP_1AQ', 'shadiviah_official', 1, 243, 5, 0, '30/03/21', '10:32', 'MohitwedsSapna_G071', 0),
(4, 'girl', 'yogesh yadav', 'divya kumari', 'rakesh yadav', 'sunita', 'ajit singh', 'sunita', 'Riwasa, Mohindergarh', 'Maseet, Rewari', '2021-11-26', '2021-11-28', 'Maseet, Rewari', 'Riwasa, Mohindergarh', '9588310816', '4-1', 'YOGWEDSDIV_2BY', 'shadiviah_official', 1, 82, 1, 0, '14/11/21', '01:44', 'DivyawedsYogesh_F618', 0),
(5, 'boy', 'rahul sharma', 'neha sharma', 'kishor sharma', 'seema devi', 'kailash sharma', 'sarla sharma', 'Mumbai, Maharastra', 'Ambala , Haryana', '2022-12-01', '2022-12-03', 'Ambala , Haryana', 'Mumbai, Maharastra', '8930395226', '3-1', 'RAHWEDSNEH_1NZ', 'vipin26_7451', 1, 1, 0, 0, '04/11/22', '11:15', 'RahulwedsNeha_Q622', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wedding_images`
--

DROP TABLE IF EXISTS `wedding_images`;
CREATE TABLE IF NOT EXISTS `wedding_images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  `caption` varchar(45) NOT NULL,
  `feature` int NOT NULL,
  `weddingcode` varchar(25) NOT NULL,
  `register_date` varchar(25) NOT NULL,
  `register_time` varchar(25) NOT NULL,
  `deletestatus` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wedding_images`
--

INSERT INTO `wedding_images` (`id`, `image`, `caption`, `feature`, `weddingcode`, `register_date`, `register_time`, `deletestatus`) VALUES
(1, 'themeimage6.jpg', 'couples', 1, 'WEDS_7TD', '01/03/21', '11:41', 1),
(2, 'Family_image_Mediator_uploaded_02_03_21_12_19_10_34234700 1614624550.jpg', 'Family member photo one', 0, 'WEDS_7TD', '02/03/21', '12:19', 1),
(3, 'Couples_image_Mediator_uploaded_02_03_21_12_19_37_67525600 1614624577.jpg', 'couples photo second', 1, 'WEDS_7TD', '02/03/21', '12:19', 1),
(4, 'Couples_image_self_uploaded_02_03_21_11_48_51_70226100 1614665931.jpg', 'newphoto', 1, 'WEDS_7TD', '02/03/21', '11:48', 1),
(5, 'Family_image_self_uploaded_02_03_21_11_58_38_25830900 1614666518.jpg', 'New Photo of family', 0, 'WEDS_7TD', '02/03/21', '11:58', 0),
(6, 'Couples_image_self_uploaded_02_03_21_12_47_32_20995500 1614669452.jpg', '????????', 1, 'WEDS_7TD', '02/03/21', '12:47', 0),
(7, 'Family_image_self_uploaded_02_03_21_12_50_10_65685000 1614669610.jpg', '????????', 0, 'WEDS_7TD', '02/03/21', '12:50', 1),
(8, 'Couples_image_self_uploaded_02_03_21_09_05_02_11769200 1614699302.png', 'kwejgufaw', 1, 'WEDS_7TD', '02/03/21', '09:05', 1),
(9, 'Couples_image_self_uploaded_02_03_21_09_28_12_95776200 1614700692.jpg', 'coples', 1, 'WEDS_7TD', '02/03/21', '09:28', 1),
(10, 'Couples_image_self_uploaded_03_03_21_11_51_58_69104900 1614752518.jpg', 'iurywo', 1, 'WEDS_7TD', '03/03/21', '11:51', 1),
(11, 'Couples_image_self_uploaded_04_03_21_12_31_41_70290400 1614798101.jpg', '. ', 1, 'WEDS_7TD', '04/03/21', '12:31', 1),
(12, 'Couples_image_self_uploaded_04_03_21_12_34_57_46414300 1614798297.jpeg', '.. ', 1, 'WEDS_7TD', '04/03/21', '12:34', 0),
(13, 'Couples_image_self_uploaded_04_03_21_12_35_23_64917000 1614798323.jpeg', '.. ', 1, 'WEDS_7TD', '04/03/21', '12:35', 0),
(14, 'Family_image_self_uploaded_30_03_21_11_51_58_30055300 1617085318.jpg', 'Second Sample family member photo', 0, 'WEDS_7TD', '30/03/21', '11:51', 0),
(15, 'Couples_image_self_uploaded_30_03_21_12_51_34_98130500 1617088894.jpg', 'mohit yadav', 1, 'MOHWEDSSAP_1AQ', '30/03/21', '12:51', 0),
(16, 'Couples_image_self_uploaded_14_11_21_02_22_10_81692500 1636879930.jpg', 'Yogesh', 1, 'YOGWEDSDIV_2BY', '14/11/21', '02:22', 0),
(17, 'Couples_image_self_uploaded_14_11_21_02_31_56_18968000 1636880516.jpg', '...', 1, 'YOGWEDSDIV_2BY', '14/11/21', '02:31', 0),
(18, 'Couples_image_self_uploaded_14_11_21_02_39_06_52787100 1636880946.jpeg', 'divya', 1, 'YOGWEDSDIV_2BY', '14/11/21', '02:39', 0),
(19, 'Couples_image_self_uploaded_14_11_21_02_39_24_14175400 1636880964.jpeg', 'divya', 1, 'YOGWEDSDIV_2BY', '14/11/21', '02:39', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
