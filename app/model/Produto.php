<?php
class Produto{

    private $id;
    private $nome;
    private $tipo;
    private $formato;
    private $papel;
    private $cores;
    private $impressao;
    private $acabamento;
    private $numerado;
    private $vias;
    private $quantidade;
    private $valor;

    /**
     * Produto constructor.
     * @param $nome
     * @param $tipo
     * @param $formato
     * @param $papel
     * @param $cores
     * @param $impressao
     * @param $acabamento
     * @param $numerado
     * @param $vias
     * @param $quantidade
     * @param $valor
     */
    public function __construct($nome, $tipo, $formato, $papel, $cores, $impressao, $acabamento, $numerado, $vias, $quantidade, $valor)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->formato = $formato;
        $this->papel = $papel;
        $this->cores = $cores;
        $this->impressao = $impressao;
        $this->acabamento = $acabamento;
        $this->numerado = $numerado;
        $this->vias = $vias;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
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
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * @param mixed $formato
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;
    }

    /**
     * @return mixed
     */
    public function getPapel()
    {
        return $this->papel;
    }

    /**
     * @param mixed $papel
     */
    public function setPapel($papel)
    {
        $this->papel = $papel;
    }

    /**
     * @return mixed
     */
    public function getCores()
    {
        return $this->cores;
    }

    /**
     * @param mixed $cores
     */
    public function setCores($cores)
    {
        $this->cores = $cores;
    }

    /**
     * @return mixed
     */
    public function getImpressao()
    {
        return $this->impressao;
    }

    /**
     * @param mixed $impressao
     */
    public function setImpressao($impressao)
    {
        $this->impressao = $impressao;
    }

    /**
     * @return mixed
     */
    public function getAcabamento()
    {
        return $this->acabamento;
    }

    /**
     * @param mixed $acabamento
     */
    public function setAcabamento($acabamento)
    {
        $this->acabamento = $acabamento;
    }

    /**
     * @return mixed
     */
    public function getNumerado()
    {
        return $this->numerado;
    }

    /**
     * @param mixed $numerado
     */
    public function setNumerado($numerado)
    {
        $this->numerado = $numerado;
    }

    /**
     * @return mixed
     */
    public function getVias()
    {
        return $this->vias;
    }

    /**
     * @param mixed $vias
     */
    public function setVias($vias)
    {
        $this->vias = $vias;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
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




}

?>

