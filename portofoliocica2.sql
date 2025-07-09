-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for cicabaru
CREATE DATABASE IF NOT EXISTS `cicabaru` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `cicabaru`;

-- Dumping structure for table cicabaru.awards
CREATE TABLE IF NOT EXISTS `awards` (
  `id_award` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon_class` varchar(50) NOT NULL,
  PRIMARY KEY (`id_award`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cicabaru.awards: ~3 rows (approximately)
DELETE FROM `awards`;
/*!40000 ALTER TABLE `awards` DISABLE KEYS */;
INSERT INTO `awards` (`id_award`, `image_path`, `title`, `description`, `icon_class`) VALUES
	(1, 'images/portfolio/github.jpg', '1st Winner', 'UI/UX Design on GITHUB 2024', 'fa fa-trophy'),
	(2, 'images/portfolio/poster.jpg', '2nd Winner', 'Poster Competition On Jayaverse 2024', 'fa fa-medal'),
	(3, 'images/portfolio/uiux.jpg', '3rd Winner', 'UI/UX Mobile Design Competition On Euformatika-23', 'fa fa-award');
/*!40000 ALTER TABLE `awards` ENABLE KEYS */;

-- Dumping structure for table cicabaru.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cicabaru.contact: ~2 rows (approximately)
DELETE FROM `contact`;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
	(1, 'Kenny Anaga', 'anagakenny24@gmail.com', 'adasdasdasd', 'asdasdsdasda', '2024-10-22 10:56:33'),
	(2, 'snickerdoodle', 'asdad@gmail.com', 'asd', 'asdsadsadasdasdasdadasdadadada', '2024-10-22 11:02:09');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table cicabaru.contact_info
CREATE TABLE IF NOT EXISTS `contact_info` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cicabaru.contact_info: ~4 rows (approximately)
DELETE FROM `contact_info`;
/*!40000 ALTER TABLE `contact_info` DISABLE KEYS */;
INSERT INTO `contact_info` (`id_contact`, `icon`, `title`, `value`) VALUES
	(1, 'fa fa-phone', 'Call Me On', '+62 8128 0554 67'),
	(2, 'fa fa-map-marker-alt', 'Office', 'Indonesia'),
	(3, 'fa fa-envelope', 'Email', 'cicaluci5@gmail.com'),
	(4, 'fa fa-globe-europe', 'Website', 'www.cica.com');
/*!40000 ALTER TABLE `contact_info` ENABLE KEYS */;

-- Dumping structure for table cicabaru.education
CREATE TABLE IF NOT EXISTS `education` (
  `id_education` int(11) NOT NULL AUTO_INCREMENT,
  `start_year` year(4) NOT NULL,
  `end_year` year(4) DEFAULT NULL,
  `institution` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_education`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cicabaru.education: ~3 rows (approximately)
DELETE FROM `education`;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` (`id_education`, `start_year`, `end_year`, `institution`, `degree`, `description`) VALUES
	(1, '2023', NULL, 'Universitas Pembangunan Jaya', 'Bachelor\'s Degree in Informatics', 'Siti Nurcica is currently pursuing a Bachelor\'s degree in Informatics at Universitas Pembangunan Jaya, now in the third semester. Actively involved in various competitions and projects, particularly in the fields of UI/UX design and technology, several awards have been achieved to date.'),
	(2, '2020', '2023', 'SMAN 2 CIANJUR', 'Natural Science Track', 'Siti Nurcica attended SMAN 2 Cianjur, focusing on the Natural Science track. This background in natural sciences provided a strong foundation in subjects such as mathematics, biology, chemistry, and physics, which later supported further studies in technology and informatics at the university level.'),
	(3, '2017', '2020', 'SMPN 1 WARUNGKONDANG', 'Junior High School Education', 'Siti Nurcica attended SMPN 1 Warungkondang for junior high school education. This period helped in building fundamental knowledge and skills across various subjects, forming the basis for future academic and personal growth.');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;

-- Dumping structure for table cicabaru.experience
CREATE TABLE IF NOT EXISTS `experience` (
  `id_experience` int(11) NOT NULL AUTO_INCREMENT,
  `start_year` year(4) NOT NULL,
  `end_year` year(4) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_experience`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cicabaru.experience: ~3 rows (approximately)
DELETE FROM `experience`;
/*!40000 ALTER TABLE `experience` DISABLE KEYS */;
INSERT INTO `experience` (`id_experience`, `start_year`, `end_year`, `position`, `company`, `description`) VALUES
	(1, '2013', '2015', 'Assistant Manager', 'Okane Store', 'This role involved managing operations in a photocopy shop, which enhanced skills in customer service, team coordination, and handling tasks like editing invitations, calendars, and creating bouquets.'),
	(2, '2024', '2024', 'Product Sourcing Intern', 'GAOTek, Manhattan USA', 'Successfully passed the interview and received an offer for an internship at GaoTek, a technology company, where the role focuses on project support and involves design and technical tasks.'),
	(3, '2024', '2024', 'Video Editor Intern', 'Cosmeloka', 'Gained experience as a Video Editor Intern at Cosmeloka, a company focused on beauty and cosmetics. In this role, tasks included editing promotional and educational videos related to the brand\'s products.');
/*!40000 ALTER TABLE `experience` ENABLE KEYS */;

-- Dumping structure for table cicabaru.levels
CREATE TABLE IF NOT EXISTS `levels` (
  `id_skill` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(50) NOT NULL,
  `skill_percentage` int(11) NOT NULL,
  PRIMARY KEY (`id_skill`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cicabaru.levels: ~4 rows (approximately)
DELETE FROM `levels`;
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
INSERT INTO `levels` (`id_skill`, `skill_name`, `skill_percentage`) VALUES
	(1, 'JS', 86),
	(2, 'PHP', 66),
	(3, 'HTML', 96),
	(4, 'Bootstrap', 76);
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;

-- Dumping structure for table cicabaru.personal_info
CREATE TABLE IF NOT EXISTS `personal_info` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `attribute_name` varchar(50) NOT NULL,
  `attribute_value` varchar(100) NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cicabaru.personal_info: ~8 rows (approximately)
DELETE FROM `personal_info`;
/*!40000 ALTER TABLE `personal_info` DISABLE KEYS */;
INSERT INTO `personal_info` (`id_info`, `attribute_name`, `attribute_value`) VALUES
	(1, 'Birthday', 'Oct 5 2005'),
	(2, 'Age', '19'),
	(3, 'Website', 'www.portpolio.com'),
	(4, 'Email', 'cicaluci5@gmail.com'),
	(5, 'Degree', 'CS'),
	(6, 'Phone', '+62 8128 0554 67'),
	(7, 'City', 'Indonesia'),
	(8, 'Freelance', 'Available');
/*!40000 ALTER TABLE `personal_info` ENABLE KEYS */;

-- Dumping structure for table cicabaru.portfolio
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id_portfolio` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_portfolio`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cicabaru.portfolio: ~5 rows (approximately)
DELETE FROM `portfolio`;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` (`id_portfolio`, `image_path`, `title`, `description`) VALUES
	(1, 'images/portfolio/merah6.jpg', 'Web Design Project', 'This project involved creating a responsive web design for a local business. The main challenge was to create a user-friendly interface that works well on both desktop and mobile devices. I used HTML5, CSS3, and JavaScript to build this website, focusing on performance and accessibility.'),
	(2, 'images/portfolio/bugarku.jpg', 'Bugarku Mobile App UI Design', 'For this project, I designed the user interface for a fitness tracking mobile app. The goal was to create an intuitive and visually appealing design that motivates users to stay active. I used Figma for the design process and collaborated closely with the development team to ensure smooth implementation.'),
	(3, 'images/portfolio/Projek1.jpg', 'Peluk Mobile App UI Design', 'The Peluk project by Ibu Maya is an initiative focused on the prevention and management of Tuberculosis (TB). The goal of the application is to raise awareness and provide support to individuals affected by TB through practical and technology-driven features.'),
	(4, 'images/portfolio/tbshield.jpg', 'TB Shield Mobile App UI Design', 'The TB Shield project is centered on technology-based solutions to Tuberculosis (TB) prevention and management, but specific details are currently unavailable.'),
	(5, 'images/portfolio/jkn.jpg', 'Re-Design Mobile JKN', 'For this project, I redesigned the user interface for the Mobile JKN app. The goal was to create an intuitive and visually appealing design that improves user experience and accessibility. I used Figma for the design process and focused on enhancing the app\'s functionality and visual appeal.');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;

-- Dumping structure for table cicabaru.services
CREATE TABLE IF NOT EXISTS `services` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `icon_class` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cicabaru.services: ~6 rows (approximately)
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id_service`, `icon_class`, `title`, `description`) VALUES
	(1, 'fa fa-mobile-alt', 'UI/UX Design', 'This involves creating user interfaces (UI) and experiences (UX) that are visually appealing and intuitive.'),
	(2, 'fa fa-laptop-code', 'Web Design', 'This refers to the process of creating the layout, visual appearance, and functionality of a website.'),
	(3, 'fa fa-palette', 'Poster Design', 'Involves creating eye-catching posters with the right balance of text and graphics.'),
	(4, 'fa fa-code', 'Front-End', 'This refers to the coding and development of the parts of a website or app that users interact with directly.'),
	(5, 'fa fa-search', 'Pro Stalker', 'Likely a humorous or playful term. It could imply someone skilled at finding information.'),
	(6, 'fa fa-bullhorn', 'Yapping Enthusiast', 'Another playful term, possibly referring to someone who enjoys talking or discussing ideas extensively.');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table cicabaru.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id_skill` int(11) NOT NULL AUTO_INCREMENT,
  `icon_class` varchar(50) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_skill`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cicabaru.skills: ~9 rows (approximately)
DELETE FROM `skills`;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id_skill`, `icon_class`, `skill_name`) VALUES
	(1, 'fa fa-palette', 'UI/UX Design'),
	(2, 'fa fa-code', 'Web Development'),
	(3, 'fa fa-pencil-alt', 'Graphic Design'),
	(4, 'fa fa-cube', 'Prototyping'),
	(5, 'fa fa-chart-line', 'Wireframing'),
	(6, 'fa fa-search', 'User Research'),
	(7, 'fa fa-code', 'HTML/CSS'),
	(8, 'fab fa-js', 'JavaScript'),
	(9, 'fa fa-comments', 'Yapping');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
