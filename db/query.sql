-- CREATE TABLE `updates` (
--     `id` int(11) NOT NULL,
--     `title` varchar(255) NOT NULL,
--     `date` date NOT NULL DEFAULT current_timestamp(),
--     PRIMARY KEY (`id`)
-- ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- CREATE TABLE `contributions` (
--     `id` int(11) NOT NULL,
--     `id_update` int(11) NOT NULL,
--     `user` varchar(255) NOT NULL,
--     `picture` varchar(255) NOT NULL,
--     `link` varchar(255) NOT NULL,
--     FOREIGN KEY (`id_update`) REFERENCES `updates`(`id`),
--     PRIMARY KEY (`id`)
-- ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
CREATE DATABASE IF NOT EXISTS `docs`;

USE `docs`;

CREATE TABLE IF NOT EXISTS `updates` (
    `id` int(11) NOT NULL,
    `title` varchar(255) NOT NULL,
    `date` date NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`),
    KEY `id` (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `contributions` (
    `id` int(11) NOT NULL,
    `id_update` int(11) NOT NULL,
    `user` varchar(255) NOT NULL,
    `picture` varchar(255) NOT NULL,
    `link` varchar(255) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `id_update` (`id_update`),
    KEY `id` (`id`),
    CONSTRAINT `contributions_ibfk_1` FOREIGN KEY (`id_update`) REFERENCES `updates` (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `description` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `update_id` int(11) DEFAULT NULL,
    `description` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `update_id` (`update_id`),
    CONSTRAINT `update_idfk` FOREIGN KEY (`update_id`) REFERENCES `updates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 4 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;