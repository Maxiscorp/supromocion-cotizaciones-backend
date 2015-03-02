<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductosMateriales
 */
class ProductosMateriales
{
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
    private $idproductoMaterial;

    /**
     * @var \Supromocion\AdminBundle\Entity\Materiales
     */
    private $idmaterial;

    /**
     * @var \Supromocion\AdminBundle\Entity\Productos
     */
    private $idproducto;


    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return ProductosMateriales
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
     * @return ProductosMateriales
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
     * Get idproductoMaterial
     *
     * @return integer 
     */
    public function getIdproductoMaterial()
    {
        return $this->idproductoMaterial;
    }

    /**
     * Set idmaterial
     *
     * @param \Supromocion\AdminBundle\Entity\Materiales $idmaterial
     * @return ProductosMateriales
     */
    public function setIdmaterial(\Supromocion\AdminBundle\Entity\Materiales $idmaterial = null)
    {
        $this->idmaterial = $idmaterial;

        return $this;
    }

    /**
     * Get idmaterial
     *
     * @return \Supromocion\AdminBundle\Entity\Materiales 
     */
    public function getIdmaterial()
    {
        return $this->idmaterial;
    }

    /**
     * Set idproducto
     *
     * @param \Supromocion\AdminBundle\Entity\Productos $idproducto
     * @return ProductosMateriales
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
