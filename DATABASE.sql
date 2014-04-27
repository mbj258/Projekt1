DROP TABLE USERS ;
CREATE TABLE USERS (
	Name VARCHAR(128), Sex VARCHAR(64), 
	Email VARCHAR(128), Phone INTEGER, 
	Address VARCHAR(128), Lvl INTEGER,
	PRIMARY KEY(Name, Email)
);


CREATE TABLE TEAMS (
	Admin VARCHAR(128),
	Tname VARCHAR(128),
	HID VARCHAR(256) PRIMARY KEY
);

INSERT INTO USERS (Name, Sex, Email, Phone, Address, Lvl) VALUES ('Tobias','Male','tobiascarlostv@gmail.com', 53321818, 'Tagensvej 32, 3. TH', 5);