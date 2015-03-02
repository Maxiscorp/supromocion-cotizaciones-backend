<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpresionesTiposColoresPreciosUnitarios
 */
class ImpresionesTiposColoresPreciosUnitarios
{
    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var string
     */
    private $precioUnitario;

    /**
     * @var \DateTime
     */
    private $fechaIngreso;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idimpresionTipoColorPrecioUnitario;

    /**
     * @var \Supromocion\AdminBundle\Entity\ImpresionesColores
     */
    private $idimpresionColor;

    /**
     * @var \Supromocion\AdminBundle\Entity\ImpresionesTipos
     */
    private $idimpresionTipo;


    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return ImpresionesTiposColoresPreciosUnitarios
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
     * Set precioUnitario
     *
     * @param string $precioUnitario
     * @return ImpresionesTiposColoresPreciosUnitarios
     */
    public function setPrecioUnitario($precioUnitario)
    {
        $this->precioUnitario = $precioUnitario;

        return $this;
    }

    /**
     * Get precioUnitario
     *
     * @return string 
     */
    public function getPrecioUnitario()
    {
        return $this->precioUnitario;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return ImpresionesTiposColoresPreciosUnitarios
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
     * Set activo
     *
     * @param boolean $activo
     * @return ImpresionesTiposColoresPreciosUnitarios
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
     * Get idimpresionTipoColorPrecioUnitario
     *
     * @return integer 
     */
    public function getIdimpresionTipoColorPrecioUnitario()
    {
        return $this->idimpresionTipoColorPrecioUnitario;
    }

    /**
     * Set idimpresionColor
     *
     * @param \Supromocion\AdminBundle\Entity\ImpresionesColores $idimpresionColor
     * @return ImpresionesTiposColoresPreciosUnitarios
     */
    public function setIdimpresionColor(\Supromocion\AdminBundle\Entity\ImpresionesColores $idimpresionColor = null)
    {
        $this->idimpresionColor = $idimpresionColor;

        return $this;
    }

    /**
     * Get idimpresionColor
     *
     * @return \Supromocion\AdminBundle\Entity\ImpresionesColores 
     */
    public function getIdimpresionColor()
    {
        return $this->idimpresionColor;
    }

    /**
     * Set idimpresionTipo
     *
     * @param \Supromocion\AdminBundle\Entity\ImpresionesTipos $idimpresionTipo
     * @return ImpresionesTiposColoresPreciosUnitarios
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
}
