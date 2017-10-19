<?php


require_once 'app/controller/EnderecoController.php';
require_once 'vendor/autoload.php';
var_dump($_POST);
$cliente_id = $_POST['id'];
//$endereco = \controller\buscaEndereço($cliente_id);
//session_start();
$_SESSION["cliente_id"] = $cliente_id;
//header('location: endereco-cadastro.php')


include("cabecalho.php");
include("formulario-endereco.php");
include("rodape.php");




