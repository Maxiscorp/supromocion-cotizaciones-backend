<?php

namespace Supromocion\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mails
 */
class Mails
{
    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $cc;

    /**
     * @var string
     */
    private $to;

    /**
     * @var string
     */
    private $asunto;

    /**
     * @var string
     */
    private $cuerpo;

    /**
     * @var integer
     */
    private $idmail;


    /**
     * Set from
     *
     * @param string $from
     * @return Mails
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return string 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set cc
     *
     * @param string $cc
     * @return Mails
     */
    public function setCc($cc)
    {
        $this->cc = $cc;

        return $this;
    }

    /**
     * Get cc
     *
     * @return string 
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set to
     *
     * @param string $to
     * @return Mails
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return string 
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     * @return Mails
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set cuerpo
     *
     * @param string $cuerpo
     * @return Mails
     */
    public function setCuerpo($cuerpo)
    {
        $this->cuerpo = $cuerpo;

        return $this;
    }

    /**
     * Get cuerpo
     *
     * @return string 
     */
    public function getCuerpo()
    {
        return $this->cuerpo;
    }

    /**
     * Get idmail
     *
     * @return integer 
     */
    public function getIdmail()
    {
        return $this->idmail;
    }
}
