/*4- sacar todos los vendedores cuya fecha de alta sea posterior
al 01-03-2017 */


SELECT * FROM vendedores WHERE fecha_alta > DATE('2017-03-01');