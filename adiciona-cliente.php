<?php

use model\Cliente;
require_once("app/controller/ClienteController.php");
require_once("vendor/autoload.php");


$nome       = $_POST['nome'];
$cpf        = $_POST['cpf'];
$cnpj       = $_POST['cnpj'];
$telefone   = $_POST['telefone'];
$celular    = $_POST['celular'];
$email      = $_POST['email'];
var_dump($_POST);

$cliente = new Cliente($nome, $cpf, $cnpj, $telefone, $celular, $email);
controller\insereCliente($cliente);



