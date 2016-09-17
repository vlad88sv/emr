<?php

namespace AppBundle\Entity;

/**
 * SysEspecialidades
 */
class SysEspecialidades
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $categoriaSysEspecialidad;

    /**
     * @var boolean
     */
    private $esActivoSysEspecialidad;

    /**
     * @var string
     */
    private $nombreSysEspecialidades;

    /**
     * @var string
     */
    private $descripcionSysEspecialidades;

    /**
     * @var string
     */
    private $codigoSysEspecialidades;

    /**
     * @var \AppBundle\Entity\SysModulos
     */
    private $sysModulosSysModulo;


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
     * Set categoriaSysEspecialidad
     *
     * @param string $categoriaSysEspecialidad
     *
     * @return SysEspecialidades
     */
    public function setCategoriaSysEspecialidad($categoriaSysEspecialidad)
    {
        $this->categoriaSysEspecialidad = $categoriaSysEspecialidad;

        return $this;
    }

    /**
     * Get categoriaSysEspecialidad
     *
     * @return string
     */
    public function getCategoriaSysEspecialidad()
    {
        return $this->categoriaSysEspecialidad;
    }

    /**
     * Set esActivoSysEspecialidad
     *
     * @param boolean $esActivoSysEspecialidad
     *
     * @return SysEspecialidades
     */
    public function setEsActivoSysEspecialidad($esActivoSysEspecialidad)
    {
        $this->esActivoSysEspecialidad = $esActivoSysEspecialidad;

        return $this;
    }

    /**
     * Get esActivoSysEspecialidad
     *
     * @return boolean
     */
    public function getEsActivoSysEspecialidad()
    {
        return $this->esActivoSysEspecialidad;
    }

    /**
     * Set nombreSysEspecialidades
     *
     * @param string $nombreSysEspecialidades
     *
     * @return SysEspecialidades
     */
    public function setNombreSysEspecialidades($nombreSysEspecialidades)
    {
        $this->nombreSysEspecialidades = $nombreSysEspecialidades;

        return $this;
    }

    /**
     * Get nombreSysEspecialidades
     *
     * @return string
     */
    public function getNombreSysEspecialidades()
    {
        return $this->nombreSysEspecialidades;
    }

    /**
     * Set descripcionSysEspecialidades
     *
     * @param string $descripcionSysEspecialidades
     *
     * @return SysEspecialidades
     */
    public function setDescripcionSysEspecialidades($descripcionSysEspecialidades)
    {
        $this->descripcionSysEspecialidades = $descripcionSysEspecialidades;

        return $this;
    }

    /**
     * Get descripcionSysEspecialidades
     *
     * @return string
     */
    public function getDescripcionSysEspecialidades()
    {
        return $this->descripcionSysEspecialidades;
    }

    /**
     * Set codigoSysEspecialidades
     *
     * @param string $codigoSysEspecialidades
     *
     * @return SysEspecialidades
     */
    public function setCodigoSysEspecialidades($codigoSysEspecialidades)
    {
        $this->codigoSysEspecialidades = $codigoSysEspecialidades;

        return $this;
    }

    /**
     * Get codigoSysEspecialidades
     *
     * @return string
     */
    public function getCodigoSysEspecialidades()
    {
        return $this->codigoSysEspecialidades;
    }

    /**
     * Set sysModulosSysModulo
     *
     * @param \AppBundle\Entity\SysModulos $sysModulosSysModulo
     *
     * @return SysEspecialidades
     */
    public function setSysModulosSysModulo(\AppBundle\Entity\SysModulos $sysModulosSysModulo = null)
    {
        $this->sysModulosSysModulo = $sysModulosSysModulo;

        return $this;
    }

    /**
     * Get sysModulosSysModulo
     *
     * @return \AppBundle\Entity\SysModulos
     */
    public function getSysModulosSysModulo()
    {
        return $this->sysModulosSysModulo;
    }
}

