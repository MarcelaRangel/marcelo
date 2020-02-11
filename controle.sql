create database controle;
use controle;
create table produto(
cod int(15) primary key auto_increment,
nome varchar(20) not null,
preço float not null,
custo float not null,
qntd int(5) not null
);
create table venda(
codvenda int(15) primary key auto_increment,
data date not null,
hora time not null

);
alter table venda 
add foreign key (
codproduto) references produto(cod);


create table produtovenda(
sequencia int(100)primary key auto_increment, 
codvenda int(15) not null,
codproduto int(15) not null,
qtdeProduto int(4) not null,
valProduto float not null
);

use controle;
alter table produtovenda 
add foreign key (
codvenda) references venda(codvenda);

alter table produtovenda 
add foreign key (
codproduto) references produto(cod);


CREATE TABLE usuario (
  usuario_id INT PRIMARY KEY AUTO_INCREMENT,
  usuario VARCHAR(9) NOT NULL,
  senha VARCHAR(12) NOT NULL
  );
  