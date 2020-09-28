/*VISTAS:
La podemos almacenar como una constante almacenada en la base
de datos, que se utiliza como una tabla virtual.
No almacena datos, sino que utiliza asosiaciones y los datos 
originales de las tablas, de forma que siempre se mantiene actualziada.
*/


CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Cateogiras'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

/* 

* SHOW TABLES -> Mostramos las tablas, y la vista se ve como una tabla,
pero no lo es!

* SELECT * FROM entradas_con_nombres; -> Nos muestra la vista!

* SELECT * FROM entradas_con_nombres WHERE titulo = 'CS'; -> aqui
le podemos meter el WHERE mas facilmente!, en las vistas

*/
