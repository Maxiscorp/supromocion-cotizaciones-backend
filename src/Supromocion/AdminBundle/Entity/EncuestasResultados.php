<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestasResultados
 */
class EncuestasResultados
{
    /**
     * @var integer
     */
    private $idasociado;

    /**
     * @var integer
     */
    private $valorNumerico;

    /**
     * @var string
     */
    private $valorTexto;

    /**
     * @var \DateTime
     */
    private $fechaIngreso;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idencuestaRespuesta;

    /**
     * @var \Supromocion\AdminBundle\Entity\Clientes
     */
    private $idcliente;

    /**
     * @var \Supromocion\AdminBundle\Entity\EncuestasPreguntas
     */
    private $idencuestaPregunta;


    /**
     * Set idasociado
     *
     * @param integer $idasociado
     * @return EncuestasResultados
     */
    public function setIdasociado($idasociado)
    {
        $this->idasociado = $idasociado;

        return $this;
    }

    /**
     * Get idasociado
     *
     * @return integer 
     */
    public function getIdasociado()
    {
        return $this->idasociado;
    }

    /**
     * Set valorNumerico
     *
     * @param integer $valorNumerico
     * @return EncuestasResultados
     */
    public function setValorNumerico($valorNumerico)
    {
        $this->valorNumerico = $valorNumerico;

        return $this;
    }

    /**
     * Get valorNumerico
     *
     * @return integer 
     */
    public function getValorNumerico()
    {
        return $this->valorNumerico;
    }

    /**
     * Set valorTexto
     *
     * @param string $valorTexto
     * @return EncuestasResultados
     */
    public function setValorTexto($valorTexto)
    {
        $this->valorTexto = $valorTexto;

        return $this;
    }

    /**
     * Get valorTexto
     *
     * @return string 
     */
    public function getValorTexto()
    {
        return $this->valorTexto;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return EncuestasResultados
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return EncuestasResultados
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Get idencuestaRespuesta
     *
     * @return integer 
     */
    public function getIdencuestaRespuesta()
    {
        return $this->idencuestaRespuesta;
    }

    /**
     * Set idcliente
     *
     * @param \Supromocion\AdminBundle\Entity\Clientes $idcliente
     * @return EncuestasResultados
     */
    public function setIdcliente(\Supromocion\AdminBundle\Entity\Clientes $idcliente = null)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \Supromocion\AdminBundle\Entity\Clientes 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idencuestaPregunta
     *
     * @param \Supromocion\AdminBundle\Entity\EncuestasPreguntas $idencuestaPregunta
     * @return EncuestasResultados
     */
    public function setIdencuestaPregunta(\Supromocion\AdminBundle\Entity\EncuestasPreguntas $idencuestaPregunta = null)
    {
        $this->idencuestaPregunta = $idencuestaPregunta;

        return $this;
    }

    /**
     * Get idencuestaPregunta
     *
     * @return \Supromocion\AdminBundle\Entity\EncuestasPreguntas 
     */
    public function getIdencuestaPregunta()
    {
        return $this->idencuestaPregunta;
    }
}
