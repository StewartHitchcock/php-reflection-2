CREATE DATABASE articles;


CREATE TABLE Articles (

    ID int,
    Title CHAR(255),
    Image CHAR(255),
    Author CHAR(255),
    AuthorImg CHAR(255),
    Date DATETIME

    );


CREATE TABLE form (

    ID int,
    name CHAR(255),
    email CHAR(255),
    telephone INT(11),
    subject CHAR(255),
    message LONGTEXT
) ;