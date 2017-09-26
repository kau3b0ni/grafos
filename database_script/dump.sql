drop database if exists grafos;
create database grafos;
use grafos;

create table cliente(
	id int not null primary key auto_increment,
    nome varchar(50) not null,
    cpf varchar(11),
    cnpj varchar(14),
    telefone varchar(20),
    celular varchar(20),
    email varchar(30)    
);

create table endereco(
	id int not null primary key auto_increment,
    cliente_id int not null,
    logradouro varchar(50),
    numero varchar(7),
    bairro varchar(30),
    complemento varchar(20),
    cep varchar(9),
    cidade varchar(40),
    uf varchar(2),
    FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

create table produto(
	id int not null primary key auto_increment,
    nome varchar(50) not null,
    tipo varchar(15),
    formato varchar(10),
    papel varchar(15),
    cores varchar(3),
    impressao varchar(10),
    acabamento varchar(50),
    numerado boolean,
    vias varchar(2),
    quantidade int,
    valor decimal(10,2)
);

create table ordem_de_servico(
	id int not null primary key auto_increment,
    cliente_id int not null,
    dataOS date,
    dataPrazo date,
    dataEntrega date,
    status varchar(12),
    desc_outro varchar(20),
    valor_produtos decimal(10,2),
    valor_arte decimal(10,2),
    valor_outro decimal(10,2),
    valor_desconto decimal(10,2),
    valor_total decimal(10,2),
    FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

create table item_os(
	id int not null primary key auto_increment,
    produto_id int not null,
    os_id int not null,
    valor decimal(10,2),
    descricao varchar(50),
    obs varchar(50),
    FOREIGN KEY (produto_id) REFERENCES produto(id),
    FOREIGN KEY (os_id) REFERENCES ordem_de_servico(id) 
);

