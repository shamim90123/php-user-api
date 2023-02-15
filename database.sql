create database test_db;

use test_db;

CREATE TABLE `employees` (
  `id` int(11) NOT NULL auto_increment,
  `first_name` varchar(100) NULL,
  `last_name` int(3) NULL,
  `email` varchar(100) NULL,
  `mobile_no` varchar(100) NULL,
  PRIMARY KEY  (`id`)
);