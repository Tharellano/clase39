CREATE DATABASE Clase397;
USE Clase397;

CREATE TABLE table1(
    numero INT(6) PRIMARY KEY AUTO_INCREMENT,
    fecha DATE NOT NULL,
    tipo enum('sobre','caja','paquete'),
    despachante VARCHAR(30) NOT NULL,
    destinatario VARCHAR(30) NOT NULL
);

INSERT INTO table1 VALUES
(NULL, "2022-05-07", "caja", "Tony", "Leonel"),(NULL, "2022-07-05", "sobre", "Sebastian", "Alex"),(NULL, "2018-03-23", "sobre", "Angel", "Marcelo"),(NULL, "2020-09-11", "caja", "Maicol", "Mariela"),(NULL, "2022-07-21", "paquete", "Messi", "Mbappe");
