
CREATE TABLE pessoa
(
   codigo int PRIMARY KEY auto_increment,
   nome varchar(50),
   sexo char(14),
   email varchar(50) UNIQUE,
   telefone varchar(255),
   cep int,
   logradouro varchar(50),
   cidade varchar(30),
   estado varchar(30)
) ENGINE=InnoDB;



CREATE TABLE paciente
(
   id int PRIMARY KEY auto_increment,
   peso int,
   altura int,
   tipoSanguineo varchar(15),
   codigo int FOREIGN KEY REFERENCES pessoa(codigo)
) ENGINE=InnoDB;

