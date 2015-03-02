<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenesComentarios
 */
class OrdenesComentarios
{
    /**
     * @var string
     */
    private $comentario;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idordenComentario;

    /**
     * @var \Supromocion\AdminBundle\Entity\Ordenes
     */
    private $idorden;


    /**
     * Set comentario
     *
     * @param string $comentario
     * @return OrdenesComentarios
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return OrdenesComentarios
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return OrdenesComentarios
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
     * Get idordenComentario
     *
     * @return integer 
     */
    public function getIdordenComentario()
    {
        return $this->idordenComentario;
    }

    /**
     * Set idorden
     *
     * @param \Supromocion\AdminBundle\Entity\Ordenes $idorden
     * @return OrdenesComentarios
     */
    public function setIdorden(\Supromocion\AdminBundle\Entity\Ordenes $idorden = null)
    {
        $this->idorden = $idorden;

        return $this;
    }

    /**
     * Get idorden
     *
     * @return \Supromocion\AdminBundle\Entity\Ordenes 
     */
    public function getIdorden()
    {
        return $this->idorden;
    }
}
