<?php

session_start();

/**
 * Função para exibir alertas de situação das operações das operações CRUD
 * @param $msg
 * @param $tipo
 */
function mostra_alerta($msg, $tipo){
    $_SESSION["mensagem"] = $msg;
    $_SESSION["tipo"] = $tipo;
}

/**
 * Função para limpar alertas de situação das operações das operações CRUD
 * @param $msg
 * @param $tipo
 */
function limpa_alerta(){
    unset($_SESSION["mensagem"]);
    unset($_SESSION["tipo"]);
}