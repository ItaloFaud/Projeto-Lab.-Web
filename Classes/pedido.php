<?php

class Pedido{
	private $id;
	private $idproduto;
	private $idfatura;
	private $qtn;
	private $valor;

	

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdproduto()
    {
        return $this->idproduto;
    }

    /**
     * @param mixed $idproduto
     *
     * @return self
     */
    public function setIdproduto($idproduto)
    {
        $this->idproduto = $idproduto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdfatura()
    {
        return $this->idfatura;
    }

    /**
     * @param mixed $idfatura
     *
     * @return self
     */
    public function setIdfatura($idfatura)
    {
        $this->idfatura = $idfatura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtn()
    {
        return $this->qtn;
    }

    /**
     * @param mixed $qtn
     *
     * @return self
     */
    public function setQtn($qtn)
    {
        $this->qtn = $qtn;

        return $this;
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
     *
     * @return self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }
}

?>