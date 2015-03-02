<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductosTiposMateriales
 */
class ProductosTiposMateriales
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
    private $idproductoTipoMaterial;

    /**
     * @var \Supromocion\AdminBundle\Entity\Materiales
     */
    private $idmaterial;

    /**
     * @var \Supromocion\AdminBundle\Entity\ProductosTipos
     */
    private $idproductoTipo;


    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return ProductosTiposMateriales
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
     * @return ProductosTiposMateriales
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
     * Get idproductoTipoMaterial
     *
     * @return integer 
     */
    public function getIdproductoTipoMaterial()
    {
        return $this->idproductoTipoMaterial;
    }

    /**
     * Set idmaterial
     *
     * @param \Supromocion\AdminBundle\Entity\Materiales $idmaterial
     * @return ProductosTiposMateriales
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
     * Set idproductoTipo
     *
     * @param \Supromocion\AdminBundle\Entity\ProductosTipos $idproductoTipo
     * @return ProductosTiposMateriales
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
}
