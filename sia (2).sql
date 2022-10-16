-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 07:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

CREATE TABLE `allowances` (
  `id` int(30) NOT NULL,
  `allowance` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`id`, `allowance`, `description`) VALUES
(1, 'Transportation', '400'),
(2, 'Phone', '100'),
(3, 'Rice', '200'),
(4, 'House', '500'),
(5, 'HOLIDAY', '537'),
(6, '13th MONTH PAY', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `archived_accounts`
--

CREATE TABLE `archived_accounts` (
  `accountId` int(255) NOT NULL,
  `accountUsername` varchar(256) NOT NULL,
  `accountPassword` varchar(256) NOT NULL,
  `accountName` varchar(256) NOT NULL,
  `accountType` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archived_accounts`
--

INSERT INTO `archived_accounts` (`accountId`, `accountUsername`, `accountPassword`, `accountName`, `accountType`) VALUES
(4, 'userHr003', 'hr003', 'Samle name', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `archived_applicants`
--

CREATE TABLE `archived_applicants` (
  `applicantId` int(255) NOT NULL,
  `applicantName` varchar(256) NOT NULL,
  `applicantEmail` varchar(256) NOT NULL,
  `applicantDepartment` varchar(256) NOT NULL,
  `applicantJob` varchar(256) NOT NULL,
  `applicantBranch` varchar(256) NOT NULL,
  `applicantStatus` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archived_applicants`
--

INSERT INTO `archived_applicants` (`applicantId`, `applicantName`, `applicantEmail`, `applicantDepartment`, `applicantJob`, `applicantBranch`, `applicantStatus`) VALUES
(20, 'Sample', 'Sample@gmail.com', 'Quality Assurance Department', 'Quality Assurance', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'Reject at Recruitment');

-- --------------------------------------------------------

--
-- Table structure for table `archived_jobs`
--

CREATE TABLE `archived_jobs` (
  `jobId` int(11) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `jobDepartment` varchar(255) NOT NULL,
  `jobBranch` varchar(255) NOT NULL,
  `jobDescription` varchar(255) NOT NULL,
  `jobResponsibilities` varchar(255) NOT NULL,
  `jobQualifications` varchar(255) NOT NULL,
  `jobCompensation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(11) NOT NULL,
  `EMPID` varchar(255) NOT NULL,
  `TIMEIN` varchar(255) NOT NULL,
  `TIMEOUT` varchar(255) NOT NULL,
  `LOGDATE` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `EMPID`, `TIMEIN`, `TIMEOUT`, `LOGDATE`, `STATUS`) VALUES
(14, 'EMP2021-002', '14:50:29 PM', '14:53:25 PM', '2021-11-10', '1'),
(15, 'EMP2021-001', '14:50:35 PM', '14:53:34 PM', '2021-11-10', '1'),
(16, 'EMP2021-001', '14:50:44 PM', '14:53:34 PM', '2021-11-10', '1'),
(17, 'EMP2021-001', '14:50:50 PM', '14:53:34 PM', '2021-11-10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(30) NOT NULL,
  `deduction` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `deduction`, `description`) VALUES
(1, 'Philhealth', '300'),
(2, 'SSS', '500'),
(3, 'Pagibig', '300');

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `ID` int(11) NOT NULL,
  `EMPID` varchar(255) NOT NULL,
  `FNAME` varchar(255) NOT NULL,
  `MNAME` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `POSITION` varchar(255) NOT NULL,
  `BRANCH` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `BDAY` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `CONTACTNO` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `DEPT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`ID`, `EMPID`, `FNAME`, `MNAME`, `LNAME`, `password`, `POSITION`, `BRANCH`, `ADDRESS`, `BDAY`, `GENDER`, `CONTACTNO`, `EMAIL`, `DEPT`) VALUES
(1, 'EMP2021-001', 'Esmae', 'Cadence', 'Skinner', '123', 'Technical Support  Representative', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', '#4 Alley A, Sable St. marilina City', '1997-02-28', 'Female', '09457891457', 'esmaeskinner@gmail.com', 'AT&T'),
(2, 'EMP2021-002', 'Kasandra', 'Kaitlyn', 'Gibbs', '123', 'Customer Support Representative', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'Blk 5 Lt4, Olive St, Mariposa City', '1997-03-28', 'Female', '09567845267', 'kasandragibbs@gmail.com', 'UVERSE'),
(3, 'EMP2021-003', 'Silvia', 'Rose', 'Roman', '123', 'Customer Support Representative', '31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig', 'Blk 2 Lt 3, Manggahan St., Makati City', '2001-03-12', 'Female', '09123456789', 'silviaroman@gmail.com', 'UVERSE'),
(4, 'EMP2021-004', 'Vincent', 'Claudia', 'Castle', '123', 'Technical SUpport  Representative', '18F Octagon Bldg, San Miguel Avenue, Ortigas Center, Pasig', 'Blk 8 Lt 31, Santolan St. Marikina City', '2000-01-01', 'Male', '0925678945', 'vincentcastle@gmail.com', 'AT&T'),
(5, 'EMP2021-005', 'Belinda', 'Emmanuel', 'Holme', '123', 'Technical Support  Representative', '18F Octagon Bldg, San Miguel Avenue, Ortigas Center, Pasig', '#9 e  Makarena St. Pasig City', '1998-05-18', 'Female', '09457891457', 'belindaholme@gmail.com', 'AT&T'),
(6, '', 'Penelope', 'Roberts', 'Willoughby', '', 'Customer Support Reresentative', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'Blk 5 Lt4, Villanueva St, Quezon City', '2001-03-13', 'Female', '09123456789', 'willoughbypenelope@gmail.com', 'UVERSE');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `employee_no` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `department_id` int(30) NOT NULL,
  `position_id` int(30) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_no`, `firstname`, `middlename`, `lastname`, `department_id`, `position_id`, `salary`) VALUES
(9, '2020-9838', 'John', 'C', 'Smith', 1, 1, 30000),
(10, '2021-2109', 'russel', 'pelago', 'villanueva', 1, 1, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `employee_allowances`
--

CREATE TABLE `employee_allowances` (
  `id` int(30) NOT NULL,
  `employee_id` int(30) NOT NULL,
  `allowance_id` int(30) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1 = Monthly, 2= Semi-Montly, 3 = once',
  `amount` float NOT NULL,
  `effective_date` date NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_allowances`
--

INSERT INTO `employee_allowances` (`id`, `employee_id`, `allowance_id`, `type`, `amount`, `effective_date`, `date_created`) VALUES
(3, 9, 3, 2, 300, '0000-00-00', '2020-09-29 11:37:31'),
(8, 9, 4, 1, 1200, '0000-00-00', '2021-12-04 00:37:09'),
(9, 10, 2, 1, 500, '0000-00-00', '2021-12-07 23:33:55'),
(10, 10, 1, 1, 300, '0000-00-00', '2021-12-07 23:34:16'),
(11, 10, 5, 1, 537, '0000-00-00', '2021-12-08 00:03:12'),
(12, 9, 6, 1, 30000, '0000-00-00', '2021-12-08 00:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `employee_deductions`
--

CREATE TABLE `employee_deductions` (
  `id` int(30) NOT NULL,
  `employee_id` int(30) NOT NULL,
  `deduction_id` int(30) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1 = Monthly, 2= Semi-Montly, 3 = once',
  `amount_` float NOT NULL,
  `effective_date` date NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_deductions`
--

INSERT INTO `employee_deductions` (`id`, `employee_id`, `deduction_id`, `type`, `amount_`, `effective_date`, `date_created`) VALUES
(2, 9, 3, 2, 500, '0000-00-00', '2020-09-29 11:52:46'),
(3, 9, 1, 3, 1500, '2020-09-16', '2020-09-29 11:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `emp_training`
--

CREATE TABLE `emp_training` (
  `ID` int(50) NOT NULL,
  `score` int(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `exam_time` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `DEPT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leavve`
--

CREATE TABLE `leavve` (
  `id` int(11) DEFAULT NULL,
  `token` int(11) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavve`
--

INSERT INTO `leavve` (`id`, `token`, `reason`, `start`, `end`, `type`, `status`) VALUES
(2, 27, 'Manonood ng anime', '2021-11-07', '2021-11-08', 'Emergency Leaves', 'Approved'),
(2, 28, 'lalaban si Kars', '2021-09-12', '2021-10-23', 'Emergency Leaves', 'Cancelled'),
(1, 29, 'lalabanan si Dio', '2021-08-12', '2021-09-12', 'Vacation or Sick Leaves', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(30) NOT NULL,
  `ref_no` text NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1 = monthly ,2 semi-monthly',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 =New,1 = computed',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `ref_no`, `date_from`, `date_to`, `type`, `status`, `date_created`) VALUES
(3, '2021-6787', '2021-11-01', '2021-11-15', 2, 1, '2021-11-29 15:31:09'),
(4, '2021-1631', '2020-09-16', '2020-09-17', 2, 1, '2021-11-29 15:52:10'),
(6, '2021-8241', '2021-12-01', '2021-12-15', 2, 1, '2021-12-01 11:00:17'),
(7, '2021-5264', '2021-12-15', '2021-12-27', 1, 1, '2021-12-06 14:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_items`
--

CREATE TABLE `payroll_items` (
  `id` int(30) NOT NULL,
  `payroll_id` int(30) NOT NULL,
  `employee_id` int(30) NOT NULL,
  `present` int(30) NOT NULL,
  `absent` int(10) NOT NULL,
  `late` text NOT NULL,
  `salary` double NOT NULL,
  `allowance_amount` double NOT NULL,
  `allowances` text NOT NULL,
  `deduction_amount` double NOT NULL,
  `deductions` text NOT NULL,
  `net` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll_items`
--

INSERT INTO `payroll_items` (`id`, `payroll_id`, `employee_id`, `present`, `absent`, `late`, `salary`, `allowance_amount`, `allowances`, `deduction_amount`, `deductions`, `net`, `date_created`) VALUES
(20, 4, 9, 1, 10, '0', 30000, 1300, '[{\"aid\":\"3\",\"amount\":\"300\"},{\"aid\":\"1\",\"amount\":\"1000\"}]', 2000, '[{\"did\":\"3\",\"amount\":\"500\"},{\"did\":\"1\",\"amount\":\"1500\"}]', 664, '2021-11-29 15:52:16'),
(21, 7, 9, 0, 22, '0', 30000, 2203, '[{\"aid\":\"4\",\"amount\":\"1000\"},{\"aid\":\"1\",\"amount\":\"3\"},{\"aid\":\"4\",\"amount\":\"1200\"}]', 300, '[{\"did\":\"2\",\"amount\":\"300\"}]', 1903, '2021-12-06 14:37:27'),
(22, 7, 10, 0, 22, '0', 20000, 500, '[{\"aid\":\"2\",\"amount\":\"500\"}]', 0, '[]', 500, '2021-12-06 14:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `rm_accounts`
--

CREATE TABLE `rm_accounts` (
  `accountId` int(255) NOT NULL,
  `accountUsername` varchar(256) NOT NULL,
  `accountPassword` varchar(256) NOT NULL,
  `accountName` varchar(256) NOT NULL,
  `accountImage` varchar(256) NOT NULL,
  `accountType` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rm_accounts`
--

INSERT INTO `rm_accounts` (`accountId`, `accountUsername`, `accountPassword`, `accountName`, `accountImage`, `accountType`) VALUES
(1, 'adminJade', 'jdojade', 'Jade Oloroso', 'jade.jpg', 'Admin'),
(2, 'userHr001', 'hr001', 'Denice Klaire Villareal', 'denice.jpg', 'HR'),
(3, 'userHr002', 'hr002', 'Sean Archie Tarella', 'Tarriela.jpg', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `rm_applicants`
--

CREATE TABLE `rm_applicants` (
  `applicantId` int(255) NOT NULL,
  `applicantName` varchar(256) NOT NULL,
  `applicantEmail` varchar(256) NOT NULL,
  `applicantDepartment` varchar(256) NOT NULL,
  `applicantJob` varchar(256) NOT NULL,
  `applicantBranch` varchar(256) NOT NULL,
  `applicantFile` varchar(256) NOT NULL,
  `applicantStatus` varchar(256) NOT NULL,
  `applicantSchedSet` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rm_applicants`
--

INSERT INTO `rm_applicants` (`applicantId`, `applicantName`, `applicantEmail`, `applicantDepartment`, `applicantJob`, `applicantBranch`, `applicantFile`, `applicantStatus`, `applicantSchedSet`) VALUES
(1, 'Esmae Skinner', 'esmaeskinner@gmail.com', 'AT&T', 'Technical Support  Representative', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', '', 'Pass', 0),
(2, 'Kasandra Gibbs', 'kasandragibbs@gmail.com', 'UVERSE', 'Customer Support Reresentative', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', '', 'Pass', 0),
(3, 'Silvia Roman', 'silviaroman@gmail.com', 'UVERSE', 'Customer Support Representative', '31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig', '', 'Pass', 0),
(4, 'Vincent Castle', 'vincentcastle@gmail.com', 'AT&T', 'Technical Support  Representative', '18F Octagon Bldg, San Miguel Avenue, Ortigas Center, Pasig', '', 'Pass', 0),
(5, 'Belinda Holme', 'belindaholme@gmail.com', 'AT&T', 'Technical Support  Representative', '18F Octagon Bldg, San Miguel Avenue, Ortigas Center, Pasig', '', 'Pass', 0),
(6, 'Randolf Alfred Petit', 'alfredpetit@gmail.com', 'UVERSE', 'Technical Support Representative', '31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig', 'randolfpetit.docx', 'Initial', 0),
(7, 'Genesis Zula Gregory', 'genesiszula@gmail.com', 'AT & T', 'Customer Service Representative', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'genesisgregory.docx', 'Behavioral', 0),
(8, 'Allison Lolicia Young', 'allisonyoung@gmail.com', 'AT & T', 'Customer Service Representative', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'allisonyoung.docx', 'Final', 1),
(9, 'Kristie Alvina Silver', 'kasilver@gmail.com', 'Training Department', 'Training Coach', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'kristiesilver.docx', 'Screening', 0),
(10, 'Primula Nicky Samuel', 'primulanicky@gmail.com', 'UVERSE', 'Technical Support Representative', '31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig', 'primulasamuel.docx', 'Screening', 0),
(11, 'Kortney Kathi Horsfall', 'kortneyhorsfall@gmail.com', 'AT & T', 'Customer Service Representative', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'kortneyhorsfall.docx', 'Screening', 0),
(12, 'Joann Everard Brownlow', 'joannbrownlow@gmail.com', 'UVERSE', 'Technical Support Representative', '31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig', 'joannbrownlow.docx', 'Screening', 0),
(13, 'Kiefer Wolfe Linville', 'wolfekiefer@gmail.com', 'Training Department', 'Training Coach', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'kieferlinville.docx', 'Screening', 0),
(14, 'Christian Luris', 'christian.luris@gmail.com', 'UVERSE', 'Technical Support Representative', '31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig', 'christianluris.docx', 'Recruitment', 0),
(15, 'Amber Fernandez', 'amberf@gmail.com', 'UVERSE', 'Technical Support Representative', '31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig', 'amberfernandez.docx', 'Recruitment', 0),
(16, 'Amy Addams', 'addams.amy@gmail.com', 'Training Department', 'Training Coach', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'amyaddams.docx', 'Recruitment', 0),
(17, 'Leonard Hoffstader', 'hoffstader.kallel@gmail.com', 'Training Department', 'Training Coach', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'leonardhoffstader.docx', 'Recruitment', 0),
(18, 'Connie Williams', 'conniewilliams@gmail.com', 'UVERSE', 'Technical Support Representative', '31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig', 'conniewilliams.docx', 'Recruitment', 0),
(19, 'Penelope Willoughby', 'willoughbypenelope@gmail.com', 'Quality Assurance Department', 'Quality Assurance', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'penelopewilloughby.docx', 'Pass', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rm_jobs`
--

CREATE TABLE `rm_jobs` (
  `jobId` int(11) NOT NULL,
  `jobTitle` varchar(256) NOT NULL,
  `jobDepartment` varchar(256) NOT NULL,
  `jobBranch` varchar(256) NOT NULL,
  `jobDescription` varchar(2560) NOT NULL,
  `jobResponsibilities` varchar(2560) NOT NULL,
  `jobQualifications` varchar(2560) NOT NULL,
  `jobCompensation` varchar(256) NOT NULL,
  `jobImage` varchar(2560) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rm_jobs`
--

INSERT INTO `rm_jobs` (`jobId`, `jobTitle`, `jobDepartment`, `jobBranch`, `jobDescription`, `jobResponsibilities`, `jobQualifications`, `jobCompensation`, `jobImage`) VALUES
(1, 'Customer Service Representative', 'AT & T', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'Customer Service Representatives are responsible for managing various customer issues depending on account assignment; transactions can be related to billing and collections support, client inquiries, product support or inbound sales.', 'Manage large amounts of incoming phone calls, Generate sales leads, Identify and assess customers needs to achieve satisfaction ,Build sustainable relationships and trust with customer accounts through open and interactive communication, Provide accurate, valid and complete information by using the right methods/tools, Meet personal/customer service team sales targets and call handling quotas, Handle customer complaints, provide appropriate solutions and alternatives within the time limits; follow up to ensure resolution, Keep records of customer interactions, process customer accounts and file documents, Follow communication procedures, guidelines and policies, Take the extra mile to engage customers', 'Open to fresh graduates and college undergraduates with related working experience, High school diploma, Familiarity with CRM systems and practices, BPO experience is an advantage ,Customer orientation and ability to adapt/respond to different types of characters, Must have good English communication skills, Willing to work on shifting schedules', 'PHP 28,000/month', 'team.jpg'),
(2, 'Technical Support Representative', 'UVERSE', '31F Finance Center, 9th Avenue, Bonifacio Global City, Taguig', 'Technical support representatives answer incoming phone calls and troubleshoot customer tech problems with computer software and hardware. The company wants to hire technical support representatives to work full- and part-time hours during flexible shifts that may include evenings and weekends. Technical support representatives work in team environments and primarily report to the technical department supervisor or shift manager. Travel is not required for this job, as technical support representatives, also known as tech support representatives, work completely within the call center.', 'Identifies, investigates, and resolves user’s problems with computer software and hardware. Fields support calls, chat, email, and/or other communication from users with inquiries regarding software programming, connectivity, printing, and similar concerns. Consults with users to determine steps and procedures taken to identify and resolve the problem. Applies knowledge of computer software, hardware, and procedures to solve problems. Guides users through diagnostic and troubleshooting processes, which may include use of diagnostic tools and software and/or following verbal instructions. Collaborates with other staff to research and resolve problems. Collaborates with programmers to explain errors and/or recommend modifications in programs. Arranges service by software or hardware vendors to repair or replace defective products. Maintains knowledge of technology innovations and trends. Performs other related duties as assigned.', 'Bachelor’s degree in Computer Science or related field preferred. At least three years of experience in customer technical support highly preferred. Excellent verbal and written communication skills. Excellent interpersonal and customer service skills. Professional and pleasant telephone manner. Ability to explain technical issues to technical and nontechnical employees and customers. Strong analytical and problem-solving skills. Proficient with Microsoft Office Suite or related software. Proficient with or the ability to quickly learn an array of computer hardware and software.', 'PHP 26,000/month', 'employers.jpg'),
(3, 'Training Coach', 'Training Department', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'Responsible for training new customer service employees and supporting experienced employees to improve their performance. Duties include creating educational material, conducting training sessions, identifying skills gaps, and ensuring staff members stay motivated.', 'Develop digital and print educational material (e.g. videos and manuals) Organize classroom-style seminars about services features and sales techniques Conduct role-playing activities to develop interpersonal skills (e.g. negotiation, teamwork and conflict management) Identify individual and team skills gaps Schedule regular training sessions (e.g. monthly or quarterly) Ensure new hires take on basic sales training courses, including communication and troubleshooting skills Liaise with managers and encourage on-the-job coaching (e.g. how to handle difficult client cases) Coordinate mentorship programs for new customer service representatives Assess the impact of each educational course on staff performance and client satisfaction Maintain updated records of training curricula and material', 'A bachelors degree in human resources, or a related field. Additional certification in business leadership, eLearning software, or adult education and training is preferred. At least 4 years experience working as a call center trainer or team leader. Familiarity with learning management systems, such as Google Classroom, Blackboard, and Schoology. Excellent knowledge of sales techniques and customer service best practices. Strong teaching abilities and mentoring skills. Good communication, interpersonal, and conflict resolution skills. Ability to provide leadership to personnel in a fast-paced and stressful work environment.', 'PHP 30,000-35,000/month', 'offer.jpg'),
(4, 'Quality Assurance', 'Quality Assurance Department', '48F PBCOM Tower, Ayala Avenue corner V.A. Rufino Street, Salcedo Village, Makati', 'Responsible for ensuring that the services meet the established standards set by the company. Duties include maintaining strong overall quality control of services made by the company adhering to reliability, performance and customer expectation. Inspection is part of the job with the obligation to report and document findings. Depending on the organization, the typical job progression for a quality assurance is to a managerial role or a directorship.', 'Plan, execute, and oversee inspection and testing of employee performance to confirm quality conformance to specifications and quality deliverables Assist operations and local quality function in tracking, documenting, and reporting quality levels as well as CSR, environmental and health and safety goals/KPIs Analyze and investigate complaints or reported quality issues to ensure closure in accordance with company guidelines and external regulatory requirements Develop or update company complaint and inspection procedures to ensure capture and investigation, as well as proper documentation of complaints Monitor risk-management procedures, and maintain and analyze problem logs to identify and report recurring issues to management and product development Provide training and support to quality assurance team on systems, policies, procedures, and core processes', '2-3 years BPO experience Bachelor’s degree Excellent verbal, written and interpersonal communication skills; Outstanding customer service skills and dedication to providing exceptional customer care; Must be self-motivator and self-starter; Focus on quality and customer service; Exceptional listening and analytical skills; Solid time management skills; Must be able to effectively deal with people at all levels inside and outside of the company Superb computer competence, including database management Knowledge of quality assurance terminology, methods, and tools Analytical, problem-solving, and decision-making skills Demonstrated knowledge of testing best practices, version control practices and defect management practice', 'PHP 33,000/month', 'img-acc-clerk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rm_maildetails`
--

CREATE TABLE `rm_maildetails` (
  `detailsId` int(255) NOT NULL,
  `detailsNames` varchar(256) NOT NULL,
  `detailsEmail` varchar(256) NOT NULL,
  `detailsSubject` varchar(256) NOT NULL,
  `interviewStatus` varchar(256) NOT NULL,
  `body` varchar(2560) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rm_maildetails`
--

INSERT INTO `rm_maildetails` (`detailsId`, `detailsNames`, `detailsEmail`, `detailsSubject`, `interviewStatus`, `body`) VALUES
(8, 'Denice Klaire Villareal', 'allisonyoung@gmail.com', 'Final Interview', 'Final', 'Good Day!\nI hope this email finds you well.\nThis email serves as an invitation to an Final interview which will be held on December 15, 2021, from 9:00AM - 9:30AM.\nDo not be late. Below is the google meet link that you  will be joining. See you there!'),
(19, 'Denice Klaire Villareal', 'willoughbypenelope@gmail.com', 'Initial Interview', 'Initial', 'Good Day!\nI hope this email finds you well.\nThis email serves as an invitation to an Initial interview which will be held on December 15, 2021, from 9:00AM - 9:30AM.\nDo not be late. Below is the google meet link that you  will be joining. See you there!\nhttps://meet.google.com/sdr-gdvg-pfi'),
(19, 'Denice Klaire Villareal', 'willoughbypenelope@gmail.com', 'Behavioral Interview', 'Behavioral', 'Good Day!\nI hope this email finds you well.\nThis email serves as an invitation to an Behavioral interview which will be held on December 15, 2021, from 9:00AM - 9:30AM.\nDo not be late. Below is the google meet link that you  will be joining. See you there!\nhttps://meet.google.com/sdr-gdvg-pfi'),
(19, 'Denice Klaire Villareal', 'willoughbypenelope@gmail.com', 'Final Interview', 'Final', 'Good Day!\nI hope this email finds you well.\nThis email serves as an invitation to an Final interview which will be held on December 15, 2021, from 9:00AM - 9:30AM.\nDo not be late. Below is the google meet link that you  will be joining. See you there!\nhttps://meet.google.com/sdr-gdvg-pfi');

-- --------------------------------------------------------

--
-- Table structure for table `rm_messages`
--

CREATE TABLE `rm_messages` (
  `id` int(255) NOT NULL,
  `fullName` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `messages` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rm_messages`
--

INSERT INTO `rm_messages` (`id`, `fullName`, `email`, `messages`) VALUES
(1, 'Neville Cymone Brandon', 'nevillebrandon@gmail.com', 'Good Day! Just wondering if there will be a signing bonus from tenure agents? And how much it will be.'),
(2, 'Davey Rorie Chaplin', 'daveycahplin@gmail.com', 'Hello! Do you guys  by chance hire candidates who have absolutely no work experience in any BPO company?'),
(3, 'Thankful Watson Westbrook', 'thankfulwestbrook@gmail.com', 'Do you offer local accounts?'),
(4, 'Brody Woodie Southgate', 'woodysouthgate@gmail.com', 'Do you have nearer company branches?'),
(5, 'Sample', 'Sample@gmail.com', 'Sample Message');

-- --------------------------------------------------------

--
-- Table structure for table `rm_notif`
--

CREATE TABLE `rm_notif` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rm_notif`
--

INSERT INTO `rm_notif` (`id`, `name`, `message`, `type`, `status`) VALUES
(1, 'Randolf Alfred Petit', 'Send their application', 'applications', 'read'),
(2, 'Genesis Zula Gregory', 'Send their application', 'applications', 'read'),
(3, 'Allison Lolicia Young', 'Send their application', 'applications', 'read'),
(4, 'Kristie Alvina Silver', 'Send their application', 'applications', 'read'),
(5, 'Primula Nicky Samuel', 'Send their application', 'applications', 'read'),
(6, 'Kortney Kathi Horsfall', 'Send their application', 'applications', 'read'),
(7, 'Joann Everard Brownlow', 'Send their application', 'applications', 'read'),
(8, 'Kiefer Wolfe Linville', 'Send their application', 'applications', 'read'),
(9, 'Christian Luris', 'Send their application', 'applications', 'read'),
(10, 'Amber Fernandez', 'Send their application', 'applications', 'read'),
(11, 'Amy Addams', 'Send their application', 'applications', 'read'),
(12, 'Leonard Hoffstader', 'Send their application', 'applications', 'read'),
(13, 'Connie Williams', 'Send their application', 'applications', 'unread'),
(14, 'Neville Cymone Brandon', 'Send message to Octagon', 'messages', 'unread'),
(15, 'Davey Rorie Chaplin', 'Send message to Octagon', 'messages', 'unread'),
(16, 'Thankful Watson Westbrook', 'Send message to Octagon', 'messages', 'unread'),
(17, 'Brody Woodie Southgate', 'Send message to Octagon', 'messages', 'unread'),
(18, 'Penelope Willoughby', 'Send their application', 'applications', 'read'),
(19, 'Sample', 'Send their application', 'applications', 'unread'),
(20, 'Sample', 'Send message to Octagon', 'messages', 'read');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archived_accounts`
--
ALTER TABLE `archived_accounts`
  ADD PRIMARY KEY (`accountId`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_allowances`
--
ALTER TABLE `employee_allowances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_deductions`
--
ALTER TABLE `employee_deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_training`
--
ALTER TABLE `emp_training`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `leavve`
--
ALTER TABLE `leavve`
  ADD PRIMARY KEY (`token`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_items`
--
ALTER TABLE `payroll_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rm_accounts`
--
ALTER TABLE `rm_accounts`
  ADD PRIMARY KEY (`accountId`);

--
-- Indexes for table `rm_applicants`
--
ALTER TABLE `rm_applicants`
  ADD PRIMARY KEY (`applicantId`);

--
-- Indexes for table `rm_jobs`
--
ALTER TABLE `rm_jobs`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `rm_messages`
--
ALTER TABLE `rm_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rm_notif`
--
ALTER TABLE `rm_notif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowances`
--
ALTER TABLE `allowances`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `empinfo`
--
ALTER TABLE `empinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee_allowances`
--
ALTER TABLE `employee_allowances`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee_deductions`
--
ALTER TABLE `employee_deductions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emp_training`
--
ALTER TABLE `emp_training`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leavve`
--
ALTER TABLE `leavve`
  MODIFY `token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payroll_items`
--
ALTER TABLE `payroll_items`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rm_accounts`
--
ALTER TABLE `rm_accounts`
  MODIFY `accountId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rm_applicants`
--
ALTER TABLE `rm_applicants`
  MODIFY `applicantId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `rm_jobs`
--
ALTER TABLE `rm_jobs`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rm_messages`
--
ALTER TABLE `rm_messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rm_notif`
--
ALTER TABLE `rm_notif`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
