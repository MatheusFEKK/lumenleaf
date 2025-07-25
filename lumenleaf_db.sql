create table _user(
	idUser INT AUTO_INCREMENT, 
	nameUser VARCHAR(45) NOT NULL, 
    passwordUser VARCHAR(255) NOT NULL, 
	emailUser VARCHAR(255) NOT NULL, 
	userCreated DATETIME 
	PRIMARY KEY (idUser)
);

create table notes_categories(
    idNoteCategories INT AUTO_INCREMENT, 
    nameNoteCategories VARCHAR(10) NOT NULL,
)

create table notes(
	idNote INT AUTO_INCREMENT, 
    noteTitle VARCHAR(30),
    noteDescription VARCHAR(255),
    noteWhenCreated DATETIME DEFAULT CURRENT_TIMESTAMP,
    noteLastChange DATETIME DEFAULT CURRENT_TIMESTAMP,
    idNoteCategories INT NOT NULL,
    idUser INT,
    PRIMARY KEY (idNote),
    CONSTRAINT idUser_notes FOREIGN KEY (idUser) REFERENCES _user (idUser),
    CONSTRAINT idNoteCategories_notes FOREIGN KEY (idNoteCategories) REFERENCES notes_categories (idNoteCategories)
);
