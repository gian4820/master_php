/*CONSULTAS MULTITABLAS:
    Son consultas que sirven para consultar varias tablas en una sola sentencia
*/

/*1-Mostrar las entradas con el nombre del usuario y el nombre de la cateogira*/
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM  entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND  e.categoria_id = c.id
ORDER BY id DESC;

/*INNER JOIN*/
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Cateogiras'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

/*---------------------------------------------------*/

/*2-Mostrar el nombre de las categorias, y cuantas entradas tiene*/
SELECT c.nombre, COUNT(e.id) AS 'Cantidad de entradas'
FROM categorias c, entradas e
WHERE c.id = e.categoria_id
GROUP BY e.categoria_id;

/*LEFT JOIN  -> Muestra todos los elementos, por mas que tengan campos nulos*/
SELECT c.nombre, COUNT(e.id) AS 'Cantidad de entradas'
FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

/*---------------------------------------------------*/

/*3-Mostrar el email de los usuarios, y cuantas entradas tienen*/
SELECT u.email, COUNT(e.id) AS 'Cantidad de entradas'
FROM usuarios u, entradas e
WHERE u.id = e.usuario_id
GROUP BY e.usuario_id;

/*INNER JOIN*/

SELECT u.email, COUNT(e.id) AS 'Cantidad de entradas'
FROM  usuarios u
INNER JOIN entradas e ON e.usuario_id = u.id
GROUP BY e.usuario_id;






