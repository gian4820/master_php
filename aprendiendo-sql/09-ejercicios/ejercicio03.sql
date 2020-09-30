/*3- Incrementar el precio de los coches en un 2%*/

UPDATE coches SET precio= ((precio * 2)/100)+precio;
SELECT * FROM coches;