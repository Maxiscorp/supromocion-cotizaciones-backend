<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CotizacionesParciales
 */
class CotizacionesParciales
{
    /**
     * @var \DateTime
     */
    private $tiempoProduccion;

    /**
     * @var \DateTime
     */
    private $fechaIngreso;

    /**
     * @var string
     */
    private $nota;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idcotizacionParcial;

    /**
     * @var \Supromocion\AdminBundle\Entity\ImpresionesFases
     */
    private $idimpresionFases;

    /**
     * @var \Supromocion\AdminBundle\Entity\Archivos
     */
    private $idarchivoLogo;

    /**
     * @var \Supromocion\AdminBundle\Entity\ImpresionesTipos
     */
    private $idimpresionTipo;

    /**
     * @var \Supromocion\AdminBundle\Entity\ImpresionesColores
     */
    private $idimpresionColores;

    /**
     * @var \Supromocion\AdminBundle\Entity\Productos
     */
    private $idproducto;

    /**
     * @var \Supromocion\AdminBundle\Entity\Cotizaciones
     */
    private $idcotizacion;


    /**
     * Set tiempoProduccion
     *
     * @param \DateTime $tiempoProduccion
     * @return CotizacionesParciales
     */
    public function setTiempoProduccion($tiempoProduccion)
    {
        $this->tiempoProduccion = $tiempoProduccion;

        return $this;
    }

    /**
     * Get tiempoProduccion
     *
     * @return \DateTime 
     */
    public function getTiempoProduccion()
    {
        return $this->tiempoProduccion;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return CotizacionesParciales
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
     * Set nota
     *
     * @param string $nota
     * @return CotizacionesParciales
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return CotizacionesParciales
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
     * Get idcotizacionParcial
     *
     * @return integer 
     */
    public function getIdcotizacionParcial()
    {
        return $this->idcotizacionParcial;
    }

    /**
     * Set idimpresionFases
     *
     * @param \Supromocion\AdminBundle\Entity\ImpresionesFases $idimpresionFases
     * @return CotizacionesParciales
     */
    public function setIdimpresionFases(\Supromocion\AdminBundle\Entity\ImpresionesFases $idimpresionFases = null)
    {
        $this->idimpresionFases = $idimpresionFases;

        return $this;
    }

    /**
     * Get idimpresionFases
     *
     * @return \Supromocion\AdminBundle\Entity\ImpresionesFases 
     */
    public function getIdimpresionFases()
    {
        return $this->idimpresionFases;
    }

    /**
     * Set idarchivoLogo
     *
     * @param \Supromocion\AdminBundle\Entity\Archivos $idarchivoLogo
     * @return CotizacionesParciales
     */
    public function setIdarchivoLogo(\Supromocion\AdminBundle\Entity\Archivos $idarchivoLogo = null)
    {
        $this->idarchivoLogo = $idarchivoLogo;

        return $this;
    }

    /**
     * Get idarchivoLogo
     *
     * @return \Supromocion\AdminBundle\Entity\Archivos 
     */
    public function getIdarchivoLogo()
    {
        return $this->idarchivoLogo;
    }

    /**
     * Set idimpresionTipo
     *
     * @param \Supromocion\AdminBundle\Entity\ImpresionesTipos $idimpresionTipo
     * @return CotizacionesParciales
     */
    public function setIdimpresionTipo(\Supromocion\AdminBundle\Entity\ImpresionesTipos $idimpresionTipo = null)
    {
        $this->idimpresionTipo = $idimpresionTipo;

        return $this;
    }

    /**
     * Get idimpresionTipo
     *
     * @return \Supromocion\AdminBundle\Entity\ImpresionesTipos 
     */
    public function getIdimpresionTipo()
    {
        return $this->idimpresionTipo;
    }

    /**
     * Set idimpresionColores
     *
     * @param \Supromocion\AdminBundle\Entity\ImpresionesColores $idimpresionColores
     * @return CotizacionesParciales
     */
    public function setIdimpresionColores(\Supromocion\AdminBundle\Entity\ImpresionesColores $idimpresionColores = null)
    {
        $this->idimpresionColores = $idimpresionColores;

        return $this;
    }

    /**
     * Get idimpresionColores
     *
     * @return \Supromocion\AdminBundle\Entity\ImpresionesColores 
     */
    public function getIdimpresionColores()
    {
        return $this->idimpresionColores;
    }

    /**
     * Set idproducto
     *
     * @param \Supromocion\AdminBundle\Entity\Productos $idproducto
     * @return CotizacionesParciales
     */
    public function setIdproducto(\Supromocion\AdminBundle\Entity\Productos $idproducto = null)
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    /**
     * Get idproducto
     *
     * @return \Supromocion\AdminBundle\Entity\Productos 
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set idcotizacion
     *
     * @param \Supromocion\AdminBundle\Entity\Cotizaciones $idcotizacion
     * @return CotizacionesParciales
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
