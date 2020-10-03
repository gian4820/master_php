/*
Listar los encargos con  el nombre del coche, el nombre del cliente
y el nombre de la ciudad del cliente, pero unicamente cuando sean 
de Rumipal
*/

SELECT * FROM clientes;

SELECT e.id AS 'N Encargo', cl.nombre AS 'Cliente', 
cl.ciudad AS 'Ciudad Cliente', c.marca, c.modelo 
FROM clientes cl
INNER JOIN encargos e ON e.cliente_id = cl.id
INNER JOIN coches c ON  c.id = e.coche_id
HAVING cl.ciudad = 'Rumipal';