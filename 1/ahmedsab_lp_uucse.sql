-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2021 at 02:36 PM
-- Server version: 10.3.29-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahmedsab_lp_uucse`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_question_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_correct` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `exam_question_id`, `user_id`, `answer`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 1, 34, '1', NULL, NULL, NULL),
(2, 2, 34, '2', NULL, NULL, NULL),
(3, 3, 34, '1', NULL, NULL, NULL),
(4, 4, 34, 'AI can be described as an area of computer science that simulates human intelligence in machines. It’s about smart algorithms making decisions based on the available data.', NULL, NULL, NULL),
(5, 1, 4, '3', NULL, NULL, NULL),
(6, 2, 4, '4', NULL, NULL, NULL),
(7, 3, 4, '3', NULL, NULL, NULL),
(8, 4, 4, 'Its a branch of EEE', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` int(11) NOT NULL,
  `session` int(11) NOT NULL DEFAULT 1 COMMENT '1-day,2-evening',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `name`, `session`, `created_at`, `updated_at`) VALUES
(1, 42, 1, NULL, NULL),
(2, 43, 2, NULL, '2021-02-01 10:06:02'),
(7, 44, 2, '2021-02-03 07:20:28', '2021-02-03 07:20:28'),
(9, 45, 1, '2021-03-04 09:48:53', '2021-03-04 09:48:53'),
(10, 46, 1, '2021-03-04 09:49:02', '2021-03-04 09:49:02'),
(11, 47, 1, '2021-03-04 09:49:10', '2021-03-04 09:49:10'),
(12, 48, 1, '2021-03-04 09:49:19', '2021-03-04 09:49:19'),
(13, 49, 1, '2021-03-04 09:49:26', '2021-03-04 09:49:26'),
(14, 50, 1, '2021-03-04 09:49:37', '2021-03-04 09:49:37'),
(15, 51, 1, '2021-03-04 09:49:49', '2021-03-04 09:49:49'),
(16, 52, 1, '2021-03-04 09:50:47', '2021-03-04 09:50:47'),
(17, 53, 1, '2021-03-04 09:51:03', '2021-03-04 09:51:03'),
(18, 41, 1, '2021-03-04 09:51:11', '2021-03-04 09:51:11'),
(19, 54, 1, '2021-03-04 09:51:21', '2021-03-04 09:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donations`
--

CREATE TABLE `blood_donations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `donation_date` date NOT NULL,
  `redonation_date` date NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frequency` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_donations`
--

INSERT INTO `blood_donations` (`id`, `user_id`, `donation_date`, `redonation_date`, `blood_group`, `frequency`, `created_at`, `updated_at`) VALUES
(1, 34, '2021-02-20', '2021-05-20', 'A+', 1, '2021-02-20 14:38:02', NULL),
(2, 4, '2020-12-25', '2021-03-25', 'A-', 2, '2021-02-20 09:16:30', '2021-02-20 09:26:47'),
(6, 29, '2021-02-23', '2021-09-02', 'AB+', 3, '2021-02-23 10:32:12', '2021-02-23 10:33:13'),
(7, 57, '2020-12-16', '2021-04-09', 'O+', 3, '2021-03-11 10:41:03', '2021-03-11 10:41:03'),
(8, 52, '2021-03-04', '2021-06-10', 'O-', 2, '2021-03-11 10:41:58', '2021-03-11 10:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `borroweds`
--

CREATE TABLE `borroweds` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `library_id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `date_taken` date NOT NULL,
  `date_to_submit` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borroweds`
--

INSERT INTO `borroweds` (`id`, `user_id`, `library_id`, `amount`, `date_taken`, `date_to_submit`, `created_at`, `updated_at`) VALUES
(6, 34, 3, 10, '2021-02-17', '2021-02-26', '2021-02-16 09:34:02', '2021-02-16 09:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `bus_schedules`
--

CREATE TABLE `bus_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `starting_station` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_days` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_schedules`
--

INSERT INTO `bus_schedules` (`id`, `type`, `starting_station`, `time`, `route`, `destination`, `active_days`, `created_at`, `updated_at`) VALUES
(1, 1, 'Shibbari', '07:00', 'Gajipur Chourasta - College Gate - Uttara Campus', 'Permanent Campus', 'Daily', NULL, NULL),
(2, 1, 'Maona', '07:15', 'Hotapara - Rajendrapur Chourasta - Gajipur Chourasta - Uttara ', 'Uttara', 'Daily', NULL, NULL),
(3, 2, 'Uttara', '13:30', 'College Gate - Bypass - Gajipur Chowrasta - Shibbari', 'Shibbari', 'Daily (Except Friday)', NULL, NULL),
(4, 2, 'Uttara', '14:00', 'College Gate - Bypass - Konabari - Shibbari', 'Shibbari', 'Daily (Except Friday)', '2021-02-18 07:56:11', '2021-02-18 07:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `image`, `description`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Programming Club', 'default.png', 'We are an enthusiastic group of ecology and environmental science students and researchers from the University of Edinburgh. We want to replace statistics anxiety and code fear with inspiration and motivation to learn. We believe that coding can be really fun and also understand the importance of quantitative skills for professional development.\r\n\r\nOver the last four years we have been writing tutorials as well as organising in-person workshops. All of our materials are free for people to use and adapt - you can find more information on organising your own workshops or using Coding Club tutorials in your teaching here.\r\n\r\nCoding Club is for everyone, regardless of their career stage or current level of knowledge. Coding Club is a place that brings people together, regardless of their gender or background. We all have the right to learn, and we believe learning is more fun and efficient when we help each other along the way.', '01723494591', 'programming.cse@uttarauniversity.edu.bd', '2021-02-20 13:48:30', NULL),
(2, 'Freelancing Club', 'freelancing-club1613830453603119352ae59.jpg', 'Freelancer Club is a leading network of content creators (video, photography, copywriting, and design professionals). We help startups and established companies source freelancers for all their content needs. Browse our talent pool\'s portfolios, past clients, skillset, experience and rates or post a project to receive quotes from creative talent in minutes.\r\n\r\nThere is no cost to source talent and we don\'t take commission so you can engage with high-end content creators whilst keeping costs down.\r\n\r\nIn addition, we also promote the companies who use our talent pool by promoting their project via our social channels (a combined 200k+ followers).\r\n\r\nPast clients include 100s of new startups and established brands such as John Lewis, BBC, Virgin, ASOS, M&S, and Vivienne Westwood.\r\n\r\nPost your first project: https://freelancerclub.net/jobs/post/team\r\nPro Members can create a professional profile with portfolio galleries, upload unlimited images, access all jobs that are posted everyday, download legal documents, access all industry discounts and much more.\r\n\r\nFreelancers can access Mentors via the site, register for free Webinar sessions and keep up to date with freelance news, articles and videos.', '880-31-620954', 'freelancing@uttarauniversity.edu.bd', '2021-02-20 08:14:13', '2021-02-20 08:14:13'),
(3, 'Robotics Club', 'robotics-club1613830592603119c09acea.png', 'Objective\r\n\r\nWe are an undergraduate Club at BRAC University that provides students with the resources to develop robots. Robotics is the branch of technology that deals with the design, construction, operation, structural disposition, manufacture and application of robots.\r\n\r\nThe concept and creation of autonomously operating machines dates back a long time, but credible research into the functionality and potential uses of robots did not grow substantially until the 20th century. And today, robotics is a rapidly growing field, as we continue to research, design and build new robots that serve various practical purposes including domestic, commercial and military. The Objective of ROBU is to make students familiar with these hand-on works on robotics.\r\n\r\nVision\r\n\r\n“Achieve your imagination through your robot” is the vision of BRAC University ROBOTICS CLUB. We want to improve the knowledge of the students about the work on robots from all around the world. In addition, we will strive to find extraordinary talents on the field of Robotics and Intelligence and make them valuable assets of our University.', '01915601505', 'robotics@uttarauniversity.edu.bd', '2021-02-20 08:16:32', '2021-02-20 08:16:32'),
(6, 'Cultural Club', 'cultural-club1615480304604a45f05b2c8.jpg', 'university cultural programs', '01402796321', '2172081011@uttarauniversity.edu.bd', '2021-03-11 10:31:44', '2021-03-11 10:31:44'),
(7, 'Sports Club', 'sports-club1615480747604a47abb81f4.jpg', 'different types sports like, football, crickets, chess, ludu, rubic cube etc.', '12345678911', '2171081102@uttarauniversity.edu.bd', '2021-03-11 10:39:07', '2021-03-11 10:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unknown user',
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complain` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `name`, `subject`, `complain`, `created_at`, `updated_at`) VALUES
(1, 'Unknown user', 'About Tution Fee', 'Tution fee is not affordable in cse department', '2021-02-18 14:47:11', NULL),
(2, 'Unknown user', 'About Lab Final', 'My lab final result was F. I doubt there is a mistake. please recheck lab final result of 42 batch', '2021-02-18 09:16:51', '2021-02-18 09:16:51'),
(3, 'Sabbir Ahmed', 'About a course', 'Teacher doesnt seem to be well-knowledged', '2021-02-18 09:18:56', '2021-02-18 09:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `batch_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `semester_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` double NOT NULL DEFAULT 3,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `batch_id`, `user_id`, `semester_id`, `image`, `name`, `code`, `description`, `credit`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 'project-ii1612358709601aa4357bc5c.jpg', 'Project II', 499, 'Week 1 Introduction, follow up on the proposals and final report and presentation from CSE 448, and meeting with project\'s advisors.\r\n\r\nWeek 2 Develop project plan for CSE 449; more research, synthesis, analysis, experimentation, modeling if needed.\r\n\r\nWeeks 3-7: System design and implementation according to the project plan.\r\n\r\nPreliminary reports: Preliminary paper and midterm progress poster presentations of all 448/449 teams.\r\n\r\nNOTE: ALL STUDENTS ARE EXPECTED TO ATTEND ALL PRESENTATIONS OF ALL GROUPS.\r\n\r\nWeeks 8-13: Final implementation, testing and documentation of the product/system; professional ethics and environmental concerns.\r\n\r\nFinal presentation of systems.\r\n\r\nWeeks 14-15: Writing the report and guidelines for presentations.', 3, 'https://meet.google.com/kgo-rkab-ptg', NULL, '2021-02-21 08:20:34'),
(2, 2, 21, 2, 'machine-learning1612350006601a8236cfaa6.jpeg', 'MACHINE LEARNING', 418, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable', 1.5, 'https://meet.google.com/kgo-rkab-ptg', NULL, '2021-02-06 07:03:12'),
(3, 1, 18, 1, 'artificial-intelligence-sessional1612606862601e6d8e8f17b.jpg', 'ARTIFICIAL INTELLIGENCE SESSIONAL', 424, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable', 1.5, 'https://meet.google.com/kgo-rkab-ptg', '2021-02-06 04:19:49', '2021-02-15 09:38:58'),
(4, 2, 19, 1, NULL, 'COMPUTER COMMUNICATION & NETWORKS', 432, NULL, 3, 'https://meet.google.com/kgo-rkab-ptg', '2021-02-21 07:12:27', '2021-03-04 09:44:18'),
(5, 1, 46, 2, 'complex-variable-lap-lace-transforms16148725516040ffe714b5a.jpg', 'COMPLEX VARIABLE & LAP LACE TRANSFORMS', 129, NULL, 3, 'https://meet.google.com/kgo-rkab-ptg', '2021-03-04 09:42:31', '2021-03-04 09:42:31'),
(6, 15, 42, 2, 'internet-programming-sessional16148742386041067e5bd8d.jpg', 'INTERNET PROGRAMMING & SESSIONAL', 422, NULL, 3, 'https://meet.google.com/kgo-rkab-ptg', '2021-03-04 10:10:38', '2021-03-04 10:10:38'),
(7, 13, 46, 4, 'measurement-instrumentation161487536860410ae861a56.jpg', 'MEASUREMENT & INSTRUMENTATION', 324, NULL, 3, 'https://meet.google.com/kgo-rkab-ptg', '2021-03-04 10:28:57', '2021-03-04 10:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `course_posts`
--

CREATE TABLE `course_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_posts`
--

INSERT INTO `course_posts` (`id`, `course_id`, `user_id`, `post`, `created_at`, `updated_at`) VALUES
(1, 3, 18, 'Hello, Welcome to the class', '2021-02-04 14:35:34', NULL),
(2, 3, 18, 'Our class will start next week', '2021-02-05 14:37:25', NULL),
(3, 2, 1, 'Get yourself introduced with following attachments', '2021-02-06 10:35:37', '2021-02-06 10:35:37'),
(5, 2, 1, 'Check this new materials before starting the class', '2021-02-07 07:17:14', '2021-02-07 07:17:14'),
(10, 3, 18, 'Guys read these files before we start our new class', '2021-02-10 08:57:05', '2021-02-10 08:57:05'),
(11, 1, 2, 'here is our class documents', '2021-02-21 07:20:50', '2021-02-21 07:20:50'),
(12, 1, 2, 'Your final presentation will be taken in next month', '2021-02-21 07:26:19', '2021-02-21 07:26:19'),
(15, 1, 1, 'hello siyam sir will take class from tomorrow .. sir please respond', '2021-02-22 06:49:51', '2021-02-22 06:49:51'),
(16, 1, 2, 'hello .. read these files', '2021-02-22 06:50:48', '2021-02-22 06:50:48'),
(17, 3, 34, 'sir I got problem in last class materials', '2021-02-22 08:17:29', '2021-02-22 08:17:29'),
(19, 3, 29, 'Sir I cant attend the class tomorrow for some problem', '2021-02-22 09:51:18', '2021-02-22 09:51:18'),
(20, 4, 2, 'Assalamu alaikum .. please read these materials before class tomorrow', '2021-02-23 10:12:02', '2021-02-23 10:12:02'),
(21, 1, 49, 'Sir assalamu alaikum', '2021-03-04 07:22:55', '2021-03-04 07:22:55'),
(22, 1, 2, 'class is going to start .. join everyone', '2021-03-11 23:25:13', '2021-03-11 23:25:13'),
(23, 1, 35, 'hello', '2021-03-20 23:37:37', '2021-03-20 23:37:37'),
(24, 1, 1, 'skfjsdkfj', '2021-05-06 08:36:01', '2021-05-06 08:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_marks` int(11) NOT NULL,
  `is_completed` int(11) NOT NULL DEFAULT 0,
  `is_open` int(11) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `course_id`, `name`, `date`, `start_time`, `end_time`, `total_marks`, `is_completed`, `is_open`, `description`, `created_at`, `updated_at`) VALUES
(1, 3, 'Artifial Intelligence Sessional Mid Term', '2021-02-06', '13:00', '14:00', 30, 0, 1, 'Mcq (7*3 = 21) + short question (3*3=9)', '2021-02-09 20:37:24', '2021-02-09 20:37:24'),
(2, 3, 'Artifial Intelligence Sessional Final', '2021-02-20', '13:00', '14:00', 30, 0, 1, 'Mcq (7*3 = 21) + short question (3*3=9)', '2021-02-10 20:37:24', '2021-02-10 20:37:24'),
(5, 3, 'Artificial Intelligence Demo Exam', '2021-02-14', '00:00', '01:12', 20, 0, 1, 'Multiple Choice (5 Questions, 2 Marks Each)', '2021-02-14 11:13:45', '2021-02-22 08:32:19'),
(6, 1, 'Project II Final', '2021-02-21', '07:26', '08:26', 30, 0, 1, '10 questions ( MCQ/Objective)', '2021-02-21 07:27:19', '2021-02-21 08:00:54'),
(8, 1, 'Final Exam 2', '2021-02-24', '08:00', '09:00', 30, 0, 1, 'mcq & short questions', '2021-02-22 06:53:24', '2021-02-22 06:55:08'),
(9, 1, 'Project II Phase III', '2021-02-25', '10:00', '11:17', 30, 0, 1, 'mcq & written', '2021-02-23 10:17:30', '2021-02-23 10:20:38'),
(11, 1, 'xyz', '2021-05-04', '20:36', '20:36', 23, 0, 1, 'mcq 2x2', '2021-05-06 08:37:09', '2021-05-06 08:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `exam_questions`
--

CREATE TABLE `exam_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` double NOT NULL,
  `option1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_answer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_questions`
--

INSERT INTO `exam_questions` (`id`, `exam_id`, `type`, `question`, `mark`, `option1`, `option2`, `option3`, `option4`, `default_answer`, `created_at`, `updated_at`) VALUES
(1, 1, 1, ' Artificial Intelligence is about_____?', 3, 'Playing a game on Computer', 'Making a machine Intelligent', 'Programming on Machine with your Own Intelligence', 'Putting your intelligence in Machine', 'Making a machine Intelligent', NULL, NULL),
(2, 1, 1, 'Who is known as the -Father of AI\"?', 3, 'Fisher Ada', 'Alan Turing', 'John McCarthy', 'Allen Newell', 'John McCarthy', NULL, NULL),
(3, 1, 1, ' Artificial Intelligence is about_____?', 3, 'Playing a game on Computer', 'Making a machine Intelligent', 'Programming on Machine with your Own Intelligence', 'Putting your intelligence in Machine', 'Making a machine Intelligent', NULL, NULL),
(4, 1, 2, 'What is artificial intelligence?', 3, NULL, NULL, NULL, NULL, '', NULL, NULL),
(5, 1, 1, 'After applying conditional Probability to a given problem, we get______', 3, '100% accurate result', 'Estimated Values', 'Wrong Values', 'None of the above', 'b. Estimated Values', '2021-02-14 08:16:44', '2021-02-14 08:16:44'),
(6, 1, 2, 'What are intelligent agents?', 3, NULL, NULL, NULL, NULL, NULL, '2021-02-14 08:18:00', '2021-02-14 08:18:00'),
(7, 2, 1, 'The probabilistic reasoning depends upon____________.', 3, 'Estimation', 'Observations', 'Likelihood', 'All of the above', 'All of the above', '2021-02-14 08:47:20', '2021-02-14 08:47:20'),
(8, 2, 2, 'What’s the most popular programming language used in AI?', 3, NULL, NULL, NULL, NULL, NULL, '2021-02-14 08:48:25', '2021-02-14 08:48:25'),
(9, 5, 1, 'Which process makes two different Logical expressions look identical?', 3, 'Unification', 'Lifting', 'Inference Process', 'None of the above', 'Unification', '2021-02-14 11:15:01', '2021-02-14 11:15:01'),
(10, 5, 1, 'The process of capturing the inference process as Single Inference Rule is known as:', 3, 'Clauses', 'Ponens', 'Modus Ponens', 'Variables', 'Modus Ponens', '2021-02-14 11:15:57', '2021-02-14 11:15:57'),
(11, 5, 2, 'What are intelligent agents?', 3, NULL, NULL, NULL, NULL, NULL, '2021-02-14 11:16:18', '2021-02-14 11:16:18'),
(12, 6, 1, 'What are intelligent agents?', 3, '100% accurate result', 'Observations', 'Inference Process', 'All of the above', 'All of the above', '2021-02-21 08:04:25', '2021-02-21 08:04:25'),
(13, 6, 2, 'The process of capturing the inference process as Single Inference Rule is known as:', 4, NULL, NULL, NULL, NULL, NULL, '2021-02-21 08:04:36', '2021-02-21 08:04:36'),
(14, 8, 1, 'What are intelligent agents?', 3, '100% accurate result', 'Observations', 'Wrong Values', 'All of the above', 'All of the above', '2021-02-22 06:54:02', '2021-02-22 06:54:02'),
(15, 8, 1, 'After applying conditional Probability to a given problem, we get______', 3, 'Estimation', 'Estimated Values', 'Modus Ponens', 'Variables', 'All of the above', '2021-02-22 06:54:22', '2021-02-22 06:54:22'),
(16, 8, 2, 'The probabilistic reasoning depends upon____________.', 3, NULL, NULL, NULL, NULL, NULL, '2021-02-22 06:54:33', '2021-02-22 06:54:33'),
(17, 9, 1, 'What are intelligent agents?', 3, '100% accurate result', 'Estimated Values', 'Modus Ponens', 'All of the above', 'All of the above', '2021-02-23 10:19:41', '2021-02-23 10:19:41'),
(18, 9, 2, 'After applying conditional Probability to a given problem, we get______', 3, NULL, NULL, NULL, NULL, NULL, '2021-02-23 10:19:53', '2021-02-23 10:19:53'),
(19, 9, 2, 'The probabilistic reasoning depends upon____________.', 6, NULL, NULL, NULL, NULL, NULL, '2021-02-23 10:20:11', '2021-02-23 10:20:11'),
(22, 11, 1, 'What are intelligent agents?', 3, '100% accurate result', 'Observations', 'Wrong Values', 'All of the above', 'All of the above', '2021-05-06 08:40:57', '2021-05-06 08:40:57'),
(23, 11, 1, 'After applying conditional Probability to a given problem, we get______', 3, 'Estimation', 'Observations', 'Wrong Values', 'All of the above', 'All of the above', '2021-05-06 08:41:22', '2021-05-06 08:41:22'),
(24, 11, 2, 'Which process makes two different Logical expressions look identical?', 4, NULL, NULL, NULL, NULL, NULL, '2021-05-06 08:41:28', '2021-05-06 08:41:28');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `book_name`, `image`, `subject`, `details`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'Data Structures using C & C++', 'data-structures-using-c-c1613483703602bceb78748b.jpg', 'C++', 'First Edition', 10, NULL, '2021-03-19 10:40:14'),
(2, 'Introduction to Computers', 'introduction-to-computers1613483507602bcdf3bd210.jpg', 'Computers', 'Fourth Edition', 50, NULL, '2021-02-23 08:28:42'),
(3, 'Management Information System', 'management-information-system1613483144602bcc884388a.jpg', 'Management', 'Second Edition', 25, '2021-02-16 07:45:44', '2021-02-23 10:28:52');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_31_131956_create_batches_table', 2),
(5, '2021_01_31_132805_create_student_batches_table', 3),
(7, '2021_02_01_140742_create_teacher_courses_table', 4),
(11, '2021_02_05_094101_create_semesters_table', 6),
(13, '2021_02_01_135849_create_courses_table', 7),
(17, '2021_02_06_132825_create_course_posts_table', 8),
(18, '2021_02_06_132845_create_post_files_table', 8),
(19, '2021_02_06_132904_create_post_comments_table', 8),
(21, '2021_02_10_152334_create_exams_table', 9),
(22, '2021_02_14_121140_create_exam_questions_table', 10),
(23, '2021_02_14_124631_create_answers_table', 11),
(27, '2021_02_14_130926_create_results_table', 12),
(29, '2021_02_15_135107_create_payments_table', 13),
(30, '2021_02_16_111911_create_notices_table', 14),
(32, '2021_02_16_124001_create_libraries_table', 15),
(33, '2021_02_16_140214_create_borroweds_table', 16),
(34, '2021_02_18_130907_create_bus_schedules_table', 17),
(36, '2021_02_18_144044_create_complains_table', 18),
(37, '2021_02_19_135612_create_routines_table', 19),
(40, '2021_02_20_134248_create_clubs_table', 20),
(42, '2021_02_20_142523_create_blood_donations_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `posted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `posted_by`, `image`, `headline`, `description`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'Sabbir Ahmed', 'admission-fair1614349577603905095e236.jpg', 'Admission Fair', 'New Admission Fair Started. Get 100% Scholarship Now.', 1, '2021-02-16 11:46:25', '2021-02-26 08:26:17'),
(3, 'Sabbir Ahmed', 'general-instructions-of-online-classes-spring-2020-202116143494076039045fa8c8a.jpg', 'General Instructions of Online Classes (Spring 2020-2021)', 'Join the virtual classroom on time (as per the class routine). Look for your specific class under the teams in MS Teams and click join.\r\nStudents speakers will be enabled, but microphone and camera will be disabled. If any student needs to make a query, click ‘raise hand’ or post a text message in the chat window, if required, the teacher may ask you to unmute the microphone or switch on camera as appropriate.\r\nStay in real time video presence. Teachers will collect the attendance report automatically. The report contains name, join time, and leave time of all participants.\r\nBe presentably attired for the class. Teacher may ask you to switch on your camera.\r\nSit on a table and straight seat.\r\nKeep the room quiet.\r\nBe prepared and fresh for the class. Avoid leaving the class in the middle.\r\nDo not engage into other communications (conversation, phone call or sms) during the class.\r\nAvoid having food during the class time.\r\nUse headphone/ earphone and microphone for better performance.\r\nTeachers may record the lecture for future reference. Students are not allowed to record any part of the lecture by any means.\r\nAny misuse of the lecture sessions or modified or unauthorized posting of any part of the lecture sessions in any social media group will be a major offense and will lead to disciplinary action.', 1, '2021-02-16 10:22:40', '2021-02-28 07:11:50'),
(7, 'Sabbir Ahmed', 'notice-for-holiday-on-21st-february-202116143498666039062a0c19d.jpg', 'Notice for Holiday on 21st February 2021', 'All concerned may kindly be informed that the academic and administrative activities of the University will remain closed on 21\" February 2021 on the occasion of Shaheed Day & International Mother Language Day. \r\nAll activities of the university will resume on 22\" February 2021.', 1, '2021-02-26 08:31:06', '2021-02-26 08:31:06'),
(8, 'Sabbir Ahmed', NULL, 'NOTICE FOR LEAVE EXTENSION', 'All concerned may kindly be informed that as per directives of the Government, the academic and administrative activities of Uttara University will remain closed up to January 30, 2021 as a preventive measure against spread of Covid- 1 9 outbreak. \r\nDuring this period, academic and administrative activities of the University will continue online and administrative offices will remain open to a limited extent. \r\nTherefore, the academic and non-academic staffs will stay at home and will provide essential support and maintain necessary communication over phone and online with the concerned departments/offices/administration. \r\nAll activities of the university will resume on February 01, 2021.', 1, '2021-02-26 08:39:20', '2021-02-26 08:39:20'),
(9, 'Rabeya Islam Emu', 'ramadan-kareem16148747786041089a62d96.jpg', 'RAMADAN KAREEM', 'The Islamic calendar follows the phases of the moon, commonly known as the lunar cycle. As a result, the Holy month of Ramadan falls approximately 10 days earlier each year in the Gregorian calendar. The Ramadan start date for 2021 is expected to begin on Monday 12th April 2021, following the sighting of the moon over Mecca. Lasting for 30 days, Ramadan will end on Tuesday 11th May 2021, with the celebratory days of Eid al-Fitr starting on Wednesday 12th May 2021 or Thursday 13th May 2021.', 1, '2021-03-04 10:19:38', '2021-03-04 10:19:38');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `semester_id` int(10) UNSIGNED NOT NULL,
  `semester_fee` double NOT NULL DEFAULT 4000,
  `per_credit_fee` double NOT NULL,
  `total_credit` double NOT NULL,
  `payable` double NOT NULL,
  `paid` double NOT NULL,
  `due` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `semester_id`, `semester_fee`, `per_credit_fee`, `total_credit`, `payable`, `paid`, `due`, `created_at`, `updated_at`) VALUES
(1, 34, 1, 4000, 2000, 4.5, 13000, 6000, 7000, '2021-02-15 14:41:20', '2021-02-15 10:12:33'),
(2, 4, 1, 4000, 2000, 4.5, 13000, 5000, 8000, '2021-02-15 10:04:47', '2021-02-16 10:10:27'),
(5, 29, 1, 4000, 2000, 4.5, 13000, 2000, 11000, '2021-02-15 10:47:30', '2021-02-23 10:30:03'),
(6, 29, 2, 4000, 2000, 0, 4000, 3970, 30, '2021-02-23 08:23:40', '2021-02-23 08:24:01'),
(7, 4, 2, 4000, 2000, 0, 4000, 2000, 2000, '2021-02-23 08:23:50', '2021-02-23 08:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `course_post_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 5, 4, 'ok', '2021-02-01 13:39:00', NULL),
(2, 5, 29, 'Thank you', '2021-02-07 13:40:04', NULL),
(3, 5, 4, 'I got some problem sir. I dont understand the second file\'s content', '2021-02-07 14:13:44', NULL),
(13, 12, 2, 'make sure you are prepared', '2021-02-21 07:29:28', '2021-02-21 07:29:28'),
(15, 15, 2, 'ok I got it', '2021-02-22 06:50:11', '2021-02-22 06:50:11'),
(17, 17, 18, 'please call me tomorrow after lunch', '2021-02-22 08:25:11', '2021-02-22 08:25:11'),
(18, 17, 34, 'ok sir can you please give me your number?', '2021-02-22 08:26:03', '2021-02-22 08:26:03'),
(20, 17, 34, 'Ok sir I got your number from one of my friend. I am gonna call u tomorrow.', '2021-02-22 08:29:59', '2021-02-22 08:29:59'),
(21, 16, 34, 'ok sir .. thank you', '2021-02-22 09:10:10', '2021-02-22 09:10:10'),
(22, 16, 29, 'ok sir got it', '2021-02-23 10:13:21', '2021-02-23 10:13:21'),
(23, 16, 2, 'thanks for responding', '2021-02-23 10:13:43', '2021-02-23 10:13:43'),
(24, 21, 2, 'oalaimum assalam .. khobor nai keno ?', '2021-03-04 07:23:45', '2021-03-04 07:23:45'),
(25, 22, 29, 'ok sir.. I am joining', '2021-03-11 23:25:51', '2021-03-11 23:25:51'),
(27, 22, 2, 'ok', '2021-03-11 23:26:13', '2021-03-11 23:26:13'),
(28, 19, 1, 'thank you', '2021-04-01 05:22:41', '2021-04-01 05:22:41'),
(29, 19, 1, 'got it', '2021-04-01 05:23:19', '2021-04-01 05:23:19'),
(30, 24, 1, 'thank you', '2021-05-06 08:36:16', '2021-05-06 08:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `post_files`
--

CREATE TABLE `post_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_post_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_files`
--

INSERT INTO `post_files` (`id`, `course_post_id`, `file`, `created_at`, `updated_at`) VALUES
(1, 3, 'machine-learning601ec55912779_1612629337.jpg', '2021-02-06 10:35:37', '2021-02-06 10:35:37'),
(2, 3, 'machine-learning601ec5591380d_1612629337.pdf', '2021-02-06 10:35:37', '2021-02-06 10:35:37'),
(3, 5, 'machine-learning601fe85a693f1_1612703834.pdf', '2021-02-07 07:17:14', '2021-02-07 07:17:14'),
(4, 5, 'machine-learning601fe85a6cca5_1612703834.pdf', '2021-02-07 07:17:14', '2021-02-07 07:17:14'),
(8, 10, 'artificial-intelligence-sessional6023f441f26ed_1612969025.pptx', '2021-02-10 08:57:05', '2021-02-10 08:57:05'),
(9, 10, 'artificial-intelligence-sessional6023f441f37fa_1612969025.pptx', '2021-02-10 08:57:05', '2021-02-10 08:57:05'),
(10, 11, 'project-ii60325e324aca2_1613913650.docx', '2021-02-21 07:20:50', '2021-02-21 07:20:50'),
(11, 11, 'project-ii60325e324d490_1613913650.pdf', '2021-02-21 07:20:50', '2021-02-21 07:20:50'),
(16, 16, 'project-ii6033a8a82acae_1613998248.docx', '2021-02-22 06:50:48', '2021-02-22 06:50:48'),
(17, 16, 'project-ii6033a8a82d129_1613998248.pdf', '2021-02-22 06:50:48', '2021-02-22 06:50:48'),
(18, 17, 'artificial-intelligence-sessional6033bcf949234_1614003449.png', '2021-02-22 08:17:29', '2021-02-22 08:17:29'),
(19, 17, 'artificial-intelligence-sessional6033bcf94b564_1614003449.png', '2021-02-22 08:17:29', '2021-02-22 08:17:29'),
(22, 20, 'computer-communication-networks60352952a603f_1614096722.docx', '2021-02-23 10:12:02', '2021-02-23 10:12:02'),
(23, 20, 'computer-communication-networks60352952a7025_1614096722.pdf', '2021-02-23 10:12:02', '2021-02-23 10:12:02'),
(24, 22, 'project-ii604afb397e423_1615526713.pdf', '2021-03-11 23:25:13', '2021-03-11 23:25:13'),
(25, 23, 'project-ii6056dba169154_1616305057.pdf', '2021-03-20 23:37:37', '2021-03-20 23:37:37'),
(26, 24, 'project-ii6093fed154844_1620311761.png', '2021-05-06 08:36:01', '2021-05-06 08:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `a1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a9` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a10` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_marks` double DEFAULT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `exam_id`, `user_id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `total_marks`, `result`, `created_at`, `updated_at`) VALUES
(1, 1, 34, '1', '2', '3', 'dont know', '3', 'dont know', NULL, NULL, NULL, NULL, 20, 'A', '2021-02-14 10:51:30', '2021-02-15 05:14:35'),
(2, 5, 34, '1', '4', 'jani na', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, 'A', '2021-02-14 11:17:46', '2021-02-15 07:28:21'),
(3, 5, 4, '4', '2', 'Intellgent Agents', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 'F', '2021-02-15 05:18:44', '2021-02-15 05:20:09'),
(4, 5, 1, '3', '4', 'Jani na', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'F', '2021-02-15 07:22:16', '2021-02-15 07:23:47'),
(5, 6, 1, '4', 'jani na', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'F', '2021-02-21 08:06:00', '2021-02-21 08:07:14'),
(6, 8, 1, '3', '1', 'jani na', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 'F', '2021-02-22 06:55:53', '2021-02-22 06:56:37'),
(7, 2, 34, '1', 'Python', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, 'A+', '2021-02-22 08:44:11', '2021-02-22 08:46:24'),
(8, 9, 29, '4', 'kisu ekta', 'kisu ekta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'F', '2021-02-23 10:23:19', '2021-02-23 10:25:34'),
(9, 8, 29, '2', '3', 'kisu ekta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, 'A+', '2021-02-23 10:23:45', '2021-02-23 10:25:09'),
(11, 9, 35, '2', 'probability', 'answer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, 'A', '2021-03-20 23:38:41', '2021-03-20 23:39:03'),
(12, 11, 34, '1', '2', 'identical', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, 'A+', '2021-05-06 08:44:35', '2021-05-06 08:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `day`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Saturday', 'saturday1613746146602fcfe2748aa.png', '2021-02-19 13:58:13', '2021-02-19 08:49:06'),
(2, 'Sunday', 'sunday1613746180602fd004c706e.png', '2021-02-19 13:58:13', '2021-02-19 08:49:40'),
(3, 'Monday', 'monday1613745796602fce84aa098.png', '2021-02-19 08:43:16', '2021-02-19 08:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(10) UNSIGNED NOT NULL,
  `start_date` date DEFAULT NULL,
  `is_current` int(11) NOT NULL DEFAULT 1 COMMENT '1-yes|0-no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `name`, `year`, `start_date`, `is_current`, `created_at`, `updated_at`) VALUES
(1, 'spring 21', 21, '2021-01-01', 1, NULL, '2021-02-06 04:11:01'),
(2, 'fall 20', 20, '2020-08-02', 0, '2021-02-05 05:25:07', '2021-02-06 04:11:11'),
(4, 'summer20', 20, '2021-05-01', 0, '2021-03-04 09:52:33', '2021-03-04 09:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `student_batches`
--

CREATE TABLE `student_batches` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_batches`
--

INSERT INTO `student_batches` (`id`, `user_id`, `batch_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, '2021-02-15 10:02:16'),
(4, 29, 1, '2021-01-31 10:39:45', '2021-02-01 09:47:47'),
(10, 34, 1, '2021-02-10 09:01:30', '2021-05-06 08:39:41'),
(11, 48, 1, '2021-03-03 07:15:42', '2021-03-03 07:15:42'),
(12, 49, 11, '2021-03-03 09:55:44', '2021-03-13 00:35:23'),
(13, 50, 1, '2021-03-04 09:22:31', '2021-03-04 09:22:31'),
(14, 51, 17, '2021-03-04 09:25:04', '2021-03-13 00:32:24'),
(15, 52, 17, '2021-03-04 09:31:03', '2021-03-13 00:36:15'),
(16, 53, 15, '2021-03-04 09:33:02', '2021-03-13 00:36:01'),
(17, 54, 16, '2021-03-04 23:12:44', '2021-03-13 00:36:36'),
(18, 55, 1, '2021-03-04 23:15:59', '2021-03-04 23:15:59'),
(19, 56, 13, '2021-03-04 23:17:34', '2021-03-13 00:33:21'),
(20, 57, 2, '2021-03-04 23:19:19', '2021-03-13 00:31:26'),
(21, 58, 12, '2021-03-04 23:21:11', '2021-03-13 00:36:57'),
(22, 59, 10, '2021-03-04 23:22:55', '2021-03-13 00:33:51'),
(23, 60, 18, '2021-03-04 23:25:10', '2021-03-13 00:37:45'),
(24, 61, 7, '2021-03-04 23:27:10', '2021-03-13 00:33:35'),
(25, 62, 14, '2021-03-04 23:28:25', '2021-03-13 00:34:05'),
(26, 63, 12, '2021-03-04 23:29:39', '2021-03-13 00:32:07'),
(27, 64, 18, '2021-03-04 23:35:34', '2021-03-13 00:35:40'),
(28, 65, 13, '2021-03-04 23:37:03', '2021-03-13 00:38:03'),
(29, 66, 9, '2021-03-04 23:38:51', '2021-03-13 00:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_courses`
--

CREATE TABLE `teacher_courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_courses`
--

INSERT INTO `teacher_courses` (`id`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) NOT NULL DEFAULT 1,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `phone`, `address`, `gender`, `bio`, `image`, `user_role`, `designation`, `is_approved`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sabbir Ahmed', 'sabbir', 'sabbir@uttarauniversity.edu.bd', NULL, '$2y$10$sWymPoNrsSZBWUPCdYko0ekMlBvEvrDanu.I36YAeEDA2INRHdqhm', '01723494591', '241/3, east nakhalpara, tejgaon, dhaka', 1, 'Coding is not an easy task to be as a normal programmer. But, If you try hard and keep a specific goal in your mind, then it is the simplest thing that makes you great. Let’s see who is in our popular computer programmers in the world for the 2017-2018 year.\r\n\r\nSo We are going to tell you about the Great Programmers in the World who makes our life more reliable and easy. By Which these worlds are connected to other people. It is very easy to technology by that coder, developer or we can say that Programmer. They are top best Coder of all the time.\r\n\r\nThe Programmer, like the poet, works only slightly removed from pure thought-stuff. He builds his castles in the air, from air, creating by exertion of the imagination.', 'sabbir-ahmed16140853026034fcb6e9b60.png', 1, NULL, 1, NULL, '2021-01-01 13:27:39', '2021-02-23 07:19:48'),
(2, 'Golam Hafeez Siyam', 'siyam', 'siyam@uttarauniversity.edu.bd', NULL, '$2y$10$REXT7y4ueVV/cvzpPVjjGeRyAVTyXwtAKcLAkJOe0rrSsVq.cHWOS', '01723494592', '241/3, sector-12, uttara, dhaka', 1, NULL, 'golam-hafeez-siyam1612015053601565cd2c3ca.jpg', 2, '7', 1, NULL, '2021-01-01 13:27:43', '2021-03-13 04:17:21'),
(3, 'Rafiqul Islam', 'rafiqul', 'rafiqul@uttarauniversity.edu.bd', NULL, '$2y$10$Vpymw3Vi2o.Bkkzp0MF4.eoq6RNsshybFINCvUnunDtBbc1iZYl9C', '01723494593', '241/3, road-6, basabo, khilgaon, dhaka', 1, NULL, NULL, 3, NULL, 1, NULL, '2021-02-01 13:27:48', NULL),
(4, 'Rabeya Islam Emu', '2172081011', '2172081011@uttarauniversity.edu.bd', NULL, '$2y$10$q05exNgCXM7/GguTZ8aI0Ogun0cyAVsgoWBJJCzLjN8A4laJ/2jAu', '01723494594', '241/3, dakhshinkhan, uttara, dhaka', 2, NULL, 'rabeya-islam-emu1614776830603f89fe2ee0f.png', 4, NULL, 1, NULL, '2020-12-01 13:27:10', '2021-03-03 07:07:10'),
(5, 'Admin', 'admin', 'admin@uttarauniversity.edu.bd', NULL, '$2y$10$jFyZkBloRMVWAozjwRxOP.Il/yZ3GzGuuyxmwPyf9Ee7SEAYUsD5.', '01723494576', 'B-16/5, Govt. Officer\'s Quarter, Sector-8, Uttara', 1, NULL, NULL, 1, NULL, 1, NULL, '2021-01-28 10:03:23', '2021-03-13 04:14:50'),
(7, 'Dr Shirin Sorna', 'Sorno', 'sorno@gmail.com', NULL, '$2y$10$x/jWTpcA.SYfi8yyDmVQFOLgYM2/DI4N7qdEG413BwYOsO1Kkamr2', '0178989565', 'Mirpur Dhaka', 2, NULL, 'dr-shirin-sorna161194047360144279e992c.jpg', 1, NULL, 1, NULL, '2021-01-28 10:10:13', '2021-01-29 11:14:33'),
(18, 'AL SHAHRIAR RUBEL', '23432423', 'rubel@uttarauniversity.edu.bd', NULL, '$2y$10$qbsopcErjxKnvVMKFjcdW.X5P6jHEXcVumjJfFfoxRuJlWkYbiXsi', '017234232394324324591', 'Cha-73/3, North Badda, Gulshan', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate. Vivamus et facilisis mauris. Maecenas nec massa auctor, ultricies massa eu, tristique erat. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui\r\n\r\nlectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat. lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat.', 'al-shahriar-rubel1612015569601567d18f387.jpg', 2, '7', 1, NULL, '2021-01-30 07:06:36', '2021-02-28 07:20:52'),
(19, 'RIASAAD HAQUE', '170684', 'sadi@uttarauniversity.edu.bd', NULL, '$2y$10$T0Qo9XL1M7d7MZumVrlIS.4TmLiDWIDpWss.AEckkNg1i1yVNExLK', '01898494591', '8 Banani, Road#17a, Dhaka', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'riasaad-haque16120156746015683aa7236.jpg', 2, '6', 1, NULL, '2021-01-30 07:22:42', '2021-02-28 07:20:17'),
(21, 'SAMIRAH ANWAR', '180812', 'samirah@uttarauniversity.edu.bd', NULL, '$2y$10$gf9yT0tQYbgFxLhXKTrOSuYdAX4asgX/nY4tdo82IpEAgLqrYxrAG', '+88029349394', '17, Moghbazar, New Eskaton Road', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'samirah-anwar161201679360156c995b65c.jpg', 2, '7', 1, NULL, '2021-01-30 08:26:33', '2021-02-28 07:22:33'),
(29, 'Farhan Siddique Sadi', '2172081009', '2172081009@uttarauniversity.edu.bd', NULL, '$2y$10$Ol.gak6hXGj4WaHzQ8BlOehvQgBmS8PrjoVc50pj9p.Yj4o..2wuy', '880029121542', '1b Sonargaon Road, Dhaka', 1, 'What Goes around, Comes around 😎', 'farhan-siddique-sadi16121122946016e1a630ff7.jpg', 4, NULL, 1, NULL, '2021-01-31 10:39:45', '2021-03-13 00:37:28'),
(34, 'Afsana Alam', '2172081013', '2172081013@uttarauniversity.edu.bd', NULL, '$2y$10$EVCeu2qIDe.D.KOXPIiQBu8G.Z3ZkNMFqZEOUayJomQ8ZaIfV2PFW', '01842259466', 'sector-8, uttara', 2, 'She attended college of Uttara Girls School & College', NULL, 4, NULL, 1, NULL, '2021-02-10 09:01:30', '2021-05-06 08:39:41'),
(35, 'Farhan Siddique Sadi', 'farhan', 'farhan@uttarauniversity.edu.bd', NULL, '$2y$10$1rdXX44sWPIyE/G6YI1Qt.6NpU33lyV8I9nW5qo2970eMf.9r0CSW', '05594488778', '2851 Island Avenue', 1, NULL, 'farhan-siddique-sadi1614534440603bd7286d207.jpg', 1, NULL, 1, NULL, '2021-02-28 11:47:20', '2021-02-28 11:47:20'),
(36, 'Rabeya Islam Emu', 'rabeya', 'rabeya@uttarauniversity.edu.bd', NULL, '$2y$10$QGnAUA/swUeFYFbXqSnpxOhXDoKaM0DahfdSN0fGBmR9IjSuMghjK', '01956447855664', '2851 Island Avenue', 2, NULL, 'rabeya-islam-emu1614596526603cc9ae7b8f8.PNG', 1, NULL, 1, NULL, '2021-02-28 12:07:00', '2021-03-18 03:12:19'),
(37, 'Afsana Alam', 'afsana', 'afsana@uttarauniversity.edu.bd', NULL, '$2y$10$HTNGS1voWc44TMZLFuDpPeNf3Boy8pYnqEASVvaYpK1.HtMROG4uW', '0159989756654', '2851 Island Avenue', 2, NULL, NULL, 1, NULL, 1, NULL, '2021-02-28 12:07:54', '2021-02-28 12:07:54'),
(38, 'DR. MD. MIJANUR RAHMAN', 'mizanur.cse', 'mizanur.cse@uttarauniversity.edu.bd', NULL, '$2y$10$n5vzvNG299Q4JbkUhTrRgugLOapdaGaZM4oGpvkqUnqbrvyADS0hG', '01402796321', 'uttara dhaka-1230', 1, 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', 'dr-md-mijanur-rahman1614598697603cd2299ebeb.PNG', 2, '1', 1, NULL, '2021-03-01 05:24:05', '2021-03-01 05:38:17'),
(39, 'DR. A.H.M. SAIFULLAH SADI', 'saifullah.cse', 'saifullah.cse@uttarauniversity.edu.bd', NULL, '$2y$10$Y2OdYridR/lr2bELDFnGM.NvbFdlPZeh6QlzrK8kBpmNuTKrxFoeu', '12345678910', 'uttara dhaka-1230', 1, 'dhtgrjhlkjnijkfdutrsuyghb okijqdigwsdga wuiqhdwk uhwuidg wiehjkdh wkjdehwakdjbl kiwdehwksjd wakjdwqkjqh wijdkjwhlri', 'dr-ahm-saifullah-sadi1614599638603cd5d6b3176.PNG', 2, '2', 1, NULL, '2021-03-01 05:49:19', '2021-03-01 05:53:58'),
(40, 'MD. SHAFIUL ALAM CHOWDHURY', 'shafiul.cse', 'shafiul.cse@uttarauniversity.edu.bd', NULL, '$2y$10$aOooPC3Lu2bzbAUc.1bUPeuebjr5LG26k1Xc1eUwyBeHc9ODTPtz.', '12345678911', 'uttara dhaka-1230', 1, 'saghdh dgdfhb zsfsgdgh dffghtryerdgv dsgdrht cgseyhrtghb', 'md-shafiul-alam-chowdhury1614600690603cd9f26726c.PNG', 2, '3', 1, NULL, '2021-03-01 06:11:30', '2021-03-01 06:11:30'),
(41, 'MD. TORIKUR RAHMAN', 'torikurrahman', 'torikurrahman@uttarauniversity.edu.bd', NULL, '$2y$10$x75DhB7aC8PIAcvMidaw7.RumxA7BJd05569W63M0ei9R53KcSk.e', '12345678912', 'uttara dhaka-1230', 1, 'shgf gfdjhg ghdjgh hgusd wejh jwehk lrke kej e el wel kekfje kewkjker jlfjerlkfj wekfj', 'md-torikur-rahman1614601559603cdd5762466.PNG', 2, '4', 1, NULL, '2021-03-01 06:25:59', '2021-03-01 06:25:59'),
(42, 'UTTAM KUMAR DEY', 'uttam', 'uttam@uttarauniversity.edu.bd', NULL, '$2y$10$/9zQ2BQCgfNMmQVMq3zE9u/4EdBsw1mTRCo/lmHJfz1LIhIRE9vnm', '12345678913', 'dhamrai, dhaka', 1, 'jhwedfweu ewhweiuh ewrhw4eiurh ewurhwieurfh erhweiorh ewjrfwehrf wefrjghyr5 gfnrjkehr reoijrh', 'uttam-kumar-dey1614771886603f76ae8f87d.jpg', 2, '4', 1, NULL, '2021-03-03 05:44:46', '2021-03-03 05:44:46'),
(43, 'MD. BELAL HOSSEN', 'belal.cse', 'belal.cse@uttarauniversity.edu.bd', NULL, '$2y$10$67v/bLRKUrgJrewOb7QTA.5F4zV0yPgFADKjTXbBSOUgqETBn5rte', '12345678914', 'dhamrai, dhaka', 1, 'wejw9 0ort-4u ew0oirew09 ew0oer0 fdjgrid roijeruth dsjiforeuk fgrijgtres fgjeri dsportgfespio sdfjsdiurhf dsgsiuhdfguih  sdfiufguids', 'md-belal-hossen1614772489603f7909144fe.PNG', 2, '4', 1, NULL, '2021-03-03 05:53:24', '2021-03-03 05:54:49'),
(44, 'MD. CHOWDHURY SAJADUL ISLAM', 'sajadul.cse', 'sajadul.cse@uttarauniversity.edu.bd', NULL, '$2y$10$npKQAQEUT2K3d50RlTiYwew2amGP9mbmE5JO78kAse7O3H.aK77/C', '12345678915', NULL, 1, 'ewgfywe s fy sfgsdf    sfydsgf adsfuysd sa fsdfud udsfdsgf sdaiufsuf sudhfsdgf sdufhsdyugf uhfyugds iuhfsdyg sdfgdsg', 'md-chowdhury-sajadul-islam1614772888603f7a9837deb.PNG', 2, '5', 1, NULL, '2021-03-03 06:01:28', '2021-03-03 06:01:28'),
(45, 'TANZILLAH WAHID', 'tanzillah', 'tanzillah@uttarauniversity.edu.bd', NULL, '$2y$10$MYred7EnFameMlU/Z4AzT.dGSM.Pb1Ph8kpGK3KiggiESmNmsgQlq', '12345678916', 'dhamrai, dhaka', 2, 'hgas odjqw uiashd iadayus quwdhqw dusahdouiqw bsduwqd wduyhqw sud wqudgh wqud hd dh dwquidhqw udashdws wqiudhqw', 'tanzillah-wahid1614773514603f7d0af0d43.jpg', 2, '5', 1, NULL, '2021-03-03 06:11:54', '2021-03-03 06:11:54'),
(46, 'MD. AMANAT ULLAH', 'amanat.cse', 'amanat.cse@uttarauniversity.edu.bd', NULL, '$2y$10$NnXYsWJIVZs3bVxq7UspaesCR5VhbuP6A415YH7agWPO/JfiNPB/6', '12345678917', 'uttara dhaka-1230', 1, 'qwtf udgwef asugde saugdwe saydgew sugdyew auydsg uasygd gasydgas asdga saygda sadyga asydgas sayugd', 'md-amanat-ullah1614773822603f7e3ed2a1c.PNG', 2, '6', 1, NULL, '2021-03-03 06:17:02', '2021-03-03 06:17:02'),
(47, 'ABDUL MATIN', 'matin', 'matin@uttarauniversity.edu.bd', NULL, '$2y$10$Ef5SUQrdG0xTl5XjDF8Dg.tEVdzFpRnJviBZt5liGTewyHvLMtgIu', '12345678918', 'dhamrai, dhaka', 1, 'uywe 32iu03 3wru sduhfwe iuerh wer ewur rweyrwuey ewr weyrwer wery weour ewor woeur', 'abdul-matin1614775980603f86ac3621a.PNG', 2, '6', 1, NULL, '2021-03-03 06:53:00', '2021-03-03 06:53:00'),
(48, 'SABBIR AHMED', '2171081102', '2171081102@uttarauniversity.edu.bd', NULL, '$2y$10$4EcF0fv2wGEHaS4eVhr0p.p0a1UzVHhd9fyDkdEpdoWKCvcQGHadq', '+8801723494591', 'sector-8, Uttara, Dhaka-1230', 1, 'ami ekta genius vai', 'sabbir-ahmed1614777342603f8bfe68ec5.PNG', 4, NULL, 1, NULL, '2021-03-03 07:15:42', '2021-03-03 07:15:42'),
(49, 'Tanha afroze', '2172081012', '2172081012@uttarauniversity.edu.bd', NULL, '$2y$10$N6cuoi4zGb69CBm22kJ8wOnvY9zIYau15bkMrNVr7L17lRazrTbTC', '01800000000', 'Sector -3', 2, NULL, NULL, 4, NULL, 1, NULL, '2021-03-03 09:55:44', '2021-03-13 00:35:23'),
(50, 'Rakibul Hasan', '2172081030', '2172081030@uttarauniversity.edu.bd', NULL, '$2y$10$vNxg.eJc3c3QVP8fVSijAu.0nLl5aD7QY0nJiTBG3o196q3yc3K1O', '546545216584', 'gazipur, dhaka', 1, '1hewgqy wdfew weygdew qyewgdf ew ewiuyfrgweiy ewyfge wyfrwey rfweyrfwe iuyfgweuyfr ewyfrgwe few yfweuyfg wey', NULL, 4, NULL, 1, NULL, '2021-03-04 09:22:31', '2021-03-13 00:34:18'),
(51, 'Joy Kormokar', '2172081001', '2172081001@uttarauniversity.edu.bd', NULL, '$2y$10$cN5AVulQSMJ14087mj.FiueNnGp9V5adu.BXrMxxp9pFYhoyo1Fiu', '365469843213', 'gazipur, dhaka', 1, '32r43t534vg  htrhrt uyq wew8r r eruerho qweoq woqweur oweuower oiureou weoriuweoiu r r uoreiu', NULL, 4, NULL, 1, NULL, '2021-03-04 09:25:04', '2021-03-13 00:32:24'),
(52, 'LITUNUR ISLAM LIAS', '2172081002', '2172081002@uttarauniversity.edu.bd', NULL, '$2y$10$vD7H2F1yQ7315xqTFPjG7uwKB5.8U.BPUqV497CkOAw2xlJcy64W6', '6546841654654', 'gazipur, dhaka', 1, 'hgsd ewg weg uyewgduyweg iuywegfiewu wueygrf qwiudewfg weoqu goewuif ewugewo we goewr oweu rf', NULL, 4, NULL, 1, NULL, '2021-03-04 09:31:03', '2021-03-13 00:36:15'),
(53, 'MD. MAYNUL ISLAM', '2172081005', '2172081005@uttarauniversity.edu.bd', NULL, '$2y$10$cXXb2.0ncge63cdSDeJVUOBBIOCNYCGvUnYBEMAIOTictHZLKoM4a', '254695465464', 'gazipur, dhaka', 1, 'ugye wyg weryew ygey uy ey r', NULL, 4, NULL, 1, NULL, '2021-03-04 09:33:02', '2021-03-13 00:36:01'),
(54, 'WAHID MIA', '2172081022', '2172081022@uttarauniversity.edu.bd', NULL, '$2y$10$7h9dxnvZDJTdoXsKdnBhXuEak5lQLH0/ClmcIipT51jFpFugmy12u', '01111111111', 'gazipur,dhaka', 1, NULL, NULL, 4, NULL, 1, NULL, '2021-03-04 23:12:44', '2021-03-13 00:36:36'),
(55, 'AL Mamun Parvej', '2172081019', '2172081019@uttarauniversity.edu.bd', NULL, '$2y$10$gdQmZ8PgMNdCUsrpZzk0Cuowz1Hg4yKXI9cpRRsr3CIsdTrojR.kS', '01222222222', 'gazipur,dhaka', 1, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:15:59', '2021-03-04 23:15:59'),
(56, 'Munna Rahaman', '2172081018', '2172081018@uttarauniversity.edu.bd', NULL, '$2y$10$I.eEZmiNiW9d1kzlWW/XRuXCDoruCn.uXB0tCQaYzS/mLGXc0dsJm', '01777777777', 'gazipur,dhaka', 1, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:17:34', '2021-03-13 00:33:21'),
(57, 'Sabiha Mumu', '2172081017', '2172081017@uttarauniversity.edu.bd', NULL, '$2y$10$LkdqK0rHjmXaRIoSqER1t.ha8aTSECAA51BiSMcQH.99Ng6oUF8b6', '01999999999', 'gazipur,dhaka', 2, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:19:19', '2021-03-13 00:31:26'),
(58, 'Jahid Hasan', '2172081016', '2172081016@uttarauniversity.edu.bd', NULL, '$2y$10$ikKA3nAZoo2RmBNpZJVfmeVQjy/2485puwda..Vu1Z9ez..9xKY6C', '0177777777', 'gazipur,dhaka', 1, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:21:11', '2021-03-13 00:36:57'),
(59, 'Ashraful Islam', '2172081010', '2172081010@uttarauniversity.edu.bd', NULL, '$2y$10$krLrzAklBwfJg3T8Wd9OGeLNWlCdCZWsRsHzoVosGLFch2lF50D/S', '0133333333', 'gazipur,dhaka', 1, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:22:55', '2021-03-13 00:33:51'),
(60, 'Minar Ahmed', '2172081138', '2172081138@uttarauniversity.edu.bd', NULL, '$2y$10$CZmCIr20BN8d5G/kGvkT/.aobR8hcz0ihuYObzLIW/oM5w0x1FAD6', '0143456789', 'gazipur,dhaka', 1, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:25:10', '2021-03-13 00:37:45'),
(61, 'Samina Akter', '2172081032', '2172081032@uttarauniversity.edu.bd', NULL, '$2y$10$qrepaSF68eBO2HKxUSpZEeE1ZerKJHdc.CdTbJwxlIhTFhJNJt3.i', '0123456789', 'gazipur,dhaka', 2, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:27:10', '2021-03-13 00:33:35'),
(62, 'Ariful Islam', '2172081006', '2172081006@uttarauniversity.edu.bd', NULL, '$2y$10$XDfAh/OoXSY01G0rGGHRCuqK7DbD2sgsbL.X5/Mo6NhXbCSIKTCGy', '0212345678', 'gazipur,dhaka', 1, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:28:25', '2021-03-13 00:34:05'),
(63, 'Tanha Afrose', '2172081004', '2172081004@uttarauniversity.edu.bd', NULL, '$2y$10$vNOjbdmalZK63I6BiLk0B.PN1mnLXCnfIrNDqj5.1DX765JHCQGH2', '01888888823', 'gazipur,dhaka', 2, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:29:39', '2021-03-13 00:32:07'),
(64, 'Farjana Akter', '2171081006', '2171081006@uttarauniversity.edu.bd', NULL, '$2y$10$xtisVz2lba6Q3yrkpyo/f.OzT4qtvE5JPcAfEBBRBGDROszaZXNiy', '091234567', 'gazipur,dhaka', 2, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:35:34', '2021-03-13 00:35:40'),
(65, 'Sanjid Islam', '2172081028', '2172081028@uttarauniversity.edu.bd', NULL, '$2y$10$K0y36ZzFyyJe5x95JKDq3OlIXOMng3LR7niwWJn1ak9o525ThBdf.', '082134567', 'gazipur,dhaka', 1, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:37:03', '2021-03-13 00:38:03'),
(66, 'Sojib Sorkar', '2172081029', '2172081029@uttarauniversity.edu.bd', NULL, '$2y$10$qyxHkILGTc9XJ0EFGDICluUpuMIaYVC/..xRhsU8UoqNnedMCdORK', '123094567', 'gazipur,dhaka', 1, NULL, NULL, 4, NULL, 0, NULL, '2021-03-04 23:38:51', '2021-03-13 00:39:56'),
(67, 'MD. MAYNUL', 'maynul', 'maynul@uttarauniversity.edu.bd', NULL, '$2y$10$DH1zwOi/dBemUMZSl8yJgOOvXGtTW0YmvK1YQYvulEvnTncbSteKm', '123455678911', 'mohakhali, dhaka', 1, 'kjwerwj ewiorhweiu ewiohr weiurw eri weriweh uh ewiu hewuh ewiu hreuiw hweui rh', NULL, 3, NULL, 1, NULL, '2021-03-11 10:25:33', '2021-03-11 10:25:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_exam_question_id_foreign` (`exam_question_id`),
  ADD KEY `answers_user_id_foreign` (`user_id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_donations`
--
ALTER TABLE `blood_donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blood_donations_user_id_foreign` (`user_id`);

--
-- Indexes for table `borroweds`
--
ALTER TABLE `borroweds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borroweds_user_id_foreign` (`user_id`),
  ADD KEY `borroweds_library_id_foreign` (`library_id`);

--
-- Indexes for table `bus_schedules`
--
ALTER TABLE `bus_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_batch_id_foreign` (`batch_id`),
  ADD KEY `courses_user_id_foreign` (`user_id`),
  ADD KEY `courses_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `course_posts`
--
ALTER TABLE `course_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_posts_course_id_foreign` (`course_id`),
  ADD KEY `course_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_course_id_foreign` (`course_id`);

--
-- Indexes for table `exam_questions`
--
ALTER TABLE `exam_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_questions_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_semester_id_foreign` (`semester_id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comments_course_post_id_foreign` (`course_post_id`),
  ADD KEY `post_comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_files`
--
ALTER TABLE `post_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_files_course_post_id_foreign` (`course_post_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_exam_id_foreign` (`exam_id`),
  ADD KEY `results_user_id_foreign` (`user_id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_batches`
--
ALTER TABLE `student_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blood_donations`
--
ALTER TABLE `blood_donations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `borroweds`
--
ALTER TABLE `borroweds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bus_schedules`
--
ALTER TABLE `bus_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_posts`
--
ALTER TABLE `course_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_questions`
--
ALTER TABLE `exam_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `post_files`
--
ALTER TABLE `post_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_batches`
--
ALTER TABLE `student_batches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_exam_question_id_foreign` FOREIGN KEY (`exam_question_id`) REFERENCES `exam_questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blood_donations`
--
ALTER TABLE `blood_donations`
  ADD CONSTRAINT `blood_donations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `borroweds`
--
ALTER TABLE `borroweds`
  ADD CONSTRAINT `borroweds_library_id_foreign` FOREIGN KEY (`library_id`) REFERENCES `libraries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `borroweds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_batch_id_foreign` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_posts`
--
ALTER TABLE `course_posts`
  ADD CONSTRAINT `course_posts_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_questions`
--
ALTER TABLE `exam_questions`
  ADD CONSTRAINT `exam_questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `post_comments_course_post_id_foreign` FOREIGN KEY (`course_post_id`) REFERENCES `course_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post_files`
--
ALTER TABLE `post_files`
  ADD CONSTRAINT `post_files_course_post_id_foreign` FOREIGN KEY (`course_post_id`) REFERENCES `course_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
