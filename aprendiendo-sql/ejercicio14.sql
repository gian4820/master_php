/*
Visualizar las unidades totales vendidas de cada coche, a cada cliente. 
mostrando el nombre del producto, el n de cliente, y la suma de unidades.
*/


SELECT c.modelo, c.marca, c.precio, SUM(e.cantidad), x.nombre
FROM coches c
INNER JOIN encargos e ON e.coche_id = c.id
INNER JOIN clientes x ON x.id = e.cliente_id
GROUP BY e.cliente_id;

DESC ;