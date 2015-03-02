<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductosImpresionesTipos
 */
class ProductosImpresionesTipos
{
    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idproductoImpresionTipo;

    /**
     * @var \Supromocion\AdminBundle\Entity\ImpresionesTipos
     */
    private $idmpresionTipo;

    /**
     * @var \Supromocion\AdminBundle\Entity\Productos
     */
    private $idproducto;


    /**
     * Set activo
     *
     * @param boolean $activo
     * @return ProductosImpresionesTipos
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
     * Get idproductoImpresionTipo
     *
     * @return integer 
     */
    public function getIdproductoImpresionTipo()
    {
        return $this->idproductoImpresionTipo;
    }

    /**
     * Set idmpresionTipo
     *
     * @param \Supromocion\AdminBundle\Entity\ImpresionesTipos $idmpresionTipo
     * @return ProductosImpresionesTipos
     */
    public function setIdmpresionTipo(\Supromocion\AdminBundle\Entity\ImpresionesTipos $idmpresionTipo = null)
    {
        $this->idmpresionTipo = $idmpresionTipo;

        return $this;
    }

    /**
     * Get idmpresionTipo
     *
     * @return \Supromocion\AdminBundle\Entity\ImpresionesTipos 
     */
    public function getIdmpresionTipo()
    {
        return $this->idmpresionTipo;
    }

    /**
     * Set idproducto
     *
     * @param \Supromocion\AdminBundle\Entity\Productos $idproducto
     * @return ProductosImpresionesTipos
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
