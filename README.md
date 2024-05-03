# CS 360 project 

Uses Bootstrap 4 

To run the project:
- install XAMPP
- cd /opt/lampp/htdocs
- git clone github.com/danielkfranks/360project
- open a browser and navigate to localhost/phpmyadmin
- run the following SQL commands:
```
CREATE TABLE `NoDD`.`Teacher` (`pnum` INT NOT NULL , `obs` VARCHAR(255) NOT NULL , `fd` VARCHAR(255) NOT NULL , `choice` INT NOT NULL , `tuples1` VARCHAR(5) NOT NULL , `tuples2` VARCHAR(5) NOT NULL , `tuples3` VARCHAR(5) NOT NULL ,     `lhs1` VARCHAR(5) NOT NULL , `lhs2` VARCHAR(5) NOT NULL , `lhs3` VARCHAR(5) NOT NULL , `lhs4` VARCHAR(5) NOT NULL , `lhs5` VARCHAR(5) NOT NULL , `rhs1` VARCHAR(5) NOT NULL , `rhs2` VARCHAR(5) NOT NULL , `rhs3` VARCHAR(5) NOT NULL ,     `rhs4` VARCHAR(5) NOT NULL , `rhs5` VARCHAR(5) NOT NULL ) ENGINE = InnoDB;
  5 CREATE TABLE `NoDD`.`Problems` (`problem_id` INT(11) NOT NULL , `A1` INT(11) NOT NULL , `A2` INT(11) NOT NULL , `A3` INT(11) NOT NULL , `B1` INT(11) NOT NULL , `B2` INT(11) NOT NULL , `B3` INT(11) NOT NULL , `C1` INT(11) NOT NULL ,     `C2` INT(11) NOT NULL , `C3` INT(11) NOT NULL , `D1` INT(11) NOT NULL , `D2` INT(11) NOT NULL , `D3` INT(11) NOT NULL , `E1` INT(11) NOT NULL , `E2` INT(11) NOT NULL , `E3` INT(11) NOT NULL ) ENGINE = InnoDB;
  4 ALTER TABLE `Problems` ADD PRIMARY KEY(`problem_id`);
```
- navigate to localhost/project
