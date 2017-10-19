
<?php


require_once 'app/controller/EnderecoController.php';
require_once 'vendor/autoload.php';

$cliente_id = $_POST['id'];
//$endereco = \controller\buscaEndereço($cliente_id);
//session_start();
$_SESSION["cliente_id"] = $cliente_id;
//header('location: endereco-cadastro.php')
if(\controller\buscaEndereco($cliente_id)==NULL){
    header('location:endereco-cadastro.php');
}



include("cabecalho.php");
include("endereco.php");
include("rodape.php");