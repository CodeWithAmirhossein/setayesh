DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`
(
    `row`      int(11) NOT NULL AUTO_INCREMENT,
    `title`    text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `txt`      text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `datetime` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`row`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 1
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`
(
    `row`      int(11) NOT NULL AUTO_INCREMENT,
    `title`    text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `news`     text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `datetime` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`row`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 1
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students`
(
    `row`      int(11) NOT NULL AUTO_INCREMENT,
    `email`    text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `id`       text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `name`     text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`row`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 1
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`
(
    `row`      int(11) NOT NULL AUTO_INCREMENT,
    `email`    text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `id`       text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `name`     text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`row`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 1
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

INSERT INTO `admin` (`email`, `password`, `id`, `name`) VALUES ('admin@yahoo.com', 'admin', '', 'نام و نام خانوادگی');