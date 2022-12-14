-- MySQL Script generated by MySQL Workbench
-- Mon Dec 19 10:42:46 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema hiring
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hiring
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hiring` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci ;
USE `hiring` ;

-- -----------------------------------------------------
-- Table `hiring`.`meslekler`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`meslekler` (
  `meslek_id` (11) NOT NULL,
  `meslek_adi` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`meslek_id`),
  UNIQUE INDEX `meslek_id_UNIQUE` (`meslek_id` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`alanlar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`alanlar` (
  `alan_id` (11) NOT NULL,
  `alan_adi` VARCHAR(45) NOT NULL,
  `meslekler_meslek_id` (11) NOT NULL,
  PRIMARY KEY (`alan_id`),
  UNIQUE INDEX `alan_id_UNIQUE` (`alan_id` ASC) VISIBLE,
  INDEX `fk_alanlar_meslekler1_idx` (`meslekler_meslek_id` ASC) VISIBLE,
  CONSTRAINT `fk_alanlar_meslekler1`
    FOREIGN KEY (`meslekler_meslek_id`)
    REFERENCES `hiring`.`meslekler` (`meslek_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`diller`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`diller` (
  `dil_id` (11) NOT NULL,
  `dil_adi` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`dil_id`),
  UNIQUE INDEX `dil_id_UNIQUE` (`dil_id` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`kullanicilar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`kullanicilar` (
  `kullanici_id` (11) NOT NULL,
  `kullanici_ad` VARCHAR(45) NOT NULL,
  `kullanici_soyad` VARCHAR(45) NOT NULL,
  `kullanici_tanitim` VARCHAR(45) NOT NULL,
  `kullanici_teklife_acik_mi` (4) NOT NULL,
  PRIMARY KEY (`kullanici_id`),
  UNIQUE INDEX `kullanici_id_UNIQUE` (`kullanici_id` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`cv`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`cv` (
  `cv_id` (11) NOT NULL,
  `cv_kullanici_id` VARCHAR(45) NOT NULL,
  `cv_dosya_yolu` VARCHAR(45) NOT NULL,
  `diller_dil_id` (11) NOT NULL,
  `kullanicilar_kullanici_id` (11) NOT NULL,
  PRIMARY KEY (`cv_id`),
  UNIQUE INDEX `cv_id_UNIQUE` (`cv_id` ASC) VISIBLE,
  INDEX `fk_cv_diller1_idx` (`diller_dil_id` ASC) VISIBLE,
  INDEX `fk_cv_kullanicilar1_idx` (`kullanicilar_kullanici_id` ASC) VISIBLE,
  CONSTRAINT `fk_cv_diller1`
    FOREIGN KEY (`diller_dil_id`)
    REFERENCES `hiring`.`diller` (`dil_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cv_kullanicilar1`
    FOREIGN KEY (`kullanicilar_kullanici_id`)
    REFERENCES `hiring`.`kullanicilar` (`kullanici_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`fotograflar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`fotograflar` (
  `fotograf_id` (11) NOT NULL,
  `fotograf_dosya_yolu` VARCHAR(45) NOT NULL,
  `kullanicilar_kullanici_id` (11) NOT NULL,
  PRIMARY KEY (`fotograf_id`),
  UNIQUE INDEX `fotograf_id_UNIQUE` (`fotograf_id` ASC) VISIBLE,
  INDEX `fk_fotograflar_kullanicilar1_idx` (`kullanicilar_kullanici_id` ASC) VISIBLE,
  CONSTRAINT `fk_fotograflar_kullanicilar1`
    FOREIGN KEY (`kullanicilar_kullanici_id`)
    REFERENCES `hiring`.`kullanicilar` (`kullanici_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`iletisim`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`iletisim` (
  `iletisim_id` (11) NOT NULL,
  `iletisim_telefon_no` (11) NOT NULL,
  `iletisim_mail_adresi` VARCHAR(45) NOT NULL,
  `iletisim_adres` VARCHAR(45) NOT NULL,
  `kullanicilar_kullanici_id` (11) NOT NULL,
  PRIMARY KEY (`iletisim_id`),
  UNIQUE INDEX `iletisim_id_UNIQUE` (`iletisim_id` ASC) VISIBLE,
  INDEX `fk_iletisim_kullanicilar1_idx` (`kullanicilar_kullanici_id` ASC) VISIBLE,
  CONSTRAINT `fk_iletisim_kullanicilar1`
    FOREIGN KEY (`kullanicilar_kullanici_id`)
    REFERENCES `hiring`.`kullanicilar` (`kullanici_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`sirketler`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`sirketler` (
  `sirket_id` (11) NOT NULL,
  `sirket_adi` VARCHAR(45) NOT NULL,
  `sirket_vizyon` VARCHAR(100) NULL DEFAULT NULL,
  `sirket_misyon` VARCHAR(100) NULL DEFAULT NULL,
  `kullanicilar_kullanici_id` (11) NOT NULL,
  PRIMARY KEY (`sirket_id`),
  UNIQUE INDEX `sirket_id_UNIQUE` (`sirket_id` ASC) VISIBLE,
  INDEX `fk_sirketler_kullanicilar_idx` (`kullanicilar_kullanici_id` ASC) VISIBLE,
  CONSTRAINT `fk_sirketler_kullanicilar`
    FOREIGN KEY (`kullanicilar_kullanici_id`)
    REFERENCES `hiring`.`kullanicilar` (`kullanici_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`videolar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`videolar` (
  `video_id` (11) NOT NULL,
  `video_adi` VARCHAR(45) NOT NULL,
  `video_basligi` VARCHAR(45) NOT NULL,
  `video_zamani` (11) NOT NULL,
  `kullanicilar_kullanici_id` (11) NOT NULL,
  PRIMARY KEY (`video_id`),
  UNIQUE INDEX `video_id_UNIQUE` (`video_id` ASC) VISIBLE,
  INDEX `fk_videolar_kullanicilar1_idx` (`kullanicilar_kullanici_id` ASC) VISIBLE,
  CONSTRAINT `fk_videolar_kullanicilar1`
    FOREIGN KEY (`kullanicilar_kullanici_id`)
    REFERENCES `hiring`.`kullanicilar` (`kullanici_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`insankaynagi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`insankaynagi` (
  `kullanicilar_kullanici_id` (11) NOT NULL,
  `sirketler_sirket_id` (11) NOT NULL,
  `isveren_id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`isveren_id`),
  INDEX `fk_kullanicilar_has_sirketler_sirketler1_idx` (`sirketler_sirket_id` ASC) VISIBLE,
  INDEX `fk_kullanicilar_has_sirketler_kullanicilar1_idx` (`kullanicilar_kullanici_id` ASC) VISIBLE,
  UNIQUE INDEX `isveren_id_UNIQUE` (`isveren_id` ASC) VISIBLE,
  CONSTRAINT `fk_kullanicilar_has_sirketler_kullanicilar1`
    FOREIGN KEY (`kullanicilar_kullanici_id`)
    REFERENCES `hiring`.`kullanicilar` (`kullanici_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_kullanicilar_has_sirketler_sirketler1`
    FOREIGN KEY (`sirketler_sirket_id`)
    REFERENCES `hiring`.`sirketler` (`sirket_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`kullanici_meslek_detay`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`kullanici_meslek_detay` (
  `kullanicilar_kullanici_id` (11) NOT NULL,
  `alanlar_alan_id` (11) NOT NULL,
  PRIMARY KEY (`kullanicilar_kullanici_id`, `alanlar_alan_id`),
  INDEX `fk_kullanicilar_has_alanlar_alanlar1_idx` (`alanlar_alan_id` ASC) VISIBLE,
  INDEX `fk_kullanicilar_has_alanlar_kullanicilar1_idx` (`kullanicilar_kullanici_id` ASC) VISIBLE,
  CONSTRAINT `fk_kullanicilar_has_alanlar_kullanicilar1`
    FOREIGN KEY (`kullanicilar_kullanici_id`)
    REFERENCES `hiring`.`kullanicilar` (`kullanici_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_kullanicilar_has_alanlar_alanlar1`
    FOREIGN KEY (`alanlar_alan_id`)
    REFERENCES `hiring`.`alanlar` (`alan_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `hiring`.`teklifler`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hiring`.`teklifler` (
  `insankaynagi_isveren_id` INT NOT NULL,
  `kullanicilar_kullanici_id` (11) NOT NULL,
  PRIMARY KEY (`insankaynagi_isveren_id`, `kullanicilar_kullanici_id`),
  INDEX `fk_insankaynagi_has_kullanicilar_kullanicilar1_idx` (`kullanicilar_kullanici_id` ASC) VISIBLE,
  INDEX `fk_insankaynagi_has_kullanicilar_insankaynagi1_idx` (`insankaynagi_isveren_id` ASC) VISIBLE,
  CONSTRAINT `fk_insankaynagi_has_kullanicilar_insankaynagi1`
    FOREIGN KEY (`insankaynagi_isveren_id`)
    REFERENCES `hiring`.`insankaynagi` (`isveren_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_insankaynagi_has_kullanicilar_kullanicilar1`
    FOREIGN KEY (`kullanicilar_kullanici_id`)
    REFERENCES `hiring`.`kullanicilar` (`kullanici_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
