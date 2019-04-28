-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema webp
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema webp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `webp` DEFAULT CHARACTER SET latin1 ;
USE `webp` ;

-- -----------------------------------------------------
-- Table `webp`.`admins`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webp`.`admins` ;

CREATE TABLE IF NOT EXISTS `webp`.`admins` (
  `admin_name` TEXT NOT NULL,
  `admin_pass` VARCHAR(100) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `webp`.`bill`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webp`.`bill` ;

CREATE TABLE IF NOT EXISTS `webp`.`bill` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `run_id` INT(11) NOT NULL,
  `name` TEXT NOT NULL,
  `cus_id` INT(11) NOT NULL,
  `seats` TEXT NOT NULL,
  `date` DATE NOT NULL,
  `time` TIME NOT NULL,
  `s_date` DATE NOT NULL,
  `s_time` TIME NOT NULL,
  `m_name` TEXT NOT NULL,
  `t_name` TEXT NOT NULL,
  `cost` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `webp`.`booking`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webp`.`booking` ;

CREATE TABLE IF NOT EXISTS `webp`.`booking` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `run_id` INT(11) NOT NULL,
  `seat_no` TEXT NOT NULL,
  `cus_id` INT(11) NOT NULL,
  `status` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `webp`.`customers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webp`.`customers` ;

CREATE TABLE IF NOT EXISTS `webp`.`customers` (
  `customer_id` INT(11) NOT NULL AUTO_INCREMENT,
  `customer_name` TEXT NOT NULL,
  `customer_ip` VARCHAR(255) NOT NULL,
  `customer_email` VARCHAR(100) NOT NULL,
  `customer_pass` VARCHAR(100) NOT NULL,
  `customer_country` TEXT NOT NULL,
  `customer_city` TEXT NOT NULL,
  `customer_no` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`customer_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `webp`.`movies`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webp`.`movies` ;

CREATE TABLE IF NOT EXISTS `webp`.`movies` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `director` TEXT NOT NULL,
  `actors` TEXT NOT NULL,
  `photo` TEXT NOT NULL,
  `description` TEXT NOT NULL,
  `rating` INT(11) NOT NULL,
  `nor` INT(11) NOT NULL,
  `genres` TEXT NOT NULL,
  `keywords` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 18
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `webp`.`ratings`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webp`.`ratings` ;

CREATE TABLE IF NOT EXISTS `webp`.`ratings` (
  `movie_id` INT(11) NOT NULL,
  `customer_id` INT(11) NOT NULL,
  `rating` INT(11) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `webp`.`running`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webp`.`running` ;

CREATE TABLE IF NOT EXISTS `webp`.`running` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `movie_id` INT(11) NOT NULL,
  `theatre_id` INT(11) NOT NULL,
  `date` DATE NOT NULL,
  `time` TIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 22
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `webp`.`theatre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webp`.`theatre` ;

CREATE TABLE IF NOT EXISTS `webp`.`theatre` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `photo` TEXT NOT NULL,
  `city` TEXT NOT NULL,
  `state` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
