CREATE DATABASE lexus
    DEFAULT CHARACTER SET utf8;
    
USE lexus;

CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL UNIQUE,
	email VARCHAR(255) NOT NULL,
	fecha_registro DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	level int, 
	PRIMARY KEY(id)
);

CREATE TABLE area (
    id INT NOT NULL AUTO_INCREMENT,
    area_name VARCHAR(100) NOT NULL, 
    coordinator VARCHAR(100) NOT NULL, 
    PRIMARY KEY(id)
);

CREATE TABLE status (
    id INT NOT NULL AUTO_INCREMENT,
    name_status VARCHAR(100) NOT NULL, 
    description VARCHAR(200) NOT NULL, 
    PRIMARY KEY(id)
);


CREATE TABLE degree(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL, 
    education_level VARCHAR(50) NOT NULL,
    area VARCHAR(50) NOT NULL, 
    description VARCHAR(200) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE student(
    enrollment INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    second_name VARCHAR(50) NOT NULL,
    gender CHAR(1) NOT NULL,
    birthdate DATE NOT NULL,
    status_id INT NOT NULL,
    users_id INT NOT NULL UNIQUE, 
    PRIMARY KEY(enrollment),
    FOREIGN KEY(status_id)
        REFERENCES status(id)
        ON UPDATE CASCADE,
    FOREIGN KEY(users_id)
        REFERENCES users(id)
        ON UPDATE CASCADE
);

CREATE TABLE profesor(
    enrollment INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    second_name VARCHAR(50) NOT NULL,
    gender CHAR(1) NOT NULL,
    birthdate DATE NOT NULL,
    status_id INT NOT NULL, 
    area_id INT NOT NULL,
    degree_id INT NOT NULL,
    users_id INT NOT NULL UNIQUE,
    PRIMARY KEY (enrollment),
    FOREIGN KEY(status_id)
        REFERENCES status(id)
        ON UPDATE CASCADE,
    FOREIGN KEY(area_id)
        REFERENCS area(id)
        ON UPDATE CASCADE,
    FOREIGN KEY(degree_id)
        REFERENCES degree(id)
        ON UPDATE CASCADE,
    FOREIGN KEY(users_id)
        REFERENCES users(id)
        ON UPDATE CASCADE
);


CREATE TABLE homework(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255), 
    profesor_id INT NOT NULL, 
    description TEXT CHARACTER SET utf8 NOT NULL,
    entry_date DATETIME NOT NULL,
    delivery_date DATETIME NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(profesor_id) 
        REFERENCES profesor(enrollment)
        ON UPDATE CASCADE
);

CREATE TABLE comment (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    user_id INT NOT NULL,
    homework_id INT NOT NULL,
    text TEXT NOT NULL, 
    entry_date DATETIME NOT NULL,
    PRIMARY KEY (id), 
    FOREIGN KEY (user_id)
        REFERENCES users(id),
    FOREIGN KEY (homework_id)
        REFERENCES homework(id)
);

/**CREATE TABLE matter (
    id INT NOT NULL AUTO_INCREMENT,
    matter_name VARCHAR(100) NOT NULL,
    prodesor_id INT NOT NULL, 
    description VARCHAR(200) NOT NULL, 
    area_id INT NOT NULL,
    
);

CREATE TABLE band (
    id INT NOT NULL AUTO_INCREMENT,
    classrom INT NOT NULL,
    capacity INT NOT NULL,
    building VARCHAR(100) NOT NULL, 
    
);
**/
CREATE DATABASE lexus
    DEFAULT CHARACTER SET utf8;
    
USE lexus;

CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(50) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL UNIQUE,
	email VARCHAR(255) NOT NULL,
	fecha_registro DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	level int, 
	PRIMARY KEY(id)
);

CREATE TABLE area (
    id INT NOT NULL AUTO_INCREMENT,
    area_name VARCHAR(100) NOT NULL, 
    coordinator VARCHAR(100) NOT NULL, 
    PRIMARY KEY(id)
);

CREATE TABLE status (
    id INT NOT NULL AUTO_INCREMENT,
    name_status VARCHAR(100) NOT NULL, 
    description VARCHAR(200) NOT NULL, 
    PRIMARY KEY(id)
);


CREATE TABLE degree(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL, 
    education_level VARCHAR(50) NOT NULL,
    area VARCHAR(50) NOT NULL, 
    description VARCHAR(200) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE student(
    enrollment INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    second_name VARCHAR(50) NOT NULL,
    gender CHAR(1) NOT NULL,
    birthdate DATE NOT NULL,
    status_id INT NOT NULL,
    users_id INT NOT NULL UNIQUE, 
    PRIMARY KEY(enrollment)
);

CREATE TABLE profesor(
    enrollment INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    second_name VARCHAR(50) NOT NULL,
    gender CHAR(1) NOT NULL,
    birthdate DATE NOT NULL,
    status_id INT NOT NULL, 
    area_id INT NOT NULL,
    degree_id INT NOT NULL,
    users_id INT NOT NULL UNIQUE,
    PRIMARY KEY (enrollment)
);


CREATE TABLE homework(
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255), 
    profesor_id INT NOT NULL, 
    description TEXT CHARACTER SET utf8 NOT NULL,
    entry_date DATETIME NOT NULL,
    delivery_date DATETIME NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE comment (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    user_id INT NOT NULL,
    comment_id INT NOT NULL,
    text TEXT NOT NULL, 
    entry_date DATETIME NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE entry (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    user_id INT NOT NULL,
    url varchar(255) NOT NULL, 
    text VARCHAR(10000) NOT NULL,
    entry_date DATETIME NOT NULL,
    comment_id INT NOT NULL,
    PRIMARY KEY(id)
);