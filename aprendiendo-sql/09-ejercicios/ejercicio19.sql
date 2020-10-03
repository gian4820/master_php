/*
Obtener los vendedores con dos o mas clientes
*/

SELECT v.nombre, v.apellido, c.nombre, COUNT(v.id)
FROM vendedores v
INNER JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.id
HAVING COUNT(v.id)>= 2;
