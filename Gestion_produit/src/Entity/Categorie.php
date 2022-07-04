<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $categorieFr;

    #[ORM\Column(type: 'string', length: 255)]
    private $categorieEn;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorieFr(): ?string
    {
        return $this->categorieFr;
    }

    public function setCategorieFr(string $categorieFr): self
    {
        $this->categorieFr = $categorieFr;

        return $this;
    }

    public function getCategorieEn(): ?string
    {
        return $this->categorieEn;
    }

    public function setCategorieEn(string $categorieEn): self
    {
        $this->categorieEn = $categorieEn;

        return $this;
    }
}
