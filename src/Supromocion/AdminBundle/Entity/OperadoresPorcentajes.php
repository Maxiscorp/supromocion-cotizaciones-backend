<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperadoresPorcentajes
 */
class OperadoresPorcentajes
{
    /**
     * @var string
     */
    private $importeDesde;

    /**
     * @var string
     */
    private $importeHasta;

    /**
     * @var string
     */
    private $porcentaje;

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
    private $idoperadorPorcentaje;

    /**
     * @var \Supromocion\AdminBundle\Entity\Operadores
     */
    private $idoperador;


    /**
     * Set importeDesde
     *
     * @param string $importeDesde
     * @return OperadoresPorcentajes
     */
    public function setImporteDesde($importeDesde)
    {
        $this->importeDesde = $importeDesde;

        return $this;
    }

    /**
     * Get importeDesde
     *
     * @return string 
     */
    public function getImporteDesde()
    {
        return $this->importeDesde;
    }

    /**
     * Set importeHasta
     *
     * @param string $importeHasta
     * @return OperadoresPorcentajes
     */
    public function setImporteHasta($importeHasta)
    {
        $this->importeHasta = $importeHasta;

        return $this;
    }

    /**
     * Get importeHasta
     *
     * @return string 
     */
    public function getImporteHasta()
    {
        return $this->importeHasta;
    }

    /**
     * Set porcentaje
     *
     * @param string $porcentaje
     * @return OperadoresPorcentajes
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return string 
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set fechaMod
     *
     * @param \DateTime $fechaMod
     * @return OperadoresPorcentajes
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
     * @return OperadoresPorcentajes
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
     * Get idoperadorPorcentaje
     *
     * @return integer 
     */
    public function getIdoperadorPorcentaje()
    {
        return $this->idoperadorPorcentaje;
    }

    /**
     * Set idoperador
     *
     * @param \Supromocion\AdminBundle\Entity\Operadores $idoperador
     * @return OperadoresPorcentajes
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
}
