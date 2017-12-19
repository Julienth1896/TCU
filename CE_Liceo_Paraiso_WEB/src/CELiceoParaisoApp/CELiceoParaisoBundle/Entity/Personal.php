<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personal
 *
 * @ORM\Table(name="personal")
 * @ORM\Entity
 */
class Personal
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
     * @ORM\Column(name="correo", type="string", length=50, nullable=true)
     */
    private $correo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Area", mappedBy="personal")
     */
    private $area;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Comite", mappedBy="personal")
     */
    private $comite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Departamento", mappedBy="codigoPersonal")
     */
    private $codigoDepartamento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->area = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comite = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Personal
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
     * @return Personal
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
     * @return Personal
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
     * Add area
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Area $area
     * @return Personal
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
     * Add comite
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Comite $comite
     * @return Personal
     */
    public function addComite(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Comite $comite)
    {
        $this->comite[] = $comite;

        return $this;
    }

    /**
     * Remove comite
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Comite $comite
     */
    public function removeComite(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Comite $comite)
    {
        $this->comite->removeElement($comite);
    }

    /**
     * Get comite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComite()
    {
        return $this->comite;
    }

    /**
     * Add codigoDepartamento
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Departamento $codigoDepartamento
     * @return Personal
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
