/*
Crear una vista llamada vendedores A, que incluira todos los vendedores
del grupo que se llamen vendedores A
*/

CREATE VIEW vendedoresa AS
SELECT g.nombre AS 'GRUPO', CONCAT(v.nombre, ' ', v.apellido) AS 'Vendedor'
FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
HAVING g.nombre = 'Vendedores A'; 


SELECT * FROM grupos;


SHOW TABLES;
SELECT * FROM vendedoresa;
