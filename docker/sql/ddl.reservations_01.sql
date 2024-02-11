SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
                                `id` int(11) NOT NULL AUTO_INCREMENT,
                                `res_date` varchar(10) NOT NULL,
                                `res_time` varchar(5) NOT NULL,
                                `res_name` varchar(255) NOT NULL,
                                `res_email` varchar(255) NOT NULL,
                                `res_phone` varchar(12) NOT NULL,
                                PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS `kupons`;
CREATE TABLE `kupons` (
                          `id` int(5) NOT NULL AUTO_INCREMENT,
                          `email` varchar(255) NOT NULL,
                          `game` varchar(100) NOT NULL,
                          `kod` varchar(14) NOT NULL,
                          `datum` varchar(255) NOT NULL,
                          `zakaznik` varchar(255) NOT NULL,
                          `pouzity` varchar(15) NOT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;