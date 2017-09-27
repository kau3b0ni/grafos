<?php

namespace controller;

use \PDO;
use \PDOException;
use model\Cliente;
use config\Conexao;
require_once("controle-sessao.php");

/**
 * @param Cliente $cliente
 */
function insereCliente(Cliente $cliente) {
    try {
        $database = new Conexao();

        $db = $database->openConnection();
        $stmt = $db->prepare("INSERT INTO cliente (nome,cpf,cnpj,telefone,celular,email) VALUES (?,?,?,?,?,?)") ;
        //o primeiro parametro do método bindValue equivale a posicao na qual deve ser inserido conforme a query
        $stmt->bindValue(1, $cliente->getNome());
        $stmt->bindValue(2, $cliente->getCpf());
        $stmt->bindValue(3, $cliente->getCnpj());
        $stmt->bindValue(4, $cliente->getTelefone());
        $stmt->bindValue(5, $cliente->getCelular());
        $stmt->bindValue(6, $cliente->getEmail());

        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("O cliente foi adicionado.","success");
            }
        }

    } catch (PDOException $e) {
        $erro =  "Problema com a conexão: " . $e->getMessage();
        mostra_alerta($erro,"danger");
    }
    return header('location:cliente-lista.php');
    $db = $database->closeConnection();
}

/**
 * @return array
 */
function listaCliente() {
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("SELECT * FROM cliente");


        if($stmt->execute()) {

            while($resultado = $stmt->fetchAll(PDO::FETCH_OBJ)) {
                return $resultado;
            }

        }

    } catch (PDOException $e) {
        $erro =  "Problema com a conexão: " . $e->getMessage();
        mostra_alerta($erro,"danger");
    }

    $db = $database->closeConnection();
}

/**
 * @param $id
 * @param Cliente $cliente
 */
function alteraCliente($id, Cliente $cliente){
    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("UPDATE cliente SET nome = :nome,
												 cpf  = :cpf,
												 cnpj = :cnpj,
												 telefone = :telefone,
												 celular = :celular,
												 email = :email
												 WHERE id = {$id}");

        $stmt->bindValue( ':nome', $cliente->getNome());
        $stmt->bindValue( ':cpf', $cliente->getCpf());
        $stmt->bindValue( ':cnpj', $cliente->getCnpj());
        $stmt->bindValue( ':telefone', $cliente->getTelefone());
        $stmt->bindValue( ':celular', $cliente->getCelular());
        $stmt->bindValue( ':email', $cliente->getEmail());

        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("O cliente foi alterado.","success");
            }
        }


    } catch (PDOException $e) {
        $erro =  "Problema com a conexão: " . $e->getMessage();
        mostra_alerta($erro,"danger");
    }
    return header('location:cliente-lista.php');
    $db = $database->closeConnection();
}
function buscaCliente($id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM cliente WHERE id = ?");
        $stmt->bindParam(1, $id);

        if($stmt->execute()){

            while($resultado = $stmt->fetch(PDO::FETCH_OBJ)) {
                return $resultado;
            }

        } else {
            echo "Não foi possível exexutar a operação!";
        }



    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

    $db = $database->closeConnection();

}

/**
 * @param $id
 */
function removeCliente($id) {

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("DELETE FROM cliente WHERE id = ?");
        $stmt->bindParam(1, $id);

        if($stmt->execute()){
            mostra_alerta("O cliente foi removido.","warning");
        }

    } catch (PDOException $e) {
        $erro =  "Problema com a conexão: " . $e->getMessage();
        mostra_alerta($erro,"danger");
    }
    return header('location:cliente-lista.php');
    $db = $database->closeConnection();
}


?>