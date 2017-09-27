<?php


use model\Cliente;
require_once("app/controller/ClienteController.php");
require_once("vendor/autoload.php");


$id = $_POST['id'];
\controller\removeCliente($id);
echo "O produto removido.";
//$_SESSION["success"] = "O produto removido.";
//header("Location: produto-lista.php?id=3");
die();

?>