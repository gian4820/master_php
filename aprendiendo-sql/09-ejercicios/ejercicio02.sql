/*2- Modificar la comision de los vendedores y ponerla al 2% cuando ganen mas
de 30000 */

SELECT nombre, apellido, sueldo, (((comision* 2) /100) + comision)  FROM vendedores WHERE sueldo >30000;
