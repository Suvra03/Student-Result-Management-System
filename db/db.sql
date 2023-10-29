
CREATE DATABASE SMS;

USE SMS;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `Admin`(
    `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Course`(
    `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `course_name` VARCHAR(255) NOT NULL,
    `course_code` VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Semester`(
    `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `semester` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Subject`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `subject_name` VARCHAR(255) NOT NULL,
    `subject_code` VARCHAR(255) NOT NULL,
    `semester_id` INT(5) UNSIGNED,
    `course_id` INT(5) UNSIGNED
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Student`(
    `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `roll_id` VARCHAR(225),
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `dob` VARCHAR(255) NOT NULL,
    `gender` VARCHAR(255) NOT NULL,
    `address1` TEXT NOT NULL,
    `address2` TEXT,
    `indian` VARCHAR(255) NOT NULL,
    `state` VARCHAR(255),
    `district` VARCHAR(255),
    `pincode` INT(5),
    `semester_id` INT(5) UNSIGNED,
    `course_id` INT(5) UNSIGNED, 
    `password` VARCHAR(225) NOT NULL,
    `add_year` INT(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Result`(
    `student_id` INT(5) UNSIGNED,
    `semester` INT(5) UNSIGNED,
    `subject_id` INT(5) UNSIGNED,
    `score` DECIMAL(8, 2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE
    `Result` ADD CONSTRAINT `result_student_id_foreign` FOREIGN KEY(`student_id`) REFERENCES `Student`(`id`);

ALTER TABLE
    `Result` ADD CONSTRAINT `result_subject_id_foreign` FOREIGN KEY(`subject_id`) REFERENCES `Subject`(`id`);

ALTER TABLE
    `Subject` ADD CONSTRAINT `subject_semester_id_foreign` FOREIGN KEY(`semester_id`) REFERENCES `Semester`(`id`);

ALTER TABLE
    `Student` ADD CONSTRAINT `student_semseter_id_foreign` FOREIGN KEY(`semester_id`) REFERENCES `Semester`(`id`);

ALTER TABLE
    `Subject` ADD CONSTRAINT `subject_course_id_foreign` FOREIGN KEY(`course_id`) REFERENCES `Course`(`id`);

ALTER TABLE
    `Result` ADD CONSTRAINT `result_semester_foreign` FOREIGN KEY(`semester`) REFERENCES `Semester`(`id`);

ALTER TABLE
    `Student` ADD CONSTRAINT `student_course_id_foreign` FOREIGN KEY(`course_id`) REFERENCES `Course`(`id`);

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES 
('jefa', 'admin1'), 
('hoof', 'admin2'), 
('hovding', 'admin3'), 
('honcho', 'admin4'), 
('capa', 'admin5');

--
-- Dumping data for table `course`
--
INSERT INTO `Course` (`id`, `course_name`, `course_code`) VALUES
(1, 'BACHELORS OF COMPUTER APPLICATIONS','BCA'),
(2, 'BACHELORS OF SCIENCE(INFORMATION TECHNOLOGY)', 'ITB'),

--
-- Dumping data for table `semester`
--
INSERT INTO `Semester` (`id`, `semester`) VALUES
(1, 'I SEMESTER'),
(2, 'II SEMESTER'),
(3, 'III SEMESTER'),
(4, 'IV SEMESTER'),
(5, 'V SEMESTER'),
(6, 'VI SEMESTER');

--
-- Dumping data for table `subject`
--
INSERT INTO `subject` (`id`, `subject_name`, `subject_code`, `semester_id`, `course_id`) VALUES
(1, 'INTRODUCTION TO C PROGRAMMING', 'BCA-HC-1016', 1, 1),
(2, 'COMPUTER FUNDAMENTALS & ICT HARDWARE', 'BCA-HC-1026', 1, 1),
(3, 'OFFICE AUTOMATION', 'BCA-HG-1026', 1, 1),
(4, 'ENGLISH COMMUNICATION', 'ENG-AE-1014', 1, 1),
(5, 'MATHEMATICS-I', 'BCA-HC-2016', 2, 1),
(6, 'DIGITAL LOGIC FUNDAMENTALS', 'BCA-HC-2026', 2, 1),
(7, 'BASIC ELECTRONICS', 'BCA-HG-2016', 2, 1),
(8, 'ENVIRONMENTAL SCIENCE', 'ENV-AE-2014', 2, 1),
(9, 'SOFTWARE ENGINEERING', 'BCA-HC-3016', 3, 1),
(10, 'DATA STRUCTURES AND ALGORITHMS', 'BCA-HC-3026', 3, 1),
(11, 'DATABASE MANAGEMENT SYSTEM', 'BCA-HC-3036', 3, 1),
(12, 'INTRODUCTION TO INDIAN HISTORY', 'BCA-HG-3016', 3, 1),
(13, 'WEB TECHNOLOGY', 'BCA-SE-3014', 3, 1),
(14, 'COMPUTER ORGANIZATION AND ARCHITECTURE ', 'BCA-HC-4016', 4, 1),
(15, 'MATHEMATICS-II', 'BCA-HC-4026', 4, 1),
(16, 'OBJECT ORIENTED PROGRAMMING IN C++ ', 'BCA-HC-4036', 4, 1),
(17, 'ADVANCED WEB TECHNOLOGY ', 'BCA-SE-4034', 4, 1),
(18, 'INFORMATION SECURITY AND CYBER LAWS ', 'BCA-HG-4026', 4, 1),
(19, 'JAVA PROGRAMMING', 'BCA-HC-5016', 5, 1),
(20, 'OPERATING SYSTEM', 'BCA-HC-5026', 5, 1),
(21, 'PROGRAMMING IN PYTHON', 'BCA-HE-5046', 5, 1),
(22, 'PROJECT WORK/DISSERTATION', 'BCA-HE-5016', 5, 1),
(23, 'SYSTEM ADMINISTRATION USING LINUX', 'BCA-HC-6016', 6, 1),
(24, 'COMPUTER NETWORKS', 'BCA-HC-6026', 6, 1),
(25, 'AUTOMATA THEORY AND LANGUAGES', 'BCA-HE-6016', 6, 1),
(26, 'MICROPROCESSOR AND ASSEMBLY LANGUAGE PROGRAMMING', 'BCA-HE-6056', 6, 1),
(27, 'COMPUTER FUNDAMENTAL AND PROGRAMMING', 'ITB-HC-1016', 1, 2),
(28, 'MATHEMATICS-I', 'ITB-HC-1026', 1, 2),
(29, 'ENGLISH COMMUNICATION', 'ENG-AE-1014', 1, 2),
(30, 'ICT HARDWARE', 'ITB-HG-1016', 1, 2),
(31, 'OFFICE AUTOMATION', 'ITB-HG-1026', 1, 2),
(32, 'DATA STRUCTURE AND ALGORITHM', 'ITB-HC-2016', 2, 2),
(33, 'DIGITAL LOGIC', 'ITB-HC-2026', 2, 2),
(34, 'ENVIRONMENTAL SCIENCE', 'ENV-AE-2014', 2, 2),
(35, 'MATHEMATICS-II', 'ITB-HG-2016', 2, 2),
(36, 'PROGRAMMING IN C++', 'ITB-HG-2026:', 2, 2);