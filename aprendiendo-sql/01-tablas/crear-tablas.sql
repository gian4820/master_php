/*
COMANDOS BASES DE DATOS

*CREATE DATABASE mydb;
*USE mydb;
*CREATE TABLE mitabla ( id INT PRIMARY KEY, nombre VARCHAR(20) );
*SHOW TABLES   -> Muestra las tablas de bd;
*DESC "nombre de la tabla"  -> Describe como es la tabla
*INSERT INTO mitabla VALUES ( 1, 'Will' );
*INSERT INTO mitabla VALUES ( 2, 'Marry' );
*INSERT INTO mitabla VALUES ( 3, 'Dean' );
*SELECT id, nombre FROM mitabla WHERE id = 1;
*UPDATE mitabla SET nombre = 'Willy' WHERE id = 1;
*SELECT id, nombre FROM mitabla;
*DELETE FROM mitabla WHERE id = 1;
*SELECT id, nombre FROM mitabla;
*DROP DATABASE mydb;
*SELECT count(1) from mitabla; da el número de registros en la tabla


*/

/*Create Table*/

CREATE TABLE usuarios(
    id           int(11) AUTO_INCREMENT not null,
    nombre       varchar(100) NULL,
    apellido     varchar(100) DEFAULT 'apellido' ,
    email        varchar (100) not NULL,
    password     varchar(255) not NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);