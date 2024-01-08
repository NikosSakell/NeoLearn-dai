-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: localhost:3307
-- Χρόνος δημιουργίας: 08 Ιαν 2024 στις 11:54:57
-- Έκδοση διακομιστή: 10.4.28-MariaDB
-- Έκδοση PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `neolearn`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admin`
--

CREATE TABLE `admin` (
  `Id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `course`
--

CREATE TABLE `course` (
  `Id` int(6) NOT NULL,
  `Instructor_Id` int(6) NOT NULL,
  `Related_Language_Id` int(6) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Image` varchar(1024) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Difficulty` enum('Beginner','Easy','Medium','Hard','Expert') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `course`
--

INSERT INTO `course` (`Id`, `Instructor_Id`, `Related_Language_Id`, `Title`, `Image`, `Description`, `Difficulty`) VALUES
(4, 118, 1, 'test', 'sample_image1.jpg', 'test', 'Medium'),
(5, 118, 2, 'test1', 'sample_image3.jpg', 'test1', 'Easy');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `file`
--

CREATE TABLE `file` (
  `Id` int(6) NOT NULL,
  `Lesson_Id` int(6) NOT NULL,
  `URL` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `file`
--

INSERT INTO `file` (`Id`, `Lesson_Id`, `URL`) VALUES
(1, 5, 'https://www.youtube.com/embed/Nn1R4O9Pj1s'),
(2, 5, 'https://www.youtube.com/embed/WnLGfhBu7-U?list=RDWnLGfhBu7-U'),
(3, 5, 'a.pdf');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `instructor`
--

CREATE TABLE `instructor` (
  `Id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `instructor`
--

INSERT INTO `instructor` (`Id`) VALUES
(118),
(131);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `language`
--

CREATE TABLE `language` (
  `Id` int(6) NOT NULL,
  `Title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `language`
--

INSERT INTO `language` (`Id`, `Title`) VALUES
(1, 'C'),
(2, 'Java    '),
(3, 'HTML');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `quiz`
--

CREATE TABLE `quiz` (
  `Id` int(6) NOT NULL,
  `Language_Id` int(6) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Image` varchar(1024) NOT NULL,
  `Num_Of_Quest` int(6) NOT NULL,
  `Level` enum('Easy','Medium','Difficult','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `quiz`
--

INSERT INTO `quiz` (`Id`, `Language_Id`, `Title`, `Description`, `Image`, `Num_Of_Quest`, `Level`) VALUES
(4, 1, 'C Quiz', 'Dive into the realm of low-level programming excellence with our C Programming Mastery Quiz! This quiz is crafted to assess your proficiency in the C programming language, covering concepts such as variables, pointers, control flow, and memory management.', 'ctest.jpg', 10, 'Difficult'),
(5, 2, 'Java Quiz', 'Challenge your Java programming skills with our Java Programming Quiz! This quiz is designed to test your knowledge of Java syntax, concepts, and best practices', 'javatest.png', 10, 'Medium'),
(6, 3, 'HTML Quiz', 'Embark on a journey into the world of web development with our HTML Basics Quiz! This quiz is designed to evaluate your understanding of HTML fundamentals, covering essential topics such as tags, attributes, document structure, and form elements.', 'htmltest1.png', 10, 'Easy');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `student`
--

CREATE TABLE `student` (
  `Id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `student`
--

INSERT INTO `student` (`Id`) VALUES
(117);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `students_solve_quizes`
--

CREATE TABLE `students_solve_quizes` (
  `Student_Id` int(6) NOT NULL,
  `Quiz_Id` int(6) NOT NULL,
  `Num_Of_Corr` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `student_has_courses`
--

CREATE TABLE `student_has_courses` (
  `Course_Id` int(6) NOT NULL,
  `Student_Id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `student_has_courses`
--

INSERT INTO `student_has_courses` (`Course_Id`, `Student_Id`) VALUES
(4, 117),
(5, 117);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE `user` (
  `Id` int(6) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `Role` enum('STUDENT','INSTRUCTOR','ADMIN','') NOT NULL,
  `Phone` int(10) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`Id`, `Password`, `First_Name`, `Last_Name`, `Birth_Date`, `Email`, `Company`, `Role`, `Phone`, `Image`) VALUES
(117, 'a', 'ANGELOS', 'SYMEONIDIS', '2023-12-12', 'agg.symeonidis@gmail.com', 'agg.symeonidis@gmail.com', 'STUDENT', 2147483647, 'hw2.pdf'),
(118, 'test', 'test', 'test1', '2023-12-14', 'test@test.test', 'test', 'INSTRUCTOR', 1, 'https://www.usnews.com/object/image/00000142-9263-d33c-abc6-ff77dfba0024/37985FE_DA_20130207_onlinem'),
(131, 'a', 'ANGELOS', 'SYMEONIDIS', '0003-03-03', 'agg.symeonidis@gmail.com', 'fsd', '', 2147483647, '349041285_1017496769422465_2042746841456938379_n.jpg');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `admin`
--
ALTER TABLE `admin`
  ADD KEY `Id` (`Id`);

--
-- Ευρετήρια για πίνακα `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Related_Language_Id` (`Related_Language_Id`),
  ADD KEY `From instructor` (`Instructor_Id`);

--
-- Ευρετήρια για πίνακα `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Lecture_Id` (`Lesson_Id`) USING BTREE;

--
-- Ευρετήρια για πίνακα `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Ευρετήρια για πίνακα `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`Id`);

--
-- Ευρετήρια για πίνακα `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Lesson_Id` (`Language_Id`);

--
-- Ευρετήρια για πίνακα `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Ευρετήρια για πίνακα `students_solve_quizes`
--
ALTER TABLE `students_solve_quizes`
  ADD KEY `Student_Id` (`Student_Id`),
  ADD KEY `Quiz_Id` (`Quiz_Id`);

--
-- Ευρετήρια για πίνακα `student_has_courses`
--
ALTER TABLE `student_has_courses`
  ADD KEY `Course_Id` (`Course_Id`,`Student_Id`),
  ADD KEY `From Student` (`Student_Id`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `course`
--
ALTER TABLE `course`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT για πίνακα `file`
--
ALTER TABLE `file`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `language`
--
ALTER TABLE `language`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `quiz`
--
ALTER TABLE `quiz`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `User To Admin` FOREIGN KEY (`Id`) REFERENCES `user` (`Id`);

--
-- Περιορισμοί για πίνακα `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `From instructor` FOREIGN KEY (`Instructor_Id`) REFERENCES `instructor` (`Id`),
  ADD CONSTRAINT `From language` FOREIGN KEY (`Related_Language_Id`) REFERENCES `language` (`Id`);

--
-- Περιορισμοί για πίνακα `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `Lesson to File` FOREIGN KEY (`Lesson_Id`) REFERENCES `course` (`Id`);

--
-- Περιορισμοί για πίνακα `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `User To Teacher` FOREIGN KEY (`Id`) REFERENCES `user` (`Id`);

--
-- Περιορισμοί για πίνακα `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `Language to Quiz` FOREIGN KEY (`Language_Id`) REFERENCES `language` (`Id`);

--
-- Περιορισμοί για πίνακα `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `User To Student` FOREIGN KEY (`Id`) REFERENCES `user` (`Id`);

--
-- Περιορισμοί για πίνακα `students_solve_quizes`
--
ALTER TABLE `students_solve_quizes`
  ADD CONSTRAINT `Quiz this table` FOREIGN KEY (`Quiz_Id`) REFERENCES `quiz` (`Id`),
  ADD CONSTRAINT `Student this table` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Id`);

--
-- Περιορισμοί για πίνακα `student_has_courses`
--
ALTER TABLE `student_has_courses`
  ADD CONSTRAINT `From Student` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Id`),
  ADD CONSTRAINT `From course` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
