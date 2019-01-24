<?php

require_once 'conecta.php';
require_once 'DAO.php';

$codigo = $_GET['cod'];

$cliente = new Cliente();
$cliente->setCod($codigo);

DAO::apagarCliente($cliente->getCod($codigo));

header('Location: index.php');