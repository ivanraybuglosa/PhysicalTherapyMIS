-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 12:15 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptmisdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `backup_id` int(10) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`backup_id`, `remarks`, `date`) VALUES
(1, 'Successfully exported database', 'February 10, 2018, 1:31 pm'),
(2, 'Successfully exported database', 'February 10, 2018, 1:33 pm'),
(3, 'Successfully exported database', 'February 10, 2018, 1:34 pm'),
(4, 'Successfully exported database', 'February 10, 2018, 1:35 pm'),
(5, 'Successfully exported database', 'February 10, 2018, 1:36 pm'),
(6, 'Successfully imported database', 'February 10, 2018, 1:37 pm'),
(7, 'Successfully imported database', 'February 10, 2018, 1:42 pm'),
(8, 'Successfully exported database', 'February 10, 2018, 2:15 pm'),
(9, 'Successfully imported database', 'February 10, 2018, 8:20 pm'),
(0, 'Successfully imported database', 'February 12, 2018, 6:29 pm'),
(0, 'Successfully imported database', 'February 12, 2018, 6:29 pm'),
(0, 'Successfully exported database', 'February 12, 2018, 6:29 pm'),
(0, 'Successfully imported database', 'February 12, 2018, 6:30 pm'),
(0, 'Successfully imported database', 'February 12, 2018, 7:26 pm'),
(0, 'Successfully imported database', 'February 12, 2018, 7:27 pm'),
(0, 'Successfully exported database', 'February 12, 2018, 7:28 pm'),
(0, 'Successfully exported database', 'February 23, 2018, 3:41 pm');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `EquipID` int(8) NOT NULL,
  `EquipName` text NOT NULL,
  `EquipQty` int(3) NOT NULL,
  `EquipStatus` text NOT NULL,
  `EquipUsed` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `EvalID` int(11) NOT NULL,
  `PatientID` int(11) NOT NULL,
  `PT_ID` int(8) NOT NULL,
  `EvalChiefComplaint` varchar(50) NOT NULL,
  `EvalHistoryIllness` varchar(100) NOT NULL,
  `EvalEdema` varchar(15) NOT NULL,
  `EvalPosture` varchar(15) NOT NULL,
  `EvalSkin` varchar(15) NOT NULL,
  `EvalAssessment` varchar(30) NOT NULL,
  `EvalPlan` varchar(30) NOT NULL,
  `MMT` varchar(30) NOT NULL,
  `ROM` varchar(30) NOT NULL,
  `Eval_Date` date NOT NULL,
  `Remarks` varchar(20) NOT NULL,
  `Others` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`EvalID`, `PatientID`, `PT_ID`, `EvalChiefComplaint`, `EvalHistoryIllness`, `EvalEdema`, `EvalPosture`, `EvalSkin`, `EvalAssessment`, `EvalPlan`, `MMT`, `ROM`, `Eval_Date`, `Remarks`, `Others`) VALUES
(42, 141, 6, 'hrewrew', 'Congestive Heart Failure, GERD, Hypertension, Liver Disorder-Hepatitis, czxzczcz', 'cxzcx', 'czx', 'czxczx', 'czczxczxczx', 'czczxczxczx', 'czxczx', 'czxczxcc', '2018-02-23', 'czxczx', '');

-- --------------------------------------------------------

--
-- Table structure for table `illnesscounter`
--

CREATE TABLE `illnesscounter` (
  `Alcoholism` int(11) NOT NULL,
  `Anemia` int(11) NOT NULL,
  `Anxiety` int(11) NOT NULL,
  `Asthma` int(11) NOT NULL,
  `Arthritis-rheuma` int(11) NOT NULL,
  `BloodClot` int(11) NOT NULL,
  `Bronchitis` int(11) NOT NULL,
  `Bowel` int(11) NOT NULL,
  `BloodTrans` int(11) NOT NULL,
  `Arthritis-osteo` int(11) NOT NULL,
  `Cancer` int(11) NOT NULL,
  `Cardiac` int(11) NOT NULL,
  `Congestive` int(11) NOT NULL,
  `Coronary` int(11) NOT NULL,
  `Cerebrvascular` int(11) NOT NULL,
  `EyeDisease` int(11) NOT NULL,
  `Diabetes` int(11) NOT NULL,
  `Depression` int(11) NOT NULL,
  `Emphysema` int(11) NOT NULL,
  `ChronicPulmonary` int(11) NOT NULL,
  `Fibromyalgia` int(11) NOT NULL,
  `Gout` int(11) NOT NULL,
  `Gerd` int(11) NOT NULL,
  `Gallblader` int(11) NOT NULL,
  `HeartAttack` int(11) NOT NULL,
  `Hiv` int(11) NOT NULL,
  `Hormone` int(11) NOT NULL,
  `Hypertension` int(11) NOT NULL,
  `Hypercholesterol` int(11) NOT NULL,
  `Hypothyroidism` int(11) NOT NULL,
  `Kidney` int(11) NOT NULL,
  `LiverCirrhosis` int(11) NOT NULL,
  `LiverHepatitis` int(11) NOT NULL,
  `ThyroidDisease` int(11) NOT NULL,
  `Osteomyelitis` int(11) NOT NULL,
  `StomachUlcer` int(11) NOT NULL,
  `Pacemaker` int(11) NOT NULL,
  `Parkinsons` int(11) NOT NULL,
  `Seizures` int(11) NOT NULL,
  `Osteoporosis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `illnesscounter`
--

INSERT INTO `illnesscounter` (`Alcoholism`, `Anemia`, `Anxiety`, `Asthma`, `Arthritis-rheuma`, `BloodClot`, `Bronchitis`, `Bowel`, `BloodTrans`, `Arthritis-osteo`, `Cancer`, `Cardiac`, `Congestive`, `Coronary`, `Cerebrvascular`, `EyeDisease`, `Diabetes`, `Depression`, `Emphysema`, `ChronicPulmonary`, `Fibromyalgia`, `Gout`, `Gerd`, `Gallblader`, `HeartAttack`, `Hiv`, `Hormone`, `Hypertension`, `Hypercholesterol`, `Hypothyroidism`, `Kidney`, `LiverCirrhosis`, `LiverHepatitis`, `ThyroidDisease`, `Osteomyelitis`, `StomachUlcer`, `Pacemaker`, `Parkinsons`, `Seizures`, `Osteoporosis`) VALUES
(0, 7, 2, 0, 0, 0, 1, 4, 1, 0, 0, 1, 3, 0, 0, 0, 0, 3, 1, 0, 0, 0, 6, 2, 0, 0, 0, 5, 1, 0, 0, 0, 3, 0, 0, 0, 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientID` int(11) NOT NULL,
  `PatientName` text NOT NULL,
  `PatientAddress` text NOT NULL,
  `PatientGender` text NOT NULL,
  `PatientBirthdate` date NOT NULL,
  `PatientCivilStatus` text NOT NULL,
  `PatientProfession` text NOT NULL,
  `PatientDoctor` text NOT NULL,
  `PatientHospital` text NOT NULL,
  `PatientReferralAddress` text NOT NULL,
  `PatientTelephone` int(11) NOT NULL,
  `PatientContactPerson` text NOT NULL,
  `PatientCases` text NOT NULL,
  `month` char(3) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `PatientName`, `PatientAddress`, `PatientGender`, `PatientBirthdate`, `PatientCivilStatus`, `PatientProfession`, `PatientDoctor`, `PatientHospital`, `PatientReferralAddress`, `PatientTelephone`, `PatientContactPerson`, `PatientCases`, `month`, `year`) VALUES
(1, 'steven paul', 'handumanan', 'Male', '1996-12-31', 'Married', 'marketing associate', 'jan bayud', 'riverside1', 'handumanan', 4644111, 'adela donan', 'Peripheral Nerve Injuries', 'Jan', '2018'),
(2, 'James Bayud', 'handumanan', 'Male', '2017-12-02', 'Widowed', 'Driver', 'bunso ungo', 'lady of mercy', 'villamonte bacolod city', 44555111, 'vicmar yanson', 'Frozen Shoulder', 'Jan', '2018'),
(3, 'Ivan Buglosa', 'San Carlos', 'Male', '1970-01-01', 'Married', 'Student', 'Dr. Shitty ', 'Doctors Hospital', 'Bago City', 4410025, 'Marlyn Yanson', '', 'Jan', '2018'),
(4, 'Fokwen Bagin', 'Kabankalan', 'Male', '1970-01-01', 'Single', 'Housewife', 'Wuasheley', 'Doctors Hospital', 'Shopping', 2147483647, 'Maria Elena Yanson', '', 'Jan', '2018'),
(5, 'Mico Cats', 'Himamaylan', 'Male', '1970-01-01', 'Single', 'asdasd', 'asd', 'asd', 'asd', 0, 'asd', '', 'Jan', '2018'),
(6, 'Nikko Red', 'La Carlota', 'Male', '1970-01-01', 'Single', 'asdasd', 'asdasdasd', 'asdasd', 'dasdad', 0, 'sdadas', '', 'Jan', '2018'),
(7, 'Josh Tee', 'Bago City', 'Male', '1992-12-16', 'Single', 'Developer', 'ssss', 'ssss', 'ssss', 0, 'ssss', 'Structure', 'Jan', '2018'),
(8, 'Rocky Bagayo', 'Bago City', 'Male', '1997-02-13', 'Single', 'Teacher', 'Dr. Taguro Bago', 'Riverside Hospital', 'Bacolod City', 92, 'Maria Nancy Diente', 'Stroke', 'Jan', '2018'),
(9, 'Precious Apurado', 'La carlota City', 'Male', '1970-01-01', 'Married', 'Pastora', 'Dr. Jade Jong', 'Bago Hopistal', 'Bago City', 637251, 'James Petron', 'Low Back Pains', 'Jan', '2018'),
(10, 'James Guanzon', 'Bacolod City', 'Male', '1997-10-03', 'Married', 'Photographer', '', '', '', 0, '', 'Frozen Shoulder', 'Jan', '2018'),
(11, 'Alexa Schmidt', 'Bago City', 'Female', '2018-10-16', 'Single', 'Media Producer ', '', '', '', 0, '', 'Stroke', 'Jan', '2018'),
(12, 'Alize Conroy', 'Bago City', 'Female', '2018-03-06', 'Single', 'School Principal', 'Dr. Mico Catibog', 'Riverside Hospital', 'Bacolod City', 759, 'Jade Apurado', 'Stroke', 'Feb', '2018'),
(13, 'Winfield Roob', 'Bago City', 'Male', '2018-04-11', 'Single', 'Singer', '', '', '', 0, '', 'Spinal Cord Injuries', 'Feb', '2018'),
(14, 'Marguerite Vandervort', 'Bago City', 'Male', '2018-09-05', 'Single', 'Software Designer', '', '', '', 0, '', 'Fractures', 'Feb', '2018'),
(15, 'Jamil Romaguera PhD', 'Bago City', 'Male', '2018-11-02', 'Single', 'Surgeon', '', '', '', 0, '', 'Arthritis', 'Feb', '2018'),
(16, 'Eleanora Bahringer', 'Escalante', 'Male', '1970-01-01', 'Single', 'Tailor', '', '', '', 0, '', '', 'Feb', '2018'),
(17, 'Dicksan Gordon', 'Bacolod City', 'Male', '1997-02-06', 'Married', 'Board member', '', '', '', 0, '', 'Traumatic Brain Injuries', 'Feb', '2018'),
(18, 'Leah Lastima', 'Bago City', 'Male', '1983-07-02', 'Single', 'Telemarketer', '', '', '', 0, '', 'Arthritis', 'Feb', '2018'),
(19, 'Josephine Gibson', 'Bago City', 'Male', '1990-02-08', 'Single', 'Travel Agent ', '', '', '', 0, '', 'Stroke', 'Jan', '2018'),
(20, 'Devin Cummerata', 'Bacolod City', 'Male', '1997-12-31', 'Single', 'Translator', '', '', '', 0, '', 'Low Back Pains', 'Feb', '2018'),
(21, 'Antoinette Mayer', 'Bago City', 'Female', '1983-07-12', 'Single', 'Student Counsellor ', 'Dr. Jade Jong', 'Riverside Hospital', '', 0, '', 'Low Back Pains', 'Feb', '2018'),
(22, 'Desiree Parker', 'Bago City', 'Male', '1984-06-06', 'Separated', 'Shoemaker', '', '', '', 0, '', 'Fractures', 'Feb', '2018'),
(23, 'Jordane Johns', 'Bago City', 'Female', '1990-09-13', 'Single', 'School Principal', '', '', '', 0, '', 'Scoliosis', 'Feb', '2018'),
(24, 'Nancy Diente', 'Bago City', 'Female', '1976-08-10', 'Single', 'Bussinesswoman', '', '', '', 0, '', 'Arthritis', 'Jan', '2018'),
(25, 'Jerry Diente', 'Bacolod City', 'Male', '1991-02-01', 'Single', 'Bussinessman', '', '', '', 0, '', 'Arthritis', 'Feb', '2018'),
(26, 'Daniel Bagayo', 'Bago City', 'Male', '1993-10-24', 'Single', 'Pastor', '', '', '', 0, '', 'Low Back Pains', 'Feb', '2018'),
(27, 'Tures Mambo', 'Bago City', 'Male', '1997-07-15', 'Single', 'Security', '', '', '', 0, '', 'Scoliosis', 'Feb', '2018'),
(28, 'Tures Mambo', 'Bago City', 'Male', '1997-07-15', 'Single', 'Security', '', '', '', 0, '', 'Scoliosis', 'Feb', '2018'),
(31, 'Sheena Thunder', 'Bacolod City', 'Female', '1997-02-14', 'Single', 'Dealer', '', '', '', 0, '', 'Traumatic Brain Injuries', 'Feb', '2018'),
(32, 'Rizza Guanzon', 'Bacolod City', 'Female', '1994-10-27', 'Married', 'Barrista', '', '', '', 0, '', 'Arthritis', 'Feb', '2018'),
(33, 'Juvilyn Ibanez', 'Bacolod City', 'Female', '1997-02-12', 'Married', 'Pastora', '', '', '', 0, '', 'Cerebral Palsy', '', ''),
(34, 'Jonalyn Cofino', 'Bacolod City', 'Female', '2018-01-05', 'Married', 'Pastry Chef', 'Dr. Precious Apurado', 'Riverside Hospital', '', 0, 'Geoff Cofino', 'Myofascial Pain Syndrome', '', ''),
(35, 'Jose Brodit III', 'Bacolod City', 'Male', '1997-11-13', 'Separated', 'Dance Instructor', 'Dr. Precious Apurado', 'St. Luke Medical Hospital', '', 0, 'Jade Jong', 'Spinal Cord Injuries', '', ''),
(36, 'Michelle Dianabelle Bond', 'San Enrique', 'Male', '2018-06-03', 'Single', 'Student', 'Dr. Precious Apurado', 'Riverside Hospital', '', 0, 'Michelle Bond', 'Cerebral Palsy', '', ''),
(37, 'Alvin Yansonas', 'Bago City', 'Male', '1970-01-01', 'Single', 'Dance Instructor', 'Weeeh', 'Weeeh', 'Weeeh', 123445, 'Weeeh', 'Spinal Cord Injuries', 'Feb', '2018'),
(38, 'Brix Handler', 'BacolodCity', 'Male', '2018-01-01', 'Single', 'Programmer', 'Dr.MicoCatibog', 'RiverSide', 'BacolodCity', 444, 'IvanBuglosa', 'Storke', 'Jan', '2018'),
(39, 'Aracely Aufderhar PhD', 'Kabankalan', 'Male', '1970-01-01', 'Married', 'Apparel Cutter', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', '', 'Jan', '2018'),
(40, 'Tod Wisozk', 'Bago City', 'Male', '0000-00-00', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Cerebral Palsy', 'Feb', '2018'),
(41, 'Hermina Schroeder', 'Bago City', 'Female', '0000-00-00', 'Single', 'Baker', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Jan', '2018'),
(42, 'Ignatius Brekke', 'Bago City', 'Male', '0000-00-00', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(43, 'Abraham Eichmann', 'Bago City', 'Male', '2006-03-06', 'Single', 'Laborer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', '', 'Jan', '2018'),
(44, 'Donato Gerlach', 'Bago City', 'Male', '0000-00-00', 'Single', 'Encoder', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Jan', '2018'),
(45, 'Filepe Demamon', 'Bago City', 'Female', '0000-00-00', 'Single', 'Artist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Jan', '2018'),
(46, 'Agustus Morer', 'Bago City', 'Male', '0000-00-00', 'Single', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Jan', '2018'),
(47, 'Asyong Utotong', 'Bago City', 'Female', '0000-00-00', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(48, 'Draco Bukog', 'Bago City', 'Male', '0000-00-00', 'Single', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(49, 'Elsa Magandadato', 'Bago City', 'Female', '0000-00-00', 'Single', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(50, 'Abdula Spertecra', 'Bago City', 'Male', '2018-02-12', 'Single', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', '', 'Feb', '2018'),
(51, 'Mamita Luna', 'Bago City', 'Male', '0000-00-00', 'Single', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(52, 'July Bago', 'Bago City', 'Female', '0000-00-00', 'Single', 'Fitness Instructor ', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(53, 'Sadam Lazaro', 'Bago City', 'Male', '0000-00-00', 'Single', 'Hospital Pharmacist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(54, 'Emely Gislason', 'Bacolod City', 'Female', '1998-05-26', 'Married', 'Apparel Cutter', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Jan', '2018'),
(55, 'Vicmar Marson', 'Bago City', 'Male', '1988-01-27', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Cerebral Palsy', 'Feb', '2018'),
(56, 'Daniel Senson', 'Bago City', 'Male', '1994-09-30', 'Married', 'Baker', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Jan', '2018'),
(57, 'Arcana Siklab', 'Bacolod City', 'Male', '1987-03-15', 'Married', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(58, 'Clide Bismark', 'Bago City', 'Female', '1984-06-12', 'Married', 'Laborer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Storke', 'Jan', '2018'),
(59, 'James Dormedo', 'Bago City', 'Male', '1990-12-10', 'Married', 'Encoder', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Jan', '2018'),
(60, 'Pepito Manaloto', 'Bago City', 'Male', '1990-06-10', 'Married', 'Artist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Jan', '2018'),
(61, 'Portico Sandigan', 'Bago City', 'Male', '1990-12-10', 'Single', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Jan', '2018'),
(62, 'Amor Agustita', 'Bacolod City', 'Female', '1984-05-13', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(63, 'Merkado Tukog', 'Bacolod City', 'Male', '1985-12-13', 'Married', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(64, 'Abdul Singcang', 'Bacolod City', 'Male', '1970-01-01', 'Married', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(65, 'Sentina Mercado', 'Bago City', 'Female', '1987-06-11', 'Married', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(66, 'Jose Lamoda', 'Bago City', 'Male', '1978-01-12', 'Single', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(67, 'Junie Cong', 'Bago City', 'Female', '1988-06-13', 'Single', 'Fitness Instructor ', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(68, 'Lazaron Mersedez', 'Bago City', 'Female', '1988-08-13', 'Single', 'Hospital Pharmacist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(69, 'Shian Sample', 'Himamaylan', 'Male', '1970-01-01', 'Single', 'sample', 'sample', 'sample', 'sample', 0, 'sample', '', 'Feb', '2018'),
(70, 'Adrian Clarkson', 'Bago', 'Male', '1970-01-01', 'Married', 'Songer', 'sample', 'sample', 'sample', 23123123, 'sample', '', 'Feb', '2018'),
(71, 'Jordan Clarkson', 'Kabankalan', 'Male', '1970-01-01', 'Single', 'wew', '', '', '', 0, '', '', 'Feb', '2018'),
(72, 'Mark Paras', 'Bago', 'Male', '1989-02-15', 'Married', 'Photographer', '', '', '', 0, '', 'Spinal Cord Injuries', 'Feb', '2018'),
(73, 'Glenn Mark', 'Bago', 'Male', '1970-01-01', 'Single', 'Teacher', '', '', '', 0, '', '', 'Feb', '2018'),
(74, 'Nicole June', 'Bago', 'Female', '1994-02-22', 'Married', 'Teacher', '', '', '', 0, '', 'Stroke', 'Feb', '2018'),
(75, 'Ursula Amanda', 'Bacolod City', 'Female', '1998-05-26', 'Married', 'Apparel Cutter', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Jan', '2018'),
(76, 'Afua Alvin', 'Bago City', 'Male', '1998-05-26', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Cerebral Palsy', 'Feb', '2018'),
(77, 'Kerbel Chaka', 'Bago City', 'Male', '1998-05-26', 'Married', 'Baker', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Jan', '2018'),
(78, 'Sinio Batotoy', 'Bacolod City', 'Male', '1998-05-26', 'Married', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(79, 'Pakaw Vojo', 'Bago City', 'Female', '1998-05-26', 'Married', 'Laborer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Storke', 'Jan', '2018'),
(80, 'Dian Itom', 'Bago City', 'Male', '1998-05-26', 'Married', 'Encoder', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Jan', '2018'),
(81, 'Asitantion Papsi', 'Bago City', 'Male', '1998-05-26', 'Married', 'Artist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Jan', '2018'),
(82, 'Daniel Molabin', 'Bago City', 'Male', '1998-05-26', 'Single', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Jan', '2018'),
(83, 'Harumi Chan', 'Bacolod City', 'Female', '1998-05-26', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(84, 'Pekarin Orange', 'Bacolod City', 'Male', '1998-05-26', 'Married', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(85, 'Yello Graded', 'Bacolod City', 'Male', '1998-05-26', 'Married', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(86, 'Rosana Jelotin', 'Bago City', 'Female', '1998-05-26', 'Married', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(87, 'Roxane Jeffer', 'Bago City', 'Male', '1998-05-26', 'Single', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(88, 'Vicky Yanson', 'Bago City', 'Female', '1998-05-26', 'Single', 'Fitness Instructor ', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(89, 'Raide Pula', 'Bago City', 'Female', '1998-05-26', 'Single', 'Hospital Pharmacist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(90, 'Wynn Hatake', 'Bacolod City', 'Female', '1998-05-26', 'Married', 'Apparel Cutter', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Jan', '2018'),
(91, 'Tuyaw Nia', 'Bago City', 'Male', '1998-05-26', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Cerebral Palsy', 'Feb', '2018'),
(92, 'Therese Mamasita', 'Bago City', 'Male', '1998-05-26', 'Married', 'Baker', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Jan', '2018'),
(93, 'Caithlyn Akol', 'Bacolod City', 'Male', '1998-05-26', 'Married', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(94, 'Peper Jose', 'Bago City', 'Female', '1998-05-26', 'Married', 'Laborer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Storke', 'Jan', '2018'),
(95, 'Jose Brodith', 'Bago City', 'Male', '1998-05-26', 'Married', 'Encoder', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Jan', '2018'),
(96, 'Jason Diosana', 'Bago City', 'Male', '1998-05-26', 'Married', 'Artist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Jan', '2018'),
(97, 'Peterson Papa', 'Bago City', 'Male', '1998-05-26', 'Single', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Jan', '2018'),
(98, 'Ronald Emil', 'Bacolod City', 'Female', '1998-05-26', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(99, 'Gastone Pranka ', 'Bacolod City', 'Male', '1998-05-26', 'Married', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(100, 'Edith Winfred', 'Bacolod City', 'Male', '1998-05-26', 'Married', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(101, 'Neal Yolanda', 'Bago City', 'Female', '1998-05-26', 'Married', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(102, 'Derek Dortha ', 'Bago City', 'Male', '1998-05-26', 'Single', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(103, 'Silvester Cherie', 'Bago City', 'Female', '1998-05-26', 'Single', 'Fitness Instructor ', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(104, 'Kirby Alvena', 'Bago City', 'Female', '1998-05-26', 'Single', 'Hospital Pharmacist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(105, 'Daniel Gaylord', 'Bacolod City', 'Female', '1998-05-26', 'Married', 'Apparel Cutter', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Jan', '2018'),
(106, 'Ansel Shanna ', 'Bago City', 'Male', '1998-05-26', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Cerebral Palsy', 'Jan', '2018'),
(107, 'Clifford Tera', 'Bago City', 'Male', '1998-05-26', 'Married', 'Baker', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Jan', '2018'),
(108, 'Liberty Corrine', 'Bacolod City', 'Male', '1998-05-26', 'Married', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Jan', '2018'),
(109, 'Earnest Rodger', 'Bago City', 'Female', '1998-05-26', 'Married', 'Laborer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Storke', 'Feb', '2018'),
(110, 'Brande Emil', 'Bago City', 'Male', '1998-05-26', 'Married', 'Encoder', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(111, 'Royal Francis', 'Bago City', 'Male', '1998-05-26', 'Married', 'Artist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(112, 'Flora Stephen ', 'Bago City', 'Male', '1998-05-26', 'Single', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(113, 'Gori Gay', 'Bacolod City', 'Female', '1998-05-26', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(114, 'Robert Misti', 'Bacolod City', 'Male', '1998-05-26', 'Married', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(115, 'Elaina Laurel', 'Bacolod City', 'Male', '1998-05-26', 'Married', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(116, 'Virginia Manila', 'Bago City', 'Female', '1998-05-26', 'Married', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(117, 'Peter Luzon', 'Bago City', 'Male', '1998-05-26', 'Single', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(118, 'Alkaid Yanson', 'Bago City', 'Female', '1998-05-26', 'Single', 'Fitness Instructor ', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(119, 'Ingram Betio', 'Bago City', 'Female', '1998-05-26', 'Single', 'Hospital Pharmacist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(120, 'Agham Malini', 'Bacolod City', 'Female', '1998-05-26', 'Married', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(121, 'Candis Esme', 'Bago City', 'Male', '1998-05-26', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(122, 'Lavina Vergil', 'Bago City', 'Male', '1998-05-26', 'Married', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(123, 'Seth Marshal', 'Bacolod City', 'Male', '1998-05-26', 'Married', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(124, 'Vanessa Hale', 'Bago City', 'Female', '1998-05-26', 'Married', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(125, 'Gaye Eleanora', 'Bago City', 'Male', '1998-05-26', 'Married', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(126, 'Abigail Anos', 'Bacolod City', 'Male', '1984-08-10', 'Married', 'Apparel Cutter', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Jan', '2018'),
(127, 'Aiza Alob', 'Bago City', 'Male', '1990-04-15', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Cerebral Palsy', 'Feb', '2018'),
(128, 'Alden Getio', 'Bago City', 'Male', '1996-05-30', 'Married', 'Baker', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Jan', '2018'),
(129, 'Amihan Agatio', 'Bacolod City', 'Male', '1999-05-11', 'Married', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(130, 'Amparo Ray', 'Bago City', 'Male', '1988-09-20', 'Married', 'Laborer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Storke', 'Jan', '2018'),
(131, 'Apolinario Mabini', 'Bago City', 'Male', '2005-09-29', 'Married', 'Encoder', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Jan', '2018'),
(132, 'Amado Amparo', 'Bago City', 'Male', '1983-09-23', 'Married', 'Artist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Jan', '2018'),
(133, 'Alejandro Eroreco', 'Bago City', 'Male', '2004-11-10', 'Single', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Jan', '2018'),
(134, 'Andres Amparo', 'Bacolod City', 'Male', '2002-03-21', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(135, 'Armando Gorio', 'Bacolod City', 'Male', '1995-03-20', 'Married', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(136, 'Angel Bakaring', 'Bacolod City', 'Male', '1987-09-16', 'Married', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(137, 'Antonio Bagayo', 'Bago City', 'Male', '1997-01-10', 'Married', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(138, 'Aquilino Jong', 'Bago City', 'Male', '2002-04-20', 'Single', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(139, 'Arnel Apurado', 'Bago City', 'Male', '2002-04-29', 'Single', 'Fitness Instructor ', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(140, 'Avelino Artisya', 'Bago City', 'Male', '1991-01-13', 'Single', 'Hospital Pharmacist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(141, 'Aaron Musa', 'Cadiz', 'Male', '1970-01-01', 'Married', 'Apparel Cutter', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', '', 'Jan', '2018'),
(142, 'Abigail Labrador', 'Bago City', 'Male', '2005-12-23', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Cerebral Palsy', 'Feb', '2018'),
(143, 'Abraham Mabol', 'Bago City', 'Male', '2004-07-19', 'Married', 'Baker', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Jan', '2018'),
(144, 'Adonis David', 'Bacolod City', 'Male', '2005-02-17', 'Married', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(145, 'Adrian Ramos', 'Bago City', 'Male', '1984-09-30', 'Married', 'Laborer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Storke', 'Jan', '2018'),
(146, 'Dalisay Magsaysay', 'Bago City', 'Male', '1990-01-23', 'Married', 'Encoder', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Jan', '2018'),
(147, 'Danilo Ernesto', 'Bago City', 'Male', '2003-11-29', 'Married', 'Artist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Jan', '2018'),
(148, 'Divina Grasya', 'Bago City', 'Male', '1992-04-19', 'Single', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Jan', '2018'),
(149, 'Daisy Musa', 'Bacolod City', 'Male', '1988-09-19', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(150, 'Damien Cannillo', 'Bacolod City', 'Male', '2003-06-27', 'Married', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(151, 'Danica Flores', 'Bacolod City', 'Female', '2005-12-13', 'Married', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(152, 'Daniel Makaraig', 'Bago City', 'Female', '1993-05-30', 'Married', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(153, 'Daniela Gerlosan', 'Bago City', 'Female', '2002-05-25', 'Single', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(154, 'Danika Apurado', 'Bago City', 'Female', '1990-05-13', 'Single', 'Fitness Instructor ', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(155, 'Dante Bintalan', 'Bago City', 'Female', '1996-04-19', 'Single', 'Hospital Pharmacist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(156, 'Daphne Centol', 'Bacolod City', 'Female', '2001-03-19', 'Married', 'Apparel Cutter', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Jan', '2018'),
(157, 'Daria Mango', 'Bago City', 'Female', '2004-03-20', 'Single', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Cerebral Palsy', 'Jan', '2018'),
(158, 'Darius Pakson', 'Bago City', 'Female', '1997-06-17', 'Married', 'Baker', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Jan', '2018'),
(159, 'Darlene Graham', 'Bacolod City', 'Female', '1999-11-19', 'Married', 'Driver', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Jan', '2018'),
(160, 'Darryl Payantero', 'Bago City', 'Female', '2000-07-11', 'Married', 'Laborer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Storke', 'Feb', '2018'),
(161, 'Darwin Bajamunde', 'Bago City', 'Female', '1979-08-12', 'Married', 'Encoder', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(162, 'David Dimasar', 'Bago City', 'Female', '1996-07-11', 'Married', 'Artist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(163, 'Dean Shine', 'Bago City', 'Female', '1986-07-21', 'Single', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(164, 'Deither Luzon', 'Bacolod City', 'Female', '1993-04-13', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(165, 'Delila Dentes', 'Bacolod City', 'Female', '1982-03-22', 'Married', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(166, 'Demetria Kalalan', 'Bacolod City', 'Female', '1978-09-11', 'Married', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(167, 'Denis Ignacio', 'Bago City', 'Female', '1978-03-30', 'Married', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(168, 'Denise Pablo', 'Bago City', 'Female', '1990-02-13', 'Single', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(169, 'Pablo Morina', 'Bago City', 'Female', '1989-09-13', 'Single', 'Fitness Instructor ', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(170, 'Paco Pero', 'Bago City', 'Female', '1998-11-16', 'Single', 'Hospital Pharmacist', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(171, 'Palma Agwanta', 'Bacolod City', 'Female', '1993-10-12', 'Married', 'Composer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Traumatic Brain Injuries', 'Feb', '2018'),
(172, 'Palmer Pepito', 'Bago City', 'Female', '1997-08-28', 'Single', 'Civil Engineer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Fractures', 'Feb', '2018'),
(173, 'Paloma Diente', 'Bago City', 'Female', '1981-07-16', 'Married', 'Editor', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Arthritis', 'Feb', '2018'),
(174, 'Pamela Duhaylungsod', 'Bacolod City', 'Female', '1989-09-22', 'Married', 'Writer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(175, 'Pancho Park', 'Bago City', 'Female', '2001-10-29', 'Married', 'Programmer', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Spinal Cord Injuries', 'Feb', '2018'),
(176, 'Ella Leonor', 'Bago City', 'Male', '1989-09-22', 'Married', 'Technician', 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4443802, 'Samantha Osinski', 'Stroke', 'Feb', '2018'),
(177, 'Miriam Joy Gayoba', 'La Carlota', 'Female', '1997-09-20', 'Single', 'Student', '', '', '', 0, '', '', 'Feb', '2018'),
(178, 'Vicmary Yanson', 'Bacolod', 'Male', '1970-01-01', 'Single', 'student', 'Mico Catibog', 'Riverside', 'Riverside Avenue', 931231321, 'Nikko Pula', 'Scoliosis', 'Feb', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `planID` int(11) NOT NULL,
  `planDesc` varchar(30) NOT NULL,
  `EvalID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`planID`, `planDesc`, `EvalID`) VALUES
(1, 'asd', 0),
(2, 'asdasd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `planofcare`
--

CREATE TABLE `planofcare` (
  `POCID` int(8) NOT NULL,
  `PatientID` varchar(11) NOT NULL,
  `PT_ID` int(8) NOT NULL,
  `POCSessionDate` date NOT NULL,
  `POCTreatment` text NOT NULL,
  `POCBloodPressure` text NOT NULL,
  `POCHeartRate` text NOT NULL,
  `POCRespiratoryRate` text NOT NULL,
  `POCPulse` text NOT NULL,
  `POC_Subjective` varchar(20) NOT NULL,
  `POCAssessment` text NOT NULL,
  `POCPlan` text NOT NULL,
  `POCNextSchedDate` date NOT NULL,
  `POCTime` varchar(15) NOT NULL,
  `POCTreatmentBill` int(5) NOT NULL,
  `POCStatus` varchar(10) NOT NULL,
  `POCSetRepMin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planofcare`
--

INSERT INTO `planofcare` (`POCID`, `PatientID`, `PT_ID`, `POCSessionDate`, `POCTreatment`, `POCBloodPressure`, `POCHeartRate`, `POCRespiratoryRate`, `POCPulse`, `POC_Subjective`, `POCAssessment`, `POCPlan`, `POCNextSchedDate`, `POCTime`, `POCTreatmentBill`, `POCStatus`, `POCSetRepMin`) VALUES
(47, '64', 5, '2018-02-23', 'dsadasdasdasdasd', '12312312', '31231', '312313', '1312', 'sdasadasdas', 'dasdasdasdasasdasd', 'asdasdasdasdas', '2018-02-24', '1:00 am', 12312321, 'Unpaid', ''),
(48, '64', 5, '2018-02-23', 'dasddsada', '12313', '31231', '2312', '12313', 'asdada', 'dsa', 'dsadsa', '2018-02-25', '2:01 pm', 1222222, 'Unpaid', ''),
(49, '141', 3, '2018-02-23', 'dsadasdsa', '12313', '231321', '313231', '231321', 'dsadadsada', 'dasdadsa', 'dasdasdas', '2018-02-23', '1:00 pm', 321312, 'Unpaid', ''),
(50, '141', 4, '2018-02-23', 'redee', 'ee', 'eee', 'eee', 'eee', 'eeee', '3e', 'eeeee', '2018-02-25', '2:01 pm', 2323, 'Unpaid', '');

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE `pt` (
  `PT_ID` int(11) NOT NULL,
  `PT_Name` varchar(30) NOT NULL,
  `PT_Address` varchar(30) NOT NULL,
  `PT_Gender` varchar(7) NOT NULL,
  `PT_Birthday` date NOT NULL,
  `PT_CivilStatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`PT_ID`, `PT_Name`, `PT_Address`, `PT_Gender`, `PT_Birthday`, `PT_CivilStatus`) VALUES
(1, 'Hans Buglosano', 'Bacolod City', 'Male', '1970-01-01', 'Single'),
(2, 'Roz Stoddart', 'Bacolod City', 'Female', '2018-11-08', 'Married'),
(3, 'Mico Hubert Catibog', 'Bacolod City', 'Male', '1994-05-13', 'Single'),
(4, 'Princess Antoinette Donabelle ', 'Bago City', 'Female', '1990-09-30', 'Married'),
(5, 'Jimza Guanzon', 'Bacolod City', 'Female', '2018-04-28', 'Single'),
(6, 'Paprika Jong', 'Hinigaran', 'Male', '2018-09-18', 'Single'),
(7, 'Piayao Apurado', 'Bacolod City', 'Male', '2018-04-28', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `RefID` int(8) NOT NULL,
  `PatientID` int(11) NOT NULL,
  `RefDoctor` text NOT NULL,
  `RefHospital` text NOT NULL,
  `RefAddress` text NOT NULL,
  `RefTelephone` int(11) NOT NULL,
  `RefContactPerson` text NOT NULL,
  `RefCases` text NOT NULL,
  `RefCasesDec` text NOT NULL,
  `Ref_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`RefID`, `PatientID`, `RefDoctor`, `RefHospital`, `RefAddress`, `RefTelephone`, `RefContactPerson`, `RefCases`, `RefCasesDec`, `Ref_Date`) VALUES
(1, 2, 'nikko pula', 'riverside', 'bacolod city', 123451, 'joseph ryan', 'Stroke', 'sample description', '2018-02-05'),
(2, 1, 'sample', 'sample', 'sample', 4461039, 'sample', 'sample', 'sample', '2018-02-02'),
(3, 8, 'Dr. Taguro Bago', 'Bacolod Hospital', 'Bacolod City', 992, 'Maria Elena Yanson', 'Stroke', 'Done Several Treatment', '2018-01-02'),
(4, 2, 'Dr. Taguro Bago', 'Riverside Hospital', 'Bacolod City', 2147483647, 'James Petron', 'Stroke', 'done already first sessions', '2018-01-12'),
(5, 37, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 44555111, 'Jade Apurado', 'Stroke', 'Done several sessions, have a problems in chest pain', '2018-02-01'),
(14, 64, 'asd', 'asd', 'asd', 0, 'asd', 'Fractures', 'asdads', '2018-01-12'),
(15, 64, 'asd', 'asd', 'asd', 0, 'asd', 'Fractures', 'asdads', '2018-02-12'),
(19, 55, 'asdasd', 'asd', 'asd', 123123, 'asd', 'Spinal Cord Injuries', 'samm', '2018-02-12'),
(20, 64, 'asd', 'asd', 'asd', 0, 'asd', '', 'asdads', '2018-02-12'),
(21, 64, 'asd', 'asd', 'asd', 0, 'asd', '', 'asdads', '2018-02-12'),
(22, 8, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 2, 'Daniel Marsh', 'Stroke', 'aww', '2018-02-12'),
(23, 64, 'asd', 'asd', 'asd', 0, 'asd', 'Spinal Cord Injuries', 'asdads', '2018-02-12'),
(24, 64, 'asd', 'asd', 'asd', 0, 'asd', 'Traumatic Brain Injuries', 'asdads', '2018-02-12'),
(25, 64, 'asd', 'asd', 'asd', 0, 'asd', 'Cerebral Palsy', 'asdads', '2018-02-12'),
(26, 141, 'Dr. Jade Jong', 'Doctors Hospital', 'Bacolod City', 44555111, 'Samantha Osinski', 'Stroke', 'sample', '2018-02-23'),
(27, 2, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'James Petron', 'Frozen Shoulder', 'Done several sessions, have problems in lower back knee ', '2018-01-12'),
(28, 2, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'James Petron', 'Frozen Shoulder', 'Done several sessions, have problems in lower back knee ', '2018-01-12'),
(29, 2, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'James Bayud', 'Frozen Shoulder', 'Done several sessions, have problems in lower back knee ', '2018-01-13'),
(30, 3, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Ivan Buglosa', '', 'Done several sessions, have problems in lower back knee ', '2018-01-14'),
(31, 4, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Fokwen Bagin', '', 'Done several sessions, have problems in lower back knee ', '2018-01-15'),
(32, 5, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Mico Cats', '', 'Done several sessions, have problems in lower back knee ', '2018-01-16'),
(33, 6, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Nikko Red', '', 'Done several sessions, have problems in lower back knee ', '2018-01-17'),
(34, 7, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Josh Tee', 'Structure', 'Done several sessions, have problems in lower back knee ', '2018-01-18'),
(35, 8, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Rocky Bagayo', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-01-19'),
(36, 9, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Precious Apurado', 'Low Back Pains', 'Done several sessions, have problems in lower back knee ', '2018-01-20'),
(37, 10, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'James Guanzon', 'Frozen Shoulder', 'Done several sessions, have problems in lower back knee ', '2018-01-21'),
(38, 11, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Alexa Schmidt', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-01-22'),
(39, 12, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Alize Conroy', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-01-23'),
(40, 13, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Winfield Roob', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-01-24'),
(41, 14, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Marguerite Vandervort', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-01-25'),
(42, 15, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Jamil Romaguera PhD', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-01-26'),
(43, 16, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Eleanora Bahringer', '', 'Done several sessions, have problems in lower back knee ', '2018-01-27'),
(44, 17, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Dicksan Gordon', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-01-28'),
(45, 18, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Leah Lastima', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-01-29'),
(46, 19, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Josephine Gibson', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-01-30'),
(47, 20, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Devin Cummerata', 'Low Back Pains', 'Done several sessions, have problems in lower back knee ', '2018-01-31'),
(48, 21, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Antoinette Mayer', 'Low Back Pains', 'Done several sessions, have problems in lower back knee ', '2018-02-01'),
(49, 22, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Desiree Parker', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-02-02'),
(50, 23, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Jordane Johns', 'Scoliosis', 'Done several sessions, have problems in lower back knee ', '2018-02-03'),
(51, 24, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Nancy Diente', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-02-04'),
(52, 25, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Jerry Diente', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-02-05'),
(53, 26, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Daniel Bagayo', 'Low Back Pains', 'Done several sessions, have problems in lower back knee ', '2018-02-06'),
(54, 27, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Tures Mambo', 'Scoliosis', 'Done several sessions, have problems in lower back knee ', '2018-02-07'),
(55, 28, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Tures Mambo', 'Scoliosis', 'Done several sessions, have problems in lower back knee ', '2018-02-08'),
(56, 31, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Sheena Thunder', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-02-09'),
(57, 32, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Rizza Guanzon', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-02-10'),
(58, 33, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Juvilyn Ibanez', 'Cerebral Palsy', 'Done several sessions, have problems in lower back knee ', '2018-02-11'),
(59, 34, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Jonalyn Cofino', 'Myofascial Pain Syndrome', 'Done several sessions, have problems in lower back knee ', '2018-02-12'),
(60, 35, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Jose Brodit III', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-02-13'),
(61, 36, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Michelle Dianabelle Bond', 'Cerebral Palsy', 'Done several sessions, have problems in lower back knee ', '2018-02-14'),
(62, 37, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Alvin Yansonas', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-02-15'),
(63, 38, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Brix Handler', 'Storke', 'Done several sessions, have problems in lower back knee ', '2018-02-16'),
(64, 39, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Aracely Aufderhar PhD', '', 'Done several sessions, have problems in lower back knee ', '2018-02-17'),
(65, 40, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Tod Wisozk', 'Cerebral Palsy', 'Done several sessions, have problems in lower back knee ', '2018-02-18'),
(66, 41, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Hermina Schroeder', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-02-19'),
(67, 42, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Ignatius Brekke', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-02-20'),
(68, 43, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Abraham Eichmann', '', 'Done several sessions, have problems in lower back knee ', '2018-02-21'),
(69, 44, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Donato Gerlach', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-02-22'),
(70, 45, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Filepe Demamon', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-02-23'),
(71, 46, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Agustus Morer', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-02-24'),
(72, 47, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Asyong Utotong', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-02-25'),
(73, 48, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Draco Bukog', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-02-26'),
(74, 49, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Elsa Magandadato', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-02-27'),
(75, 50, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Abdula Spertecra', '', 'Done several sessions, have problems in lower back knee ', '2018-02-28'),
(76, 51, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Mamita Luna', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-03-01'),
(77, 52, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'July Bago', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-03-02'),
(78, 53, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Sadam Lazaro', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-03-03'),
(79, 54, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Emely Gislason', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-03-04'),
(80, 55, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Vicmar Marson', 'Cerebral Palsy', 'Done several sessions, have problems in lower back knee ', '2018-03-05'),
(81, 56, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Daniel Senson', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-03-06'),
(82, 57, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Arcana Siklab', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-03-07'),
(83, 58, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Clide Bismark', 'Storke', 'Done several sessions, have problems in lower back knee ', '2018-03-08'),
(84, 59, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'James Dormedo', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-03-09'),
(85, 60, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Pepito Manaloto', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-03-10'),
(86, 61, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Portico Sandigan', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-03-11'),
(87, 62, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Amor Agustita', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-03-12'),
(88, 63, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Merkado Tukog', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-03-13'),
(89, 64, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Abdul Singcang', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-03-14'),
(90, 65, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Sentina Mercado', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-03-15'),
(91, 66, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Jose Lamoda', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-03-16'),
(92, 67, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Junie Cong', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-03-17'),
(93, 68, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Lazaron Mersedez', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-03-18'),
(94, 69, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Shian Sample', '', 'Done several sessions, have problems in lower back knee ', '2018-03-19'),
(95, 70, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Adrian Clarkson', '', 'Done several sessions, have problems in lower back knee ', '2018-03-20'),
(96, 71, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Jordan Clarkson', '', 'Done several sessions, have problems in lower back knee ', '2018-03-21'),
(97, 72, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Mark Paras', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-03-22'),
(98, 73, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Glenn Mark', '', 'Done several sessions, have problems in lower back knee ', '2018-03-23'),
(99, 74, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Nicole June', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-03-24'),
(100, 75, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Ursula Amanda', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-03-25'),
(101, 76, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Afua Alvin', 'Cerebral Palsy', 'Done several sessions, have problems in lower back knee ', '2018-03-26'),
(102, 77, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Kerbel Chaka', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-03-27'),
(103, 78, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Sinio Batotoy', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-03-28'),
(104, 79, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Pakaw Vojo', 'Storke', 'Done several sessions, have problems in lower back knee ', '2018-03-29'),
(105, 80, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Dian Itom', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-03-30'),
(106, 81, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Asitantion Papsi', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-03-31'),
(107, 82, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Daniel Molabin', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-04-01'),
(108, 83, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Harumi Chan', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-04-02'),
(109, 84, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Pekarin Orange', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-04-03'),
(110, 85, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Yello Graded', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-04-04'),
(111, 86, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Rosana Jelotin', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-04-05'),
(112, 87, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Roxane Jeffer', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-04-06'),
(113, 88, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Vicky Yanson', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-04-07'),
(114, 89, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Raide Pula', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-04-08'),
(115, 90, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Wynn Hatake', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-04-09'),
(116, 91, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Tuyaw Nia', 'Cerebral Palsy', 'Done several sessions, have problems in lower back knee ', '2018-04-10'),
(117, 92, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Therese Mamasita', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-04-11'),
(118, 93, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Caithlyn Akol', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-04-12'),
(119, 94, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Peper Jose', 'Storke', 'Done several sessions, have problems in lower back knee ', '2018-04-13'),
(120, 95, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Jose Brodith', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-04-14'),
(121, 96, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Jason Diosana', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-04-15'),
(122, 97, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Peterson Papa', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-04-16'),
(123, 98, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Ronald Emil', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-04-17'),
(124, 99, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Gastone Pranka', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-04-18'),
(125, 100, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Edith Winfred', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-04-19'),
(126, 101, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Neal Yolanda', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-04-20'),
(127, 102, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Derek Dortha', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-04-21'),
(128, 103, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Silvester Cherie', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-04-22'),
(129, 104, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Kirby Alvena', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-04-23'),
(130, 105, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Daniel Gaylord', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-04-24'),
(131, 106, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Ansel Shanna', 'Cerebral Palsy', 'Done several sessions, have problems in lower back knee ', '2018-04-25'),
(132, 107, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Clifford Tera', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-04-26'),
(133, 108, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Liberty Corrine', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-04-27'),
(134, 109, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Earnest Rodger', 'Storke', 'Done several sessions, have problems in lower back knee ', '2018-04-28'),
(135, 110, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Brande Emil', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-04-29'),
(136, 111, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Royal Francis', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-04-30'),
(137, 112, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Flora Stephen', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-05-01'),
(138, 113, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Gori Gay', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-05-02'),
(139, 114, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Robert Misti', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-05-03'),
(140, 115, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Elaina Laurel', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-05-04'),
(141, 116, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Virginia Manila', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-05-05'),
(142, 117, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Peter Luzon', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-05-06'),
(143, 118, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Alkaid Yanson', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-05-07'),
(144, 119, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Ingram Betio', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-05-08'),
(145, 120, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Agham Malini', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-05-09'),
(146, 121, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Candis Esme', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-05-10'),
(147, 122, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Lavina Vergil', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-05-11'),
(148, 123, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Seth Marshal', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-05-12'),
(149, 124, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Vanessa Hale', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-05-13'),
(150, 125, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Gaye Eleanora', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-05-14'),
(151, 126, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Abigail Anos', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-05-15'),
(152, 127, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Aiza Alob', 'Cerebral Palsy', 'Done several sessions, have problems in lower back knee ', '2018-05-16'),
(153, 128, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Alden Getio', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-05-17'),
(154, 129, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Amihan Agatio', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-05-18'),
(155, 130, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Amparo Ray', 'Storke', 'Done several sessions, have problems in lower back knee ', '2018-05-19'),
(156, 131, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Apolinario Mabini', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-05-20'),
(157, 132, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Amado Amparo', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-05-21'),
(158, 133, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Alejandro Eroreco', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-05-22'),
(159, 134, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Andres Amparo', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-05-23'),
(160, 135, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Armando Gorio', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-05-24'),
(161, 136, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Angel Bakaring', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-05-25'),
(162, 137, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Antonio Bagayo', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-05-26'),
(163, 138, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Aquilino Jong', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-05-27'),
(164, 139, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Arnel Apurado', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-05-28'),
(165, 140, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Avelino Artisya', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-05-29'),
(166, 141, 'dsadasdasd', 'Riverside Hospital', 'Bacolod City', 4461039, 'Aaron Musa', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-02-23'),
(167, 142, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Abigail Labrador', 'Cerebral Palsy', 'Done several sessions, have problems in lower back knee ', '2018-05-31'),
(168, 143, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Abraham Mabol', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-06-01'),
(169, 144, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Adonis David', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-06-02'),
(170, 145, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Adrian Ramos', 'Storke', 'Done several sessions, have problems in lower back knee ', '2018-06-03'),
(171, 146, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Dalisay Magsaysay', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-06-04'),
(172, 147, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Danilo Ernesto', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-06-05'),
(173, 148, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Divina Grasya', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-06-06'),
(174, 149, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Daisy Musa', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-06-07'),
(175, 150, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Damien Cannillo', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-06-08'),
(176, 151, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Danica Flores', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-06-09'),
(177, 152, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Daniel Makaraig', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-06-10'),
(178, 153, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Daniela Gerlosan', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-06-11'),
(179, 154, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Danika Apurado', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-06-12'),
(180, 155, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Dante Bintalan', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-06-13'),
(181, 156, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Daphne Centol', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-06-14'),
(182, 157, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Daria Mango', 'Cerebral Palsy', 'Done several sessions, have problems in lower back knee ', '2018-06-15'),
(183, 158, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Darius Pakson', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-06-16'),
(184, 159, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Darlene Graham', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-06-17'),
(185, 160, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Darryl Payantero', 'Storke', 'Done several sessions, have problems in lower back knee ', '2018-06-18'),
(186, 161, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Darwin Bajamunde', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-06-19'),
(187, 162, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'David Dimasar', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-06-20'),
(188, 163, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Dean Shine', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-06-21'),
(189, 164, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Deither Luzon', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-06-22'),
(190, 165, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Delila Dentes', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-06-23'),
(191, 166, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Demetria Kalalan', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-06-24'),
(192, 167, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Denis Ignacio', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-06-25'),
(193, 168, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Denise Pablo', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-06-26'),
(194, 169, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Pablo Morina', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-06-27'),
(195, 170, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Paco Pero', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-06-28'),
(196, 171, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Palma Agwanta', 'Traumatic Brain Injuries', 'Done several sessions, have problems in lower back knee ', '2018-06-29'),
(197, 172, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Palmer Pepito', 'Fractures', 'Done several sessions, have problems in lower back knee ', '2018-06-30'),
(198, 173, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Paloma Diente', 'Arthritis', 'Done several sessions, have problems in lower back knee ', '2018-07-01'),
(199, 174, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Pamela Duhaylungsod', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-07-02'),
(200, 175, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Pancho Park', 'Spinal Cord Injuries', 'Done several sessions, have problems in lower back knee ', '2018-07-03'),
(201, 176, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Ella Leonor', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-07-04'),
(202, 177, 'Dr. Jade Jong', 'Riverside Hospital', 'Bacolod City', 4461039, 'Miriam Joy Gayoba', '', 'Done several sessions, have problems in lower back knee ', '2018-07-05'),
(203, 144, 'fefd', 'fsdfsd', 'fsdfs', 321307, 'sdfd', 'Stroke', 'fdgdgdgdgd', '2018-02-23'),
(204, 141, 'bbbbbbbbbsdsad', 'Riverside Hospital', 'Bacolod City', 4461039, 'Aaron Musa', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-02-23'),
(205, 64, 'aaaaaaaaaaa', 'Riverside Hospital', 'Bacolod City', 4461039, 'Abdul Singcang', 'Stroke', 'Done several sessions, have problems in lower back knee ', '2018-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(8) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `userType` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `username`, `password`, `userType`) VALUES
(1, 'administrator', 'admin', 'admin', 'admin'),
(2, 'physical therapist', 'pt', 'pt', 'pt'),
(4, 'mico', 'mico', 'mico', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`EquipID`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`EvalID`),
  ADD UNIQUE KEY `PatientID` (`PatientID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`planID`);

--
-- Indexes for table `planofcare`
--
ALTER TABLE `planofcare`
  ADD PRIMARY KEY (`POCID`);

--
-- Indexes for table `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`PT_ID`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`RefID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `EvalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `planID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `planofcare`
--
ALTER TABLE `planofcare`
  MODIFY `POCID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `pt`
--
ALTER TABLE `pt`
  MODIFY `PT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `RefID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
