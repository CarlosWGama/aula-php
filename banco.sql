CREATE TABLE usuarios (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nome varchar(200) UNIQUE NOT NULL,
  email varchar(200) NOT NULL,
  senha varchar(200) NOT NULL
);