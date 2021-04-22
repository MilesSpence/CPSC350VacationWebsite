# @author Christopher Ringham
# @course CPSC350: Applications of Databases
# Insert Paris, New Orleans, and related info

INSERT INTO city VALUES (NULL, 'Paris', 'France');
INSERT INTO city VALUES (NULL, 'New Orleans', 'United States');

INSERT INTO activity VALUES ('Wine Tour', 10, NULL);
INSERT INTO activity VALUES ('Eifel Tower', NULL, NULL);
INSERT INTO activity VALUES ('Beach', NULL, NULL);
INSERT INTO activity VALUES ('Museums', 10, NULL);
INSERT INTO activity VALUES ('Boating', 6, NULL);
INSERT INTO activity VALUES ('Swamp Tour', 4, NULL);
INSERT INTO activity VALUES ('Bar Hopping', 8, NULL);

INSERT INTO airport VALUES (NULL, 'Paris Orly', 3, (SELECT city_id FROM city WHERE name = 'Paris'));
INSERT INTO airport VALUES (NULL, 'Paris Charles de Gaulle', 3, (SELECT city_id FROM city WHERE name = 'Paris'));

INSERT INTO airport VALUES (NULL, 'New Orleans Lakefront Airport', 4, (SELECT city_id FROM city WHERE name = 'New Orleans'));
INSERT INTO airport VALUES (NULL, 'Louis Armstrong New Orleans International Airport', 3, (SELECT city_id FROM city WHERE name = 'New Orleans'));

INSERT INTO city_activity VALUES ((SELECT city_id FROM city WHERE name = 'Paris'), 'Wine Tour');
INSERT INTO city_activity VALUES ((SELECT city_id FROM city WHERE name = 'Paris'), 'Eifel Tower');
INSERT INTO city_activity VALUES ((SELECT city_id FROM city WHERE name = 'Paris'), 'Beach');
INSERT INTO city_activity VALUES ((SELECT city_id FROM city WHERE name = 'Paris'), 'Museums');
INSERT INTO city_activity VALUES ((SELECT city_id FROM city WHERE name = 'Paris'), 'Boating');

INSERT INTO city_activity VALUES ((SELECT city_id FROM city WHERE name = 'New Orleans'), 'Swamp Tour');
INSERT INTO city_activity VALUES ((SELECT city_id FROM city WHERE name = 'New Orleans'), 'Museums');
INSERT INTO city_activity VALUES ((SELECT city_id FROM city WHERE name = 'New Orleans'), 'Boating');
INSERT INTO city_activity VALUES ((SELECT city_id FROM city WHERE name = 'New Orleans'), 'Bar Hopping');

INSERT INTO hotel VALUES (NULL, 'Hilton Paris Opera', 4, 3, (SELECT city_id FROM city WHERE name = 'Paris'));
INSERT INTO hotel VALUES (NULL, 'Hotel Ritz Paris', 5, 5, (SELECT city_id FROM city WHERE name = 'Paris'));
INSERT INTO hotel VALUES (NULL, 'Hotel la Manufacture', 3, 2, (SELECT city_id FROM city WHERE name = 'Paris'));

INSERT INTO hotel VALUES (NULL, 'Soniat House', 4, 3, (SELECT city_id FROM city WHERE name = 'New Orleans'));
INSERT INTO hotel VALUES (NULL, 'Hotel Provencial', 3, 2, (SELECT city_id FROM city WHERE name = 'New Orleans'));
INSERT INTO hotel VALUES (NULL, 'Le Pavillion', 4, 3, (SELECT city_id FROM city WHERE name = 'New Orleans'));

INSERT INTO restaurant VALUES (NULL, 'Il Etait un Square', 'American', 5, 2, (SELECT city_id FROM city WHERE name = 'Paris'));
INSERT INTO restaurant VALUES (NULL, 'Laffineur Affine', 'French', 5, 2, (SELECT city_id FROM city WHERE name = 'Paris'));
INSERT INTO restaurant VALUES (NULL, 'Le Cinq', 'French', 5, 4, (SELECT city_id FROM city WHERE name = 'Paris'));

INSERT INTO restaurant VALUES (NULL, 'Toups', 'Creole', 4, 3, (SELECT city_id FROM city WHERE name = 'New Orleans'));
INSERT INTO restaurant VALUES (NULL, 'Commanders Palace', 'Fine Dining', 5, 4, (SELECT city_id FROM city WHERE name = 'New Orleans'));
INSERT INTO restaurant VALUES (NULL, 'Galatoires', 'Fine Dining', 4, 4, (SELECT city_id FROM city WHERE name = 'New Orleans'));