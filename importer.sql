CREATE DATABASE IF NOT EXISTS `m120` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `m120`;

CREATE TABLE IF NOT EXISTS `accounts` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Member','Admin') NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `accounts` (`id`, `name`, `password`, `email`, `role`) VALUES
(1, 'admin', '$2y$10$wXkhBmUEz7814.uAtHhYduoq.8WmFU3rRuwqc1k9xvSnB.OWj5aGq', 'admin@wes.fm', 'Admin');

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'GBC - Homework'),
(2, 'TBZ - Assignments'),
(3, 'Other');

CREATE TABLE IF NOT EXISTS `tickets` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('open','closed','resolved') NOT NULL DEFAULT 'open',
  `priority` enum('low','medium','high') NOT NULL DEFAULT 'low',
  `category_id` int(1) NOT NULL DEFAULT '1',
  `private` tinyint(1) NOT NULL DEFAULT '1',
  `account_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tickets_comments` (
`id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `account_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tickets_uploads` (
`id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `filepath` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


ALTER TABLE `accounts`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `tickets`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `tickets_comments`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `tickets_uploads`
 ADD PRIMARY KEY (`id`);


ALTER TABLE `accounts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tickets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tickets_comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tickets_uploads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;