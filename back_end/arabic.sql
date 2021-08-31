-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 10:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arabic`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `exam_id`, `mark`, `user_id`, `date`, `lesson_id`, `answer`) VALUES
(6, 33, 1, 1, '2021-01-31', NULL, ''),
(7, 34, 3, 1, '2021-01-31', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `benfits`
--

CREATE TABLE `benfits` (
  `benfit_id` int(11) NOT NULL,
  `description` varchar(225) NOT NULL,
  `benfit_image` varchar(225) NOT NULL,
  `benfit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `benfits`
--

INSERT INTO `benfits` (`benfit_id`, `description`, `benfit_image`, `benfit_date`) VALUES
(5, 'gbfvdcsxaz', '3336_14048.jpg', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `ordering` int(11) DEFAULT 0,
  `parent` int(11) NOT NULL,
  `Visibility` tinyint(4) NOT NULL,
  `Allow_Comment` tinyint(4) NOT NULL,
  `Allow_Ads` tinyint(4) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `ordering`, `parent`, `Visibility`, `Allow_Comment`, `Allow_Ads`, `image`) VALUES
(1, 'المجموعة الاولى-الصف الاول الثانوى', 'المجموعة الاولى-الصف الاول الثانوى-السبت والثلاثاء', 1, 0, 1, 0, 0, '8194_'),
(2, 'المجموعة الثانية-الصف الاول الثانوى', 'المجموعة الثانية-الصف الاول الثانوى-السبت والثلاثاء', 2, 0, 1, 0, 0, '24368_'),
(3, 'المجموعة الثالثة-الصف الاول الثانوى', 'المجموعة الثالثة-الصف الاول الثانوى-الاحد والاربعاء', 3, 0, 1, 0, 0, '39910_'),
(4, 'المجموعة الرابعة-الصف الاول الثانوى', 'المجموعة الرابعة-الصف الاول الثانوى-الاحد والاربعاء', 4, 0, 1, 0, 0, '65659_'),
(5, 'المجموعة الخامسة-الصف الاول الثانوى', 'المجموعة الخامسة-الصف الاول الثانوى-الاتنين و الخميس', 5, 0, 1, 0, 0, '63791_'),
(6, 'المجموعة السادسة-الصف الاول الثانوى', 'المجموعة السادسة-الصف الاول الثانوى-الاتنين و الخميس', 6, 0, 1, 0, 0, '54790_'),
(7, 'المجموعة الاولى-الصف الثانى الثانوى', 'المجموعة الاولى-الصف الثانى الثانوى-السبت والثلاثاء', 1, 0, 1, 0, 0, '8194_'),
(8, 'المجموعة الثانية-الصف الثانى الثانوى', 'المجموعة الثانية-الصف الثانى الثانوى-السبت والثلاثاء', 2, 0, 1, 0, 0, '24368_'),
(9, 'المجموعة الثالثة-الصف الثانى الثانوى', 'المجموعة الثالثة-الصف الثانى الثانوى-الاحد والاربعاء', 3, 0, 1, 0, 0, '39910_'),
(10, 'المجموعة الرابعة-الصف الثانى الثانوى', 'المجموعة الرابعة-الصف الثانى الثانوى-الاحد والاربعاء', 4, 0, 1, 0, 0, '65659_'),
(11, 'المجموعة الخامسة-الصف الثانى الثانوى', 'المجموعة الخامسة-الصف الثانى الثانوى-الاتنين و الخميس', 5, 0, 1, 0, 0, '63791_'),
(12, 'المجموعة السادسة-الصف الثانى الثانوى', 'المجموعة السادسة-الصف الثانى الثانوى-الاتنين و الخميس', 6, 0, 1, 0, 0, '54790_'),
(13, 'المجموعة الاولى-الصف الثالث الثانوى', 'المجموعة الاولى-الصف الثالث الثانوى-السبت والثلاثاء', 1, 0, 1, 0, 0, '8194_'),
(14, 'المجموعة الثانية-الصف الثالث الثانوى', 'المجموعة الثانية-الصف الثالث الثانوى-السبت والثلاثاء', 2, 0, 1, 0, 0, '24368_'),
(15, 'المجموعة الثالثة-الصف الثالث الثانوى', 'المجموعة الثالثة-الصف الثالث الثانوى-الاحد والاربعاء', 3, 0, 1, 0, 0, '39910_'),
(16, 'المجموعة الرابعة-الصف الثالث الثانوى', 'المجموعة الرابعة-الصف الثالث الثانوى-الاحد والاربعاء', 4, 0, 1, 0, 0, '65659_'),
(17, 'المجموعة الخامسة-الصف الثالث الثانوى', 'المجموعة الخامسة-الصف الثالث الثانوى-الاتنين و الخميس', 5, 0, 1, 0, 0, '63791_'),
(18, 'المجموعة السادسة-الصف الثالث الثانوى', 'المجموعة السادسة-الصف الثالث الثانوى-الاتنين و الخميس', 6, 0, 1, 0, 0, '54790_'),
(34, 'النحو ', 'تعريف بنيه الكلمة وموقعها الاعرابى ', 1, 1, 1, 0, 0, '28984_123.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_data` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `member_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `message_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `comment_data`, `status`, `member_id`, `post_id`, `lesson_id`, `message_id`) VALUES
(21, 'رائع', '2021-05-04', 0, 242, 70, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `events_id` int(11) NOT NULL,
  `events_name` varchar(250) NOT NULL,
  `events_description` varchar(500) NOT NULL,
  `events_time` time NOT NULL,
  `events_date` date NOT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `events_name`, `events_description`, `events_time`, `events_date`, `cat_id`) VALUES
(4, 'trhgrfe', 'tgerfedw', '11:07:00', '2021-01-20', 6),
(6, 'التجارب العملية', 'jghfdgbfvdzcsxaz', '16:23:00', '2021-01-31', 6),
(7, 'yujfhtdgrfsdcsxza', ' iulhjgfcbzcxcxvbhjkl;., v iulhjgfcbzcxcxvbhjkl;., iulhjgfcbzcxcxvbhjkl;.,', '16:24:00', '2021-03-17', 6),
(8, 'مراجعة الترم الأول', 'مراجعة شاملة على الترم الأول', '12:33:00', '2021-05-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_date` date NOT NULL,
  `categ_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `exam_desc` text DEFAULT NULL,
  `number` int(11) DEFAULT 10,
  `type` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam_name`, `exam_date`, `categ_id`, `member_id`, `lesson_id`, `exam_desc`, `number`, `type`, `time`) VALUES
(29, 'القواعدhukhj', '2021-01-26', NULL, 1, NULL, 'ghjkghjghjghj', 10, 2, NULL),
(32, 'fdgdfgfc', '2021-01-26', NULL, 1, NULL, 'fcfgdfgdfg', 10, 2, NULL),
(33, 'yyjuyu', '2021-01-26', NULL, 1, NULL, NULL, 20, 2, 122222),
(34, 'gcbfvdcsx', '2021-01-30', 31, 1, 89, NULL, 20, 1, 1800),
(35, 'الجملة الفعلية ', '2021-05-04', NULL, 1, NULL, NULL, 10, 2, 900);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` varchar(255) NOT NULL,
  `lesson_description` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `lesson_data` date NOT NULL,
  `member_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `video_name` varchar(225) DEFAULT NULL,
  `allow_comments` tinyint(4) NOT NULL DEFAULT 0,
  `Approve` tinyint(1) NOT NULL DEFAULT 0,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `lesson_name`, `lesson_description`, `video`, `lesson_data`, `member_id`, `cat_id`, `video_name`, `allow_comments`, `Approve`, `pdf`) VALUES
(88, 'التشابة', 'ثبقبقسبثيسب', '', '2021-01-30', 1, 31, 'Red - 26799.mp4', 0, 1, 'ؤئؤئءؤءئؤ'),
(89, 'التشابة', 'لبءربئيِْ]ؤسير', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Syx76Xdv1x4\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-01-30', 1, 31, NULL, 0, 0, 'يرسؤيشءس'),
(90, 'بؤئيسءسشئسيس', 'يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء v يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء vيبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء v يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء يبسريؤسءشئئشءسيببريئؤسء vيبسريؤسءشئئشءسيببريئؤسء', '<iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/137857207\" allowfullscreen></iframe>', '2021-01-30', 1, 31, NULL, 0, 1, ''),
(92, 'التشابةftgdhfbvdfscdxa', 'kh,jbmghvngcbfxvdzcxz', '', '2021-01-31', 1, 31, 'Red - 26799.mp4', 0, 1, ''),
(93, 'المفعول بة', 'المفعول بة شرحا واعرابا وموقعا', 'https://www.youtube.com/watch?v=QtH1Ys0-NK0', '2021-05-04', 1, 34, NULL, 0, 1, 'https://www.youtube.com/watch?v=QtH1Ys0-NK0');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_member`
--

CREATE TABLE `lesson_member` (
  `lesson_member_id` int(11) NOT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `type` tinyint(4) DEFAULT 1,
  `last_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lesson_member`
--

INSERT INTO `lesson_member` (`lesson_member_id`, `lesson_id`, `member_id`, `date`, `cat_id`, `type`, `last_date`) VALUES
(14, 92, 1, '2021-02-05 18:39:11', 31, 2, '2021-02-05 18:58:29'),
(15, 88, 1, '2021-02-07 11:12:50', 31, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `live`
--

CREATE TABLE `live` (
  `live_id` int(11) NOT NULL,
  `link` text DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `groupid` int(11) NOT NULL DEFAULT 0,
  `regstatus` int(11) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `avatar` varchar(225) NOT NULL DEFAULT 'img.png',
  `lil` text DEFAULT NULL,
  `exam answer` int(11) DEFAULT NULL,
  `lil_data` date DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `only` int(11) NOT NULL DEFAULT 0,
  `mac` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`userid`, `username`, `password`, `email`, `fullname`, `groupid`, `regstatus`, `date`, `avatar`, `lil`, `exam answer`, `lil_data`, `phone`, `only`, `mac`) VALUES
(1, 'احمد الطارون', '601f1889667efaebb33b8c12572835da3f027f78', 'mastercode179@gmail.com', NULL, 6, 1, '2021-01-26', 'img.png', NULL, NULL, NULL, 1066343874, 1, 'b666ad8a2959ee6497bb1afeb5af69d946c407ab'),
(233, 'قبلريؤسيءشسئ', '601f1889667efaebb33b8c12572835da3f027f78', 'mastercode179@gmail.com', NULL, 17, 0, '2021-01-27', 'img.png', NULL, NULL, NULL, 2147483647, 0, NULL),
(234, 'احمد الطارونygjgjy', '601f1889667efaebb33b8c12572835da3f027f78', 'mastercode179@gmail.com', NULL, 10, 0, '2021-01-31', 'img.png', NULL, NULL, NULL, 2147483647, 0, NULL),
(235, 'احمد الطارونiunjighj', '601f1889667efaebb33b8c12572835da3f027f78', 'mastercode179@gmail.com', NULL, 11, 0, '2021-01-31', 'img.png', NULL, NULL, NULL, 2147483647, 0, NULL),
(236, 'احمد الطارونhdfgrsvdfaed', '601f1889667efaebb33b8c12572835da3f027f78', NULL, NULL, 3, 0, '2021-02-04', 'img.png', NULL, NULL, NULL, 2147483647, 0, NULL),
(237, 'احمد الطارونugjyhfgdf', '601f1889667efaebb33b8c12572835da3f027f78', NULL, NULL, 18, 0, '2021-02-05', 'img.png', NULL, NULL, NULL, 1066343874, 0, NULL),
(238, 'احمد الطارونhvbjhk', '601f1889667efaebb33b8c12572835da3f027f78', NULL, NULL, 3, 0, '2021-02-05', 'img.png', NULL, NULL, NULL, 2147483647, 0, 'b666ad8a2959ee6497bb1afeb5af69d946c407ab'),
(239, 'احمد الطاروsfvdacsن', '601f1889667efaebb33b8c12572835da3f027f78', NULL, NULL, 9, 0, '2021-02-05', 'img.png', NULL, NULL, NULL, 2147483647, 0, 'b666ad8a2959ee6497bb1afeb5af69d946c407ab'),
(240, 'احمد الطارونhftg', '601f1889667efaebb33b8c12572835da3f027f78', NULL, NULL, 2, 0, '2021-02-07', 'img.png', NULL, NULL, NULL, 1066343874, 0, 'b666ad8a2959ee6497bb1afeb5af69d946c407ab'),
(242, 'هبه عصام', '88a01c9334d7e1c806ecbbeacd5a9818999c6668', NULL, NULL, 1, 1, '2021-05-04', 'img.png', NULL, NULL, NULL, 123654789, 0, 'c11ee9ddb9cd7850a25a40b8ee5f3541e5cb577f');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `user_id`, `date`, `username`, `email`) VALUES
(17, 'dxfvdzcsxz', 1, '2021-01-31', NULL, NULL),
(18, 'vgbhvccgccvb', 1, '2021-01-31', NULL, NULL),
(19, 'ghtdgrsfdfgbhj', NULL, '2021-01-31', 'hghffdd', 'mastercode179@gmail.com'),
(20, 'xvfsdcasxa', NULL, '2021-02-02', '', 'ahmed@gmail.com'),
(21, 'bxfvdzcsdxazxacsdvfbgb', NULL, '2021-02-02', 'gcbfxvdzcsxz', 'mastercode179@gmail.com'),
(22, 'jmhgfnbfxdvcsxza', NULL, '2021-02-02', 'gvdfsdzcSXASZ', 'mastercode179@gmail.com'),
(23, 'srgvefawd', NULL, '2021-02-02', 'ngcbfxvdzc', 'mastercode179@gmail.com'),
(24, 'srgvefawd', NULL, '2021-02-02', 'ngcbfxvdzc', 'mastercode179@gmail.com'),
(25, 'srgvefawd', NULL, '2021-02-02', 'ngcbfxvdzc', 'mastercode179@gmail.com'),
(26, 'srgvefawd', NULL, '2021-02-02', 'ngcbfxvdzc', 'mastercode179@gmail.com'),
(27, 'srgvefawd', NULL, '2021-02-02', 'ngcbfxvdzc', 'mastercode179@gmail.com'),
(28, 'srgvefawd', NULL, '2021-02-02', 'ngcbfxvdzc', 'mastercode179@gmail.com'),
(29, 'srgvefawd', NULL, '2021-02-02', 'ngcbfxvdzc', 'mastercode179@gmail.com'),
(30, 'srgvefawd', NULL, '2021-02-02', 'ngcbfxvdzc', 'mastercode179@gmail.com'),
(31, 'srgvefawddczasdczxczdcS', NULL, '2021-02-02', 'ngcbfxvdzc', 'mastercode179@gmail.com'),
(32, 'jhmbhygfdhtgfxdfc', NULL, '2021-02-02', 'cAXzaxscdvf', 'mastercode179@gmail.com'),
(33, 'jhmbhygfdhtgfxdfc', NULL, '2021-02-02', 'cAXzaxscdvf', 'mastercode179@gmail.com'),
(34, 'jhmbhygfdhtgfxdfc', NULL, '2021-02-02', 'cAXzaxscdvf', 'mastercode179@gmail.com'),
(35, 'dfgsrdfeadswa', NULL, '2021-02-02', 'dsgvafcsdx', 'mastercode179@gmail.com'),
(36, 'dfgsrdfeadswa', NULL, '2021-02-02', 'dsgvafcsdxxvdfsdasxZ', 'mastercode179@gmail.com'),
(37, 'fdfsdzs', NULL, '2021-02-02', 'bfxdzsdA', 'mastercode179@gmail.com'),
(38, 'fdfsdzs', NULL, '2021-02-02', 'bfxdzsdA', 'mastercode179@gmail.com'),
(39, 'fdfsdzs', NULL, '2021-02-02', 'bfxdzsdA', 'mastercode179@gmail.com'),
(40, 'fdfsdzs', NULL, '2021-02-02', 'bfxdzsdA', 'mastercode179@gmail.com'),
(41, 'fdfsdzs', NULL, '2021-02-02', 'bfxdzsdA', 'mastercode179@gmail.com'),
(42, 'fdfsdzs', NULL, '2021-02-02', 'bfxdzsdA', 'mastercode179@gmail.com'),
(43, 'fdfsdzs', NULL, '2021-02-02', 'bfxdzsdA', 'mastercode179@gmail.com'),
(44, 'fdfsdzs', NULL, '2021-02-02', 'bfxdzsdA', 'mastercode179@gmail.com'),
(45, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(46, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(47, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(48, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(49, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(50, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(51, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(52, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(53, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(54, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(55, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(56, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(57, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(58, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(59, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(60, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(61, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(62, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(63, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(64, 'fgndbfvdcs', NULL, '2021-02-02', 'fgdfdfsd', 'mastercode179@gmail.com'),
(65, 'fhdgrsfe', NULL, '2021-02-02', 'tyjthy', 'ahmed@gmail.com'),
(66, 'sfasdfdrgrewsa', NULL, '2021-02-02', 'dfseass', 'mastercode179@gmail.com'),
(67, 'sfasdfdrgrewsa', NULL, '2021-02-02', 'dfseass', 'mastercode179@gmail.com'),
(68, 'sfasdfdrgrewsa', NULL, '2021-02-02', 'dfseass', 'mastercode179@gmail.com'),
(69, 'efdsdfgrgfe', NULL, '2021-02-02', 'efdsd', 'mastercode179@gmail.com'),
(70, 'efdsdfgrgfe', NULL, '2021-02-02', 'efdsd', 'mastercode179@gmail.com'),
(71, 'efdsdfgrgfe', NULL, '2021-02-02', 'efdsd', 'mastercode179@gmail.com'),
(72, 'sfxdzfeawds', 1, '2021-02-04', NULL, NULL),
(73, 'szvdeafwds', 1, '2021-02-04', NULL, NULL),
(74, 'gfyhtdgrfedwsa', NULL, '2021-02-05', 'احمد الطارون', 'mastercode179@gmail.com'),
(75, 'ukygyjfhtdgrfdd', 1, '2021-02-05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `part_id` int(11) NOT NULL,
  `part_name` varchar(255) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`part_id`, `part_name`, `exam_id`, `number`, `photo`, `date`, `time`) VALUES
(2, 'يببيشسبلاالةتابالل', 33, 20, '14048.jpg', '2021-01-27', 2200),
(3, 'عهنخته', 33, 20, '', '2021-01-27', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_description` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_data` date NOT NULL,
  `allow_comment` tinyint(4) NOT NULL DEFAULT 0,
  `users` int(11) NOT NULL,
  `tags` varchar(225) NOT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_name`, `post_description`, `post_image`, `post_data`, `allow_comment`, `users`, `tags`, `type`, `cat_id`) VALUES
(63, 'fsgfbgh', 'fdfgfhtdrgsedf', '1118_14048.jpg', '2021-01-27', 0, 1, '', 0, 2),
(65, 'bcfcbv', 'gfbzvdxcvcv', '76352_', '2021-01-27', 0, 1, '', 0, 9),
(68, 'التجارب العملية', 'lhkugjhdbxfdzsxdfghjklm', '91749_hand-with-pen-application-form.jpg', '2021-01-31', 0, 1, '', 0, 6),
(69, 'ملخص النحو ', 'سيتم  بأذن الله يوم الخميس أقامة حصة مجمعة للنجو ', '93343_course.jpg', '2021-05-04', 0, 1, '', 0, 1),
(70, 'المفعول بة', 'المفعول به هو الاسم الذي يدل على من وقع عليه فعل الفاعل. يكون دائما في الجملة الفعلية ويكون منصوبا دائما، وعامل النصب فيه هو: الفعل المتعدي، وعلامة نصبه الفتحة الظاهرة، أو المقدرة، أو الياء إن كان مثنى أو جمع مذكر سالم، أو الكسرة (نيابة عن الفتحة) إن كان جمع مؤنث سالم، أو الألف إن كان من الأسماء الخمسة.', '35377_maxresdefault.jpg', '2021-05-04', 0, 1, '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) DEFAULT NULL,
  `ques` text NOT NULL,
  `added_date` date NOT NULL,
  `answer_1` text NOT NULL,
  `answer_2` text NOT NULL,
  `answer_3` text NOT NULL,
  `answer_4` text NOT NULL,
  `right_answer` varchar(255) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `answer` text DEFAULT NULL,
  `part_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `exam_id`, `ques`, `added_date`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `right_answer`, `photo`, `answer`, `part_id`) VALUES
(9, 34, 'zgdsfgsfg', '2021-01-26', 'ball', 'boll', 'bell', 'bali', '1', '14048.jpg', NULL, NULL),
(10, 34, 'ففففغعغغلعغلععغع', '2021-01-27', 'ball', 'boll', 'bell', 'bali', '1', '', NULL, NULL),
(11, 34, 'عهلهغهعه', '2021-01-27', '', '', '', '', 'ball', '', 'ball', NULL),
(14, 34, 'fgdrf', '2021-01-27', '', '', '', '', 'gyhftg', '', 'gyhftg', 2),
(15, 34, 'معني كلمة كرة', '2021-01-31', '', '', '', '', 'ball', '', 'ball', NULL),
(16, NULL, 'معني كلمة كرة', '2021-01-31', 'ball', 'boll', 'bell', 'bali', '1', '', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `username` varchar(225) CHARACTER SET utf8 NOT NULL,
  `token` varchar(225) CHARACTER SET utf8 NOT NULL,
  `timemodified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `username`, `token`, `timemodified`) VALUES
(1, 'رضا مختار', 'AZqBon3ez4', '2021-01-07 07:37:11'),
(2, 'heba essam', '9EGgWNQayK', '2021-01-23 09:59:25'),
(3, 'احمد الطارونygjgjy', 'aBHwp2IrS5', '2021-01-31 14:29:42'),
(4, 'احمد الطارونiunjighj', 'Q7n9JGnDLs', '2021-01-31 17:46:18'),
(5, 'احمد الطارونhdfgrsvdfaed', '8XvXEGEHe6', '2021-02-04 07:44:34'),
(6, 'احمد الطارونugjyhfgdf', 'BsKJwJC4jI', '2021-02-05 07:40:26'),
(7, 'احمد الطارونhvbjhk', 'WtaRFdnbTf', '2021-02-05 15:43:16'),
(8, 'احمد الطاروsfvdacsن', '9meTLpfzJG', '2021-02-05 16:22:00'),
(9, 'احمد الطارونhftg', 'dBNVE5Aaei', '2021-02-07 07:37:40'),
(10, 'هبه عصام', 'Ei1OLi2Foi', '2021-05-04 14:57:56'),
(11, 'هبه عصام', 'Ei1OLi2Foi', '2021-05-04 20:20:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `exam` (`exam_id`);

--
-- Indexes for table `benfits`
--
ALTER TABLE `benfits`
  ADD PRIMARY KEY (`benfit_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments` (`member_id`),
  ADD KEY `com` (`lesson_id`),
  ADD KEY `memb` (`post_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`),
  ADD KEY `cata` (`cat_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `lesson_member`
--
ALTER TABLE `lesson_member`
  ADD PRIMARY KEY (`lesson_member_id`),
  ADD KEY `lesson_id` (`lesson_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`live_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_message` (`user_id`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_name` (`users`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ques` (`exam_id`),
  ADD KEY `part_id` (`part_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `benfits`
--
ALTER TABLE `benfits`
  MODIFY `benfit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `lesson_member`
--
ALTER TABLE `lesson_member`
  MODIFY `lesson_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `live`
--
ALTER TABLE `live`
  MODIFY `live_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `exam` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`exam_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `members` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `com` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments` FOREIGN KEY (`member_id`) REFERENCES `members` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memb` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `cata` FOREIGN KEY (`cat_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `lesson_member`
--
ALTER TABLE `lesson_member`
  ADD CONSTRAINT `lesson_id` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_id` FOREIGN KEY (`member_id`) REFERENCES `members` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `user_message` FOREIGN KEY (`user_id`) REFERENCES `members` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `part`
--
ALTER TABLE `part`
  ADD CONSTRAINT `exam_id` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `user_name` FOREIGN KEY (`users`) REFERENCES `members` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `part_id` FOREIGN KEY (`part_id`) REFERENCES `part` (`part_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ques` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
