<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordenes
 */
class Ordenes
{
    /**
     * @var string
     */
    private $nroPresupuesto;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $lugarEntrega;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idorden;

    /**
     * @var \Supromocion\AdminBundle\Entity\Cotizaciones
     */
    private $idcotizacion;

    /**
     * @var \Supromocion\AdminBundle\Entity\Clientes
     */
    private $idcliente;


    /**
     * Set nroPresupuesto
     *
     * @param string $nroPresupuesto
     * @return Ordenes
     */
    public function setNroPresupuesto($nroPresupuesto)
    {
        $this->nroPresupuesto = $nroPresupuesto;

        return $this;
    }

    /**
     * Get nroPresupuesto
     *
     * @return string 
     */
    public function getNroPresupuesto()
    {
        return $this->nroPresupuesto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Ordenes
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
     * Set lugarEntrega
     *
     * @param string $lugarEntrega
     * @return Ordenes
     */
    public function setLugarEntrega($lugarEntrega)
    {
        $this->lugarEntrega = $lugarEntrega;

        return $this;
    }

    /**
     * Get lugarEntrega
     *
     * @return string 
     */
    public function getLugarEntrega()
    {
        return $this->lugarEntrega;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Ordenes
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
     * Get idorden
     *
     * @return integer 
     */
    public function getIdorden()
    {
        return $this->idorden;
    }

    /**
     * Set idcotizacion
     *
     * @param \Supromocion\AdminBundle\Entity\Cotizaciones $idcotizacion
     * @return Ordenes
     */
    public function setIdcotizacion(\Supromocion\AdminBundle\Entity\Cotizaciones $idcotizacion = null)
    {
        $this->idcotizacion = $idcotizacion;

        return $this;
    }

    /**
     * Get idcotizacion
     *
     * @return \Supromocion\AdminBundle\Entity\Cotizaciones 
     */
    public function getIdcotizacion()
    {
        return $this->idcotizacion;
    }

    /**
     * Set idcliente
     *
     * @param \Supromocion\AdminBundle\Entity\Clientes $idcliente
     * @return Ordenes
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
}
