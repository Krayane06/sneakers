CREATE TABLE Client(
   id_Client INTEGER,
   Nom VARCHAR(50),
   prenom VARCHAR(50),
   Adresse VARCHAR(50),
   civilite VARCHAR(50),
   CodePostal INTEGER,
   NumeroTelephone INTEGER,
   Mail VARCHAR(50),
   mdp VARCHAR(50),
   PRIMARY KEY(id_Client)
);

CREATE TABLE Facture(
   id_facture INTEGER,
   num_facture int,
   date_facture date,
   PRIMARY KEY(id_facture)
);

CREATE TABLE Commande(
   id_commande int,
   date_commande date,
   id_article int,
   id_Client int NOT NULL,
   id_facture int NOT NULL,
   PRIMARY KEY(id_commande),
   FOREIGN KEY(id_Client) REFERENCES Client(id_Client),
   FOREIGN KEY(id_facture) REFERENCES Facture(id_facture)
);

CREATE TABLE type_de_chaussure(
   id_type_de_chaussure int,
   libelle_type VARCHAR(100),
   PRIMARY KEY(id_type_de_chaussure)
);

CREATE TABLE Article(
   id_article int,
   nom_article VARCHAR(50),
   type_article VARCHAR(50),
   Marque VARCHAR(50),
   Prix VARCHAR(50),
   Taille int,
   id_type_de_chaussure int NOT NULL,
   PRIMARY KEY(id_article),
   FOREIGN KEY(id_type_de_chaussure) REFERENCES type_de_chaussure(id_type_de_chaussure)
);

CREATE TABLE photo(
   id_photo int,
   libelle_photo VARCHAR(50),
   id_article int NOT NULL,
   PRIMARY KEY(id_photo),
   FOREIGN KEY(id_article) REFERENCES Article(id_article)
);

CREATE TABLE concerner(
   id_article int,
   id_commande int,
   Quantité int,
   PRIMARY KEY(id_article, id_commande),
   FOREIGN KEY(id_article) REFERENCES Article(id_article),
   FOREIGN KEY(id_commande) REFERENCES Commande(id_commande)
);


INSERT INTO Client Values
(1,'Ait-hamouche', 'Noury','63 rue requette','homme',93420,0667545412,'',''),
(2, 'Bensadi', 'Smail','20 rue sucette','homme',93600,0651453398,'',''),
(3, 'kherbouche', 'Rayane','60 rue turbigo','homme',75003,0678974323,'',''),
(4, 'Anota', 'Tyron','69 rue turbigo','homme',75019,0756432309,'',''),
(5, 'Mane', 'Aby','1 rue turgot','femme',75011,0798004443,'',''),
(6, 'BENMAHI','Zakaria','2 rue gogo','homme',75018,0654690996,'',''),
(7, 'BISSEY', 'Morgan','30 rue alger','homme',93400,0657431129,'',''),
(8, 'BOUZIDI','Sophiane','33 boulvard voltaire','homme',75009,0765784326,'',''),
(9, 'DUGAST', 'Maxime','58 rue requette','homme',78500,0657980700,'',''),
(10, 'HADJI', 'Azraoui','45 rue requette','homme',75001,0732114455,'',''),
(11, 'MINOT','Quentin','101 rue requette','homme',75005,0678664532,'',''),
(12, 'NACEUR', 'Hella','100 rue requette','femme',94500,0678097432,'','');


INSERT INTO Facture Values
(1,6,'2022-03-16'),
(2,7,'2022-04-06'),
(3,8,'2022-02-28'),
(4,5,'2022-02-14'),
(5,6,'2022-01-11'),
(6,4,'2022-04-16'),
(7,5,'2022-05-01'),
(8,2,'2022-02-16'),
(9,4,'2021-11-16'),
(10,1,'2021-12-25'),
(11,3,'2021-12-01'),
(12,1,'2022-01-07');


INSERT INTO Commande Values
(1,'2022-03-16',1,1,1),
(2,'2022-04-06',2,2,2),
(3,'2022-02-28',3,3,3),
(4,'2022-02-14',4,4,4),
(5,'2022-01-11',5,5,5),
(6,'2022-05-16',6,6,6),
(7,'2022-05-01',7,7,7),
(8,'2022-02-16',8,8,8),
(9,'2021-11-16',9,9,9),
(10,'2021-12-25',10,10,10),
(11,'2021-12-01',11,11,11),
(12,'2022-01-07',12,12,12);

INSERT INTO type_de_chaussure Values
(1,'Jordan'),
(2,'Basektball'),
(3,'Lifestyle'),
(4,'Running'),
(5,'Running'),
(6,'Fitnss et training'),
(7,'Skateboard'),
(8,'Lifestyle'),
(9,'Personnalisation');

INSERT INTO Article Values
(1,'Air Jordan 1 High','Chaussure','Air Jordan','1000€',40,1),
(2,'Air Jordan Dior','Chaussure','Air Jordan','18000€',41,2),
(3,'Air Jordan Dunk','Chaussure','Air Jordan','1200€',45,3),
(4,'Nike Air Max Plus','Chaussure','Nike','200€',42,4),
(5,'nike air max 270','Chaussure','Nike','100€',44,5),
(6,'Yeezy 500 Enflame','Chaussure','Adidas','330€',47,6),
(7,'Yeezy 350','Chaussure','Adidas','400€',39,7),
(8,'Yeezy Boost 700 V1','Chaussure','Adidas','550€',43,8),
(9,'Nike MAG Back to the Future','Chaussure','Nike','100000€',45,9);

INSERT INTO photo Values
(1,'chaussure.gif',1),
(2,'airjordandior.gif',2),
(3,'ben.jpg',3),
(4,'tn.jpg',4),
(5,'airmax270.png',5),
(6,'yeezy500.jpg',6),
(7,'yeezy.jpg',7),
(8,'yeezy700.png',8),
(9,'luxe.png',9);

INSERT INTO concerner Values
(1,1,1),
(2,2,1),
(3,3,1),
(4,4,1),
(5,5,1),
(6,6,1),
(7,7,1),
(8,8,1),
(9,9,1);

