-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2023 at 03:47 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `bottomads`
--

DROP TABLE IF EXISTS `bottomads`;
CREATE TABLE IF NOT EXISTS `bottomads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bottomads`
--

INSERT INTO `bottomads` (`id`, `image`, `link`) VALUES
(1, 'picture/1698922446169232290665437fce6118e.gif', '#'),
(2, 'picture/169892246777443406265437fe379032.gif', '#'),
(3, 'picture/169892248187968207665437ff1c535a.gif', '#'),
(4, 'picture/1698922491189560569365437ffbc9e9a.gif', '#');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`) VALUES
(3, 'صفحه اصلی ', 'http://127.0.0.1/Weblog-FullStack/index'),
(4, 'پست ها', 'http://127.0.0.1/Weblog-FullStack/post.php'),
(6, 'پست های ویژه', 'http://127.0.0.1/Weblog-FullStack/spcialpage.php'),
(7, 'تماس با ما', '#'),
(13, 'ورود به پنل مدیریت', 'http://127.0.0.1/Weblog-FullStack/login.php');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `content`) VALUES
(4, 'دیداس چیست ', 'picture/169885010014931979206542653441fee.jpg', 'حمله دیداس (به انگلیسی: DDoS Attack) یک نوع حمله سایبری است که هدف آن تخریب یا قطع ارتباط دسترسی به یک سرویس یا وب‌سایت می‌باشد. این حمله توسط ارسال تعداد زیادی درخواست‌ها به سرور یا سرویس مورد نظر انجام می‌شود به گونه‌ای که سرور نمی‌تواند تمام درخواست‌ها را پردازش کرده و ارتباط با سرویس را قطع کند. اصطلاح \"DDoS\" مخفف Distributed Denial of Service می‌باشد و به معنای قطع ارتباط توسط بیش از یک دستگاه (یعنی تعداد زیادی کامپیوتر یا دستگاه متصل به اینترنت) استفاده می‌شود.\r\n\r\nدر یک حمله DDoS، حمله‌کننده از ابزارهای خودکار یا شبکه‌های زامبی که تحت کنترل او قرار دارند، استفاده می‌کند تا به صورت همزمان درخواست‌های بسیار زیادی به هدف مورد نظر ارسال کند. این درخواست‌ها سرور یا سرویس را به حدی اشغال می‌کنند که افراد و دستگاه‌های معمولی نمی‌توانند به سرویس دسترسی داشته باشند. این امر می‌تواند منجر به قطعی موقت یا حتی دائمی از دسترسی به وب‌سایت یا سرویس مورد نظر شود.\r\n\r\nهدف اصلی از حمله DDoS ممکن است متنوع باشد، از جمله ممکن است به منظور تخریب رقبا، ایجاد اختلال در سرویس‌دهی، جلب توجه یا به منظور انتقام گرفتن از یک سازمان یا فرد خاص باشد. برای مقابله با حملات DDoS، سازمان‌ها و سرویس‌دهندگان از ابزارها و تکنیک‌های مختلفی استفاده می‌کنند، از جمله استفاده از فایروال‌ها، مدیریت ترافیک، و افزایش ظرفیت سرورها. همچنین، شناسایی و مسدود سازی دستگاه‌های حاکم بر شبکه زامبی نیز از روش‌های متداول در مقابله با حملات DDoS است.'),
(5, 'حمله داس چیست', 'picture/169885020712125176346542659f656af.jpg', 'احتمالا به عنوان \"حمله داس\" منظور حمله DDoS (Distributed Denial of Service) را دارید. حمله DDoS یک نوع حمله سایبری است که هدف آن تخریب یا قطع ارتباط دسترسی به یک سرویس یا وب‌سایت می‌باشد. در واقعیت، عبارت \"حمله داس\" یا \"DAS attack\" در صورتی که به معنای یک حمله سایبری خاص باشد، منطبق با مفهوم مشخصی نیست و معمولاً به حملات DDoS اشاره دارد.\r\n\r\nدر یک حمله DDoS، حمله‌کننده از تعداد زیادی دستگاه (معمولاً کامپیوترها یا دستگاه‌های متصل به اینترنت) به عنوان زامبی‌ها استفاده می‌کند تا به صورت همزمان درخواست‌های بسیار زیادی به هدف مورد نظر ارسال کند. این درخواست‌ها سرور یا سرویس را به حدی اشغال می‌کنند که افراد و دستگاه‌های معمولی نمی‌توانند به سرویس دسترسی داشته باشند. این امر می‌تواند منجر به قطعی موقت یا حتی دائمی از دسترسی به وب‌سایت یا سرویس مورد نظر شود.\r\n\r\nهدف اصلی از حمله DDoS ممکن است متنوع باشد، از جمله ممکن است به منظور تخریب رقبا، ایجاد اختلال در سرویس‌دهی، جلب توجه یا به منظور انتقام گرفتن از یک سازمان یا فرد خاص باشد. برای مقابله با حملات DDoS، سازمان‌ها و سرویس‌دهندگان از ابزارها و تکنیک‌های مختلفی استفاده می‌کنند، از جمله استفاده از فایروال‌ها، مدیریت ترافیک، و افزایش ظرفیت سرورها. همچنین، شناسایی و مسدود سازی دستگاه‌های حاکم بر شبکه زامبی نیز از روش‌های متداول در مقابله با حملات DDoS است.'),
(6, 'تفاوت حمله داس با دیداس چیست', 'picture/1698850404104381345165426664e62e3.png', 'تفاوت بین حمله داس (DAS Attack) و حمله دیداس (DDoS Attack) به شرح زیر است:\r\n\r\n1. حمله DAS (Distributed Application Service Attack):\r\n   - اصطلاح DAS در متن نوعی حمله سایبری ندارد. بنابراین، ممکن است به معنای خاصی نباشد یا به اشتباه به اشیاء متفاوتی اشاره کند.\r\n   - اگر به \"DAS Attack\" اشاره کنید، احتمالاً به یک حمله خاص با توضیحات کافی ارجاع دهید یا ممکن است به مفهوم مشخصی در حوزه خاصی اشاره کنید.\r\n\r\n2. حمله DDoS (Distributed Denial of Service Attack):\r\n   - حمله DDoS یک نوع حمله سایبری است که هدف آن تخریب یا قطع ارتباط دسترسی به یک سرویس یا وب‌سایت می‌باشد. این حمله توسط ارسال تعداد زیادی درخواست‌ها به سرور یا سرویس مورد نظر انجام می‌شود به گونه‌ای که سرور نمی‌تواند تمام درخواست‌ها را پردازش کرده و ارتباط با سرویس را قطع کند.\r\n   - اصطلاح \"DDoS\" مخفف Distributed Denial of Service می‌باشد و به معنای قطع ارتباط توسط بیش از یک دستگاه (یعنی تعداد زیادی کامپیوتر یا دستگاه متصل به اینترنت) استفاده می‌شود.\r\n\r\nبنابراین، \"حمله داس\" به عنوان یک مفهوم مشخص در زمینه حملات سایبری شناخته نمی‌شود، در حالی که \"حمله DDoS\" یک مفهوم مشخص و شناخته شده در این زمینه است. اگر اطلاعات بیشتری در مورد \"حمله داس\" دارید، لطفاً توضیح بدهید تا بتوانم به درستی پاسخ دهم.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `link` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `title`, `link`) VALUES
(1, 'picture/16989236961094614136654384b03874e.jpg', 'حمله داس', '#'),
(2, 'picture/16989242471861588601654386d733057.jpg', 'حمله دیداس چیست', 'http://127.0.0.1/Weblog-FullStack/readmore.php?postid=4'),
(3, 'picture/1698924276543085879654386f401298.jpg', 'حمله داس چیست', 'http://127.0.0.1/Weblog-FullStack/readmore.php?postid=5');

-- --------------------------------------------------------

--
-- Table structure for table `spcialpost`
--

DROP TABLE IF EXISTS `spcialpost`;
CREATE TABLE IF NOT EXISTS `spcialpost` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spcialpost`
--

INSERT INTO `spcialpost` (`id`, `title`, `image`, `content`) VALUES
(1, 'حمله داس', 'picture/1698925815124911744565438cf76995b.jpg', 'ایباسایابتب یتستیستیاست ستیشستیاتشسایتشسای سشییصیش'),
(2, 'حمله دیداس چیست', 'picture/16989267912066958752654390c706473.jpg', 'حمله داس است'),
(3, 'jjjdasjjdhsasd', 'picture/169893453913643658866543af0b2de60.jpg', 'sadjasjdjsahd'),
(4, 'dsabdashdhasda', 'picture/169893454810815340966543af148c456.jpg', 'dasnjhjshajdsd');

-- --------------------------------------------------------

--
-- Table structure for table `topads`
--

DROP TABLE IF EXISTS `topads`;
CREATE TABLE IF NOT EXISTS `topads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `topads`
--

INSERT INTO `topads` (`id`, `image`, `link`) VALUES
(1, 'picture/16989191341000418514654372de81818.gif', '#'),
(2, 'picture/16989191642072991652654372fc1bc7f.gif', '#'),
(3, 'picture/1698919173188400601365437305be7b4.gif', '#'),
(4, 'picture/16989191827238700846543730e88d85.gif', '#');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'ali', 'علی'),
(2, 'reza', '1616', 'رضا'),
(3, 'ali', 'ali', 'علی'),
(4, '.alireza.', '.alireza.', '.علیرضا.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
