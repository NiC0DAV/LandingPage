CREATE DATABASE landingPage;
USE landingPage;

CREATE TABLE registros(
nombre VARCHAR(70),
apellidos VARCHAR(70),
email VARCHAR(125),
telefono INT,
id INT NOT NULL,
mensaje TEXT,
PRIMARY KEY(id)
);