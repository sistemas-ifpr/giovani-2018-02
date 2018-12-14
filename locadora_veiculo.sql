CREATE DATABASE locadora_veiculo;

USE locadora_veiculo;

SET default_storage_engine=INNODB;

CREATE TABLE IF NOT EXISTS usuario(

	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome  VARCHAR(100) NOT NULL,
    email VARCHAR (100) NOT NULL,
    senha VARCHAR (100) NOT NULL
	
)engine=InnoDB;


-- select * from usuario;
-- INSERT INTO usuario (nome, email, senha) VALUES
-- ('Giovani', 'root@gmail.com','root');
-- INSERT INTO funcionario (nome, cpf, telefone, celular, endereco, dataAdm, dataDem) VALUES
-- ('Andre Souza', '821.441.762-21','','984091055','Alto da Serra','10/03/2017','');

 -- INSERT INTO locatario (nome, cpf, telefone, celular, endereco, numCarteiraHab) VALUES
 -- ('Joao Paulo', '722.993.005.33', '', '999124409','Folha', '16092285');

CREATE TABLE IF NOT EXISTS funcionario(

	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(100) NOT NULL,
    celular VARCHAR(100) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    dataAdm VARCHAR(100)NOT NULL,
    dataDem VARCHAR(100) DEFAULT ''
	
)engine=InnoDB;

CREATE TABLE IF NOT EXISTS locatario(

	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(100) NOT NULL,
    celular VARCHAR(100) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    numCarteiraHab INT NOT NULL 
	
)engine=InnoDB;

CREATE TABLE IF NOT EXISTS marca(

	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
    
)engine=InnoDB;

CREATE TABLE IF NOT EXISTS veiculo(

	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    placa  VARCHAR(100) NOT NULL,
    marca VARCHAR (100) NOT NULL,
    modelo VARCHAR (100) NOT NULL,
    anoModelo VARCHAR (100) NOT NULL,
    anoFab VARCHAR (100) NOT NULL,
    valorDiaria VARCHAR (100) NOT NULL
	
)engine=InnoDB;


CREATE TABLE IF NOT EXISTS reserva(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    veiculo INT NOT NULL,
    dataRes VARCHAR (100) NOT NULL,
    locatario INT,
    dataBaixaRes VARCHAR (100) NOT NULL,
    funcionario INT NOT NULL,
    FOREIGN KEY (veiculo) REFERENCES veiculo (id),
	FOREIGN KEY (locatario) REFERENCES locatario (id) ON DELETE SET NULL

)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS emprestimo(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	veiculo INT NOT NULL,
    dataEmprestimo varchar(100) NOT NULL,
    dataDevolucao VARCHAR(100) NOT NULL,
    valorLocacao VARCHAR(100),
    cliente INT NOT NULL,
    funcionario INT NOT NULL,
    devolvido CHAR(3),
    FOREIGN KEY (cliente) REFERENCES locatario (id),
    FOREIGN KEY (funcionario) REFERENCES funcionario (id),
	FOREIGN KEY (veiculo) REFERENCES veiculo (id)
)ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS devolucao(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    dataHora DATETIME NOT NULL,
    emprestimo INT NOT NULL,
    FOREIGN KEY (emprestimo) REFERENCES emprestimo (id)

)ENGINE = InnoDB;

show engines;

