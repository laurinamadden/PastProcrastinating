-- Author : Laurina Madden x20200765

-- SQL file to set up the database for website - Past Procratinating


-- Table 1 - client information and primary key to link to tasks
CREATE TABLE clients (
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(20) NOT NULL,
	--email VARCHAR(30) NOT NULL,
	password VARCHAR(10) NOT NULL
 
);

-- Table 2 - Task 1 
--CREATE TABLE task1 (
--	id INT(11) NOT NULL AUTO_INCREMENT,
--	task1name VARCHAR(20) NOT NULL,
--	adviceGiven (10) NOT NULL,
--	client_id INT(11) NOT NULL,
--	PRIMARY KEY (id),
--	FOREIGN KEY (client_id) REFERENCES clients(id)
	
--);

-- Table 3 - Task 2 
--CREATE TABLE task2 (
--	id INT(11) NOT NULL AUTO_INCREMENT,
--	task2name VARCHAR(20) NOT NULL,
--	adviceGiven (10) NOT NULL,
--	client_id INT(11) NOT NULL,
--	PRIMARY KEY (id),
--	FOREIGN KEY (client_id) REFERENCES clients(id)
	
--);

-- Table 4 - Task 3 
--CREATE TABLE task3 (
--	id INT(11) NOT NULL AUTO_INCREMENT,
--	task3name VARCHAR(20) NOT NULL,
--	adviceGiven (10) NOT NULL,
--	client_id INT(11) NOT NULL,
--	PRIMARY KEY (id),
--	FOREIGN KEY (client_id) REFERENCES clients(id)
	
--);