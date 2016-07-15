SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE DATABASE IF NOT EXISTS `progScripts` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `progScripts` ;

-- -----------------------------------------------------
-- Table `progScripts`.`PRODUTOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `progScripts`.`PRODUTOS` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `data_criacao` VARCHAR(45) NOT NULL,
  `preco` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO `progScripts`.`PRODUTOS` (`nome`, `data_criacao`, `preco`, `tipo`) VALUES ('Cafe Expresso', '12/01/2014', '3,40', 'Pequeno');
INSERT INTO `progScripts`.`PRODUTOS` (`nome`, `data_criacao`, `preco`, `tipo`) VALUES ('Cafe com Leite', '04/05/2015', '4,50', 'Grande');
INSERT INTO `progScripts`.`PRODUTOS` (`nome`, `data_criacao`, `preco`, `tipo`) VALUES ('Lanche Natural', '12/06/2015', '8,50', 'Pequeno');
