# Create a user for our site to access the DB

CREATE USER 'site'@'localhost' IDENTIFIED BY 'v@cation';
GRANT ALL PRIVILEGES ON * . * TO 'site'@'localhost';
