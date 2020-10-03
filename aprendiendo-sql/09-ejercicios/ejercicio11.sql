/*
Visualizar todos los cargos y el numero de vendedores 
que hay en cada cargo
*/

SELECT cargo,  COUNT(ID) FROM vendedores
GROUP BY cargo;
