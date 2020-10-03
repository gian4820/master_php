/*
Mostrar listado de clientes, mostrando el n de cliente, y nombre
y mostrar el n de vendedor y su nombre.
*/

SELECT c.id AS 'N Cliente', c.nombre AS 'Cliente', c.vendedor_id AS
 'N Vendedor', CONCAT(v.nombre, ' ', v.apellido) AS 'Vendedor'
FROM clientes c
INNER JOIN vendedores v ON v.id = c.vendedor_id;