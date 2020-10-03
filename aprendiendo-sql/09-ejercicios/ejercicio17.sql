/*
Obtener un listado con los encargos realizados por el cliente
Fernando Quintero.
*/

SELECT c.nombre AS 'Cliente', e.cantidad, co.modelo, co.marca 
FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON e.coche_id = co.id
WHERE c.nombre = 'Fernando Quintero';


SELECT * FROM clientes;
SELECT * FROM encargos;
