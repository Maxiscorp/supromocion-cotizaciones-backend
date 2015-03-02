<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpresionesFases
 */
class ImpresionesFases
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
    private $idimpresionFases;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ImpresionesFases
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
     * @return ImpresionesFases
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
     * Get idimpresionFases
     *
     * @return integer 
     */
    public function getIdimpresionFases()
    {
        return $this->idimpresionFases;
    }
}
