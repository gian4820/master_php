/*
Obtener los nombres y ciudades de los clientes con encargos mayor
a dos unidades
*/

SELECT c.nombre AS 'Cliente', c.ciudad AS 'Ciudad', SUM(e.cantidad) AS 'Cantidad de encargos'
FROM clientes c
INNER JOIN encargos e ON e.cliente_id = c.id
GROUP BY c.id
HAVING SUM(e.cantidad)>=2;

