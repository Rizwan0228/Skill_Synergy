-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 08:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `i_id` int(11) DEFAULT NULL,
  `f_name` varchar(32) DEFAULT NULL,
  `l_name` varchar(32) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `userType` varchar(32) DEFAULT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`i_id`, `f_name`, `l_name`, `contact`, `age`, `gender`, `userType`, `password`) VALUES
(1, 'rizwan', 'mohammad', 9876, 21, 'M', 'Admin', 'rmc');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(32) NOT NULL,
  `title` varchar(32) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `pdf` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `title`, `description`, `status`, `pdf`, `created_at`) VALUES
(472, 'Test', NULL, 'pending', '20231208_104220-min.jpg', '2024-04-08 11:39:14'),
(472, 'test', NULL, 'pending', '20231208_104220-min.jpg', '2024-04-08 11:39:33'),
(472, 'TesT', NULL, 'pending', '20231208_104220-min.jpg', '2024-04-08 11:41:01'),
(472, 'TESt', NULL, 'pending', '20231208_104220-min.jpg', '2024-04-08 11:43:05'),
(472, 'Cloud', 'TEST', 'pending', '20231208_104220-min.jpg', '2024-04-08 11:44:06'),
(9, 'test', 'ttest', 'pending', '20231208_104220-min.jpg', '2024-04-08 18:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `clo_matrix_t`
--

CREATE TABLE `clo_matrix_t` (
  `clo_MatID` int(11) NOT NULL,
  `cloNum` int(11) NOT NULL,
  `coDescription` mediumtext NOT NULL,
  `ploAssessed` varchar(10) NOT NULL,
  `correlation` int(11) NOT NULL,
  `courseOutlineID` int(11) NOT NULL,
  `c` int(11) DEFAULT NULL,
  `p` int(11) DEFAULT NULL,
  `a` int(11) DEFAULT NULL,
  `s` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clo_matrix_t`
--

INSERT INTO `clo_matrix_t` (`clo_MatID`, `cloNum`, `coDescription`, `ploAssessed`, `correlation`, `courseOutlineID`, `c`, `p`, `a`, `s`) VALUES
(3, 1, 'Understand the database applications starting from conceptual design using data models diagram (ERD), Process Model diagram (BPMN)', 'PLO-b', 3, 4, 0, 4, 0, 0),
(4, 2, 'Basic understanding of data access structures and comparison between those structures, Determine the normalization form of Database.', 'PLO-c', 3, 4, 5, 0, 0, 0),
(5, 3, 'Ability to analyze the ERD, Process diagram and normalization concept.', 'PLO-d', 3, 4, 0, 6, 0, 6),
(6, 1, 'sdfgh', 'plo-a', 3, 11, 2, 0, 5, 0),
(7, 1, 'Understand the database applications starting from conceptual design using data models diagram (ERD), Process Model diagram (BPMN)', 'PLO-b', 3, 12, 0, 4, 0, 0),
(8, 1, 'Understand the database applications starting from conceptual design using data models diagram (ERD), Process Model diagram (BPMN)', 'PLO-b', 3, 13, 0, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `name`, `description`, `created_at`) VALUES
(203, 'Data Structure', 'CSE203...', '2024-04-09 00:32:54'),
(317, 'Numerical', 'CSE317...', '2024-04-08 16:57:52'),
(341, 'MIS', 'MIS341...', '2024-04-08 16:58:17'),
(472, 'Cloud Computing', 'CSE472....', '2024-04-08 16:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `co_t`
--

CREATE TABLE `co_t` (
  `coID` int(11) NOT NULL,
  `coNum` int(11) DEFAULT NULL,
  `courseID` varchar(6) NOT NULL,
  `ploID` varchar(5) NOT NULL,
  `poID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `co_t`
--

INSERT INTO `co_t` (`coID`, `coNum`, `courseID`, `ploID`, `poID`) VALUES
(1, 1, 'CSC101', '43', '43'),
(2, 1, 'CSC101', '44', '44'),
(3, 1, 'CSC101', '45', '45'),
(4, 2, 'CSC101', '43', '43'),
(5, 1, 'EEE131', '22', '22'),
(6, 2, 'EEE131', '22', '22'),
(7, 3, 'EEE131', '23', '23'),
(8, 4, 'EEE131', '22', '22'),
(31, 5, 'CSC101', '58', '58'),
(32, 1, 'CSC101', '61', '61'),
(33, 5, 'CSC101', '62', '62'),
(34, 6, 'CSC101', '62', '62'),
(35, 2, 'CSC101', '45', '45'),
(36, 2, 'CSC101', '47', '47'),
(37, 2, 'CSC101', '49', '49'),
(38, 3, 'CSC101', '45', '45'),
(39, 3, 'CSC101', '46', '46'),
(40, 3, 'CSC101', '49', '49'),
(41, 4, 'CSC101', '44', '44'),
(42, 4, 'CSC101', '45', '45'),
(43, 4, 'CSC101', '46', '46'),
(44, 6, 'CSC101', '44', '44'),
(45, 6, 'CSC101', '45', '45'),
(46, 6, 'CSC101', '47', '47'),
(47, 6, 'CSC101', '48', '48');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `i_id` int(11) DEFAULT NULL,
  `f_name` varchar(32) DEFAULT NULL,
  `l_name` varchar(32) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `userType` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`i_id`, `f_name`, `l_name`, `contact`, `age`, `gender`, `userType`, `password`) VALUES
(1, 'rizwan', 'chowdhury', 1234567, 21, 'M', 'instructor', 'instructor'),
(NULL, 'rz', 'ch', 123, 5, 'M', NULL, '1234'),
(2, 'Hasin', 'Eshrak', 12345, 23, 'm', 'instructor', 'hasin'),
(3, 'Mahin', 'Mahbub', 123455, 23, 'm', 'instructor', 'mahin'),
(4, 'Arian', 'Chowdhury', 1234565, 23, 'm', 'instructor', 'arian'),
(4, 'Arian', 'Chowdhury', 1234565, 23, 'm', 'instructor', 'arian'),
(5, 'Syed', 'Nayem', 12345665, 23, 'm', 'instructor', 'nayem');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date_posted` date NOT NULL,
  `posted_by` int(11) NOT NULL,
  `priority_level` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice_board`
--

INSERT INTO `notice_board` (`notice_id`, `title`, `content`, `date_posted`, `posted_by`, `priority_level`) VALUES
(29, 'TEst', 'Grades                  ', '0000-00-00', 0, 'high'),
(30, 'Grades Test', '                  Grades:\r\n A - 10 \r\nB - 20 \r\nF - 0', '0000-00-00', 4, 'high');

-- --------------------------------------------------------

--
-- Table structure for table `notice_review`
--

CREATE TABLE `notice_review` (
  `notice_review_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date_posted` datetime NOT NULL,
  `posted_by` int(11) NOT NULL,
  `priority_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice_review`
--

INSERT INTO `notice_review` (`notice_review_id`, `title`, `content`, `date_posted`, `posted_by`, `priority_level`) VALUES
(13, 'NORICE REQ 1', '                  THIS IS TRIAL', '0000-00-00 00:00:00', 50, 'high'),
(16, '472', 'grades                  ', '0000-00-00 00:00:00', 0, 'high'),
(17, 'Grades Test', 'Grades:\r\nA - 10\r\nB - 20\r\nF - 0                  ', '0000-00-00 00:00:00', 4, 'high');

-- --------------------------------------------------------

--
-- Table structure for table `plo_t`
--

CREATE TABLE `plo_t` (
  `ploID` int(11) NOT NULL,
  `ploNum` int(11) NOT NULL,
  `programID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plo_t`
--

INSERT INTO `plo_t` (`ploID`, `ploNum`, `programID`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 1, 2),
(9, 2, 2),
(10, 3, 2),
(11, 4, 2),
(12, 5, 2),
(13, 6, 2),
(14, 7, 2),
(15, 1, 3),
(16, 2, 3),
(17, 3, 3),
(18, 4, 3),
(19, 5, 3),
(20, 6, 3),
(21, 7, 3),
(22, 1, 9),
(23, 2, 9),
(24, 3, 9),
(25, 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `po_t`
--

CREATE TABLE `po_t` (
  `poID` int(11) NOT NULL,
  `poNum` int(11) NOT NULL,
  `programID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `po_t`
--

INSERT INTO `po_t` (`poID`, `poNum`, `programID`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 1, 2),
(9, 2, 2),
(10, 3, 2),
(11, 4, 2),
(12, 5, 2),
(13, 6, 2),
(14, 7, 2),
(15, 1, 3),
(16, 2, 3),
(17, 3, 3),
(18, 4, 3),
(19, 5, 3),
(20, 6, 3),
(21, 7, 3),
(22, 1, 9),
(23, 2, 9),
(24, 3, 9),
(25, 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(32) NOT NULL,
  `f_name` varchar(108) NOT NULL,
  `l_name` varchar(108) NOT NULL,
  `contact` int(32) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `userType` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `f_name`, `l_name`, `contact`, `password`, `age`, `gender`, `userType`) VALUES
(2121028, 'Rizwan', 'Chowdhury', 1234, 'rizwan', 21, 'M', 'Student'),
(1910539, 'Lamisa', 'Diya', 1234, 'lamisa', 21, 'F', 'Student'),
(1234, 'T', 'c', 12345, 'test', 21, 'F', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `f_name` varchar(10) NOT NULL,
  `l_name` varchar(10) NOT NULL,
  `contact` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `userType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `contact`, `password`, `dob`, `age`, `gender`, `userType`) VALUES
(20, 'hasin', 'eshrak', 65, 'he', '2024-04-09', 6, 'm', 'student'),
(3, 'r', 'c', 123, 'rc', '0000-00-00', 2, 'M', 'Student'),
(4, 'l', 'd', 12, 'ld', '0000-00-00', 2, 'F', 'Instructor'),
(8, 'fahim', 'ahmed', 32, 'fa', '0000-00-00', 23, 'M', 'Admin'),
(1, 'Rizwan', 'Chowdhury', 1234, 'rz', '0000-00-00', 23, 'M', 'Admin'),
(1, 'Rizwan', 'Chowdhury', 2134, '1234', '0000-00-00', 21, 'M', 'Instructor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clo_matrix_t`
--
ALTER TABLE `clo_matrix_t`
  ADD PRIMARY KEY (`clo_MatID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `co_t`
--
ALTER TABLE `co_t`
  ADD PRIMARY KEY (`coID`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `notice_review`
--
ALTER TABLE `notice_review`
  ADD PRIMARY KEY (`notice_review_id`);

--
-- Indexes for table `plo_t`
--
ALTER TABLE `plo_t`
  ADD PRIMARY KEY (`ploID`);

--
-- Indexes for table `po_t`
--
ALTER TABLE `po_t`
  ADD PRIMARY KEY (`poID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clo_matrix_t`
--
ALTER TABLE `clo_matrix_t`
  MODIFY `clo_MatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=474;

--
-- AUTO_INCREMENT for table `co_t`
--
ALTER TABLE `co_t`
  MODIFY `coID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `notice_board`
--
ALTER TABLE `notice_board`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notice_review`
--
ALTER TABLE `notice_review`
  MODIFY `notice_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `plo_t`
--
ALTER TABLE `plo_t`
  MODIFY `ploID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `po_t`
--
ALTER TABLE `po_t`
  MODIFY `poID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
