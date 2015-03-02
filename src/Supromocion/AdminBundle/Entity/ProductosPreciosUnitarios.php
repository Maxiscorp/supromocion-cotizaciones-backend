<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductosPreciosUnitarios
 */
class ProductosPreciosUnitarios
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
    private $fechaMod;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idprecioProductoUnitario;

    /**
     * @var \Supromocion\AdminBundle\Entity\Productos
     */
    private $idproducto;


    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return ProductosPreciosUnitarios
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
     * @return ProductosPreciosUnitarios
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
     * Set fechaMod
     *
     * @param \DateTime $fechaMod
     * @return ProductosPreciosUnitarios
     */
    public function setFechaMod($fechaMod)
    {
        $this->fechaMod = $fechaMod;

        return $this;
    }

    /**
     * Get fechaMod
     *
     * @return \DateTime 
     */
    public function getFechaMod()
    {
        return $this->fechaMod;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return ProductosPreciosUnitarios
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
     * Get idprecioProductoUnitario
     *
     * @return integer 
     */
    public function getIdprecioProductoUnitario()
    {
        return $this->idprecioProductoUnitario;
    }

    /**
     * Set idproducto
     *
     * @param \Supromocion\AdminBundle\Entity\Productos $idproducto
     * @return ProductosPreciosUnitarios
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
}
