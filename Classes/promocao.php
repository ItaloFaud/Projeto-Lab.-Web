<?php

/**
 * 
 */
class Promocao 
{
	
	private $id;
	private $idproduto;
	private $porcentagem;
	private $ativa;

	

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
    public function getPorcentagem()
    {
        return $this->porcentagem;
    }

    /**
     * @param mixed $porcentagem
     *
     * @return self
     */
    public function setPorcentagem($porcentagem)
    {
        $this->porcentagem = $porcentagem;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAtiva()
    {
        return $this->ativa;
    }

    /**
     * @param mixed $ativa
     *
     * @return self
     */
    public function setAtiva($ativa)
    {
        $this->ativa = $ativa;

        return $this;
    }
}

?>