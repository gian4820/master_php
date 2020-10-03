/*
Visualizar los nombres de los clientes y la cantidad de encargos
realizados, incluyendo los que no hayan realizado encargos
*/

SELECT c.nombre, e.cantidad, c.id
FROM clientes c
LEFT JOIN encargos e ON e.cliente_id = c.id;
