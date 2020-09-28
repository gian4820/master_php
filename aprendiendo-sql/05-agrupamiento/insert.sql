INSERT INTO categorias VALUES (null, 'Deportes');
INSERT INTO categorias VALUES (null, 'Accion');
INSERT INTO categorias VALUES (null, 'Autos');
SELECT * FROM categorias;

DESC entradas;
INSERT INTO entradas VALUES(null, 1, 1, 'PES', 'PES 2020', CURRENT_DATE());
INSERT INTO entradas VALUES(null, 1, 2, 'CS', 'CS GO', CURRENT_DATE());
INSERT INTO entradas VALUES(null, 1, 3, 'Cars', 'Disney Cars', CURRENT_DATE());

INSERT INTO entradas VALUES(null, 2, 1, 'FIFA', 'FIFA 2020', CURRENT_DATE());
INSERT INTO entradas VALUES(null, 2, 2, 'Fortnit', 'Fortnite', CURRENT_DATE());
INSERT INTO entradas VALUES(null, 2, 3, 'PCars', 'Project Cars', CURRENT_DATE());

INSERT INTO entradas VALUES(null, 3, 1, 'UFC', 'UFC 2020', CURRENT_DATE());
INSERT INTO entradas VALUES(null, 3, 2, 'COD', 'Call of duty', CURRENT_DATE());
INSERT INTO entradas VALUES(null, 3, 3, 'NFS', 'Need for speed', CURRENT_DATE());



SELECT * FROM entradas;