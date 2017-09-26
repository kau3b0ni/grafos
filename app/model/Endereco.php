<?php

class Endereco{

    private $id;
    private $cliente_id;
    private $logradouro;
    private $numero;
    private $bairro;
    private $complemento;
    private $cep;
    private $cidade;
    private $uf;

    /**
     *
     * Endereco constructor.
     * @param $cliente_id
     * @param $logradouro
     * @param $numero
     * @param $bairro
     * @param $complemento
     * @param $cep
     * @param $cidade
     * @param $uf
     */
    public function __construct($cliente_id, $logradouro, $numero, $bairro, $complemento, $cep, $cidade, $uf)
    {
        $this->cliente_id = $cliente_id;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->complemento = $complemento;
        $this->cep = $cep;
        $this->cidade = $cidade;
        $this->uf = $uf;
    }

    /**
    * @return mixed
    */
    public function getId()
    {
        return $this->id;
    }/**
    * @param mixed $id
    */
    public function setId($id)
    {
        $this->id = $id;
    }/**
    * @return mixed
    */
    public function getClienteId()
    {
        return $this->cliente_id;
    }/**
    * @param mixed $cliente_id
    */
    public function setClienteId($cliente_id)
    {
        $this->cliente_id = $cliente_id;
    }/**
    * @return mixed
    */
    public function getLogradouro()
    {
        return $this->logradouro;
    }/**
    * @param mixed $logradouro
    */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }/**
    * @return mixed
    */
    public function getNumero()
    {
        return $this->numero;
    }/**
    * @param mixed $numero
    */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }/**
    * @return mixed
    */
    public function getBairro()
    {
        return $this->bairro;
    }/**
    * @param mixed $bairro
    */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }/**
    * @return mixed
    */
    public function getComplemento()
    {
        return $this->complemento;
    }/**
    * @param mixed $complemento
    */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }/**
    * @return mixed
    */
    public function getCep()
    {
        return $this->cep;
    }/**
    * @param mixed $cep
    */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }/**
    * @return mixed
    */
    public function getCidade()
    {
        return $this->cidade;
    }/**
    * @param mixed $cidade
    */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }/**
    * @return mixed
    */
    public function getUf()
    {
        return $this->uf;
    }/**
    * @param mixed $uf
    */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    




?>

