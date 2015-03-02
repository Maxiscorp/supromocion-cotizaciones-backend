<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesAgentesRetencion
 */
class ClientesAgentesRetencion
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
    private $idclienteAgente;

    /**
     * @var \Supromocion\AdminBundle\Entity\AgentesRetencion
     */
    private $idagenteRetencion;

    /**
     * @var \Supromocion\AdminBundle\Entity\Clientes
     */
    private $idcliente;


    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return ClientesAgentesRetencion
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
     * @return ClientesAgentesRetencion
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
     * Get idclienteAgente
     *
     * @return integer 
     */
    public function getIdclienteAgente()
    {
        return $this->idclienteAgente;
    }

    /**
     * Set idagenteRetencion
     *
     * @param \Supromocion\AdminBundle\Entity\AgentesRetencion $idagenteRetencion
     * @return ClientesAgentesRetencion
     */
    public function setIdagenteRetencion(\Supromocion\AdminBundle\Entity\AgentesRetencion $idagenteRetencion = null)
    {
        $this->idagenteRetencion = $idagenteRetencion;

        return $this;
    }

    /**
     * Get idagenteRetencion
     *
     * @return \Supromocion\AdminBundle\Entity\AgentesRetencion 
     */
    public function getIdagenteRetencion()
    {
        return $this->idagenteRetencion;
    }

    /**
     * Set idcliente
     *
     * @param \Supromocion\AdminBundle\Entity\Clientes $idcliente
     * @return ClientesAgentesRetencion
     */
    public function setIdcliente(\Supromocion\AdminBundle\Entity\Clientes $idcliente = null)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \Supromocion\AdminBundle\Entity\Clientes 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }
}
