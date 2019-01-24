CREATE DATABASE aml_testePHP_2018;


use aml_testePHP_2018;


create table cliente(
idCliente int primary key auto_increment,
nomeCliente varchar(250),
emailCliente varchar(250),
enderecoCliente varchar(250),
dataCadastroCliente date
);