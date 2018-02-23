-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 09:59 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
  `PatientID` varchar(11) NOT NULL,
  `EvalPT` varchar(30) NOT NULL,
  `EvalSessionQty` int(2) NOT NULL,
  `EvalChiefComplaint` varchar(50) NOT NULL,
  `EvalHistoryIllness` varchar(100) NOT NULL,
  `EvalSpeech` varchar(15) NOT NULL,
  `EvalEdema` varchar(15) NOT NULL,
  `EvalEndurance` varchar(15) NOT NULL,
  `EvalVision` varchar(15) NOT NULL,
  `EvalMuscleTone` varchar(15) NOT NULL,
  `EvalPosture` varchar(15) NOT NULL,
  `EvalHearing` varchar(15) NOT NULL,
  `EvalCoordination` varchar(15) NOT NULL,
  `EvalSkin` varchar(15) NOT NULL,
  `ROMLeftShoulder` int(2) NOT NULL,
  `ROMRightShoulder` int(2) NOT NULL,
  `ROMLeftElbow` int(2) NOT NULL,
  `ROMRightElbow` int(2) NOT NULL,
  `ROMLeftForearm` int(2) NOT NULL,
  `ROMRightForearm` int(2) NOT NULL,
  `ROMLefthandFingers` int(2) NOT NULL,
  `ROMRighthandFingers` int(2) NOT NULL,
  `ROMLeftWrist` int(2) NOT NULL,
  `ROMRightWrist` int(2) NOT NULL,
  `ROMLeftTrunk` int(2) NOT NULL,
  `ROMRightTrunk` int(2) NOT NULL,
  `ROMHip` int(2) NOT NULL,
  `ROMLeftKnee` int(2) NOT NULL,
  `ROMRightKnee` int(2) NOT NULL,
  `ROMLeftAnkle` int(2) NOT NULL,
  `ROMRightAnkle` int(2) NOT NULL,
  `ROMNeck` int(2) NOT NULL,
  `MMTLeftShoulder` int(2) NOT NULL,
  `MMTRightShoulder` int(2) NOT NULL,
  `MMTLeftElbow` int(2) NOT NULL,
  `MMTRightElbow` int(2) NOT NULL,
  `MMTLeftForearm` int(2) NOT NULL,
  `MMTRightForearm` int(2) NOT NULL,
  `MMTLefthandFingers` int(2) NOT NULL,
  `MMTRighthandFingers` int(2) NOT NULL,
  `MMTLeftWrist` int(2) NOT NULL,
  `MMTRightWrist` int(2) NOT NULL,
  `MMTLeftTrunk` int(2) NOT NULL,
  `MMTRightTrunk` int(2) NOT NULL,
  `MMTHip` int(2) NOT NULL,
  `MMTLeftKnee` int(2) NOT NULL,
  `MMTRightKnee` int(2) NOT NULL,
  `MMTLeftAnkle` int(2) NOT NULL,
  `MMTRightAnkle` int(2) NOT NULL,
  `MMTNeck` int(2) NOT NULL,
  `Remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`EvalID`, `PatientID`, `EvalPT`, `EvalSessionQty`, `EvalChiefComplaint`, `EvalHistoryIllness`, `EvalSpeech`, `EvalEdema`, `EvalEndurance`, `EvalVision`, `EvalMuscleTone`, `EvalPosture`, `EvalHearing`, `EvalCoordination`, `EvalSkin`, `ROMLeftShoulder`, `ROMRightShoulder`, `ROMLeftElbow`, `ROMRightElbow`, `ROMLeftForearm`, `ROMRightForearm`, `ROMLefthandFingers`, `ROMRighthandFingers`, `ROMLeftWrist`, `ROMRightWrist`, `ROMLeftTrunk`, `ROMRightTrunk`, `ROMHip`, `ROMLeftKnee`, `ROMRightKnee`, `ROMLeftAnkle`, `ROMRightAnkle`, `ROMNeck`, `MMTLeftShoulder`, `MMTRightShoulder`, `MMTLeftElbow`, `MMTRightElbow`, `MMTLeftForearm`, `MMTRightForearm`, `MMTLefthandFingers`, `MMTRighthandFingers`, `MMTLeftWrist`, `MMTRightWrist`, `MMTLeftTrunk`, `MMTRightTrunk`, `MMTHip`, `MMTLeftKnee`, `MMTRightKnee`, `MMTLeftAnkle`, `MMTRightAnkle`, `MMTNeck`, `Remarks`) VALUES
(13, '2', 'Ryan Jay', 1, 'rawrawr', 'Blood Transfusion, Coronary Artery Disease, Emphysema, ', 'sample', 'sample', 'sample', 'rawrawr', 'sample', 'sample', 'sample', 'sample', 'sample', 9, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'old'),
(14, '1', 'Nikko Pula', 2, 'chief', 'Blood Clot, Cancer, Eye Disease, Gout, Hypercholesterolemia, Osteoporosis/Osteopenia, ', 'speech', 'edema', 'endurance', 'chief', 'vision', 'muslce', 'hearing', 'cooring', 'skin', 0, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'recurring'),
(17, '1', 'Ryan Jay', 2, 'Sakit akon Tiyan', 'Alcholism, Bronchitis, Congestive Heart Failure, Emphysema, Liver Disorder-Hepatiti, ', 'disorder', 'okay', 'asd', 'Sakit akon Tiya', 'leo', 'biceps', 'okay', 'oka', 'not okay', 3, 4, 8, 4, 6, 7, 4, 8, 8, 4, 5, 6, 6, 6, 6, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'New');

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
  `PatientCases` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `PatientName`, `PatientAddress`, `PatientGender`, `PatientBirthdate`, `PatientCivilStatus`, `PatientProfession`, `PatientDoctor`, `PatientHospital`, `PatientReferralAddress`, `PatientTelephone`, `PatientContactPerson`, `PatientCases`) VALUES
(1, 'steven paul', 'handumanan', 'Male', '2017-12-29', 'Married', 'marketing associate', 'jan bayud', 'riverside1', 'handumanan', 4644111, 'adela donan', 'cases12'),
(2, 'james bayud', 'handumanan', 'Male', '2017-12-02', 'Widowed', 'tambay', 'bunso ungo', 'lady of mercy', 'villamonte bacolod city', 44555111, 'vicmar yanson', 'rare case'),
(3, 'ivan buglosa', 'mansilingan bacolod city', 'Male', '1996-03-06', 'Married', 'Student', 'Dr. Shitty ', 'Doctors Hospital', 'Bago City', 4410025, 'Marlyn Yanson', 'wrinkle cases');

-- --------------------------------------------------------

--
-- Table structure for table `planofcare`
--

CREATE TABLE `planofcare` (
  `POCID` int(8) NOT NULL,
  `PatientID` varchar(11) NOT NULL,
  `POCPT` text NOT NULL,
  `POCDateSched` date NOT NULL,
  `POCSessionDate` date NOT NULL,
  `POCStatus` tinyint(1) NOT NULL,
  `POCTreatment` text NOT NULL,
  `POCRepeatitions` int(11) NOT NULL,
  `POCSets` int(11) NOT NULL,
  `POCBloodPressure` text NOT NULL,
  `POCHeartRate` text NOT NULL,
  `POCRespiratoryRate` text NOT NULL,
  `POCPulse` text NOT NULL,
  `POCSubjective` text NOT NULL,
  `POCObjective` text NOT NULL,
  `POCAssessment` text NOT NULL,
  `POCPlan` text NOT NULL,
  `POCNextSchedDate` date NOT NULL,
  `POCTime` time NOT NULL,
  `POCTreatmentBill` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planofcare`
--

INSERT INTO `planofcare` (`POCID`, `PatientID`, `POCPT`, `POCDateSched`, `POCSessionDate`, `POCStatus`, `POCTreatment`, `POCRepeatitions`, `POCSets`, `POCBloodPressure`, `POCHeartRate`, `POCRespiratoryRate`, `POCPulse`, `POCSubjective`, `POCObjective`, `POCAssessment`, `POCPlan`, `POCNextSchedDate`, `POCTime`, `POCTreatmentBill`) VALUES
(1, '1', 'Ryan Jay', '2018-01-03', '2018-01-22', 0, 'Bed Mobility Training', 2, 1, 'sam', 'sam', 'sam', 'sam', 'sam', 'sam', 'sam', 'sam', '0000-00-00', '00:00:00', 21),
(2, '1', 'Ryan Jay', '0000-00-00', '2018-01-22', 0, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00', 213);

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
  `RefCasesDec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`RefID`, `PatientID`, `RefDoctor`, `RefHospital`, `RefAddress`, `RefTelephone`, `RefContactPerson`, `RefCases`, `RefCasesDec`) VALUES
(1, 2, 'nikko pula', 'riverside', 'bacolod city', 123451, 'joseph ryan', 'case1,case2,case3', 'sample description'),
(2, 1, 'sample', 'sample', 'sample', 4461039, 'sample', 'sample', 'sample');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(8) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `userType` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `userType`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'pt', 'pt', 'pt');

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
  ADD PRIMARY KEY (`EvalID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- Indexes for table `planofcare`
--
ALTER TABLE `planofcare`
  ADD PRIMARY KEY (`POCID`);

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
  MODIFY `EvalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `planofcare`
--
ALTER TABLE `planofcare`
  MODIFY `POCID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `RefID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
