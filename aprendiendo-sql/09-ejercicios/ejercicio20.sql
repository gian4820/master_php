/*
Seleccionar el grupo en el que trabaja el vendedor con mayor salario
y mostrar el nombre del grupo
*/

SELECT  v.nombre, v.apellido, v.sueldo, g.nombre AS 'Nombre Grupo', 
g.ciudad AS 'Ciudad del grupo'
FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
ORDER BY v.sueldo DESC
LIMIT 1;
