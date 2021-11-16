Part 1 Commands are in the .sql dump file

Part 2 Commands:
1)
ALTER TABLE students ADD street VARCHAR(50) NOT NULL;
ALTER TABLE students ADD city VARCHAR(50) NOT NULL;
ALTER TABLE students ADD state VARCHAR(50) NOT NULL;
ALTER TABLE students ADD zip INT(5) NOT NULL;

2)
ALTER TABLE courses ADD section CHAR(50) NOT NULL;
ALTER TABLE courses ADD year INT(4) NOT NULL;

3)
CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `crn` int(11) NOT NULL,
  `RIN` int(9) NOT NULL,
  `grade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crn` (`crn`),
  ADD KEY `RIN` (`RIN`);

ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`crn`) REFERENCES `courses` (`crn`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`RIN`) REFERENCES `students` (`RIN`);
COMMIT;

4)
INSERT INTO `courses` (crn, prefix, number, title) VALUES ('60304', 'CSCI', '2300', 'Intro to Algorithms'), ('64942', 'CSCI', '2600', 'Principles of Software'), ('63670', 'ITWS', '2210', 'Introduction to HCI'), ('62788', 'ITWS', '4500', 'Web Science Systems Dev');

5)
INSERT INTO `students` (`RIN`, `RCSID`, `firstname`, `lastname`, `alias`, `phone`) VALUES ('662222222', 'tant3', 'Tobey', 'Tan', 'Otbey', '1111111111'), ('100000000', 'jonj20', 'Jack', 'Jon', 'jacky', '2000000000'), ('333333333', 'loverm', 'Mister', 'Loverman', 'Ricky', '1221212121'), ('668888888', 'sheere2', 'Ed', 'Sheeran', 'Singer', '1234567890');

6)
INSERT INTO `grades` (`id`, `crn`, `RIN`, `grade`) VALUES (NULL, '60304', '662222222', '100'), (NULL, '60304', '662222222', '90'), (NULL, '62788', '662222222', '100'), (NULL, '62788', '662222222', '90'), (NULL, '63670', '662222222', '100'), (NULL, '63670', '662222222', '90'), (NULL, '64942', '662222222', '100'), (NULL, '64942', '662222222', '90'), (NULL, '64942', '662222222', '80'), (NULL, '64942', '662222222', '70');

7)
SELECT * FROM `students` ORDER BY RIN ASC
SELECT * FROM `students` ORDER BY lastname ASC
SELECT * FROM `students` ORDER BY RCSID ASC
SELECT * FROM `students` ORDER BY firstname ASC

8)
SELECT RIN, firstname, lastname, street, state, city, zip FROM students where RIN in (SELECT RIN from grades where grade > 90);

9)
SELECT crn, avg(grade) from grades GROUP BY crn

10) 
SELECT DISTINCT crn, count(DISTINCT RIN) from grades GROUP by crn

---
To preface my work for Lab 7, I began working on this assignment a lot later than I should have. That is why there is nonexistent css or javascript for part 3 in my web interface. I focused solely on making sure that the sql query commands are working. I had struggles with using queries that took information from two different tables. I found a solution in which using multiple 'select' commands did the trick and making use of the 'where' commands to set a condition for the averages and the grades greater than 90. I first did part 1 of the lab entirely in phpmyadmin and created the sql dump file here. The second part of the lab required a lot of trial and error; I created SQL commands and after running them in phpmyadmin, I would check the database to see if the desired result occurred - one of the most important (and frustrating) parts of this lab was making sure I was able to insert data from a form. With the use of isset() and $_POST and $_REQUEST, I was able to retrieve specific data after clicking a specific submit button. This method I used was similar to the logic I implemented for the previous lab's calculator. 
In part 3, I output the entire data from all three tables: grades students and courses. I then created submit buttons that would perform the specific commands listed in part 2. The main form consists of input textboxes so that you're able to add a student, course, and grade to their respective tables.
Once again, I wish I was able to start earlier, but due to the business of my week and lack of time, I was not able to style this lab and I apologize for the lack of css and javascript. 
Thank you for your understanding while grading this lab - it has been a long week for me.


https://www.w3schools.com/php/php_mysql_select.asp
