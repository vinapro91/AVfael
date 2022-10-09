CREATE DATABASE db_fael;

USE db_fael;

CREATE TABLE tb_users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(40) NOT NULL,
senha VARCHAR(40) NOT NULL,
dtcad TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_users(login, senha) VALUES ('jose', "12345");

CREATE TABLE tb_routes (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
origen_city VARCHAR(40) NOT NULL,
destination_city VARCHAR(40) NOT NULL,
distance INTEGER NOT NULL
)

INSERT INTO tb_routes 
(origen_city, destination_city, distance)
VALUES 
('Curitiba', 'São Paulo', 339),
('Curitiba', 'Brasília', 1083),
('Curitiba', 'Fortaleza', 2675),
('Curitiba', 'Porto Alegre', 547),
('Curitiba', 'Campinas', 360),
('Curitiba', 'São Gonçalo', 695),
('Curitiba', 'Belo Horizonte', 830),
('Curitiba', 'Belém', 2670),
('Curitiba', 'Campo Grande', 782),
('Curitiba', 'Florianópolis', 304),
('Curitiba', 'Rio de Janeiro', 677);


CREATE TABLE tb_cars (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
car_model VARCHAR(40) NOT NULL,
fuel VARCHAR(40) NOT NULL,
autonomy VARCHAR(40) NOT NULL,
fuel_price VARCHAR(40) NOT NULL
)

INSERT INTO
tb_cars (car_model, fuel, autonomy, fuel_price)
VALUES 
("Volkswagen Voyage", "gasolina", "13,4", "5,554"),
("Hyundai HB20S", "gasolina", "13,7", "5,554"),
("Chevrolet Onix Plus", "gasolina", "14,2", "5,554"),
("Renault Logan", "gasolina", "13,6", "5,554"),
("Fiat Mobi", "gasolina", "13,7", "5,554");