/*
Obtener una lista de los nombres de los clientes con el importe de 
sus encargos acumulados
*/

SELECT c.nombre, (SUM(e.cantidad * co.precio))
FROM clientes c
INNER JOIN encargos e ON e.cliente_id = c.id
INNER JOIN coches co ON co.id = e.coche_id
GROUP BY c.id;