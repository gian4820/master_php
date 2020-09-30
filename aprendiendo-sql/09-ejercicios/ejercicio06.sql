/*Visualizar el nombre y los apellidos de los vendedores 
en una misma columna, y su fecha de registro, y que dia de la semana
que se registraron*/


SELECT 
CONCAT(nombre, ' ' , apellido ) AS 'Nombre completo',
fecha_alta, dayofweek(fecha_alta)  
FROM vendedores;