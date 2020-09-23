/*CONSULTA CON UNA CONDICION*/
/*Buscamos el campo x en la columna x*/
SELECT * FROM USUARIOS WHERE email = 'gianfranco@merguerian.com.ar';

/*
***************************
OPERADORES DE COMPARACION *
***************************

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

*********************
OPERADORES LOGICOS: *
*********************
OR
AND
NOT

**********
COMODINES*
**********
Cualquier caracter %
Un caracter desonocido _
*/


/*
1. Mostrar nombre y apellido de todos los usuarios registrados en 2017
*/

SELECT nombre, apellido, fecha FROM usuarios where YEAR(fecha)=2017;
SELECT nombre, apellido, fecha FROM usuarios where year(fecha) !=2017 or isnull(fecha);

/*
2. Mostrar el email de los usuarios cuyo apellido contenga la letra A, 
y que su contraseña sea 111
*/

SELECT email FROM usuarios WHERE apellido LIKE '%a%' AND password = 111;