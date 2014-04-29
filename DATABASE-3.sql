DROP TABLE USERS ;
CREATE TABLE USERS (
	Name VARCHAR(128), Password VARCHAR(128), Sex VARCHAR(64), 
	Email VARCHAR(128), Phone INTEGER, 
	Address VARCHAR(128), Lvl INTEGER,
	PRIMARY KEY(Email)
);


CREATE TABLE TEAMS (
	Admin VARCHAR(128),
	Tname VARCHAR(128),
	HID VARCHAR(256) PRIMARY KEY
);

INSERT INTO USERS (Name, Password, Sex, Email, Phone, Address, Lvl) VALUES ('Tobias', '123', 'Male','tobiascarlostv@gmail.com', 53321818, 'Tagensvej 32, 3. TH', 5);