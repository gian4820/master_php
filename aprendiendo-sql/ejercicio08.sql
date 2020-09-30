/*Visualizar todos los coches, cuya marca exista la letra F,
y que cuyo modelo comienze con F*/


SELECT * FROM coches
WHERE marca LIKE '%F%' AND modelo LIKE '%F%';