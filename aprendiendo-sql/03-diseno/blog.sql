CREATE TABLE usuarios(
    id          int (255) auto_increment not null,
    nombre      VARCHAR (100) not NULL,
    apellido    VARCHAR (100) not NULL,
    email       VARCHAR (255) not NULL,
    password    VARCHAR (255) not NULL,
    fecha       DATE not null,
    CONSTRAINT  pk_usuarios PRIMARY KEY(id),
    CONSTRAINT  uq_email UNIQUE (email)
)ENGINE=InnoDB;

CREATE TABLE categorias(
    id          int (255) auto_increment not null,
    nombre      VARCHAR (100),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE entradas(
    id          int(255) auto_increment not null,
    usuario_id  int(255) not null,
    categoria_id int(255) not null,
    titulo      VARCHAR(255) not null,
    descripcion MEDIUMTEXT,
    fecha       date not null,
    CONSTRAINT pk_entradas PRIMARY KEY (id),
    CONSTRAINT fk_usuarios FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_categorias FOREIGN KEY (categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDB;