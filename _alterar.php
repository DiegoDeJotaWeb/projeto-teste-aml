<?php
require_once 'conecta.php';
require_once 'DAO.php';

$codigo = $_POST['codigo'];

if(isset($_POST['alterar'])){

$cliente = new Cliente();
$cliente->setCod($codigo);
$cliente->setNome($_POST['nome']);
$cliente->setEmail($_POST['email']);
$cliente->setEndereco($_POST['endereco']);
$cliente->setDataCadastro($_POST['dataCadastro']);
DAO::atualizarCliente($cliente);
header('Location: index.php');
}
?>