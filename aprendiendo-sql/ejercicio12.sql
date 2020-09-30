/*
Conseguir la masa salarial anual del consecionario
*/

SELECT nombre, apellido, (sum(sueldo)*12) AS 'Salario total anual'
FROM vendedores;