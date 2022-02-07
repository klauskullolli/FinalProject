CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted tinyint(1) default false
)  ENGINE=INNODB;

INSERT INTO `user` (`username`, `password`,`created_at`, `deleted`) VALUES ('cindy', 'sindi123', current_timestamp(), '0');
INSERT INTO `user` (`username`, `password`,`created_at`, `deleted`) VALUES ('enco', 'enco123', current_timestamp(), '0');