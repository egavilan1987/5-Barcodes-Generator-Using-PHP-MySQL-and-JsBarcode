CREATE DATABASE egm_barcodes;
USE barcodes;
CREATE TABLE `egm_barcodes`.`tbl_products` (
  `product_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `code` INT NULL,
  `created` DATETIME NULL,
  PRIMARY KEY (`product_id`));
