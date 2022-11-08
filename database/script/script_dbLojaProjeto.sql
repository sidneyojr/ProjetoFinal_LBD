DROP DATABASE IF EXISTS db_loja;

Create Database db_loja;

USE db_loja;

CREATE TABLE tb_categoria  
( id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,  
  descricao VARCHAR(100) NOT NULL   
 ) ENGINE = innodb;


CREATE TABLE tb_produtos  
( cod_prod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,  
  nome VARCHAR(100) NOT NULL,  
  preco NUMERIC(5,2) NOT NULL,
  unidade_medida CHAR(5),
  qtde_estoque INT NOT NULL,
  cod_categoria INT NOT NULL REFERENCES	tb_categoria(id)
 ) ENGINE = innodb;

CREATE TABLE tb_cliente  
( cod_cli INT NOT NULL AUTO_INCREMENT PRIMARY KEY,  
  nome VARCHAR(100) NOT NULL,
  endereco VARCHAR(200) NOT NULL,  
  telefone VARCHAR(15) NOT NULL,
  limite_cred NUMERIC(10,2) NOT NULL,
  cidade VARCHAR(60) NOT NULL,
  estado VARCHAR(2) NOT NULL,
  email VARCHAR(100),
  cpf VARCHAR(11) NOT NULL
 ) ENGINE = innodb;

CREATE TABLE tb_vendedor  
( cod_vendedor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,  
  nome VARCHAR(100) NOT NULL,
  endereco VARCHAR(200) NOT NULL,  
  cidade VARCHAR(60) NOT NULL,
  estado VARCHAR(2) NOT NULL,
  telefone VARCHAR(15) NOT NULL,
  porc_comissao NUMERIC(5,2)
 ) ENGINE = innodb;

 CREATE TABLE tb_vendas (
    cod_vendas INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    data DATE NOT NULL,
    prazo_entrega varchar(100) NOT NULL,
    cod_pagto varchar(100) NOT NULL,
    fk_cliente_codigo INT NOT NULL REFERENCES tb_cliente(cod_cli),
    fk_vendedor_cod INT NOT NULL REFERENCES tb_vendedor(cod_vendedor)
)ENGINE = innodb;

CREATE TABLE tb_itens_vendas(
    fk_produtos_cod INT NOT NULL REFERENCES tb_produtos(cod_prod),
    fk_vendas_numero INT NOT NULL REFERENCES tb_vendas(cod_vendas),
    quant_vendida INT NOT NULL,
    PRIMARY KEY(fk_produtos_cod, fk_vendas_numero)
)ENGINE = innodb;


INSERT INTO tb_categoria (descricao) VALUES ('moda masculina');
INSERT INTO tb_categoria (descricao) VALUES ('moda feminina');
INSERT INTO tb_categoria (descricao) VALUES ('moda infantil');
INSERT INTO tb_categoria (descricao) VALUES ('moda juvenil');

INSERT INTO tb_produtos(nome, preco, unidade_medida,qtde_estoque,cod_categoria) VALUES ('Calça Jeans Lavado Tam 42',109.20,'UN',20,01);
INSERT INTO tb_produtos(nome, preco, unidade_medida,qtde_estoque,cod_categoria) VALUES ('Calça Jeans Lavado Tam 44',129.20,'UN',10,01);
INSERT INTO tb_produtos(nome, preco, unidade_medida,qtde_estoque,cod_categoria) VALUES ('Calça Jeans Lavado Tam 36',89.90,'UN',30,02);
INSERT INTO tb_produtos(nome, preco, unidade_medida,qtde_estoque,cod_categoria) VALUES ('Calça Brim Cor Branca Tam 36',69.20,'UN',40,02);
INSERT INTO tb_produtos(nome, preco, unidade_medida,qtde_estoque,cod_categoria) VALUES ('Camiseta Branca Tam M',109.20,'UN',20,01);

INSERT INTO tb_cliente(cidade, cpf, email, endereco, estado, limite_cred, nome, telefone) VALUES ('Guareí', '98760099968', 'pedro@hotmail.com', 'Rua das Figueiras n20', 'SP', 2000.00, 'Pedro', '(15)8888-5638');

INSERT INTO tb_cliente(cidade, cpf, email, endereco, estado, limite_cred, nome, telefone) VALUES ('Itapetininga', '55590567912', 'marcos@hotmail.com', 'Rua das Roseiras n55', 'SP', 5000.00, 'Marcos', '(15)9999-5535');

INSERT INTO tb_cliente(cidade, cpf, email, endereco, estado, limite_cred, nome, telefone) VALUES ('Itapetininga', '75755063998', 'luiza@hotmail.com', 'Rua das Aroeiras n100', 'SP', 10000.00, 'luiza', '(15)7575-5668');



INSERT INTO tb_vendedor(cidade, endereco, estado, nome, porc_comissao, telefone) VALUES ('Itapetininga', 'Rua das Carpas n10', 'SP', 'Ana', 5.00, '(15)6598-8679');

INSERT INTO tb_vendedor(cidade, endereco, estado, nome, porc_comissao, telefone) VALUES ('Sarapuí', 'Rua das Tilapias n25', 'SP', 'Maria', 5.00, '(15)5598-8096');

INSERT INTO tb_vendedor(cidade, endereco, estado, nome, porc_comissao, telefone) VALUES ('Itapetininga', 'Rua dos Lambaris n5', 'SP', 'Enzo', 5.00, '(15)9845-3326');

