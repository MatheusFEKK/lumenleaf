create table _user(
	idUser INT AUTO_INCREMENT, 
	nameUser VARCHAR(45) NOT NULL, 
    passwordUser VARCHAR(255) NOT NULL, 
	emailUser VARCHAR(255) NOT NULL, 
	userCreated DATETIME 
	PRIMARY KEY (idUser)
);

create table notes(
	idNote INT AUTO_INCREMENT, 
    noteTitle VARCHAR(30),
    noteDescription VARCHAR(255),
    noteWhenCreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    noteLastChange DATETIME DEFAULT CURRENT_TIMESTAMP,
    idUser INT,
    PRIMARY KEY (idNote),
    CONSTRAINT idUser_notes FOREIGN KEY (idUser) REFERENCES _user (idUser)
);
