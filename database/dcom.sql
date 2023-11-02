-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2023 at 05:39 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `content`) VALUES
(11, 'حمله دیداس چیست', 'picture/169894576317010752556543dae382373.jpg', 'حمله دیداس (DDoS) یک نوع حمله سایبری است که هدف آن از دسترس خارج کردن یک سرویس یا سایت وب است. عبارت \"DDoS\" اختصاری برای \"توزیع شده (Distributed) حمله از خدمات (Denial of Service)\" می‌باشد. در این نوع حمله، مهاجمان از یک تعداد زیادی دستگاه یا سرور (که معمولاً توسط بات‌ها یا برنامه‌های مخصوص کنترل می‌شوند) برای ارسال ترافیک زیادی به سرور یا سایت هدف استفاده می‌کنند.\r\n\r\nهدف اصلی حمله DDoS این است که سرور یا سایت هدف با افزایش ترافیک و تخریب منابع محاسباتی خود غیرفعال شود و برای کاربران عادی دیگر در دسترس نباشد. این نوع حمله معمولاً از نظریه خدمات (Denial of Service) بهره می‌برد تا بیشترین تأثیر را بر روی هدف بگذارد.\r\n\r\nبرای مقابله با حملات DDoS، سازمان‌ها و سرویس‌دهندگان از انواع ابزارها و تکنیک‌های مختلفی مانند توزیع شده‌شدن خدمات (CDN)، فایروال‌های قدرتمند، شبکه‌های خصوصی از نوع شبکه‌های تونلینگ (Tunneling Networks) و الگوریتم‌های تشخیص حملات بهره می‌برند تا تأثیر حملات DDoS را کاهش دهند و سایت‌ها و خدمات آنلاین خود را حفظ کنند.'),
(12, 'حمله داس', 'picture/16989458313265455066543db2716676.jpg', 'بله، حمله \"داس\" (Distributed Denial of Service) یک نوع حمله سایبری است که هدف آن از دسترس خارج کردن یک سرویس یا سایت وب است. در این نوع حمله، مهاجمان از تعداد زیادی دستگاه یا سرور برای ایجاد ترافیک غیرمعقول به سرور یا سایت هدف استفاده می‌کنند. این ترافیک اضافی و بیش از حد باعث می‌شود که سرور یا سایت هدف با تخریب منابع محاسباتی خود غیرفعال شود و برای کاربران عادی دیگر در دسترس نباشد.\r\n\r\nحمله DDoS توزیع شده است، به این معنا که مهاجمان از منابع مختلفی در جهان (معمولاً سرورها یا دستگاه‌های متعدد) برای انجام حمله استفاده می‌کنند. این امر باعث می‌شود که حمله قوی‌تر و دشوارتر به شناسایی و مهار شود.\r\n\r\nهدف اصلی حمله DDoS ایجاد ناپایداری در سرویس یا سایت هدف و از دسترس خارج کردن آن است. سازمان‌ها و سرویس‌دهندگان از ابزارها و تکنیک‌های مختلفی برای مقابله با حملات DDoS استفاده می‌کنند، از جمله توزیع شده شدن خدمات (CDN)، فایروال‌های قدرتمند، شبکه‌های تونلینگ (Tunneling Networks) و الگوریتم‌های تشخیص حملات. این اقدامات به منظور کاهش تأثیر حملات DDoS و حفظ دسترسی به سرویس‌ها و سایت‌های آنلاین انجام می‌شوند.'),
(13, 'تفاوت بین حمله داس و دیداس ', 'picture/169894594018008886786543db949e001.png', 'حمله \"داس\" (DAS) و حمله \"دیداس\" (DDoS) دو نوع مختلف از حملات سایبری هستند، و تفاوت اصلی بین آنها در میزان توزیع شده بودن حمله و نوع خدمه‌ای است که تحت حمله قرار می‌گیرد. در ادامه تفاوت‌های اصلی بین این دو حمله را توضیح می‌دهم:\r\n\r\n1. حمله داس (DAS - Denial of Service):\r\n   - در حمله DAS، حمله‌کننده از یک دستگاه یا منبع معمولی استفاده می‌کند تا به شکل تمرکز شده به یک خدمه یا سایت هدف ارسال ترافیک زیادی ارسال کند.\r\n   - ترافیک بیش از حد ارسالی در حمله DAS معمولاً از یک منبع یا دستگاه واحد ایجاد می‌شود و به سادگی توسط مسئولین امنیتی شناسایی می‌شود.\r\n   - حمله DAS ممکن است با استفاده از روش‌هایی مانند ارسال درخواست‌های زیاد به یک سرور یا اجرای حمله ناپایدار سرویس (Service Unavailability) انجام شود.\r\n\r\n2. حمله دیداس (DDoS - Distributed Denial of Service):\r\n   - در حمله DDoS، حمله‌کننده از تعداد زیادی دستگاه یا سرور استفاده می‌کند تا به شکل توزیع شده و همزمان به خدمه یا سایت هدف ترافیک زیادی ارسال کند.\r\n   - ترافیک در حمله DDoS از منابع مختلفی در سراسر جهان ایجاد می‌شود، که این امر باعث می‌شود حمله به شدت پیچیده شود و مشکل‌تر به شناسایی آن پرداخته شود.\r\n   - حمله DDoS معمولاً با هدف از دسترس خارج کردن سرور یا سایت هدف انجام می‌شود.\r\n\r\nدر کل، تفاوت اصلی بین حمله DAS و DDoS در تعداد منابعی است که برای حمله استفاده می‌شود و درجه توزیع شده بودن حمله. حمله DAS تمرکز شده و از یک منبع انجام می‌شود، در حالی که حمله DDoS از منابع متعدد و توزیع شده است. هدف نهایی هر دو نوع حمله تخریب یا مسدود کردن دسترسی به خدمه‌ای معین است.'),
(14, 'هکر کیست', 'picture/16989459962841662116543dbccbc7a9.jpg', 'هکر (Hacker) یک عبارت گسترده است که به افرادی اشاره دارد که در زمینه مهندسی معکوس، تست امنیتی، توسعه نرم‌افزار، تحقیقات سایبری و مسائل مرتبط با فناوری اطلاعات فعالیت می‌کنند. واژه \"هکر\" در دو معنی گسترده استفاده می‌شود:\r\n\r\n1. **هکر به معنای مثبت (White Hat Hacker):** این گونه از هکرها معمولاً تخصص خود را در امنیت سایبری اعمال می‌کنند. آنها به شکل قانونی و با اجازه از مالکان سیستم‌ها یا سایت‌ها به بررسی و آزمایش امنیت آنها می‌پردازند. White Hat Hackers می‌توانند به ارتقاء امنیت و محافظت از داده‌ها و سیستم‌های مختلف کمک کنند.\r\n\r\n2. **هکر به معنای منفی (Black Hat Hacker):** این گونه از هکرها به طور غیرقانونی و بدون اجازه به نفع شخصی یا به منظور تخریب دستگاه‌ها و سیستم‌های مختلف حمله می‌کنند. آنها به شکل نقض قوانین و معاهده‌های سایبری فعالیت می‌کنند و اغلب به عنوان هکرهای خرابکار شناخته می‌شوند.\r\n\r\n3. **هکر به معنای متوسط (Grey Hat Hacker):** این دسته از هکرها نه به شکل کاملاً قانونی مانند White Hat Hackers عمل می‌کنند و نه به شکل قانونی شکننده مانند Black Hat Hackers. آنها ممکن است بدون اجازه برخی مشکلات امنیتی را گزارش دهند یا در تست امنیتی مشارکت کنند.\r\n\r\nدر معنای کلی، واژه \"هکر\" به افرادی اطلاق می‌شود که دارای توانایی فنی و تخصص در زمینه‌های مختلف مرتبط با فناوری اطلاعات هستند. تفاوت اصلی بین انواع هکرها در قصد و اهداف آنها و نحوه استفاده از توانایی‌های فنی آنهاست.');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `title`, `link`) VALUES
(6, 'picture/16989462579523671146543dcd14968f.jpg', 'داس چیست', 'http://127.0.0.1/Weblog-FullStack/readmore.php?postid=12'),
(5, 'picture/16989461876841189326543dc8bc1ad9.png', 'تفاوت داس و دیداس', 'http://127.0.0.1/Weblog-FullStack/readmore.php?postid=13'),
(4, 'picture/169894613516188424656543dc57ebe00.jpg', 'هکرکیست', 'http://127.0.0.1/Weblog-FullStack/readmore.php?postid=14');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `spcialpost`
--

INSERT INTO `spcialpost` (`id`, `title`, `image`, `content`) VALUES
(5, 'حمله داس', 'picture/169894630611515598696543dd021f353.jpg', 'بله، حمله \"داس\" (Distributed Denial of Service) یک نوع حمله سایبری است که هدف آن از دسترس خارج کردن یک سرویس یا سایت وب است. در این نوع حمله، مهاجمان از تعداد زیادی دستگاه یا سرور برای ایجاد ترافیک غیرمعقول به سرور یا سایت هدف استفاده می‌کنند. این ترافیک اضافی و بیش از حد باعث می‌شود که سرور یا سایت هدف با تخریب منابع محاسباتی خود غیرفعال شود و برای کاربران عادی دیگر در دسترس نباشد.\r\n\r\nحمله DDoS توزیع شده است، به این معنا که مهاجمان از منابع مختلفی در جهان (معمولاً سرورها یا دستگاه‌های متعدد) برای انجام حمله استفاده می‌کنند. این امر باعث می‌شود که حمله قوی‌تر و دشوارتر به شناسایی و مهار شود.\r\n\r\nهدف اصلی حمله DDoS ایجاد ناپایداری در سرویس یا سایت هدف و از دسترس خارج کردن آن است. سازمان‌ها و سرویس‌دهندگان از ابزارها و تکنیک‌های مختلفی برای مقابله با حملات DDoS استفاده می‌کنند، از جمله توزیع شده شدن خدمات (CDN)، فایروال‌های قدرتمند، شبکه‌های تونلینگ (Tunneling Networks) و الگوریتم‌های تشخیص حملات. این اقدامات به منظور کاهش تأثیر حملات DDoS و حفظ دسترسی به سرویس‌ها و سایت‌های آنلاین انجام می‌شوند.'),
(6, 'حمله دیداس', 'picture/16989463328261870746543dd1c5bb5c.jpg', 'حمله دیداس (DDoS) یک نوع حمله سایبری است که هدف آن از دسترس خارج کردن یک سرویس یا سایت وب است. عبارت \"DDoS\" اختصاری برای \"توزیع شده (Distributed) حمله از خدمات (Denial of Service)\" می‌باشد. در این نوع حمله، مهاجمان از یک تعداد زیادی دستگاه یا سرور (که معمولاً توسط بات‌ها یا برنامه‌های مخصوص کنترل می‌شوند) برای ارسال ترافیک زیادی به سرور یا سایت هدف استفاده می‌کنند.\r\n\r\nهدف اصلی حمله DDoS این است که سرور یا سایت هدف با افزایش ترافیک و تخریب منابع محاسباتی خود غیرفعال شود و برای کاربران عادی دیگر در دسترس نباشد. این نوع حمله معمولاً از نظریه خدمات (Denial of Service) بهره می‌برد تا بیشترین تأثیر را بر روی هدف بگذارد.\r\n\r\nبرای مقابله با حملات DDoS، سازمان‌ها و سرویس‌دهندگان از انواع ابزارها و تکنیک‌های مختلفی مانند توزیع شده‌شدن خدمات (CDN)، فایروال‌های قدرتمند، شبکه‌های خصوصی از نوع شبکه‌های تونلینگ (Tunneling Networks) و الگوریتم‌های تشخیص حملات بهره می‌برند تا تأثیر حملات DDoS را کاهش دهند و سایت‌ها و خدمات آنلاین خود را حفظ کنند.'),
(7, 'هکر کیست', 'picture/169894639220980354136543dd5814f0e.jpg', 'هکر (Hacker) یک عبارت گسترده است که به افرادی اشاره دارد که در زمینه مهندسی معکوس، تست امنیتی، توسعه نرم‌افزار، تحقیقات سایبری و مسائل مرتبط با فناوری اطلاعات فعالیت می‌کنند. واژه \"هکر\" در دو معنی گسترده استفاده می‌شود:\r\n\r\n1. **هکر به معنای مثبت (White Hat Hacker):** این گونه از هکرها معمولاً تخصص خود را در امنیت سایبری اعمال می‌کنند. آنها به شکل قانونی و با اجازه از مالکان سیستم‌ها یا سایت‌ها به بررسی و آزمایش امنیت آنها می‌پردازند. White Hat Hackers می‌توانند به ارتقاء امنیت و محافظت از داده‌ها و سیستم‌های مختلف کمک کنند.\r\n\r\n2. **هکر به معنای منفی (Black Hat Hacker):** این گونه از هکرها به طور غیرقانونی و بدون اجازه به نفع شخصی یا به منظور تخریب دستگاه‌ها و سیستم‌های مختلف حمله می‌کنند. آنها به شکل نقض قوانین و معاهده‌های سایبری فعالیت می‌کنند و اغلب به عنوان هکرهای خرابکار شناخته می‌شوند.\r\n\r\n3. **هکر به معنای متوسط (Grey Hat Hacker):** این دسته از هکرها نه به شکل کاملاً قانونی مانند White Hat Hackers عمل می‌کنند و نه به شکل قانونی شکننده مانند Black Hat Hackers. آنها ممکن است بدون اجازه برخی مشکلات امنیتی را گزارش ');

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
