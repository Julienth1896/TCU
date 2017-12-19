<?php

namespace CELiceoParaisoApp\CELiceoParaisoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GestorArchivos
 *
 * @ORM\Table(name="gestor_archivos")
 * @ORM\Entity
 */
class GestorArchivos
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
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="docente", type="integer", nullable=false)
     */
    private $docente;

    /**
     * @var integer
     *
     * @ORM\Column(name="departamento", type="integer", nullable=false)
     */
    private $departamento;



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
     * @return GestorArchivos
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
     * Set docente
     *
     * @param integer $docente
     * @return GestorArchivos
     */
    public function setDocente($docente)
    {
        $this->docente = $docente;

        return $this;
    }

    /**
     * Get docente
     *
     * @return integer 
     */
    public function getDocente()
    {
        return $this->docente;
    }

    /**
     * Set departamento
     *
     * @param integer $departamento
     * @return GestorArchivos
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return integer 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
}
