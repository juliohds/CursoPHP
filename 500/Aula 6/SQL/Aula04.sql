/* SCHEMA DO PROJETO: Aula041 */

/* Remover a base Aula04 */
DROP DATABASE Aula04;

/* Criar a base novamente, zerada Ambiente de Desenvolvimento */
CREATE DATABASE Aula04;

/*Selecionar o banco Aula04 (Namespace Aula04) */

USE Aula04;

/* Criacao da tabela usuarios */
CREATE TABLE usuarios (

	id 	  INT	PRIMARY KEY AUTO_INCREMENT,
	nome  VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	senha VARCHAR(100) NOT NULL

);

/* Criacao da tablela para registrar o logins do usuarios */
CREATE TABLE log (

	id INT PRIMARY KEY AUTO_INCREMENT,
	usuario_id INT,
	login_data TIMESTAMP,
	acao VARCHAR(100) NOT NULL,
	
	FOREIGN KEY (usuario_id) REFERENCES usuarios(id)

);