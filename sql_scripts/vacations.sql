CREATE TABLE user(
	email VARCHAR(100) NOT NULL,
	password VARCHAR(100),
	f_name VARCHAR(50),
	l_name VARCHAR(50),
	PRIMARY KEY(gmail)
);

CREATE TABLE vacation_list(
	vac_id INT NOT NULL,
	email VARCHAR(100) NOT NULL,
	has_been INT,
	comment BLOB,
	PRIMARY KEY (vac_id, gmail)
);

CREATE TABLE vacation(
	vac_id INT NOT NULL AUTO_INCREMENT,
	city_id INT,
	PRIMARY KEY (vac_id)
);

CREATE TABLE airport(
	airport_id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(100),
	rating INT,
	city_id INT,
	PRIMARY KEY (airport_id)
);

CREATE TABLE city(
	city_id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(50),
	country VARCHAR(50),
	PRIMARY KEY (city_id)
);

CREATE TABLE hotel(
	hotel_id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(100),
	rating INT,
	cost_rating INT,
	city_id INT,
	PRIMARY KEY (hotel_id)
);

CREATE TABLE restaurant(
	restaurant_id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(100),
	type VARCHAR(100),
	rating INT,
	cost_rating INT,
	city_id INT,
	PRIMARY KEY (restaurant_id)
);

CREATE TABLE activity(
	name VARCHAR(100) NOT NULL,
	group_mx INT,
	description VARCHAR(255),
	PRIMARY KEY (name)
);

CREATE TABLE city_activity(
	city_id INT NOT NULL,
	activity_name VARCHAR(100) NOT NULL,
	PRIMARY KEY (city_id, activity_name)
);

ALTER TABLE vacation ADD CONSTRAINT fk_city_id FOREIGN KEY (city_id) REFERENCES city(city_id);
ALTER TABLE airport ADD CONSTRAINT fk_city_id1 FOREIGN KEY (city_id) REFERENCES city(city_id);
ALTER TABLE hotel ADD CONSTRAINT fk_city_id2 FOREIGN KEY (city_id) REFERENCES city(city_id);
ALTER TABLE restaurant ADD CONSTRAINT fk_city_id3 FOREIGN KEY (city_id) REFERENCES city(city_id);

INSERT INTO city (name, country)
	VALUES ("Los Angeles", "United States of America");

INSERT INTO city (name, country)
	VALUES ("Belfast", "Ireland");

INSERT INTO airport (name, rating, city_id)
	VALUES ("LAX", 4, 3);

INSERT INTO airport (name, rating, city_id)
	VALUES ("Hollywood Burbank Airport", 3, 3);

INSERT INTO airport (name, rating, city_id)
	VALUES ("Belfast International Airport", 3, 4);

INSERT INTO airport (name, rating, city_id)
	VALUES ("George Best Belfast City Airport", 3, 4);

INSERT INTO hotel (name, rating, cost_rating, city_id)
	VALUES ("Hotel Corque", 4, 2, 3);

INSERT INTO hotel (name, rating, cost_rating, city_id)
	VALUES ("Hotel Rosedale", 3, 1, 3);

INSERT INTO hotel (name, rating, cost_rating, city_id)
	VALUES ("Four Seasons", 5, 5, 3);
	
INSERT INTO hotel (name, rating, cost_rating, city_id)
	VALUES ("Hotel Corque", 4, 2, 3);

INSERT INTO hotel (name, rating, cost_rating, city_id)
	VALUES ("Hotel Rosedale", 3, 1, 3);

INSERT INTO hotel (name, rating, cost_rating, city_id)
	VALUES ("Four Seasons", 5, 5, 3);

INSERT INTO activity (name)
	VALUES ("Sightseeing");

INSERT INTO activity (name)
	VALUES ("Shopping");

INSERT INTO activity (name)
	VALUES ("Zoo");

INSERT INTO activity (name)
	VALUES ("Concert");

INSERT INTO city_activity (city_id, activity_name)
	VALUES (3, "Sightseeing");

INSERT INTO city_activity (city_id, activity_name)
	VALUES (3, "Shopping");

INSERT INTO city_activity (city_id, activity_name)
	VALUES (3, "Zoo");

INSERT INTO city_activity (city_id, activity_name)
	VALUES (3, "Concert");

INSERT INTO city_activity (city_id, activity_name)
	VALUES (3, "Beach");

INSERT INTO city_activity (city_id, activity_name)
	VALUES (3, "Museum");

INSERT INTO city_activity (city_id, activity_name)
	VALUES (4, "Sightseeing");

INSERT INTO city_activity (city_id, activity_name)
	VALUES (4, "Shopping");

INSERT INTO city_activity (city_id, activity_name)
	VALUES (4, "Museum");

INSERT INTO user (email, passowrd, f_name, l_name)
	VALUES ("dradosta", "Danielle", "Radosta");

INSERT INTO vacation (city_id)
	VALUES (3);

INSERT INTO vacation (city_id)
	VALUES (1);

INSERT INTO vacation (city_id)
	VALUES (4);

INSERT INTO vacation (city_id)
	VALUES (5);

INSERT INTO vacation (city_id)
	VALUES (6);

INSERT INTO vacation_list (vac_id, email)
	VALUES (1, "dradosta");

INSERT INTO vacation_list (vac_id, email)
	VALUES (2, "dradosta");

INSERT INTO vacation_list (vac_id, email)
	VALUES (3, "dradosta");

INSERT INTO vacation_list (vac_id, email)
	VALUES (4, "dradosta");

DELETE FROM vacation_list WHERE vac_id = 1;


