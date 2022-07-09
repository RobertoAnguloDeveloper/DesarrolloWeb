-- Active: 1654355456160@@127.0.0.1@3306@desarrolloweb
/*Create numeros table with id,n1,n2 columns*/
CREATE TABLE numeros (
  id INTEGER PRIMARY KEY,
  n1 INTEGER,
  n2 INTEGER
);

/*Build procedure that multiply column n1 by n2 from the table numeros*/
CREATE PROCEDURE multiplicar(IN n1 INT, IN n2 INT)
BEGIN
    DECLARE resultado INT;
    SET resultado = n1 * n2;
    SELECT resultado;
END;

/*How to use this procedure*/
CALL multiplicar(2,3);

