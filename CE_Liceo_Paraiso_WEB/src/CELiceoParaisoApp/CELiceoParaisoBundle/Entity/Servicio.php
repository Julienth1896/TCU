<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio")
 * @ORM\Entity
 */
class Servicio
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Area", mappedBy="codigoServicio")
     */
    private $codigoArea;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codigoArea = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Servicio
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
     * Add codigoArea
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Area $codigoArea
     * @return Servicio
     */
    public function addCodigoArea(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Area $codigoArea)
    {
        $this->codigoArea[] = $codigoArea;

        return $this;
    }

    /**
     * Remove codigoArea
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Area $codigoArea
     */
    public function removeCodigoArea(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Area $codigoArea)
    {
        $this->codigoArea->removeElement($codigoArea);
    }

    /**
     * Get codigoArea
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodigoArea()
    {
        return $this->codigoArea;
    }
}
