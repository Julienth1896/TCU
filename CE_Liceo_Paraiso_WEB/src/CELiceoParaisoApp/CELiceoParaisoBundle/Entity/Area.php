<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="area", uniqueConstraints={@ORM\UniqueConstraint(name="nombre", columns={"nombre"})}, indexes={@ORM\Index(name="institucion", columns={"institucion", "administrador"}), @ORM\Index(name="FK_administrador_area", columns={"administrador"}), @ORM\Index(name="IDX_D7943D68F751F7C3", columns={"institucion"})})
 * @ORM\Entity
 */
class Area
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
     * @ORM\Column(name="descripcion", type="string", length=3000, nullable=false)
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
     * @ORM\ManyToMany(targetEntity="Departamento", inversedBy="area")
     * @ORM\JoinTable(name="area_departamento",
     *   joinColumns={
     *     @ORM\JoinColumn(name="area", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="departamento", referencedColumnName="codigo")
     *   }
     * )
     */
    private $departamento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Servicio", inversedBy="codigoArea")
     * @ORM\JoinTable(name="servicio_area",
     *   joinColumns={
     *     @ORM\JoinColumn(name="codigo_area", referencedColumnName="codigo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="codigo_servicio", referencedColumnName="codigo")
     *   }
     * )
     */
    private $codigoServicio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departamento = new \Doctrine\Common\Collections\ArrayCollection();
        $this->codigoServicio = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Area
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
     * @return Area
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
     * @return Area
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
     * Set institucion
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Institucion $institucion
     * @return Area
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
     * Add departamento
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Departamento $departamento
     * @return Area
     */
    public function addDepartamento(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Departamento $departamento)
    {
        $this->departamento[] = $departamento;

        return $this;
    }

    /**
     * Remove departamento
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Departamento $departamento
     */
    public function removeDepartamento(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Departamento $departamento)
    {
        $this->departamento->removeElement($departamento);
    }

    /**
     * Get departamento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Add codigoServicio
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Servicio $codigoServicio
     * @return Area
     */
    public function addCodigoServicio(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Servicio $codigoServicio)
    {
        $this->codigoServicio[] = $codigoServicio;

        return $this;
    }

    /**
     * Remove codigoServicio
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Servicio $codigoServicio
     */
    public function removeCodigoServicio(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Servicio $codigoServicio)
    {
        $this->codigoServicio->removeElement($codigoServicio);
    }

    /**
     * Get codigoServicio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodigoServicio()
    {
        return $this->codigoServicio;
    }
}
