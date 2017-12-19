<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comite
 *
 * @ORM\Table(name="comite", indexes={@ORM\Index(name="institucion", columns={"institucion"})})
 * @ORM\Entity
 */
class Comite
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
     * @ORM\Column(name="nombre", type="string", length=30, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=5000, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=10, nullable=false)
     */
    private $estado;

    /**
     * @var \Institucion
     *
     * @ORM\ManyToOne(targetEntity="Institucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="institucion", referencedColumnName="codigo")
     * })
     */
    private $institucion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personal", inversedBy="comite")
     * @ORM\JoinTable(name="personal_comite",
     *   joinColumns={
     *     @ORM\JoinColumn(name="comite", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="personal", referencedColumnName="codigo")
     *   }
     * )
     */
    private $personal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personal = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Comite
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
     * @return Comite
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
     * Set estado
     *
     * @param string $estado
     * @return Comite
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set institucion
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Institucion $institucion
     * @return Comite
     */
    public function setInstitucion(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Institucion $institucion = null)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion
     *
     * @return \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Institucion 
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Add personal
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal $personal
     * @return Comite
     */
    public function addPersonal(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal $personal)
    {
        $this->personal[] = $personal;

        return $this;
    }

    /**
     * Remove personal
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal $personal
     */
    public function removePersonal(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal $personal)
    {
        $this->personal->removeElement($personal);
    }

    /**
     * Get personal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonal()
    {
        return $this->personal;
    }
}
