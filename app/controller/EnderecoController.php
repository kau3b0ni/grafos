<?php

namespace controller;

use \PDO;
use \PDOException;
use model\Endereco;
use config\Conexao;
require_once("controle-sessao.php");


function insereEndereco(Endereco $endereco){
    var_dump($endereco);

    try {
        $database = new Conexao();

        $db = $database->openConnection();
        $stmt = $db->prepare("INSERT INTO endereco (cliente_id, logradouro, numero, bairro, complemento, cep, cidade, uf) VALUES (?,?,?,?,?,?,?,?)") ;
        $stmt->bindValue(1, $_SESSION['cliente_id']);
        $stmt->bindValue(2, $endereco->getLogradouro());
        $stmt->bindValue(3, $endereco->getNumero());
        $stmt->bindValue(4, $endereco->getBairro());
        $stmt->bindValue(5, $endereco->getComplemento());
        $stmt->bindValue(6, $endereco->getCep());
        $stmt->bindValue(7, $endereco->getCidade());
        $stmt->bindValue(8, $endereco->getUf());
        unset($_SESSION['cliente_id']);


        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("O endereco foi adicionado.","success");
            }
        }

    } catch (PDOException $e) {
        $erro =  "Problema com a conexão: " . $e->getMessage();
        mostra_alerta($erro,"danger");
    }

    return header('location:cliente-endereco.php');
    $db = $database->closeConnection();

}

function buscaEndereco($cliente_id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM endereco WHERE cliente_id = ?");
        $stmt->bindParam(1, $cliente_id);

        if($stmt->execute()){

            while($resultado = $stmt->fetch(PDO::FETCH_OBJ)) {
                return $resultado;
            }

        } else {
            return 2;
        }



    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

    $db = $database->closeConnection();

}