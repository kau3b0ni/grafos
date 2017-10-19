<?php


use model\Endereco;
require_once("app/controller/EnderecoController.php");
require_once("vendor/autoload.php");

$cliente_id  = $_POST['cliente_id'];
$logradouro  = $_POST['logradouro'];
$numero      = $_POST['numero'];
$bairro      = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cep         = $_POST['cep'];
$cidade      = $_POST['cidade'];
$uf          = $_POST['uf'];

//var_dump($_POST);

$endereco = new Endereco($cliente_id, $logradouro, $numero, $bairro, $complemento, $cep, $cidade, $uf);
controller\insereEndereco($endereco);