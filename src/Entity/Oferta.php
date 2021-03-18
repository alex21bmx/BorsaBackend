<?php

namespace App\Entity;

use App\Repository\OfertaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OfertaRepository::class)
 */
class Oferta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titol;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcio;

    /**
     * @ORM\Column(type="date")
     */
    private $data;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ubicacio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estat;

    /**
     * @ORM\ManyToOne(targetEntity=Categoria::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $categoria;

    /**
     * @ORM\ManyToOne(targetEntity=Empresa::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $empresa;

    /**
     * @ORM\ManyToMany(targetEntity=Candidat::class)
     */
    private $candidats;

    public function __construct()
    {
        $this->candidats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitol(): ?string
    {
        return $this->titol;
    }

    public function setTitol(string $titol): self
    {
        $this->titol = $titol;

        return $this;
    }

    public function getDescripcio(): ?string
    {
        return $this->descripcio;
    }

    public function setDescripcio(string $descripcio): self
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getUbicacio(): ?string
    {
        return $this->ubicacio;
    }

    public function setUbicacio(string $ubicacio): self
    {
        $this->ubicacio = $ubicacio;

        return $this;
    }

    public function getEstat(): ?string
    {
        return $this->estat;
    }

    public function setEstat(string $estat): self
    {
        $this->estat = $estat;

        return $this;
    }

    public function getCategoria(): ?categoria
    {
        return $this->categoria;
    }

    public function setCategoria(?categoria $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getEmpresa(): ?empresa
    {
        return $this->empresa;
    }

    public function setEmpresa(?empresa $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * @return Collection|candidat[]
     */
    public function getCandidats(): Collection
    {
        return $this->candidats;
    }

    public function addCandidat(candidat $candidat): self
    {
        if (!$this->candidats->contains($candidat)) {
            $this->candidats[] = $candidat;
        }

        return $this;
    }

    public function removeCandidat(candidat $candidat): self
    {
        $this->candidats->removeElement($candidat);

        return $this;
    }
}
