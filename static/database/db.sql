CREATE DATABASE medico;
GRANT ALL ON medico.* TO 'root'@'localhost' IDENTIFIED by 'zappeysfc';
GRANT ALL ON medico.* TO 'root'@'127.0.0.1' IDENTIFIED by 'zappeysfc';

USE medico;
CREATE TABLE users (
	user_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(128),
    username VARCHAR(128),
    password VARCHAR(128),
    INDEX(username)
) ENGINE = InnoDB;

INSERT INTO users(email, username, password) VALUES ("arjunbasandrai2004@gmail.com","Arjun122","956152c4943615f5b45ba32bb8ba4ebf");
INSERT INTO users(email, username, password) VALUES ("text@sample.com", "Test", "6c30734811916b0f0f24a4630b08036f");

