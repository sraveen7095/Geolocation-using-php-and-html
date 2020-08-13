Database name:mini10
---------------------------------------------------------
Table Name;details
---------------------------------------------------------
CREATE TABLE `details` (
 `tourid` varchar(6) NOT NULL,
 `tourname` varchar(225) NOT NULL,
 `firstname` varchar(225) NOT NULL,
 `lastname` varchar(225) NOT NULL,
 `address` varchar(225) NOT NULL,
 `city` varchar(225) NOT NULL,
 `zipcode` int(6) NOT NULL,
 `orderdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1
