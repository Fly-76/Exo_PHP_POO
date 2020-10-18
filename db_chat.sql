/*****************************************************************************/
/* Project S15 ; minimal database schema for the Exercice 6                  */
/*                                                                           */
/*****************************************************************************/

/*****************************************************************************
*	Create new database and user
*/

	-- Delete any pre-existing database named bank_php and create a new one
	DROP DATABASE IF EXISTS db_chat;
	CREATE DATABASE db_chat CHARACTER SET 'utf8mb4';

	-- Delete any pre-existing user named PHP bank and create  a new one
	-- Granted access rights to this user
	DROP USER IF EXISTS 'chatAdmin'@'localhost';
	CREATE USER 'chatAdmin'@'localhost' IDENTIFIED BY 'pwd';
	GRANT ALL PRIVILEGES ON db_chat.* TO 'chatAdmin'@'localhost';

/*****************************************************************************
* Create needed tables for the application using relevant data types 
*/
	-- Select the database we're going to work on
	USE db_chat;

	-- Create a table in order to log users' informations
	CREATE TABLE chat (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
		nom VARCHAR(20),
		age TINYINT UNSIGNED,
		sexe VARCHAR(10),
		couleur VARCHAR(10),
		PRIMARY KEY (id)
	)
	ENGINE=INNODB;

/*****************************************************************************
* Fill the database with dummy datas
*/
	INSERT INTO chat VALUES
	(null, 'Rêveuse', 2, 'femelle', 'blanc'),
	(null, 'Garfield', 5, 'male', 'roux'),
	(null, 'Azraël ', 8, 'male', 'noir');
