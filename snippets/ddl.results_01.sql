DROP TABLE IF EXISTS `results`;
CREATE TABLE `results` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `name` varchar(255) NOT NULL,
                           `time` varchar(5) NOT NULL,
                           `game` varchar(15) NOT NULL,
                           `date` varchar(10) NOT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;