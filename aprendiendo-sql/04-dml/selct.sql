/*Seleccionamos algunos campos de la tabla*/
SELECT email, password from usuarios;

/*Seleccionamos todos los campos de un tabla */
SELECT * FROM usuarios;


/*Operadores matematicos en un select*/
SELECT * , (7*2) as 'Operacion' FROM usuarios;

/*Ordenar tabla segun alguna columna asc o desc*/
SELECT * FROM usuarios ORDER BY id desc;

/*Ordenar tabla segun alguna columna asc o desc*/
SELECT * FROM usuarios ORDER BY apellido asc;