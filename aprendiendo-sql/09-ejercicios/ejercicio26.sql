/*
Sacar vendedores que tienen jefe, y sacar el nombre del jefe
*/

SELECT * FROM vendedores;

SELECT CONCAT(v1.nombre, ' ', v1.apellido) AS 'Vendedor',
CONCAT(v2.nombre,' ', v2.apellido) AS 'Jefe'
FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id
WHERE v1.jefe > 0;