<?php

namespace AppBundle\Entity;

/**
 * SysPais
 */
class SysPais
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreSysPais;

    /**
     * @var string
     */
    private $prefijoSysPais;

    /**
     * @var integer
     */
    private $codigoPostalSysPais;

    /**
     * @var string
     */
    private $contientePaisSysPais;

    /**
     * @var integer
     */
    private $estadoSysPais;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreSysPais
     *
     * @param string $nombreSysPais
     *
     * @return SysPais
     */
    public function setNombreSysPais($nombreSysPais)
    {
        $this->nombreSysPais = $nombreSysPais;

        return $this;
    }

    /**
     * Get nombreSysPais
     *
     * @return string
     */
    public function getNombreSysPais()
    {
        return $this->nombreSysPais;
    }

    /**
     * Set prefijoSysPais
     *
     * @param string $prefijoSysPais
     *
     * @return SysPais
     */
    public function setPrefijoSysPais($prefijoSysPais)
    {
        $this->prefijoSysPais = $prefijoSysPais;

        return $this;
    }

    /**
     * Get prefijoSysPais
     *
     * @return string
     */
    public function getPrefijoSysPais()
    {
        return $this->prefijoSysPais;
    }

    /**
     * Set codigoPostalSysPais
     *
     * @param integer $codigoPostalSysPais
     *
     * @return SysPais
     */
    public function setCodigoPostalSysPais($codigoPostalSysPais)
    {
        $this->codigoPostalSysPais = $codigoPostalSysPais;

        return $this;
    }

    /**
     * Get codigoPostalSysPais
     *
     * @return integer
     */
    public function getCodigoPostalSysPais()
    {
        return $this->codigoPostalSysPais;
    }

    /**
     * Set contientePaisSysPais
     *
     * @param string $contientePaisSysPais
     *
     * @return SysPais
     */
    public function setContientePaisSysPais($contientePaisSysPais)
    {
        $this->contientePaisSysPais = $contientePaisSysPais;

        return $this;
    }

    /**
     * Get contientePaisSysPais
     *
     * @return string
     */
    public function getContientePaisSysPais()
    {
        return $this->contientePaisSysPais;
    }

    /**
     * Set estadoSysPais
     *
     * @param integer $estadoSysPais
     *
     * @return SysPais
     */
    public function setEstadoSysPais($estadoSysPais)
    {
        $this->estadoSysPais = $estadoSysPais;

        return $this;
    }

    /**
     * Get estadoSysPais
     *
     * @return integer
     */
    public function getEstadoSysPais()
    {
        return $this->estadoSysPais;
    }
}

