<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 */
class Productos
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $codigoProductoInterno;

    /**
     * @var string
     */
    private $codigoProductoProveedor;

    /**
     * @var \DateTime
     */
    private $fechaAlta;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idproducto;

    /**
     * @var \Supromocion\AdminBundle\Entity\ProductosTipos
     */
    private $idproductoTipo;

    /**
     * @var \Supromocion\AdminBundle\Entity\Monedas
     */
    private $idmoneda;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Productos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Productos
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
     * Set codigoProductoInterno
     *
     * @param string $codigoProductoInterno
     * @return Productos
     */
    public function setCodigoProductoInterno($codigoProductoInterno)
    {
        $this->codigoProductoInterno = $codigoProductoInterno;

        return $this;
    }

    /**
     * Get codigoProductoInterno
     *
     * @return string 
     */
    public function getCodigoProductoInterno()
    {
        return $this->codigoProductoInterno;
    }

    /**
     * Set codigoProductoProveedor
     *
     * @param string $codigoProductoProveedor
     * @return Productos
     */
    public function setCodigoProductoProveedor($codigoProductoProveedor)
    {
        $this->codigoProductoProveedor = $codigoProductoProveedor;

        return $this;
    }

    /**
     * Get codigoProductoProveedor
     *
     * @return string 
     */
    public function getCodigoProductoProveedor()
    {
        return $this->codigoProductoProveedor;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Productos
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Productos
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
     * Get idproducto
     *
     * @return integer 
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set idproductoTipo
     *
     * @param \Supromocion\AdminBundle\Entity\ProductosTipos $idproductoTipo
     * @return Productos
     */
    public function setIdproductoTipo(\Supromocion\AdminBundle\Entity\ProductosTipos $idproductoTipo = null)
    {
        $this->idproductoTipo = $idproductoTipo;

        return $this;
    }

    /**
     * Get idproductoTipo
     *
     * @return \Supromocion\AdminBundle\Entity\ProductosTipos 
     */
    public function getIdproductoTipo()
    {
        return $this->idproductoTipo;
    }

    /**
     * Set idmoneda
     *
     * @param \Supromocion\AdminBundle\Entity\Monedas $idmoneda
     * @return Productos
     */
    public function setIdmoneda(\Supromocion\AdminBundle\Entity\Monedas $idmoneda = null)
    {
        $this->idmoneda = $idmoneda;

        return $this;
    }

    /**
     * Get idmoneda
     *
     * @return \Supromocion\AdminBundle\Entity\Monedas 
     */
    public function getIdmoneda()
    {
        return $this->idmoneda;
    }
}
