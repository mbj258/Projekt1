DROP TABLE Kamp;
DROP TABLE brugereHasHold;
DROP TABLE Hold;
DROP TABLE BrugerFavours;
DROP TABLE Brugere;

CREATE TABLE Brugere(
Navn VARCHAR(50) NOT NULL,
Email VARCHAR(50),
Køn VARCHAR(1),
tlf VARCHAR(50),
Adresse VARCHAR(50),
Strength INT,
PRIMARY KEY(Name)
);

INSERT INTO Brugere VALUES('Jacob','Jacob_Andersen9@hotmail.com','m','26270810','Spindestræde 22',2);
INSERT INTO Brugere VALUES('Tobias','Tobias@hotmail.com','m','23410412','Gangstatawn 42',3);
INSERT INTO Brugere VALUES('Emil','Emil@hotmail.com','m','23410412','Gangstatawn 42',1);
INSERT INTO Brugere VALUES('Sylvester','Syl@hotmail.com','m','23410412','Gangstatawn 42',4);

CREATE TABLE BrugerFavours(
brugerEt,
brugerTo,
FOREIGN KEY (brugerEt) REFERENCES Brugere,
FOREIGN KEY (brugerTo) REFERENCES Brugere
);

INSERT INTO BrugerFavours VALUES('Jacob','Tobias');
INSERT INTO BrugerFavours VALUES('Emil','Sylvester');

CREATE TABLE Hold(
HID VARCHAR(50),
Name VARCHAR(50),
Admin,
PRIMARY KEY(HID),
FOREIGN KEY(Admin) REFERENCES Brugere
);

INSERT INTO Hold VALUES('HoldID01','Aftenholdet','Jacob');

CREATE TABLE BrugereHasHold(
BrugerID,
HoldID,
FOREIGN KEY(BrugerID) REFERENCES Brugere,
FOREIGN KEY(HoldID) REFERENCES Hold
);

INSERT INTO BrugereHasHold VALUES('Jacob','HoldID01');
INSERT INTO BrugereHasHold VALUES('Tobias','HoldID01');
INSERT INTO BrugereHasHold VALUES('Emil','HoldID01');
INSERT INTO BrugereHasHold VALUES('Sylvester','HoldID01');

CREATE TABLE Kamp(
type VARCHAR(20),
KID VARCHAR(50),
dato DATE,
holdID,
rundeNummer INT,
spillerEt NOT NULL,
spillerTo NOT NULL,
spillerTre,
spillerFire,
Resultat VARCHAR(50),
PRIMARY KEY(KID),
FOREIGN KEY(holdID) REFERENCES Hold,
FOREIGN KEY(spillerEt) REFERENCES Brugere,
FOREIGN KEY(spillerTo) REFERENCES Brugere,
FOREIGN KEY(spillerTre) REFERENCES Brugere,
FOREIGN KEY(spillerFire) REFERENCES Brugere
);

INSERT INTO Kamp VALUES('Herresingle','KampID01','2014-04-28','HoldID01',1,'Jacob','Tobias', NULL, NULL,'21-15 21-12');
INSERT INTO Kamp VALUES('Herresingle','KampID02','2014-04-28','HoldID01',1,'Emil','Sylvester', NULL, NULL,'11-21 21-12 15-21');
INSERT INTO Kamp VALUES('Herredouble','KampID03','2014-04-28','HoldID01',2,'Jacob','Tobias', 'Emil', 'Sylvester','21-10 21-18');

commit;


