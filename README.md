# Platforma testowa -IO
 Projekt na inżynierię oprogramowania

 query do SQL przy tworzeniu bazy danych, nazwać ją "logindb"

CREATE TABLE users(
    users_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    users_uid TINYTEXT not null,
    users_pwd LONGTEXT not null,
    users_email TINYTEXT not null
);

 query do SQL przy tworzeniu bazy danych dla pytan, nazwać ją "questions"

CREATE TABLE users(
    question_nr int(11) PRIMARY KEY not null,
    text TEXT not null,
);
