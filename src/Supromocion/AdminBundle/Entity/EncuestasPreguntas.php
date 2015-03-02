<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestasPreguntas
 */
class EncuestasPreguntas
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fechaIngreso;

    /**
     * @var integer
     */
    private $orden;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idencuestaPregunta;

    /**
     * @var \Supromocion\AdminBundle\Entity\EncuestasPreguntasTipos
     */
    private $idencuestaPreguntaTipo;

    /**
     * @var \Supromocion\AdminBundle\Entity\Encuestas
     */
    private $idencuesta;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return EncuestasPreguntas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return EncuestasPreguntas
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
     * Set orden
     *
     * @param integer $orden
     * @return EncuestasPreguntas
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return EncuestasPreguntas
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
     * Get idencuestaPregunta
     *
     * @return integer 
     */
    public function getIdencuestaPregunta()
    {
        return $this->idencuestaPregunta;
    }

    /**
     * Set idencuestaPreguntaTipo
     *
     * @param \Supromocion\AdminBundle\Entity\EncuestasPreguntasTipos $idencuestaPreguntaTipo
     * @return EncuestasPreguntas
     */
    public function setIdencuestaPreguntaTipo(\Supromocion\AdminBundle\Entity\EncuestasPreguntasTipos $idencuestaPreguntaTipo = null)
    {
        $this->idencuestaPreguntaTipo = $idencuestaPreguntaTipo;

        return $this;
    }

    /**
     * Get idencuestaPreguntaTipo
     *
     * @return \Supromocion\AdminBundle\Entity\EncuestasPreguntasTipos 
     */
    public function getIdencuestaPreguntaTipo()
    {
        return $this->idencuestaPreguntaTipo;
    }

    /**
     * Set idencuesta
     *
     * @param \Supromocion\AdminBundle\Entity\Encuestas $idencuesta
     * @return EncuestasPreguntas
     */
    public function setIdencuesta(\Supromocion\AdminBundle\Entity\Encuestas $idencuesta = null)
    {
        $this->idencuesta = $idencuesta;

        return $this;
    }

    /**
     * Get idencuesta
     *
     * @return \Supromocion\AdminBundle\Entity\Encuestas 
     */
    public function getIdencuesta()
    {
        return $this->idencuesta;
    }
}
