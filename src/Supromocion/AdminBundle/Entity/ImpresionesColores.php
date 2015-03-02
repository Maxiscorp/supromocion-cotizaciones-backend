<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpresionesColores
 */
class ImpresionesColores
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idimpresionColores;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ImpresionesColores
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
     * Set activo
     *
     * @param boolean $activo
     * @return ImpresionesColores
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
     * Get idimpresionColores
     *
     * @return integer 
     */
    public function getIdimpresionColores()
    {
        return $this->idimpresionColores;
    }
}
