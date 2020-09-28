/*
SUBCONSULTAS
- Son consultas que se ejecutan dentro de otras.
- Consiste en utilizar los datos de la subconsulta, para operar en la consulta principal
- A traves de las foreing keys
*/

/*1 -Sacar usuarios que tengan por lo menos una entrada*/
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

/*2- Sacar los usuarios que hablen de UFC en el titulo de entradas*/
SELECT nombre, apellido FROM usuarios WHERE id IN
(SELECT usuario_id from entradas WHERE titulo LIKE "%UFC%");

SELECT * FROM categorias;
SELECT * FROM entradas;
SELECT * FROM usuarios;



/*3- Sacar todas las entradas de la categoria acction, utilizando su nombre*/
SELECT * FROM entradas 
WHERE categoria_id IN 
(SELECT id FROM categorias WHERE nombre= 'Accion');

/*4- Mostrar las cateogiras con mas o igual a tres entradas*/
SELECT nombre FROM categorias
WHERE id IN 
(SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT (categoria_id)>=3);

/*5- Mostrar los usuarios que crearon una entrada, un Miercoles*/
SELECT nombre, apellido FROM usuarios 
WHERE id IN
(SELECT usuario_id FROM entradas WHERE dayofweek(fecha)=4);


/*6- Mostrar el nombre del usuario que tenga mas entradas*/
SELECT nombre, apellido FROM usuarios
WHERE ID IN
(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC);


/*7- Mostrar las cateogiras sin entradas*/
SELECT * FROM categorias
 WHERE id NOT IN
(SELECT categoria_id FROM entradas);