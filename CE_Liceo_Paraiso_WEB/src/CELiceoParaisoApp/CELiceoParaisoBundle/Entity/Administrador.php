<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador
 *
 * @ORM\Table(name="administrador", indexes={@ORM\Index(name="codigo_personal", columns={"codigo_personal"})})
 * @ORM\Entity
 */
class Administrador
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
     * @ORM\Column(name="telefono", type="string", length=10, nullable=false)
     */
    private $telefono;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codigo_personal", referencedColumnName="codigo")
     * })
     */
    private $codigoPersonal;



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
     * Set telefono
     *
     * @param string $telefono
     * @return Administrador
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set codigoPersonal
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal $codigoPersonal
     * @return Administrador
     */
    public function setCodigoPersonal(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal $codigoPersonal = null)
    {
        $this->codigoPersonal = $codigoPersonal;

        return $this;
    }

    /**
     * Get codigoPersonal
     *
     * @return \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Personal 
     */
    public function getCodigoPersonal()
    {
        return $this->codigoPersonal;
    }
}
