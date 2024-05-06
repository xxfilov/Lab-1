CREATE TABLE post
(
   `post_id`      INT NOT NULL AUTO_INCREMENT,
   `title`        VARCHAR(255),
   `subtitle`     VARCHAR(255),
   `content` TEXT NOT NULL,
	`author` VARCHAR(255),
   `post_alt` VARCHAR(255),
	`author_url` VARCHAR(255),
	`publish_date` TIMESTAMP,
	`image_url` VARCHAR(255) NOT NULL,
   `content` VARCHAR(255) NOT NULL,
   `image_content` VARCHAR(255) NOT NULL,
	`featured` TINYINT(1) DEFAULT 0,
   PRIMARY KEY (`post_id`)
) ENGINE = InnoDB
CHARACTER SET = utf8mb4
COLLATE utf8mb4_unicode_ci
;

