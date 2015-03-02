<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenesItems
 */
class OrdenesItems
{
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
    private $idordenItem;

    /**
     * @var \Supromocion\AdminBundle\Entity\Ordenes
     */
    private $idorden;

    /**
     * @var \Supromocion\AdminBundle\Entity\CotizacionesParcialesDetalle
     */
    private $idcotizacionItem;


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return OrdenesItems
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
     * @return OrdenesItems
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
     * Get idordenItem
     *
     * @return integer 
     */
    public function getIdordenItem()
    {
        return $this->idordenItem;
    }

    /**
     * Set idorden
     *
     * @param \Supromocion\AdminBundle\Entity\Ordenes $idorden
     * @return OrdenesItems
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

    /**
     * Set idcotizacionItem
     *
     * @param \Supromocion\AdminBundle\Entity\CotizacionesParcialesDetalle $idcotizacionItem
     * @return OrdenesItems
     */
    public function setIdcotizacionItem(\Supromocion\AdminBundle\Entity\CotizacionesParcialesDetalle $idcotizacionItem = null)
    {
        $this->idcotizacionItem = $idcotizacionItem;

        return $this;
    }

    /**
     * Get idcotizacionItem
     *
     * @return \Supromocion\AdminBundle\Entity\CotizacionesParcialesDetalle 
     */
    public function getIdcotizacionItem()
    {
        return $this->idcotizacionItem;
    }
}
