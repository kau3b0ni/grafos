<?php
class OrdemDeServico
{
    private $id;
    private $cliente_id;
    private $dataOS;
    private $dataEntrega;
    private $status;
    private $descOutro;
    private $valorProdutos;
    private $valorArte;
    private $valorOutro;
    private $valorDesconto;
    private $valorTotal;

    /**
     * OrdemDeServico constructor.
     * @param $cliente_id
     * @param $dataOS
     * @param $dataEntrega
     * @param $status
     * @param $descOutro
     * @param $valorProdutos
     * @param $valorArte
     * @param $valorOutro
     * @param $valorDesconto
     * @param $valorTotal
     */
    public function __construct($cliente_id, $dataOS, $dataEntrega, $status, $descOutro, $valorProdutos, $valorArte, $valorOutro, $valorDesconto, $valorTotal)
    {
        $this->cliente_id = $cliente_id;
        $this->dataOS = $dataOS;
        $this->dataEntrega = $dataEntrega;
        $this->status = $status;
        $this->descOutro = $descOutro;
        $this->valorProdutos = $valorProdutos;
        $this->valorArte = $valorArte;
        $this->valorOutro = $valorOutro;
        $this->valorDesconto = $valorDesconto;
        $this->valorTotal = $valorTotal;
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
    public function getClienteId()
    {
        return $this->cliente_id;
    }

    /**
     * @param mixed $cliente_id
     */
    public function setClienteId($cliente_id)
    {
        $this->cliente_id = $cliente_id;
    }

    /**
     * @return mixed
     */
    public function getDataOS()
    {
        return $this->dataOS;
    }

    /**
     * @param mixed $dataOS
     */
    public function setDataOS($dataOS)
    {
        $this->dataOS = $dataOS;
    }

    /**
     * @return mixed
     */
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    /**
     * @param mixed $dataEntrega
     */
    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDescOutro()
    {
        return $this->descOutro;
    }

    /**
     * @param mixed $descOutro
     */
    public function setDescOutro($descOutro)
    {
        $this->descOutro = $descOutro;
    }

    /**
     * @return mixed
     */
    public function getValorProdutos()
    {
        return $this->valorProdutos;
    }

    /**
     * @param mixed $valorProdutos
     */
    public function setValorProdutos($valorProdutos)
    {
        $this->valorProdutos = $valorProdutos;
    }

    /**
     * @return mixed
     */
    public function getValorArte()
    {
        return $this->valorArte;
    }

    /**
     * @param mixed $valorArte
     */
    public function setValorArte($valorArte)
    {
        $this->valorArte = $valorArte;
    }

    /**
     * @return mixed
     */
    public function getValorOutro()
    {
        return $this->valorOutro;
    }

    /**
     * @param mixed $valorOutro
     */
    public function setValorOutro($valorOutro)
    {
        $this->valorOutro = $valorOutro;
    }

    /**
     * @return mixed
     */
    public function getValorDesconto()
    {
        return $this->valorDesconto;
    }

    /**
     * @param mixed $valorDesconto
     */
    public function setValorDesconto($valorDesconto)
    {
        $this->valorDesconto = $valorDesconto;
    }

    /**
     * @return mixed
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * @param mixed $valorTotal
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
    }




}







?>