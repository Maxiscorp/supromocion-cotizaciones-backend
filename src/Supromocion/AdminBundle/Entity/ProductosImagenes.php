<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductosImagenes
 */
class ProductosImagenes
{
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
    private $idproductoImagen;

    /**
     * @var \Supromocion\AdminBundle\Entity\Archivos
     */
    private $idarchivo;

    /**
     * @var \Supromocion\AdminBundle\Entity\Productos
     */
    private $idproducto;


    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return ProductosImagenes
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
     * @return ProductosImagenes
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
     * Get idproductoImagen
     *
     * @return integer 
     */
    public function getIdproductoImagen()
    {
        return $this->idproductoImagen;
    }

    /**
     * Set idarchivo
     *
     * @param \Supromocion\AdminBundle\Entity\Archivos $idarchivo
     * @return ProductosImagenes
     */
    public function setIdarchivo(\Supromocion\AdminBundle\Entity\Archivos $idarchivo = null)
    {
        $this->idarchivo = $idarchivo;

        return $this;
    }

    /**
     * Get idarchivo
     *
     * @return \Supromocion\AdminBundle\Entity\Archivos 
     */
    public function getIdarchivo()
    {
        return $this->idarchivo;
    }

    /**
     * Set idproducto
     *
     * @param \Supromocion\AdminBundle\Entity\Productos $idproducto
     * @return ProductosImagenes
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
