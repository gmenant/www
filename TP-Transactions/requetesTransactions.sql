Fichier tp transaction


/////ex1

6

/////ex2

4eme réponse

/////ex3
1-
START TRANSACTION;
SET autocommit=0;
CREATE TABLE PRODUIT (
Id_produit varchar(20) NOT NULL,
Designation varchar(20),
Prix FLOAT(10),
PRIMARY KEY(id_produit)
);

INSERT INTO PRODUIT (id_produit, Designation, Prix)
 VALUES ('EC7', 'Ecran',100),
 ('CL48', 'Clavier',20),
 ('IM33', 'Imprimante',30)
;
COMMIT;
END;

2-
SELECT * FROM `produit`;

3-
show variables

4-
set autocommit = 0;
