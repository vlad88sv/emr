<?php

namespace AppBundle\Entity;

/**
 * SysUsuarioTieneEspecialidad
 */
class SysUsuarioTieneEspecialidad
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $subCategoriaSysUte;

    /**
     * @var string
     */
    private $descripcionSysUte;

    /**
     * @var boolean
     */
    private $esActivoSysUte;

    /**
     * @var \AppBundle\Entity\SysEspecialidades
     */
    private $sysEspecialidades;

    /**
     * @var \AppBundle\Entity\SysUsuario
     */
    private $sysUsuario;


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
     * Set subCategoriaSysUte
     *
     * @param string $subCategoriaSysUte
     *
     * @return SysUsuarioTieneEspecialidad
     */
    public function setSubCategoriaSysUte($subCategoriaSysUte)
    {
        $this->subCategoriaSysUte = $subCategoriaSysUte;

        return $this;
    }

    /**
     * Get subCategoriaSysUte
     *
     * @return string
     */
    public function getSubCategoriaSysUte()
    {
        return $this->subCategoriaSysUte;
    }

    /**
     * Set descripcionSysUte
     *
     * @param string $descripcionSysUte
     *
     * @return SysUsuarioTieneEspecialidad
     */
    public function setDescripcionSysUte($descripcionSysUte)
    {
        $this->descripcionSysUte = $descripcionSysUte;

        return $this;
    }

    /**
     * Get descripcionSysUte
     *
     * @return string
     */
    public function getDescripcionSysUte()
    {
        return $this->descripcionSysUte;
    }

    /**
     * Set esActivoSysUte
     *
     * @param boolean $esActivoSysUte
     *
     * @return SysUsuarioTieneEspecialidad
     */
    public function setEsActivoSysUte($esActivoSysUte)
    {
        $this->esActivoSysUte = $esActivoSysUte;

        return $this;
    }

    /**
     * Get esActivoSysUte
     *
     * @return boolean
     */
    public function getEsActivoSysUte()
    {
        return $this->esActivoSysUte;
    }

    /**
     * Set sysEspecialidades
     *
     * @param \AppBundle\Entity\SysEspecialidades $sysEspecialidades
     *
     * @return SysUsuarioTieneEspecialidad
     */
    public function setSysEspecialidades(\AppBundle\Entity\SysEspecialidades $sysEspecialidades = null)
    {
        $this->sysEspecialidades = $sysEspecialidades;

        return $this;
    }

    /**
     * Get sysEspecialidades
     *
     * @return \AppBundle\Entity\SysEspecialidades
     */
    public function getSysEspecialidades()
    {
        return $this->sysEspecialidades;
    }

    /**
     * Set sysUsuario
     *
     * @param \AppBundle\Entity\SysUsuario $sysUsuario
     *
     * @return SysUsuarioTieneEspecialidad
     */
    public function setSysUsuario(\AppBundle\Entity\SysUsuario $sysUsuario = null)
    {
        $this->sysUsuario = $sysUsuario;

        return $this;
    }

    /**
     * Get sysUsuario
     *
     * @return \AppBundle\Entity\SysUsuario
     */
    public function getSysUsuario()
    {
        return $this->sysUsuario;
    }
}

