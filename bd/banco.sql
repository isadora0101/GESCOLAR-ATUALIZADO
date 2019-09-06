create DATABASE GESCOLAR;

USE GESCOLAR;

  CREATE TABLE ALUNO (
       ID INT AUTO_INCREMENT,
	   NOME VARCHAR (255),
	   DATA_NASCIMENTO DATE,
	   SEXO CHAR(1),
	   GENERO VARCHAR(225),
	   CPF CHAR (11),
	   CIDADE VARCHAR (100),
	   ESTADO CHAR(2),
	   BAIRRO VARCHAR(150),
	   RUA VARCHAR(100),
	   CEP CHAR (8),
	   PRIMARY KEY (ID)
	);

create  table curso (
    id int auto_increment,
    nome varchar(150),
    primary key (id)
);

create table turma (
    id int auto_increment,
    id_curso int,
    descricao varchar(50),
    primary key (id),
    foreign key (id_curso) references curso(id)
);