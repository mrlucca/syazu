use tela_login;
DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
	id INT(100) AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(100) NOT NULL,
    nickname VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL
	
);
