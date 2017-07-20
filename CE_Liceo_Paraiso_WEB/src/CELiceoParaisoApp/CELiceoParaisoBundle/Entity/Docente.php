<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docente
 *
 * @ORM\Table(name="docente")
 * @ORM\Entity
 */
class Docente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=50, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=50, nullable=false)
     */
    private $correo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Departamento", mappedBy="codigoDocente")
     */
    private $codigoDepartamento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codigoDepartamento = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Docente
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Docente
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Docente
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Add codigoDepartamento
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Departamento $codigoDepartamento
     * @return Docente
     */
    public function addCodigoDepartamento(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Departamento $codigoDepartamento)
    {
        $this->codigoDepartamento[] = $codigoDepartamento;

        return $this;
    }

    /**
     * Remove codigoDepartamento
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Departamento $codigoDepartamento
     */
    public function removeCodigoDepartamento(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Departamento $codigoDepartamento)
    {
        $this->codigoDepartamento->removeElement($codigoDepartamento);
    }

    /**
     * Get codigoDepartamento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodigoDepartamento()
    {
        return $this->codigoDepartamento;
    }
}
