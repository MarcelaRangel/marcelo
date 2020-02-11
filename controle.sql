create database controle;
use controle;
create table produto(
cod int(15) primary key auto_increment,
nome varchar(20),
preço float,
custo float,
qntd int(5)
);