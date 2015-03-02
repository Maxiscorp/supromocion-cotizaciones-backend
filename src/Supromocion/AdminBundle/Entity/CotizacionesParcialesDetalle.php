<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CotizacionesParcialesDetalle
 */
class CotizacionesParcialesDetalle
{
    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var string
     */
    private $importeImpresion;

    /**
     * @var string
     */
    private $importeProducto;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idcotizacionParcialDetalle;

    /**
     * @var \Supromocion\AdminBundle\Entity\CotizacionesParciales
     */
    private $idcotizacionParcial;


    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return CotizacionesParcialesDetalle
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set importeImpresion
     *
     * @param string $importeImpresion
     * @return CotizacionesParcialesDetalle
     */
    public function setImporteImpresion($importeImpresion)
    {
        $this->importeImpresion = $importeImpresion;

        return $this;
    }

    /**
     * Get importeImpresion
     *
     * @return string 
     */
    public function getImporteImpresion()
    {
        return $this->importeImpresion;
    }

    /**
     * Set importeProducto
     *
     * @param string $importeProducto
     * @return CotizacionesParcialesDetalle
     */
    public function setImporteProducto($importeProducto)
    {
        $this->importeProducto = $importeProducto;

        return $this;
    }

    /**
     * Get importeProducto
     *
     * @return string 
     */
    public function getImporteProducto()
    {
        return $this->importeProducto;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return CotizacionesParcialesDetalle
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
     * Get idcotizacionParcialDetalle
     *
     * @return integer 
     */
    public function getIdcotizacionParcialDetalle()
    {
        return $this->idcotizacionParcialDetalle;
    }

    /**
     * Set idcotizacionParcial
     *
     * @param \Supromocion\AdminBundle\Entity\CotizacionesParciales $idcotizacionParcial
     * @return CotizacionesParcialesDetalle
     */
    public function setIdcotizacionParcial(\Supromocion\AdminBundle\Entity\CotizacionesParciales $idcotizacionParcial = null)
    {
        $this->idcotizacionParcial = $idcotizacionParcial;

        return $this;
    }

    /**
     * Get idcotizacionParcial
     *
     * @return \Supromocion\AdminBundle\Entity\CotizacionesParciales 
     */
    public function getIdcotizacionParcial()
    {
        return $this->idcotizacionParcial;
    }
}
