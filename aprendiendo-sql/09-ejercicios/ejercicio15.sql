/*
Mostrar los clientes con mayor numero de pedidos, e indicar cuantos
pedidos han realizado.
*/

SELECT c.nombre, c.gastado, e.cantidad AS 'Encargos'
FROM clientes c
INNER JOIN encargos e on c.id = e.cliente_id
ORDER BY c.gastado DESC;



