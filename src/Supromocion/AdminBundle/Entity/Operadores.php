<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operadores
 */
class Operadores
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $usuario;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $email;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idoperador;

    /**
     * @var \Supromocion\AdminBundle\Entity\OperadoresTipos
     */
    private $idoperadorTipo;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Operadores
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
     * Set apellido
     *
     * @param string $apellido
     * @return Operadores
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     * @return Operadores
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Operadores
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Operadores
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
     * Set activo
     *
     * @param boolean $activo
     * @return Operadores
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
     * Get idoperador
     *
     * @return integer 
     */
    public function getIdoperador()
    {
        return $this->idoperador;
    }

    /**
     * Set idoperadorTipo
     *
     * @param \Supromocion\AdminBundle\Entity\OperadoresTipos $idoperadorTipo
     * @return Operadores
     */
    public function setIdoperadorTipo(\Supromocion\AdminBundle\Entity\OperadoresTipos $idoperadorTipo = null)
    {
        $this->idoperadorTipo = $idoperadorTipo;

        return $this;
    }

    /**
     * Get idoperadorTipo
     *
     * @return \Supromocion\AdminBundle\Entity\OperadoresTipos 
     */
    public function getIdoperadorTipo()
    {
        return $this->idoperadorTipo;
    }
}
