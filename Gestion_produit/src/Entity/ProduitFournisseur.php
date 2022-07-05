<?php

namespace App\Entity;

use App\Repository\ProduitFournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitFournisseurRepository::class)]
class ProduitFournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $referenceProduit;

    #[ORM\Column(type: 'integer')]
    private $anneeSortie;

    #[ORM\Column(type: 'string', length: 255)]
    private $taille;

    #[ORM\ManyToOne(targetEntity: Saison::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $saison;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferenceProduit(): ?string
    {
        return $this->referenceProduit;
    }

    public function setReferenceProduit(string $referenceProduit): self
    {
        $this->referenceProduit = $referenceProduit;

        return $this;
    }

    public function getAnneeSortie(): ?int
    {
        return $this->anneeSortie;
    }

    public function setAnneeSortie(int $anneeSortie): self
    {
        $this->anneeSortie = $anneeSortie;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getSaison(): ?Saison
    {
        return $this->saison;
    }

    public function setSaison(?Saison $saison): self
    {
        $this->saison = $saison;

        return $this;
    }
}
