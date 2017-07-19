<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="departamento", indexes={@ORM\Index(name="administrador", columns={"administrador"})})
 * @ORM\Entity
 */
class Departamento
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
     * @ORM\Column(name="descripcion", type="string", length=5000, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Administrador
     *
     * @ORM\ManyToOne(targetEntity="Administrador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="administrador", referencedColumnName="codigo")
     * })
     */
    private $administrador;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Docente", inversedBy="codigoDepartamento")
     * @ORM\JoinTable(name="docente_departamento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="codigo_departamento", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="codigo_docente", referencedColumnName="codigo")
     *   }
     * )
     */
    private $codigoDocente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codigoDocente = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Departamento
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Departamento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set administrador
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Administrador $administrador
     * @return Departamento
     */
    public function setAdministrador(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Administrador $administrador = null)
    {
        $this->administrador = $administrador;

        return $this;
    }

    /**
     * Get administrador
     *
     * @return \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Administrador 
     */
    public function getAdministrador()
    {
        return $this->administrador;
    }

    /**
     * Add codigoDocente
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Docente $codigoDocente
     * @return Departamento
     */
    public function addCodigoDocente(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Docente $codigoDocente)
    {
        $this->codigoDocente[] = $codigoDocente;

        return $this;
    }

    /**
     * Remove codigoDocente
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Docente $codigoDocente
     */
    public function removeCodigoDocente(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Docente $codigoDocente)
    {
        $this->codigoDocente->removeElement($codigoDocente);
    }

    /**
     * Get codigoDocente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodigoDocente()
    {
        return $this->codigoDocente;
    }
}
