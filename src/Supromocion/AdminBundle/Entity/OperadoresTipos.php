<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperadoresTipos
 */
class OperadoresTipos
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $permiso;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idoperadorTipo;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return OperadoresTipos
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
     * Set permiso
     *
     * @param string $permiso
     * @return OperadoresTipos
     */
    public function setPermiso($permiso)
    {
        $this->permiso = $permiso;

        return $this;
    }

    /**
     * Get permiso
     *
     * @return string 
     */
    public function getPermiso()
    {
        return $this->permiso;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return OperadoresTipos
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
     * Get idoperadorTipo
     *
     * @return integer 
     */
    public function getIdoperadorTipo()
    {
        return $this->idoperadorTipo;
    }
}
