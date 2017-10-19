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

create table papel(
  id int not null primary key auto_increment,
    nome varchar(20) not null,
    gramatura varchar(20),
    formato varchar(20),
    fabricante varchar(30)
);

create table produto(
	id int not null primary key auto_increment,
    nome varchar(30) not null,
    categoria varchar(20),
    formato varchar(10),
    papel_id int,
    cores varchar(3),
    impressao varchar(10),
    acabamento varchar(50),
    numerado boolean,
    vias varchar(2),
    quantidade int,
    valor float,
    FOREIGN KEY (papel_id) REFERENCES papel(id)
);


create table ordem_de_servico(
	id int not null primary key auto_increment,
    cliente_id int not null,
    dataOS date,
    dataPrazo date,
    dataEntrega date,
    status_os varchar(12),
    desc_outro varchar(20),
    valor_produtos float,
    valor_arte float,
    valor_outro float,
    valor_desconto float,
    valor_total float,
    FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

create table item_os(
	id int not null primary key auto_increment,
    produto_id int not null,
    os_id int not null,
    valor float,
    descricao varchar(50),
    obs varchar(50),
    FOREIGN KEY (produto_id) REFERENCES produto(id),
    FOREIGN KEY (os_id) REFERENCES ordem_de_servico(id)
);

