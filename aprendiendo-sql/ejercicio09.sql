/*Mostrar todos los vendedores del grupo 2, ordenados por salario
de mayor a menor*/


select * from vendedores
WHERE grupo_id=2
ORDER BY sueldo DESC;