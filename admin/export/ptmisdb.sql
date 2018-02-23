DROP TABLE backup;

CREATE TABLE `backup` (
  `backup_id` int(10) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO backup VALUES("1","Successfully exported database","February 10, 2018, 1:31 pm"); 
INSERT INTO backup VALUES("2","Successfully exported database","February 10, 2018, 1:33 pm"); 
INSERT INTO backup VALUES("3","Successfully exported database","February 10, 2018, 1:34 pm"); 
INSERT INTO backup VALUES("4","Successfully exported database","February 10, 2018, 1:35 pm"); 
INSERT INTO backup VALUES("5","Successfully exported database","February 10, 2018, 1:36 pm"); 
INSERT INTO backup VALUES("6","Successfully imported database","February 10, 2018, 1:37 pm"); 
INSERT INTO backup VALUES("7","Successfully imported database","February 10, 2018, 1:42 pm"); 
INSERT INTO backup VALUES("8","Successfully exported database","February 10, 2018, 2:15 pm"); 
INSERT INTO backup VALUES("9","Successfully imported database","February 10, 2018, 8:20 pm"); 
INSERT INTO backup VALUES("0","Successfully imported database","February 12, 2018, 6:29 pm"); 
INSERT INTO backup VALUES("0","Successfully imported database","February 12, 2018, 6:29 pm"); 
INSERT INTO backup VALUES("0","Successfully exported database","February 12, 2018, 6:29 pm"); 
INSERT INTO backup VALUES("0","Successfully imported database","February 12, 2018, 6:30 pm"); 
INSERT INTO backup VALUES("0","Successfully imported database","February 12, 2018, 7:26 pm"); 
INSERT INTO backup VALUES("0","Successfully imported database","February 12, 2018, 7:27 pm"); 
INSERT INTO backup VALUES("0","Successfully exported database","February 12, 2018, 7:28 pm"); 



DROP TABLE equipment;

CREATE TABLE `equipment` (
  `EquipID` int(8) NOT NULL,
  `EquipName` text NOT NULL,
  `EquipQty` int(3) NOT NULL,
  `EquipStatus` text NOT NULL,
  `EquipUsed` int(4) NOT NULL,
  PRIMARY KEY (`EquipID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE evalplan;

CREATE TABLE `evalplan` (
  `evalPlanID` int(11) NOT NULL AUTO_INCREMENT,
  `evalPlan_Desc` varchar(30) NOT NULL,
  `EvalID` int(11) NOT NULL,
  `evalPlan_Status` varchar(15) NOT NULL,
  PRIMARY KEY (`evalPlanID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE evaluation;

CREATE TABLE `evaluation` (
  `EvalID` int(11) NOT NULL AUTO_INCREMENT,
  `PatientID` varchar(11) NOT NULL,
  `EvalPT` varchar(30) NOT NULL,
  `EvalSessionQty` int(2) NOT NULL,
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
  `Others` varchar(30) NOT NULL,
  PRIMARY KEY (`EvalID`),
  UNIQUE KEY `PatientID` (`PatientID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO evaluation VALUES("13","2","Princess Antoinette Donabelle ","1","rawrawr","Blood Transfusion, Coronary Artery Disease, Emphysema, ","sample","sample","sample","asd","asd","","","2018-02-12","old",""); 
INSERT INTO evaluation VALUES("14","3","Piayao Apurado","2","chief","Blood Clot, Cancer, Eye Disease, Gout, Hypercholesterolemia, Osteoporosis/Osteopenia, ","edema","muslce","skin","asd","asd","","","2018-02-12","recurring",""); 
INSERT INTO evaluation VALUES("17","1","Ryan Jay","2","Sakit akon Tiyan","Alcholism, Bronchitis, Congestive Heart Failure, Emphysema, Liver Disorder-Hepatiti, ","okay","biceps","not okay","","","","","2018-03-02","New",""); 
INSERT INTO evaluation VALUES("20","4","Hans Buglosa","2","sam","Anxiety, Asthma, ","sam","sam","sam","","","","","2018-02-06","Old",""); 
INSERT INTO evaluation VALUES("21","8","Roz Stoddart","4","had a lower injury in back","Alcholism, Anxiety, Asthma, ","sample","sample","sample","","","","","2018-02-07","New",""); 
INSERT INTO evaluation VALUES("22","26","Roz Stoddart","3","having some minor pain in the lower area of knee","Asthma, Diabetes, Depression, Gout, ","sample","sample","sample","","","","","2018-02-07","New",""); 
INSERT INTO evaluation VALUES("23","9","Roz Stoddart","4","having a back problem issues & minor pain in lower","Alcholism, Anxiety, Diabetes, Depression, "," Deep Vein Thro","atrophy of the ","petechiae","","","","","2018-02-07","New",""); 
INSERT INTO evaluation VALUES("24","37","Paprika Jong","4","having problem in breathing ","Alcholism, Diabetes, Depression, ","sample","sample","sample","asd","asd","","","2018-02-12","New",""); 



DROP TABLE illnesscounter;

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




DROP TABLE patient;

CREATE TABLE `patient` (
  `PatientID` int(11) NOT NULL AUTO_INCREMENT,
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
  `year` char(4) NOT NULL,
  PRIMARY KEY (`PatientID`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("1","steven paul","handumanan","Male","1996-12-31","Married","marketing associate","jan bayud","riverside1","handumanan","4644111","adela donan","Peripheral Nerve Injuries","Jan","2018"); 
INSERT INTO patient VALUES("2","James Bayud","handumanan","Male","2017-12-02","Widowed","Driver","bunso ungo","lady of mercy","villamonte bacolod city","44555111","vicmar yanson","Frozen Shoulder","Jan","2018"); 
INSERT INTO patient VALUES("3","Ivan Buglosa","mansilingan bacolod city","Male","1996-03-06","Married","Student","Dr. Shitty ","Doctors Hospital","Bago City","4410025","Marlyn Yanson","wrinkle cases","Jan","2018"); 
INSERT INTO patient VALUES("4","Fokwen Bagin","Mansilingan Bacolod City","Male","1996-01-06","Single","Housewife","Wuasheley","Doctors Hospital","Shopping","2147483647","Maria Elena Yanson","Heart Failure","Jan","2018"); 
INSERT INTO patient VALUES("5","Mico Cats","asd","Male","2018-01-16","Single","asdasd","asd","asd","asd","0","asd","asd","Jan","2018"); 
INSERT INTO patient VALUES("6","Nikko Red","asdadsas","Male","1999-02-04","Single","asdasd","asdasdasd","asdasd","dasdad","0","sdadas","sdasdad","Jan","2018"); 
INSERT INTO patient VALUES("7","Josh Tee","Bago City","Male","1992-12-16","Single","Developer","ssss","ssss","ssss","0","ssss","Structure","Jan","2018"); 
INSERT INTO patient VALUES("8","Rocky Bagayo","Bago City","Male","1997-02-13","Single","Teacher","Dr. Taguro Bago","Riverside Hospital","Bacolod City","92","Maria Nancy Diente","Stroke","Jan","2018"); 
INSERT INTO patient VALUES("9","Precious Apurado","La carlota City","Female","2018-02-14","Married","Celebrity","Dr. Jade Jong","Bago Hopistal","Bago City","637251","James Petron","Low Back Pains","Jan","2018"); 
INSERT INTO patient VALUES("10","James Guanzon","Bacolod City","Male","1997-10-03","Married","Photographer","","","","0","","Frozen Shoulder","Jan","2018"); 
INSERT INTO patient VALUES("11","Alexa Schmidt","Bago City","Female","2018-10-16","Single","Media Producer ","","","","0","","Stroke","Jan","2018"); 
INSERT INTO patient VALUES("12","Alize Conroy","Bago City","Female","2018-03-06","Single","School Principal","Dr. Mico Catibog","Riverside Hospital","Bacolod City","759","Jade Apurado","Stroke","Feb","2018"); 
INSERT INTO patient VALUES("13","Winfield Roob","Bago City","Male","2018-04-11","Single","Singer","","","","0","","Spinal Cord Injuries","Feb","2018"); 
INSERT INTO patient VALUES("14","Marguerite Vandervort","Bago City","Male","2018-09-05","Single","Software Designer","","","","0","","Fractures","Feb","2018"); 
INSERT INTO patient VALUES("15","Jamil Romaguera PhD","Bago City","Male","2018-11-02","Single","Surgeon","","","","0","","Arthritis","Feb","2018"); 
INSERT INTO patient VALUES("16","Eleanora Bahringer","Municipality of Villadolid ","Female","1997-12-17","Single","Tailor","","","","0","","Stroke","Feb","2018"); 
INSERT INTO patient VALUES("17","Dicksan Gordon","Bacolod City","Male","1997-02-06","Married","Board member","","","","0","","Traumatic Brain Injuries","Feb","2018"); 
INSERT INTO patient VALUES("18","Leah Lastima","Bago City","Male","1983-07-02","Single","Telemarketer","","","","0","","Arthritis","Feb","2018"); 
INSERT INTO patient VALUES("19","Josephine Gibson","Bago City","Male","1990-02-08","Single","Travel Agent ","","","","0","","Stroke","Jan","2018"); 
INSERT INTO patient VALUES("20","Devin Cummerata","Bacolod City","Male","1997-12-31","Single","Translator","","","","0","","Low Back Pains","Feb","2018"); 
INSERT INTO patient VALUES("21","Antoinette Mayer","Bago City","Female","1983-07-12","Single","Student Counsellor ","Dr. Jade Jong","Riverside Hospital","","0","","Low Back Pains","Feb","2018"); 
INSERT INTO patient VALUES("22","Desiree Parker","Bago City","Male","1984-06-06","Separated","Shoemaker","","","","0","","Fractures","Feb","2018"); 
INSERT INTO patient VALUES("23","Jordane Johns","Bago City","Female","1990-09-13","Single","School Principal","","","","0","","Scoliosis","Feb","2018"); 
INSERT INTO patient VALUES("24","Nancy Diente","Bago City","Female","1976-08-10","Single","Bussinesswoman","","","","0","","Arthritis","Jan","2018"); 
INSERT INTO patient VALUES("25","Jerry Diente","Bacolod City","Male","1991-02-01","Single","Bussinessman","","","","0","","Arthritis","Feb","2018"); 
INSERT INTO patient VALUES("26","Daniel Bagayo","Bago City","Male","1993-10-24","Single","Pastor","","","","0","","Low Back Pains","Feb","2018"); 
INSERT INTO patient VALUES("27","Tures Mambo","Bago City","Male","1997-07-15","Single","Security","","","","0","","Scoliosis","Feb","2018"); 
INSERT INTO patient VALUES("28","Tures Mambo","Bago City","Male","1997-07-15","Single","Security","","","","0","","Scoliosis","Feb","2018"); 
INSERT INTO patient VALUES("31","Sheena Thunder","Bacolod City","Female","1997-02-14","Single","Dealer","","","","0","","Traumatic Brain Injuries","Feb","2018"); 
INSERT INTO patient VALUES("32","Rizza Guanzon","Bacolod City","Female","1994-10-27","Married","Barrista","","","","0","","Arthritis","Feb","2018"); 
INSERT INTO patient VALUES("33","Juvilyn Ibanez","Bacolod City","Female","1997-02-12","Married","Pastora","","","","0","","Cerebral Palsy","",""); 
INSERT INTO patient VALUES("34","Jonalyn Cofino","Bacolod City","Female","2018-01-05","Married","Pastry Chef","Dr. Precious Apurado","Riverside Hospital","","0","Geoff Cofino","Myofascial Pain Syndrome","",""); 
INSERT INTO patient VALUES("35","Jose Brodit III","Bacolod City","Male","1997-11-13","Separated","Dance Instructor","Dr. Precious Apurado","St. Luke Medical Hospital","","0","Jade Jong","Spinal Cord Injuries","",""); 
INSERT INTO patient VALUES("36","Michelle Dianabelle Bond","San Enrique","Male","2018-06-03","Single","Student","Dr. Precious Apurado","Riverside Hospital","","0","Michelle Bond","Cerebral Palsy","",""); 
INSERT INTO patient VALUES("37","Alvin Yansonas","Bago City","Male","1970-01-01","Single","Dance Instructor","Weeeh","Weeeh","Weeeh","123445","Weeeh","Spinal Cord Injuries","Feb","2018"); 
INSERT INTO patient VALUES("38","Brix Handler","BacolodCity","Male","2018-01-01","Single","Programmer","Dr.MicoCatibog","RiverSide","BacolodCity","444","IvanBuglosa","Storke","Jan","2018"); 
INSERT INTO patient VALUES("39","Aracely Aufderhar PhD","Bacolod City","Female","0000-00-00","Married","Apparel Cutter","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Arthritis","Jan","2018"); 
INSERT INTO patient VALUES("40","Tod Wisozk","Bago City","Male","0000-00-00","Single","Driver","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Cerebral Palsy","Feb","2018"); 
INSERT INTO patient VALUES("41","Hermina Schroeder","Bago City","Female","0000-00-00","Single","Baker","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Fractures","Jan","2018"); 
INSERT INTO patient VALUES("42","Ignatius Brekke","Bago City","Male","0000-00-00","Single","Driver","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Stroke","Feb","2018"); 
INSERT INTO patient VALUES("43","Abraham Eichmann","Bago City","Male","2006-03-06","Single","Laborer","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","","Jan","2018"); 
INSERT INTO patient VALUES("44","Donato Gerlach","Bago City","Male","0000-00-00","Single","Encoder","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Spinal Cord Injuries","Jan","2018"); 
INSERT INTO patient VALUES("45","Filepe Demamon","Bago City","Female","0000-00-00","Single","Artist","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Stroke","Jan","2018"); 
INSERT INTO patient VALUES("46","Agustus Morer","Bago City","Male","0000-00-00","Single","Composer","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Traumatic Brain Injuries","Jan","2018"); 
INSERT INTO patient VALUES("47","Asyong Utotong","Bago City","Female","0000-00-00","Single","Civil Engineer","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Fractures","Feb","2018"); 
INSERT INTO patient VALUES("48","Draco Bukog","Bago City","Male","0000-00-00","Single","Editor","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Arthritis","Feb","2018"); 
INSERT INTO patient VALUES("49","Elsa Magandadato","Bago City","Female","0000-00-00","Single","Writer","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Stroke","Feb","2018"); 
INSERT INTO patient VALUES("50","Abdula Spertecra","Bago City","Male","2018-02-12","Single","Programmer","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","","Feb","2018"); 
INSERT INTO patient VALUES("51","Mamita Luna","Bago City","Male","0000-00-00","Single","Technician","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Stroke","Feb","2018"); 
INSERT INTO patient VALUES("52","July Bago","Bago City","Female","0000-00-00","Single","Fitness Instructor ","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Arthritis","Feb","2018"); 
INSERT INTO patient VALUES("53","Sadam Lazaro","Bago City","Male","0000-00-00","Single","Hospital Pharmacist","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Traumatic Brain Injuries","Feb","2018"); 
INSERT INTO patient VALUES("54","Emely Gislason","Bacolod City","Female","1998-05-26","Married","Apparel Cutter","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Arthritis","Jan","2018"); 
INSERT INTO patient VALUES("55","Vicmar Marson","Bago City","Male","1988-01-27","Single","Driver","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Cerebral Palsy","Feb","2018"); 
INSERT INTO patient VALUES("56","Daniel Senson","Bago City","Male","1994-09-30","Married","Baker","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Fractures","Jan","2018"); 
INSERT INTO patient VALUES("57","Arcana Siklab","Bacolod City","Male","1987-03-15","Married","Driver","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Stroke","Feb","2018"); 
INSERT INTO patient VALUES("58","Clide Bismark","Bago City","Female","1984-06-12","Married","Laborer","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Storke","Jan","2018"); 
INSERT INTO patient VALUES("59","James Dormedo","Bago City","Male","1990-12-10","Married","Encoder","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Spinal Cord Injuries","Jan","2018"); 
INSERT INTO patient VALUES("60","Pepito Manaloto","Bago City","Male","1990-06-10","Married","Artist","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Stroke","Jan","2018"); 
INSERT INTO patient VALUES("61","Portico Sandigan","Bago City","Male","1990-12-10","Single","Composer","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Traumatic Brain Injuries","Jan","2018"); 
INSERT INTO patient VALUES("62","Amor Agustita","Bacolod City","Female","1984-05-13","Single","Civil Engineer","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Fractures","Feb","2018"); 
INSERT INTO patient VALUES("63","Merkado Tukog","Bacolod City","Male","1985-12-13","Married","Editor","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Arthritis","Feb","2018"); 
INSERT INTO patient VALUES("64","Abdul Singcang","Bacolod City","Male","1970-01-01","Married","Writer","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Stroke","Feb","2018"); 
INSERT INTO patient VALUES("65","Sentina Mercado","Bago City","Female","1987-06-11","Married","Programmer","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Spinal Cord Injuries","Feb","2018"); 
INSERT INTO patient VALUES("66","Jose Lamoda","Bago City","Male","1978-01-12","Single","Technician","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Stroke","Feb","2018"); 
INSERT INTO patient VALUES("67","Junie Cong","Bago City","Female","1988-06-13","Single","Fitness Instructor ","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Arthritis","Feb","2018"); 
INSERT INTO patient VALUES("68","Lazaron Mersedez","Bago City","Female","1988-08-13","Single","Hospital Pharmacist","Dr. Jade Jong","Riverside Hospital","Bacolod City","4443802","Samantha Osinski","Traumatic Brain Injuries","Feb","2018"); 
INSERT INTO patient VALUES("69","sample","Bacolod","Male","2018-02-10","Single","sample","sample","sample","sample","0","sample","Stroke","Feb","2018"); 
INSERT INTO patient VALUES("70","Adrian Clarkson","Bago","Male","1970-01-01","Married","Songer","sample","sample","sample","23123123","sample","","Feb","2018"); 
INSERT INTO patient VALUES("71","Jordan Clarkson","Kabankalan","Male","1970-01-01","Single","wew","","","","0","","","Feb","2018"); 



DROP TABLE plan;

CREATE TABLE `plan` (
  `planID` int(11) NOT NULL AUTO_INCREMENT,
  `planDesc` varchar(30) NOT NULL,
  `EvalID` int(11) NOT NULL,
  PRIMARY KEY (`planID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO plan VALUES("1","asd","0"); 
INSERT INTO plan VALUES("2","asdasd","0"); 



DROP TABLE planofcare;

CREATE TABLE `planofcare` (
  `POCID` int(8) NOT NULL AUTO_INCREMENT,
  `PatientID` varchar(11) NOT NULL,
  `POCPT` text NOT NULL,
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
  `POCSetRepMin` varchar(30) NOT NULL,
  PRIMARY KEY (`POCID`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO planofcare VALUES("26","3","Hans Buglosa","2018-02-06","sample training","150/90","150","150","150","","sample","sample","0000-00-00","01:00 AM","3","Paid",""); 
INSERT INTO planofcare VALUES("27","6","Hans Buglosa","2018-02-06","Push Up","155/20","150","50","50","","sample","sample","2018-01-12","01:00 AM","250","Unpaid",""); 
INSERT INTO planofcare VALUES("28","3","Hans Buglosa","2018-02-06","Push Up","140/90","140","50","40","","sample","sample","1970-01-01","01:00 AM","250","Unpaid",""); 
INSERT INTO planofcare VALUES("29","5","Hans Buglosa","2018-02-06","sample training","qwe","qwe","qwe","qwe","","sample","sample","2018-01-12","01:00 AM","250","Unpaid",""); 
INSERT INTO planofcare VALUES("30","2","Hans Buglosa","2018-02-06","sample training","1","1","1","1","","sample","sample","2018-01-19","01:00 AM","2","Unpaid",""); 
INSERT INTO planofcare VALUES("33","6","Hans Buglosa","2018-02-06","Push Up","1","1","1","1","","sample","sample","2018-01-17","01:00 AM","5","Unpaid",""); 
INSERT INTO planofcare VALUES("37","8","Princess Antoinette Donabelle ","2018-02-12","Dynamic Stretching","120/80","120","40","38","sasd","sample","sample","2018-02-02","1:00 pm","250","Unpaid",""); 
INSERT INTO planofcare VALUES("39","9","Roz Stoddart","2018-02-07","Balance Training","120/80","135","48","38","","sample","sample","1970-01-01","01:00 AM","250","Unpaid",""); 
INSERT INTO planofcare VALUES("40","37","Paprika Jong","2018-02-07","Cognitive Therapy ","120/80","120","48","39","","sample","sample","1970-01-01","01:00 AM","250","Unpaid",""); 
INSERT INTO planofcare VALUES("42","69","Piayao Apurado","2018-02-10","Cognitive Therapy ","201/12","12","12","122","","sample","sample","1970-01-01","01:00 AM","123","Unpaid",""); 
INSERT INTO planofcare VALUES("43","50","Paprika Jong","2018-02-12","Cognitive Therapy ","123","2313","123","12","asdasd","asd","asd","2018-02-24","1:00 pm","211","Unpaid",""); 



DROP TABLE pt;

CREATE TABLE `pt` (
  `PT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PT_Name` varchar(30) NOT NULL,
  `PT_Address` varchar(30) NOT NULL,
  `PT_Gender` varchar(7) NOT NULL,
  `PT_Birthday` date NOT NULL,
  `PT_CivilStatus` varchar(15) NOT NULL,
  PRIMARY KEY (`PT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO pt VALUES("1","Hans Buglosano","Bacolod City","Male","1970-01-01","Single"); 
INSERT INTO pt VALUES("2","Roz Stoddart","Bacolod City","Female","2018-11-08","Married"); 
INSERT INTO pt VALUES("3","Mico Hubert Catibog","Bacolod City","Male","1994-05-13","Single"); 
INSERT INTO pt VALUES("4","Princess Antoinette Donabelle ","Bago City","Female","1990-09-30","Married"); 
INSERT INTO pt VALUES("5","Jimza Guanzon","Bacolod City","Female","2018-04-28","Single"); 
INSERT INTO pt VALUES("6","Paprika Jong","Hinigaran","Male","2018-09-18","Single"); 
INSERT INTO pt VALUES("7","Piayao Apurado","Bacolod City","Male","2018-04-28","Single"); 



DROP TABLE referral;

CREATE TABLE `referral` (
  `RefID` int(8) NOT NULL AUTO_INCREMENT,
  `PatientID` int(11) NOT NULL,
  `RefDoctor` text NOT NULL,
  `RefHospital` text NOT NULL,
  `RefAddress` text NOT NULL,
  `RefTelephone` int(11) NOT NULL,
  `RefContactPerson` text NOT NULL,
  `RefCases` text NOT NULL,
  `RefCasesDec` text NOT NULL,
  `Ref_Date` date NOT NULL,
  PRIMARY KEY (`RefID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO referral VALUES("1","2","nikko pula","riverside","bacolod city","123451","joseph ryan","Stroke","sample description","2018-02-05"); 
INSERT INTO referral VALUES("2","1","sample","sample","sample","4461039","sample","sample","sample","2018-02-02"); 
INSERT INTO referral VALUES("3","8","Dr. Taguro Bago","Bacolod Hospital","Bacolod City","992","Maria Elena Yanson","Stroke","Done Several Treatment","2018-01-02"); 
INSERT INTO referral VALUES("4","2","Dr. Taguro Bago","Riverside Hospital","Bacolod City","2147483647","James Petron","Stroke","done already first sessions","2018-01-12"); 
INSERT INTO referral VALUES("5","37","Dr. Jade Jong","Riverside Hospital","Bacolod City","44555111","Jade Apurado","Stroke","Done several sessions, have a problems in chest pain","2018-02-01"); 
INSERT INTO referral VALUES("14","64","asd","asd","asd","0","asd","Fractures","asdads","2018-01-12"); 
INSERT INTO referral VALUES("15","64","asd","asd","asd","0","asd","Fractures","asdads","2018-02-12"); 
INSERT INTO referral VALUES("19","55","asdasd","asd","asd","123123","asd","Spinal Cord Injuries","samm","2018-02-12"); 
INSERT INTO referral VALUES("20","64","asd","asd","asd","0","asd","","asdads","2018-02-12"); 
INSERT INTO referral VALUES("21","64","asd","asd","asd","0","asd","","asdads","2018-02-12"); 
INSERT INTO referral VALUES("22","64","asd","asd","asd","0","asd","Spinal Cord Injuries","asdads","2018-02-21"); 
INSERT INTO referral VALUES("23","64","asd","asd","asd","0","asd","Scoliosis","asdads","2018-02-21"); 
INSERT INTO referral VALUES("24","64","asd","asd","asd","123123123","asd","Spinal Cord Injuries","asdads","2018-02-23"); 
INSERT INTO referral VALUES("25","64","asd","asd","asd","0","asd","Low Back Pains","asdads","2018-02-23"); 



DROP TABLE training;

CREATE TABLE `training` (
  `training_ID` int(11) NOT NULL AUTO_INCREMENT,
  `training_Name` varchar(30) NOT NULL,
  `training_Desc` varchar(30) NOT NULL,
  PRIMARY KEY (`training_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO training VALUES("1","Bed Mobility","Bed Mobility"); 
INSERT INTO training VALUES("2","Push Up","Push Up"); 
INSERT INTO training VALUES("3","Balance Training","Balance Training"); 
INSERT INTO training VALUES("4","Agility training","Agility training"); 
INSERT INTO training VALUES("5","Balance training","Balance training"); 
INSERT INTO training VALUES("6","Manual Stretching","The clinician provides the ext"); 
INSERT INTO training VALUES("7","Static Stretching","A method by which the muscle i"); 
INSERT INTO training VALUES("8","Ballistic Stretching ","Ballistic stretching has falle"); 
INSERT INTO training VALUES("9","Dynamic Stretching"," Static stretching immediately"); 
INSERT INTO training VALUES("10","Cognitive Therapy ","Cognitive Therapy "); 
INSERT INTO training VALUES("11","Melodic Intonation Therapy","Melodic intonation therapy is "); 



DROP TABLE users;

CREATE TABLE `users` (
  `userID` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `userType` varchar(5) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","admin","admin","admin"); 
INSERT INTO users VALUES("2","pt","pt","pt"); 



