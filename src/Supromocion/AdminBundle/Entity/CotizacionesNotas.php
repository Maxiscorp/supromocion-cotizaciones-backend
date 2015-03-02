<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CotizacionesNotas
 */
class CotizacionesNotas
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
     * @var \DateTime
     */
    private $fechaRecontacto;

    /**
     * @var boolean
     */
    private $ultima;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idcotizacionNota;

    /**
     * @var \Supromocion\AdminBundle\Entity\Cotizaciones
     */
    private $idcotizacion;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CotizacionesNotas
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
     * @return CotizacionesNotas
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
     * Set fechaRecontacto
     *
     * @param \DateTime $fechaRecontacto
     * @return CotizacionesNotas
     */
    public function setFechaRecontacto($fechaRecontacto)
    {
        $this->fechaRecontacto = $fechaRecontacto;

        return $this;
    }

    /**
     * Get fechaRecontacto
     *
     * @return \DateTime 
     */
    public function getFechaRecontacto()
    {
        return $this->fechaRecontacto;
    }

    /**
     * Set ultima
     *
     * @param boolean $ultima
     * @return CotizacionesNotas
     */
    public function setUltima($ultima)
    {
        $this->ultima = $ultima;

        return $this;
    }

    /**
     * Get ultima
     *
     * @return boolean 
     */
    public function getUltima()
    {
        return $this->ultima;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return CotizacionesNotas
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
     * Get idcotizacionNota
     *
     * @return integer 
     */
    public function getIdcotizacionNota()
    {
        return $this->idcotizacionNota;
    }

    /**
     * Set idcotizacion
     *
     * @param \Supromocion\AdminBundle\Entity\Cotizaciones $idcotizacion
     * @return CotizacionesNotas
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
}
