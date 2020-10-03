/*
Sacar la media de sueldos entre todos los vendedores por grupo
*/
SELECT * FROM grupos;
SELECT * FROM vendedores;

SELECT v.nombre, v.apellido, g.nombre AS 'Nombre grupo', g.ciudad, AVG(v.sueldo) 
FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY v.grupo_id;