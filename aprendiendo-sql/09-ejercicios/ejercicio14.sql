/*
Visualizar las unidades totales vendidas de cada coche, a cada cliente. 
mostrando el nombre del producto, el n de cliente, y la suma de unidades.
*/


SELECT c.modelo, c.marca, c.precio, SUM(e.cantidad)
AS 'Cantidad de Vehiculos', x.nombre AS 'Cliente'
FROM coches c
INNER JOIN encargos e ON e.coche_id = c.id
INNER JOIN clientes x ON x.id = e.cliente_id
GROUP BY e.coche_id, e.cliente_id;

