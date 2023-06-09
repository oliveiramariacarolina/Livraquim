DROP DATABASE livraria;

CREATE DATABASE livraria;

USE livraria;

CREATE TABLE usuario(
  id_usuario INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  cpf VARCHAR(255),
  nome VARCHAR(255),
  login VARCHAR(255),
  senha VARCHAR(255));

CREATE TABLE editora(
  id_editora INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255),
  cnpj VARCHAR(255),
  telefone VARCHAR(255));

CREATE TABLE autor(
  id_autor INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  autor VARCHAR(255));

CREATE TABLE tema(
  id_tema INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  tema VARCHAR(255));

CREATE TABLE livro(
  id_livro INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  isbn VARCHAR(255),
  titulo VARCHAR(255),
  ano INTEGER,
  quantidade INTEGER,
  precovenda DECIMAL(10,2), 
  precocompra DECIMAL(10,2),
  id_editora INTEGER, 
  id_tema INTEGER, 
  id_autor INTEGER,
  FOREIGN KEY (id_editora) REFERENCES editora(id_editora),
  FOREIGN KEY (id_tema) REFERENCES tema(id_tema),
  FOREIGN KEY (id_autor) REFERENCES autor(id_autor));

CREATE TABLE formapagamento(
  id_formapagamento INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  formapagamento VARCHAR(255),
  descontoporcento INTEGER);

CREATE TABLE venda(
  id_venda INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  data DATE,
  valortotal DECIMAL(10,2),
  id_formapagamento INTEGER,
  FOREIGN KEY (id_formapagamento) REFERENCES formapagamento(id_formapagamento));

CREATE TABLE vendalivro(
  id_vendalivro INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_livro INTEGER,
  id_venda INTEGER,
  FOREIGN KEY (id_livro) REFERENCES livro(id_livro),
  FOREIGN KEY (id_venda) REFERENCES venda(id_venda));

INSERT INTO usuario(cpf,nome,login,senha) VALUES("12345678","André","admin","1234");

INSERT INTO editora(nome,cnpj,telefone) VALUES("Novatec","1245679","(42)3231-6545");
INSERT INTO editora(nome,cnpj,telefone) VALUES("Senac","1364895","(42)3231-6096");
INSERT INTO editora(nome,cnpj,telefone) VALUES("Pearson","7895465","(42)3231-7895");
INSERT INTO editora(nome,cnpj,telefone) VALUES("Planeta Gibi","4567890","(42)3231-7952");
INSERT INTO editora(nome,cnpj,telefone) VALUES("Planeta","7995642","(42)3231-7952");

INSERT INTO tema(tema) VALUES("Informática");
INSERT INTO tema(tema) VALUES("Autoajuda");
INSERT INTO tema(tema) VALUES("Ficção");
INSERT INTO tema(tema) VALUES("Romance");
INSERT INTO tema(tema) VALUES("Infantil");

INSERT INTO autor(autor) VALUES("Andrew Stuart Tanembaum");
INSERT INTO autor(autor) VALUES("Roger Pressman");
INSERT INTO autor(autor) VALUES("Ian Soerville");
INSERT INTO autor(autor) VALUES("Mário Sérgio Cortella");
INSERT INTO autor(autor) VALUES("Maurício de Souza");