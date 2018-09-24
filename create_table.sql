CREATE TABLE member (
id serial,
login_name varchar UNIQUE,
passwd varchar NOT NULL,
PRIMARY KEY (id)
);