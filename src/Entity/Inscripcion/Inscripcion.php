<?php

namespace App\Entity\Inscripcion;

use App\Entity\Persona\Persona;
use App\Entity\Curso\Curso;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InscripcionRepository")
 */
class Inscripcion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Curso\Curso", inversedBy="inscripciones")
     * @ORM\OrderBy({"nombre": "ASC"})
     * @var Curso
     */
    private $curso;

    /*
     * @ORM\ManyToOne(targetEntity="App\Entity\Inscripcion\Estado")
     * @var Estado
     */
    private $estado;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $fechaAlta;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $fechaBaja;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Persona\Persona", inversedBy="inscripciones")
     * @ORM\OrderBy({"lastName": "ASC"})
     * @var Persona
     */
    private $persona;


    public function getId(): int
    {
        return $this->id;
    }

    public function getCurso(): Curso
    {
        return $this->curso;
    }

    public function setCurso(Curso $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    public function getEstado(): Estado
    {
        return $this->estado;
    }

    public function setEstado(Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFechaAlta(): \DateTime
    {
        return $this->fechaAlta;
    }

    public function setFechaAlta(\DateTime $fechaAlta): self
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    public function getFechaBaja(): \DateTime
    {
        return $this->fechaBaja;
    }

    public function setFechaBaja(\DateTime $fechaBaja): self
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    public function getPersona(): Persona
    {
        return $this->persona;
    }

    public function setPersona(Persona $persona): self
    {
        $this->persona = $persona;

        return $this;
    }
}
