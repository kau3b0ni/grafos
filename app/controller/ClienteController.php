<?php

namespace controller;



use model\Cliente;
use config\Conexao;
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
                echo "O cliente foi adicionado.";
            } else {
                echo "Não foi possível executar a operação!";
            }
        }
        //return header('location:produto-lista.php');


    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }
    $db = $database->closeConnection();

}


?>