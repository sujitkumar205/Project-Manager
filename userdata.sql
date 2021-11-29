CREATE TABLE `userdata` (
 `name` varchar(100) NOT NULL,
 `empID` varchar(5) NOT NULL,
 `role` varchar(50) NOT NULL,
 `emailID` varchar(100) NOT NULL,
 `password` varchar(100) NOT NULL,
 `score` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `assign` (
 `description` mediumtext NOT NULL,
 `severity` varchar(10) DEFAULT NULL,
 `assignTo` varchar(100) DEFAULT NULL,
 `assignBy` varchar(100) DEFAULT NULL,
 `status` varchar(15) NOT NULL DEFAULT 'NOT DONE',
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1

CREATE TABLE `raise` (
 `description` mediumtext NOT NULL,
 `severity` varchar(10) DEFAULT NULL,
 `raiseTo` varchar(100) DEFAULT NULL,
 `raiseBy` varchar(100) DEFAULT NULL,
 `status` varchar(15) NOT NULL DEFAULT 'NOT DONE',
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1