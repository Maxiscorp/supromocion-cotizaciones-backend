<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotizaciones
 */
class Cotizaciones
{
    /**
     * @var \DateTime
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     */
    private $fechaVencimiento;

    /**
     * @var \DateTime
     */
    private $fechaRecontacto;

    /**
     * @var boolean
     */
    private $recontactar;

    /**
     * @var string
     */
    private $condicionesContratacion;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idcotizacion;

    /**
     * @var \Supromocion\AdminBundle\Entity\MediosPago
     */
    private $idmedioPago;

    /**
     * @var \Supromocion\AdminBundle\Entity\CotizacionesEstados
     */
    private $idcotizacionEstado;

    /**
     * @var \Supromocion\AdminBundle\Entity\Operadores
     */
    private $idoperador;

    /**
     * @var \Supromocion\AdminBundle\Entity\Clientes
     */
    private $idcliente;

    /**
     * @var \Supromocion\AdminBundle\Entity\Archivos
     */
    private $idarchivoPdf;


    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Cotizaciones
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
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return Cotizaciones
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }

    /**
     * Get fechaVencimiento
     *
     * @return \DateTime 
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set fechaRecontacto
     *
     * @param \DateTime $fechaRecontacto
     * @return Cotizaciones
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
     * Set recontactar
     *
     * @param boolean $recontactar
     * @return Cotizaciones
     */
    public function setRecontactar($recontactar)
    {
        $this->recontactar = $recontactar;

        return $this;
    }

    /**
     * Get recontactar
     *
     * @return boolean 
     */
    public function getRecontactar()
    {
        return $this->recontactar;
    }

    /**
     * Set condicionesContratacion
     *
     * @param string $condicionesContratacion
     * @return Cotizaciones
     */
    public function setCondicionesContratacion($condicionesContratacion)
    {
        $this->condicionesContratacion = $condicionesContratacion;

        return $this;
    }

    /**
     * Get condicionesContratacion
     *
     * @return string 
     */
    public function getCondicionesContratacion()
    {
        return $this->condicionesContratacion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Cotizaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Cotizaciones
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
     * Get idcotizacion
     *
     * @return integer 
     */
    public function getIdcotizacion()
    {
        return $this->idcotizacion;
    }

    /**
     * Set idmedioPago
     *
     * @param \Supromocion\AdminBundle\Entity\MediosPago $idmedioPago
     * @return Cotizaciones
     */
    public function setIdmedioPago(\Supromocion\AdminBundle\Entity\MediosPago $idmedioPago = null)
    {
        $this->idmedioPago = $idmedioPago;

        return $this;
    }

    /**
     * Get idmedioPago
     *
     * @return \Supromocion\AdminBundle\Entity\MediosPago 
     */
    public function getIdmedioPago()
    {
        return $this->idmedioPago;
    }

    /**
     * Set idcotizacionEstado
     *
     * @param \Supromocion\AdminBundle\Entity\CotizacionesEstados $idcotizacionEstado
     * @return Cotizaciones
     */
    public function setIdcotizacionEstado(\Supromocion\AdminBundle\Entity\CotizacionesEstados $idcotizacionEstado = null)
    {
        $this->idcotizacionEstado = $idcotizacionEstado;

        return $this;
    }

    /**
     * Get idcotizacionEstado
     *
     * @return \Supromocion\AdminBundle\Entity\CotizacionesEstados 
     */
    public function getIdcotizacionEstado()
    {
        return $this->idcotizacionEstado;
    }

    /**
     * Set idoperador
     *
     * @param \Supromocion\AdminBundle\Entity\Operadores $idoperador
     * @return Cotizaciones
     */
    public function setIdoperador(\Supromocion\AdminBundle\Entity\Operadores $idoperador = null)
    {
        $this->idoperador = $idoperador;

        return $this;
    }

    /**
     * Get idoperador
     *
     * @return \Supromocion\AdminBundle\Entity\Operadores 
     */
    public function getIdoperador()
    {
        return $this->idoperador;
    }

    /**
     * Set idcliente
     *
     * @param \Supromocion\AdminBundle\Entity\Clientes $idcliente
     * @return Cotizaciones
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

    /**
     * Set idarchivoPdf
     *
     * @param \Supromocion\AdminBundle\Entity\Archivos $idarchivoPdf
     * @return Cotizaciones
     */
    public function setIdarchivoPdf(\Supromocion\AdminBundle\Entity\Archivos $idarchivoPdf = null)
    {
        $this->idarchivoPdf = $idarchivoPdf;

        return $this;
    }

    /**
     * Get idarchivoPdf
     *
     * @return \Supromocion\AdminBundle\Entity\Archivos 
     */
    public function getIdarchivoPdf()
    {
        return $this->idarchivoPdf;
    }
}
