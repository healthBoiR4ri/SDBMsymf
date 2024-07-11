<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaysRepository::class)]
class Pays
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nomPays = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Continent $Continent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPays(): ?string
    {
        return $this->nomPays;
    }

    public function setNomPays(string $nomPays): static
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    public function getContinent(): ?Continent
    {
        return $this->Continent;
    }

    public function setContinent(?Continent $Continent): static
    {
        $this->Continent = $Continent;

        return $this;
    }
}
