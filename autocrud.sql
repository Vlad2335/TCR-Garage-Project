-- MySQL Script generated by MySQL Workbench
-- Wed Dec 16 20:19:40 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`CRUD_AUTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CRUD_AUTO` (
  `AutoID` INT NOT NULL,
  `KlantID` INT NULL,
  `Kenteken` VARCHAR(10) NULL,
  `Merk` VARCHAR(45) NULL,
  `Model` VARCHAR(45) NULL,
  `Bouwjaar` INT NULL,
  `Brandstof` VARCHAR(20) NULL,
  PRIMARY KEY (`AutoID`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
