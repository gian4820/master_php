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
SELECT nombre, apellido, fecha FROM usuarios where year(fecha) !=2017 or ISNULL(fecha);

/*
2. Mostrar el email de los usuarios cuyo apellido contenga la letra A, 
y que su contraseña sea 111
*/
SELECT email FROM usuarios WHERE apellido LIKE '%a%' AND password = 111;

/*
3. Seleccionar aquellos usuarios cuyo año de registo sea PAR
*/
SELECT * FROM usuarios WHERE YEAR(fecha)%2=0;


/*
4. Seleccionar aquellos usuarios que el nombre tenga mas de 7 letras
Y que ademas se hayan registrado en el 2020
*/
SELECT UPPER(nombre) as 'Nombre', apellido FROM usuarios WHERE LENGTH(nombre) >7 AND YEAR(fecha)=2020;

/*
5. Mostrar en la tabla solo dos registros
*/
SELECT * FROM usuarios LIMIT 2;

