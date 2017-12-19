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
     * @ORM\ManyToMany(targetEntity="Area", mappedBy="departamento")
     */
    private $area;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personal", inversedBy="codigoDepartamento")
     * @ORM\JoinTable(name="personal_departamento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="codigo_departamento", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="codigo_personal", referencedColumnName="codigo")
     *   }
     * )
     */
    private $codigoPersonal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->area = new \Doctrine\Common\Collections\ArrayCollection();
        $this->codigoPersonal = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add area
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Area $area
     * @return Departamento
     */
    public function addArea(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Area $area)
    {
        $this->area[] = $area;

        return $this;
    }

    /**
     * Remove area
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Area $area
     */
    public function removeArea(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Area $area)
    {
        $this->area->removeElement($area);
    }

    /**
     * Get area
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Add codigoPersonal
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal $codigoPersonal
     * @return Departamento
     */
    public function addCodigoPersonal(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal $codigoPersonal)
    {
        $this->codigoPersonal[] = $codigoPersonal;

        return $this;
    }

    /**
     * Remove codigoPersonal
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal $codigoPersonal
     */
    public function removeCodigoPersonal(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal $codigoPersonal)
    {
        $this->codigoPersonal->removeElement($codigoPersonal);
    }

    /**
     * Get codigoPersonal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodigoPersonal()
    {
        return $this->codigoPersonal;
    }
}
