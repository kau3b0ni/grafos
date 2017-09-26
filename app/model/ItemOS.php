<?php

class ItemOS{

    private $id;
    private $produto_id;
    private $os_id;
    private $valor;
    private $descricao;
    private $obs;

    /**
     * Item_OS constructor.
     * @param $produto_id
     * @param $os_id
     * @param $valor
     * @param $descricao
     * @param $obs
     */
    public function __construct($produto_id, $os_id, $valor, $descricao, $obs)
    {
        $this->produto_id = $produto_id;
        $this->os_id = $os_id;
        $this->valor = $valor;
        $this->descricao = $descricao;
        $this->obs = $obs;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProdutoId()
    {
        return $this->produto_id;
    }

    /**
     * @param mixed $produto_id
     */
    public function setProdutoId($produto_id)
    {
        $this->produto_id = $produto_id;
    }

    /**
     * @return mixed
     */
    public function getOsId()
    {
        return $this->os_id;
    }

    /**
     * @param mixed $os_id
     */
    public function setOsId($os_id)
    {
        $this->os_id = $os_id;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * @param mixed $obs
     */
    public function setObs($obs)
    {
        $this->obs = $obs;
    }




}



?>