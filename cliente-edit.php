<?php


require_once 'app/controller/ClienteController.php';
require_once 'vendor/autoload.php';

$id = $_POST['id'];
$cliente = \controller\buscaCliente($id);

include("cabecalho.php");
include("formulario-cliente-edit.php");
include("rodape.php");




