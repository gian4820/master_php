/*
Listar los clientes que han hecho algun encargo 
del coche 'Renault Megane'
*/

SELECT c.nombre, co.marca, co.modelo
FROM coches co
INNER JOIN encargos e ON e.coche_id = co.id
INNER JOIN clientes c ON c.id = e.cliente_id
WHERE co.modelo = 'Megane' AND co.marca = 'Renault';

