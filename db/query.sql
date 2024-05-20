CREATE DATABASE IF NOT EXISTS `docs`;

USE `docs`;

CREATE TABLE IF NOT EXISTS `updates` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `date` DATE DEFAULT NULL,
    `status` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `contributions` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `id_update` INT NOT NULL,
    `user` VARCHAR(255) NOT NULL,
    `picture` VARCHAR(255) NOT NULL,
    `link` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `id_update` (`id_update`),
    CONSTRAINT `contributions_ibfk_1` FOREIGN KEY (`id_update`) REFERENCES `updates` (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `description` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `update_id` INT DEFAULT NULL,
    `description` VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (`id`),
    INDEX `update_id` (`update_id`),
    CONSTRAINT `update_idfk` FOREIGN KEY (`update_id`) REFERENCES `updates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;