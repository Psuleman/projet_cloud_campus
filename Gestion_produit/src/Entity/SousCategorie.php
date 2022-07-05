<?php

namespace App\Entity;

use App\Repository\SousCategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousCategorieRepository::class)]
class SousCategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $sousCategorieFr;

    #[ORM\Column(type: 'string', length: 255)]
    private $sousCategorieEn;

    #[ORM\ManyToOne(targetEntity: Categorie::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSousCategorieFr(): ?string
    {
        return $this->sousCategorieFr;
    }

    public function setSousCategorieFr(string $sousCategorieFr): self
    {
        $this->sousCategorieFr = $sousCategorieFr;

        return $this;
    }

    public function getSousCategorieEn(): ?string
    {
        return $this->sousCategorieEn;
    }

    public function setSousCategorieEn(string $sousCategorieEn): self
    {
        $this->sousCategorieEn = $sousCategorieEn;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
