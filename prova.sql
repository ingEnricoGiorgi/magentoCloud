INSERT INTO Dipendenti (nome, dipartimento, capo, salario)
VALUES ('filippo', 1, 2, 20000),('marialaura', 2, null, 10000),('lorena', 4, 4, 30000),('andrea', 5, null, 100000);

INSERT INTO Dipartimento (dipartimento)
VALUES ('tutor'),('amministrazione'),('legale'),('coordinamento'),('socio');

DROP TABLE Dipartimeento;


CREATE TABLE Dipendenti ( id int NOT NULL AUTO_INCREMENT, nome varchar(255), dipartimento int, capo int, salario int, PRIMARY KEY (id),FOREIGN KEY (dipartimento) REFERENCES Dipartimento(id));
CREATE TABLE Dipartimento (id int NOT NULL AUTO_INCREMENT, dipartimento varchar(255), PRIMARY KEY (id));

SELECT Dipendenti.id, nome, nome as capo_attuale, Dipartimento.dipartimento, FIRST_TABLE.salario
FROM 

SELECT salario FROM Dipendenti  Order BY salario DESC LIMIT 3;


//funzionante salario 20000
SELECT FIRST_TABLE.salario FROM 
(SELECT salario FROM Dipendenti  Order BY salario DESC LIMIT 3) AS FIRST_TABLE ORDER BY
FIRST_TABLE.salario ASC LIMIT 1;

//mia COMPLICAZIONE INUTILE
SELECT Dipendenti.id, Dipendenti.nome, Dipendenti.capo, Dipendenti.salario FROM Dipendenti INNER JOIN (SELECT FIRST_TABLE.salario FROM 
(SELECT salario FROM Dipendenti  Order BY salario DESC LIMIT 3) AS FIRST_TABLE ORDER BY
FIRST_TABLE.salario ASC LIMIT 1 )AS SECOND_TABLE
WHERE Dipendenti.salario=SECOND_TABLE.salario;
 
 //innerjoin Dipartimento.dipartimento TROVO TUTOR
SELECT THIRD_TABLE.id, THIRD_TABLE.nome, Dipartimento.dipartimento, THIRD_TABLE.salario, THIRD_TABLE.capo
FROM (SELECT Dipendenti.id, Dipendenti.nome, Dipendenti.capo, Dipendenti.salario FROM Dipendenti INNER JOIN (SELECT FIRST_TABLE.salario FROM 
(SELECT salario FROM Dipendenti  Order BY salario DESC LIMIT 3) AS FIRST_TABLE ORDER BY
FIRST_TABLE.salario ASC LIMIT 1 )AS SECOND_TABLE
WHERE Dipendenti.salario=SECOND_TABLE.salario)AS THIRD_TABLE
INNER JOIN Dipartimento WHERE THIRD_TABLE.id=Dipartimento.id;

//Trovo maria laura
SELECT THIRD_TABLE.id, THIRD_TABLE.nome, Dipartimento.dipartimento, THIRD_TABLE.salario, THIRD_TABLE.capo
FROM (SELECT Dipendenti.id, Dipendenti.nome, Dipendenti.capo, Dipendenti.salario FROM Dipendenti INNER JOIN (SELECT FIRST_TABLE.salario FROM 
(SELECT salario FROM Dipendenti  Order BY salario DESC LIMIT 3) AS FIRST_TABLE ORDER BY
FIRST_TABLE.salario ASC LIMIT 1 )AS SECOND_TABLE
WHERE Dipendenti.salario=SECOND_TABLE.salario)AS THIRD_TABLE
INNER JOIN Dipartimento WHERE THIRD_TABLE.id=Dipartimento.id;

//TROVATo capo_attuale <--------------- FINALE--------------------
SELECT  FOURTH_TABLE.id, FOURTH_TABLE.nome, FOURTH_TABLE.dipartimento, Dipendenti.nome AS Capo_attuale, FOURTH_TABLE.salario
FROM Dipendenti INNER JOIN (
    SELECT THIRD_TABLE.id, THIRD_TABLE.nome, Dipartimento.dipartimento, THIRD_TABLE.salario, THIRD_TABLE.capo
FROM (SELECT Dipendenti.id, Dipendenti.nome, Dipendenti.capo, Dipendenti.salario FROM Dipendenti INNER JOIN (SELECT FIRST_TABLE.salario FROM 
(SELECT salario FROM Dipendenti  Order BY salario DESC LIMIT 3) AS FIRST_TABLE ORDER BY
FIRST_TABLE.salario ASC LIMIT 1 )AS SECOND_TABLE
WHERE Dipendenti.salario=SECOND_TABLE.salario)AS THIRD_TABLE
INNER JOIN Dipartimento WHERE THIRD_TABLE.id=Dipartimento.id
) AS FOURTH_TABLE
WHERE FOURTH_TABLE.capo=Dipendenti.dipartimento;
---------------------------------------------------------------------------------------
/*NOME DIPARTIMENTO*/
SELECT Dipartimento.dipartimento as DIP FROM Dipendenti 
INNER JOIN Dipartimento WHERE Dipendenti.id=Dipartimento.id AND Dipartimento.id=1;


/*
SELECT FIRST_TABLE.salario, Dipendenti.id, Dipendenti.nome , Dipendenti.dipartimento
FROM Dipendenti,
(SELECT salario FROM Dipendenti  Order BY salario DESC LIMIT 3) AS FIRST_TABLE 
ORDER BY
FIRST_TABLE.salario ASC LIMIT 1;
*/
/*cambio due