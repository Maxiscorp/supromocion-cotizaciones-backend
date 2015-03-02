<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 */
class Clientes
{
    /**
     * @var string
     */
    private $cuit;

    /**
     * @var string
     */
    private $razonSocial;

    /**
     * @var string
     */
    private $nombreComercial;

    /**
     * @var string
     */
    private $contacto;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var boolean
     */
    private $enviaMailsSeguimiento;

    /**
     * @var string
     */
    private $localidad;

    /**
     * @var string
     */
    private $codigoPostal;

    /**
     * @var \DateTime
     */
    private $fechaAlta;

    /**
     * @var \DateTime
     */
    private $fechaUltimaCotizacionAprobada;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var string
     */
    private $domicilio;

    /**
     * @var integer
     */
    private $idcliente;

    /**
     * @var \Supromocion\AdminBundle\Entity\CondicionesIva
     */
    private $idcondicionIva;

    /**
     * @var \Supromocion\AdminBundle\Entity\Provincias
     */
    private $idprovincia;


    /**
     * Set cuit
     *
     * @param string $cuit
     * @return Clientes
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     * @return Clientes
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string 
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set nombreComercial
     *
     * @param string $nombreComercial
     * @return Clientes
     */
    public function setNombreComercial($nombreComercial)
    {
        $this->nombreComercial = $nombreComercial;

        return $this;
    }

    /**
     * Get nombreComercial
     *
     * @return string 
     */
    public function getNombreComercial()
    {
        return $this->nombreComercial;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     * @return Clientes
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Clientes
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Clientes
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set enviaMailsSeguimiento
     *
     * @param boolean $enviaMailsSeguimiento
     * @return Clientes
     */
    public function setEnviaMailsSeguimiento($enviaMailsSeguimiento)
    {
        $this->enviaMailsSeguimiento = $enviaMailsSeguimiento;

        return $this;
    }

    /**
     * Get enviaMailsSeguimiento
     *
     * @return boolean 
     */
    public function getEnviaMailsSeguimiento()
    {
        return $this->enviaMailsSeguimiento;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return Clientes
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     * @return Clientes
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Clientes
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
     * Set fechaUltimaCotizacionAprobada
     *
     * @param \DateTime $fechaUltimaCotizacionAprobada
     * @return Clientes
     */
    public function setFechaUltimaCotizacionAprobada($fechaUltimaCotizacionAprobada)
    {
        $this->fechaUltimaCotizacionAprobada = $fechaUltimaCotizacionAprobada;

        return $this;
    }

    /**
     * Get fechaUltimaCotizacionAprobada
     *
     * @return \DateTime 
     */
    public function getFechaUltimaCotizacionAprobada()
    {
        return $this->fechaUltimaCotizacionAprobada;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Clientes
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
     * Set domicilio
     *
     * @param string $domicilio
     * @return Clientes
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Get idcliente
     *
     * @return integer 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idcondicionIva
     *
     * @param \Supromocion\AdminBundle\Entity\CondicionesIva $idcondicionIva
     * @return Clientes
     */
    public function setIdcondicionIva(\Supromocion\AdminBundle\Entity\CondicionesIva $idcondicionIva = null)
    {
        $this->idcondicionIva = $idcondicionIva;

        return $this;
    }

    /**
     * Get idcondicionIva
     *
     * @return \Supromocion\AdminBundle\Entity\CondicionesIva 
     */
    public function getIdcondicionIva()
    {
        return $this->idcondicionIva;
    }

    /**
     * Set idprovincia
     *
     * @param \Supromocion\AdminBundle\Entity\Provincias $idprovincia
     * @return Clientes
     */
    public function setIdprovincia(\Supromocion\AdminBundle\Entity\Provincias $idprovincia = null)
    {
        $this->idprovincia = $idprovincia;

        return $this;
    }

    /**
     * Get idprovincia
     *
     * @return \Supromocion\AdminBundle\Entity\Provincias 
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }
}
