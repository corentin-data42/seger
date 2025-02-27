<?php

namespace App\Entity;

use App\Repository\OxydeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OxydeRepository::class)]
class Oxyde
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $formule = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 4)]
    private ?string $pm = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $colonne = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $ordre = null;

    #[ORM\Column(options: ["default" => false])]   
    private ?bool $flagEtat = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $creationAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $modificationAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormule(): ?string
    {
        return $this->formule;
    }

    public function setFormule(string $formule): static
    {
        $this->formule = $formule;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getPm(): ?string
    {
        return $this->pm;
    }

    public function setPm(string $pm): static
    {
        $this->pm = $pm;

        return $this;
    }

    public function getColonne(): ?int
    {
        return $this->colonne;
    }

    public function setColonne(int $colonne): static
    {
        $this->colonne = $colonne;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(int $ordre): static
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function isFlagEtat(): ?bool
    {
        return $this->flagEtat;
    }

    public function setFlagEtat(bool $flagEtat): static
    {
        $this->flagEtat = $flagEtat;

        return $this;
    }

    public function getCreationAt(): ?\DateTimeImmutable
    {
        return $this->creationAt;
    }

    public function setCreationAt(\DateTimeImmutable $creationAt): static
    {
        $this->creationAt = $creationAt;

        return $this;
    }

    public function getModificationAt(): ?\DateTimeImmutable
    {
        return $this->modificationAt;
    }

    public function setModificationAt(\DateTimeImmutable $modificationAt): static
    {
        $this->modificationAt = $modificationAt;

        return $this;
    }
}
