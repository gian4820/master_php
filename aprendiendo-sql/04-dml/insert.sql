
/*Insertar filas a la base datos*/

INSERT INTO usuarios VALUES(
    null,
    'Gianfranco',
    'Groppo',
    'gianfranco@merguerian.com.ar',
    '1234',
    '2020-09-20'
);

INSERT INTO usuarios VALUES(
    null,
    'Alfonso',
    'Perez',
    'alfonso@perez.com',
    '123123',
    '2015-05-06'
);

/*Insertar filas solo con algunas columnas*/
/*Siempre y cuando nos permita cargar campos nulos*/
INSERT INTO usuarios (email, password) VALUES (
    'pedro@gimenez.com',
    '1111'
);