<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EncuestasPreguntasTipos
 */
class EncuestasPreguntasTipos
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
    private $idencuestaPreguntaTipo;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return EncuestasPreguntasTipos
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
     * @return EncuestasPreguntasTipos
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
     * Get idencuestaPreguntaTipo
     *
     * @return integer 
     */
    public function getIdencuestaPreguntaTipo()
    {
        return $this->idencuestaPreguntaTipo;
    }
}
