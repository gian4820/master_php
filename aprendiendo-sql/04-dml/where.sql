/*CONSULTA CON UNA CONDICION*/
/*Buscamos el campo x en la columna x*/
SELECT * FROM USUARIOS WHERE email = 'gianfranco@merguerian.com.ar';

/*
OPERADORES DE COMPARACION

Igual           =
Distinto        !=
Menor           <
Mayor           >
Menor o igual   <=
Mayor o igual   >=
Entre           Between A and B
En              In
Es nulo         is NULL
No nulo         is not NULL
Como            like
No es como      not like


*/


/*
1. Mostrar nombre y apellido de todos los usuarios registrados en 2017
*/

SELECT nombre, apellido, fecha FROM usuarios where YEAR(fecha)=2017;