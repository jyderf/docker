DROP SCHEMA if EXISTS municipios;
CREATE SCHEMA municipios;
USE municipios;

CREATE TABLE departamento(
iddepartamento INT PRIMARY KEY AUTO_INCREMENT,
departamento VARCHAR(25) NOT NULL
);

CREATE TABLE municipio(
idmunicipio INT PRIMARY KEY AUTO_INCREMENT,
municipio VARCHAR(25) NOT NULL,
iddepartamento INT,
FOREIGN KEY (iddepartamento) REFERENCES departamento (iddepartamento)
);

INSERT INTO departamento(departamento) values('Putumayo');
INSERT INTO departamento(departamento) values('Nariño');
INSERT INTO departamento(departamento) values('Huila');

INSERT INTO municipio(municipio,iddepartamento) values('Mocoa','1');
INSERT INTO municipio(municipio,iddepartamento) values('Pasto','2');
INSERT INTO municipio(municipio,iddepartamento) values('Neiva','3');
INSERT INTO municipio(municipio,iddepartamento) values('Villagarzon','1');