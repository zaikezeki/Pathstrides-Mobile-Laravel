-- Table `pathsrides`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pathstrides`.`admin` (
  `admin_id` INT NOT NULL,
  `admin_fname` VARCHAR(45) NOT NULL,
  `admin_lname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`admin_id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `pathsrides`.`departments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pathstrides`.`departments` (
  `dep_id` INT NOT NULL,
  `dep_title` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`dep_id`))
ENGINE = InnoDB;





-- -----------------------------------------------------
-- Table `pathsrides`.`manager`
-- -----------------------------------------------------

    
CREATE TABLE IF NOT EXISTS `pathstrides`.`manager` (
  `man_id` INT NOT NULL,
  `man_fname` VARCHAR(45) NOT NULL,
  `man_lname` VARCHAR(45) NOT NULL,
  `man_email` VARCHAR(45) NOT NULL,
  `man_contanct_num` VARCHAR(45) NOT NULL,
  `man_password` VARCHAR(45) NOT NULL,
   `admin_id` INT NOT NULL,
   `dep_id` INT NOT NULL,
    `approval_status` INT NOT NULL,
  PRIMARY KEY (`man_id`),
  INDEX `fk_manager_admin1_idx` (`admin_id` ASC),
    INDEX `fk_manager_department1_idx` (`dep_id` ASC),
  CONSTRAINT `fk_manager_admin1`
    FOREIGN KEY (`admin_id`)
    REFERENCES `pathstrides`.`admin` (`admin_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
      CONSTRAINT `fk_manager_department1`
    FOREIGN KEY (`dep_id`)
    REFERENCES `pathstrides`.`departments` (`dep_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;