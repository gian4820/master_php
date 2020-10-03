
SELECT * FROM vendedores;
SELECT * FROM clientes;

/*OBTENER LISTADO DE CLIENTES ATENDIDO POR EL VENDEDOR ALFONSO ALI*/

SELECT c.nombre AS 'Cliente', CONCAT(v.nombre, ' ', v.apellido) AS 'Vendedor'
FROM clientes c
INNER JOIN vendedores v ON  v.id = c.vendedor_id
WHERE v.nombre= 'Alfonso' AND v.apellido='Ali';