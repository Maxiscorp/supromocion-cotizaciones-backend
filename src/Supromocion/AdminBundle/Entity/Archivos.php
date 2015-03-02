<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archivos
 */
class Archivos
{
    /**
     * @var string
     */
    private $nombreArchivo;

    /**
     * @var string
     */
    private $rutaArchivo;

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
    private $idarchivo;


    /**
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return Archivos
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    /**
     * Get nombreArchivo
     *
     * @return string 
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * Set rutaArchivo
     *
     * @param string $rutaArchivo
     * @return Archivos
     */
    public function setRutaArchivo($rutaArchivo)
    {
        $this->rutaArchivo = $rutaArchivo;

        return $this;
    }

    /**
     * Get rutaArchivo
     *
     * @return string 
     */
    public function getRutaArchivo()
    {
        return $this->rutaArchivo;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Archivos
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
     * @return Archivos
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
     * Get idarchivo
     *
     * @return integer 
     */
    public function getIdarchivo()
    {
        return $this->idarchivo;
    }
}
