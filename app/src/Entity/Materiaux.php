<?php

namespace App\Entity;

use App\Repository\MateriauxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MateriauxRepository::class)]
class Materiaux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $libelleCour = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $type = null;

    #[ORM\Column(length: 255)]
    private ?string $avertissement = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 4, nullable: true)]
    private ?string $pm = null;

    #[ORM\Column]
    private ?int $ordre = null;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $flagEtat = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateModAt = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLibelleCour(): ?string
    {
        return $this->libelleCour;
    }

    public function setLibelleCour(string $libelleCour): static
    {
        $this->libelleCour = $libelleCour;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getAvertissement(): ?string
    {
        return $this->avertissement;
    }

    public function setAvertissement(string $avertissement): static
    {
        $this->avertissement = $avertissement;

        return $this;
    }

    public function getPm(): ?string
    {
        return $this->pm;
    }

    public function setPm(?string $pm): static
    {
        $this->pm = $pm;

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

    public function getDateAt(): ?\DateTimeImmutable
    {
        return $this->dateAt;
    }

    public function setDateAt(\DateTimeImmutable $dateAt): static
    {
        $this->dateAt = $dateAt;

        return $this;
    }

    public function getDateModAt(): ?\DateTimeImmutable
    {
        return $this->dateModAt;
    }

    public function setDateModAt(\DateTimeImmutable $dateModAt): static
    {
        $this->dateModAt = $dateModAt;

        return $this;
    }
}
