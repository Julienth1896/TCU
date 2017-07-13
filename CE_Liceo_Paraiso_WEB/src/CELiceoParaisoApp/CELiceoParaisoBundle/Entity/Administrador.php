<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador
 *
 * @ORM\Table(name="administrador", indexes={@ORM\Index(name="tipo_administrador", columns={"tipo_administrador"})})
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
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="primer_apellido", type="string", length=30, nullable=false)
     */
    private $primerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="segundo_apellido", type="string", length=30, nullable=false)
     */
    private $segundoApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=10, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="corrreo", type="string", length=40, nullable=false)
     */
    private $corrreo;

    /**
     * @var \TipoAdministrador
     *
     * @ORM\ManyToOne(targetEntity="TipoAdministrador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_administrador", referencedColumnName="codigo")
     * })
     */
    private $tipoAdministrador;



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
     * @return Administrador
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
     * Set primerApellido
     *
     * @param string $primerApellido
     * @return Administrador
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get primerApellido
     *
     * @return string 
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set segundoApellido
     *
     * @param string $segundoApellido
     * @return Administrador
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get segundoApellido
     *
     * @return string 
     */
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
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
     * Set corrreo
     *
     * @param string $corrreo
     * @return Administrador
     */
    public function setCorrreo($corrreo)
    {
        $this->corrreo = $corrreo;

        return $this;
    }

    /**
     * Get corrreo
     *
     * @return string 
     */
    public function getCorrreo()
    {
        return $this->corrreo;
    }

    /**
     * Set tipoAdministrador
     *
     * @param \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\TipoAdministrador $tipoAdministrador
     * @return Administrador
     */
    public function setTipoAdministrador(\CELiceoParaisoApp\CELiceoParaisoBundle\Entity\TipoAdministrador $tipoAdministrador = null)
    {
        $this->tipoAdministrador = $tipoAdministrador;

        return $this;
    }

    /**
     * Get tipoAdministrador
     *
     * @return \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\TipoAdministrador 
     */
    public function getTipoAdministrador()
    {
        return $this->tipoAdministrador;
    }
}
