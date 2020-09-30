/*5-Mostrar todos los vendedores con su nombre, y el numero de dias
que lleva en el concesionario */

SELECT nombre, DATEDIFF(CURRENT_DATE, fecha_alta) FROM vendedores ;

