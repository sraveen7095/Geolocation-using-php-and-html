DataBase Name:mini10
----------------------------------------------------
Table name:users
----------------------------------------------------
CREATE TABLE `users` (
 `id` int(25) NOT NULL AUTO_INCREMENT,
 `username` varchar(25) NOT NULL,
 `email` varchar(25) NOT NULL,
 `user_type` varchar(6) NOT NULL,
 `password` varchar(25) NOT NULL,
 `created` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1



id14578233_root


id14578233_mini10