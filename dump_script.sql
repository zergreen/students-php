-- CREATE DATABASE Dhonburi2022;
-- USE DATABASE Dhonburi2022;

DROP TABLE students;

CREATE TABLE `students` (
  `id` int AUTO_INCREMENT UNIQUE,
  `std_id` int(6) UNSIGNED NOT NULL PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `mid` int(3) ,
  `final` int(3) ,
  `sum_score` int(4) ,
  `grade` varchar(2) 
);

INSERT INTO `students` (`std_id`, `name`, `mid`, `final`, `sum_score`, `grade`) VALUES
(65050100, 'Monkey D. Luffy', 40, 40, 80, 'A'),
(65050101, 'Roronoa Zoro', 30, 40, 70, 'B'),
(65050102, 'Vinsmoke Sanji', 30, 30, 60, 'C'),
(65050103, 'Protogus D. Ace', 25, 25, 50, 'D'),
(65050104, 'Duracle Mihawk', 25, 20, 45, 'F');