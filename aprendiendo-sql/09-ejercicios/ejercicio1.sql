/*DISEÑAMOS Y CREAMOS LAS DB DE UN CONSECIONARIO*/

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;


CREATE TABLE coches(
    id          int(100) AUTO_INCREMENT NOT NULL,
    modelo      varchar(100) NOT NULL,
    marca       varchar(100),
    precio      int(20) NOT NULL,
    stock       int(10) NOT NULL,
    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE grupos(
    id          int(100) AUTO_INCREMENT NOT NULL,
    nombre      varchar(100) NOT NULL,
    ciudad      varchar(100),
    CONSTRAINT  pk_grupos PRIMARY KEY (id)
)ENGINE=InnoDB;


CREATE TABLE vendedores(
    id          int(100) AUTO_INCREMENT NOT NULL,
    grupo_id    int(100) NOT NULL,
    jefe        int(100),
    nombre      varchar(100) NOT NULL,
    apellido    varchar(100),
    cargo       varchar(100),
    fecha_alta  date,
    sueldo      float(20,2),
    comision    float(10,2),
    CONSTRAINT  pk_vendedores PRIMARY KEY (id),
    CONSTRAINT  fk_vendedor_grupo FOREIGN KEY (grupo_id) REFERENCES grupos(id),
    CONSTRAINT  fk_vendedor_jefe FOREIGN KEY (jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;


CREATE TABLE clientes(
    id          int(100) AUTO_INCREMENT NOT NULL,
    vendedor_id int(100) NOT NULL,
    nombre      varchar(100) NOT NULL,
    ciudad      varchar(100),
    gastado     float(50,2),
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY (vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;


CREATE TABLE encargos(
    id          int(100) AUTO_INCREMENT NOT NULL,
    cliente_id  int(100) NOT NULL,
    coche_id    int(100) NOT NULL,
    cantidad    int(20),
    fecha       date,
    CONSTRAINT  pk_encargos PRIMARY KEY(id),
    CONSTRAINT  fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    CONSTRAINT  fk_encargo_coche FOREIGN KEY (coche_id) REFERENCES coches(id)
)ENGINE=InnoDB; 


/***********************************************************************
                         RELLENAMOS LAS TABLAS
***********************************************************************/

SELECT * FROM coches;

INSERT INTO coches VALUES(NULL, 'Fiesta', 'Ford', 40000, 3);
INSERT INTO coches VALUES(NULL, 'Falcon', 'Ford', 10000, 1);
INSERT INTO coches VALUES(NULL, 'Golf', 'Volkswagen', 44000, 2);
INSERT INTO coches VALUES(NULL, 'Megane', 'Renault', 21000, 2);
INSERT INTO coches VALUES(NULL, 'Fit', 'Honda', 54000, 5);
INSERT INTO coches VALUES(NULL, '328', 'Bmw', 75000, 1);


SELECT * FROM grupos;

INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Buenos Aires');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Buenos Aires');
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Cordoba');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Cordoba');
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Rosario');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Rosario');
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Mendoza');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Mendoza');
INSERT INTO grupos VALUES(NULL, 'Directores', 'Buenos Aires');


SELECT * FROM vendedores;

INSERT INTO vendedores VALUES(NULL, 3, NULL, 'Pedro', 'Roland', 'Supervisor', '2017-09-20', 25000, 10000 );
INSERT INTO vendedores VALUES(NULL, 4, NULL, 'Julian', 'Torres', 'Chanta', '2014-09-20', 15000, NULL );
INSERT INTO vendedores VALUES(NULL, 1, NULL, 'Alfonso', 'Ali', 'Chanta', '2017-03-20', 27000, 70000 );
INSERT INTO vendedores VALUES(NULL, 9, NULL, 'Ramiro', 'Fernandez', 'Gerente', '2018-01-11', NULL, NULL );
INSERT INTO vendedores VALUES(NULL, 5, NULL, 'Andres', 'Flores', 'Vendedor', '2019-09-21', 25000, 4000 );
INSERT INTO vendedores VALUES(NULL, 4, NULL, 'Luciano', 'Mangana', 'Encargado', '2014-09-15', 33000, NULL );
INSERT INTO vendedores VALUES(NULL, 2, NULL, 'Ramon', 'Cosco', 'Supervisor', '2011-02-20', 21000, 3000 );
INSERT INTO vendedores VALUES(NULL, 9, 2, 'Jose', 'Armesto', 'Supervisor', '2011-02-20', 21000, 3000 );
INSERT INTO vendedores VALUES(NULL, 3, 1, 'Marcelo', 'Gutierrez', 'Supervisor', '2011-02-20', 21000, 3000 );


SELECT * FROM clientes;

INSERT INTO clientes VALUES(NULL, 3, 'Maxi Hernandez', 'Cordoba', 65000);
INSERT INTO clientes VALUES(NULL, 1, 'Juan Carlos', 'Malagueno', 25000);
INSERT INTO clientes VALUES(NULL, 4, 'Fernando Quintero', NULL, 14000);
INSERT INTO clientes VALUES(NULL, 3, 'Rafael Sosa', 'San Francisco', 44000);
INSERT INTO clientes VALUES(NULL, 2, 'Claudia Marcone', 'Rumipal', 32000);
INSERT INTO clientes VALUES(NULL, 6, 'Susana Valdez', 'Santa Cruz', NULL);
INSERT INTO clientes VALUES(NULL, 6, 'Monica Chiappero', 'La francia', 7000);


SELECT * FROM encargos;

INSERT INTO encargos VALUES(NULL, 1, 3, NULL, '2005-04-06');
INSERT INTO encargos VALUES(NULL, 3, 2, NULL, '2006-02-16');
INSERT INTO encargos VALUES(NULL, 4, 1, NULL, '2013-01-26');
INSERT INTO encargos VALUES(NULL, 2, 5, NULL, '2019-06-04');
INSERT INTO encargos VALUES(NULL, 3, 4, NULL, '2005-10-02');
INSERT INTO encargos VALUES(NULL, 5, 6, NULL, '2005-12-01');
INSERT INTO encargos VALUES(NULL, 4, 4, NULL, '2005-11-06');
INSERT INTO encargos VALUES(NULL, 6, 7, NULL, '2005-03-08');

