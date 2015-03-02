<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encuestas
 */
class Encuestas
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var \DateTime
     */
    private $fechaInicio;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idencuesta;

    /**
     * @var \Supromocion\AdminBundle\Entity\EncuestasTipos
     */
    private $idencuestaTipo;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Encuestas
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Encuestas
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Encuestas
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
     * Get idencuesta
     *
     * @return integer 
     */
    public function getIdencuesta()
    {
        return $this->idencuesta;
    }

    /**
     * Set idencuestaTipo
     *
     * @param \Supromocion\AdminBundle\Entity\EncuestasTipos $idencuestaTipo
     * @return Encuestas
     */
    public function setIdencuestaTipo(\Supromocion\AdminBundle\Entity\EncuestasTipos $idencuestaTipo = null)
    {
        $this->idencuestaTipo = $idencuestaTipo;

        return $this;
    }

    /**
     * Get idencuestaTipo
     *
     * @return \Supromocion\AdminBundle\Entity\EncuestasTipos 
     */
    public function getIdencuestaTipo()
    {
        return $this->idencuestaTipo;
    }
}
