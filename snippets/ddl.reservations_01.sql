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