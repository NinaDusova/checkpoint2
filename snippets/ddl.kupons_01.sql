DROP TABLE IF EXISTS `kupons`;
CREATE TABLE `kupons` (
                          `reservation_id` int(11) NOT NULL,
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `email` varchar(255) NOT NULL,
                          `game` varchar(100) NOT NULL,
                          `kod` varchar(14) NOT NULL,
                          `datum` varchar(255) NOT NULL,
                          `zakaznik` varchar(255) NOT NULL,
                          `pouzity` varchar(15) NOT NULL,
                          PRIMARY KEY (`id`),
                          KEY `reservation_id` (`reservation_id`),
                          CONSTRAINT `kupons_ibfk_2` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;