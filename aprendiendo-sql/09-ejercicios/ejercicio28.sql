/*
Listar los vendedores que tengan o no clientes,
y mostrar el numero de clientes
*/

SELECT CONCAT(v.nombre, ' ', v.apellido) AS 'Vendedor',
c.nombre AS 'Cliente'
FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id;


