<?php

namespace App\Entity;

use App\Repository\ProduitEntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitEntrepriseRepository::class)]
class ProduitEntreprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $sku;

    #[ORM\Column(type: 'date')]
    private $dateArrivee;

    #[ORM\Column(type: 'date')]
    private $dateAjout;

    #[ORM\Column(type: 'string', length: 255)]
    private $modeAcquisition;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomProduitFr;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomProduitEn;

    #[ORM\Column(type: 'string', length: 255)]
    private $descriptionFr;

    #[ORM\Column(type: 'string', length: 255)]
    private $descriptionEn;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $coupe;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $entretien;

    #[ORM\Column(type: 'string', length: 255)]
    private $couleur;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $TailleMannequin;

    #[ORM\Column(type: 'integer')]
    private $quantiteStock;

    #[ORM\ManyToOne(targetEntity: SousCategorie::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $sousCategorie;

    #[ORM\ManyToOne(targetEntity: Univers::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $Univers;

    #[ORM\ManyToOne(targetEntity: Taille::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $taille;

    #[ORM\Column(type: 'string', length: 255)]
    private $matiere1;

    #[ORM\Column(type: 'integer')]
    private $pourcentageMatiere1;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $matiere2;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $pourcentageMatiere2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSku(): ?int
    {
        return $this->sku;
    }

    public function setSku(int $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(\DateTimeInterface $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->dateAjout;
    }

    public function setDateAjout(\DateTimeInterface $dateAjout): self
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    public function getModeAcquisition(): ?string
    {
        return $this->modeAcquisition;
    }

    public function setModeAcquisition(string $modeAcquisition): self
    {
        $this->modeAcquisition = $modeAcquisition;

        return $this;
    }

    public function getNomProduitFr(): ?string
    {
        return $this->nomProduitFr;
    }

    public function setNomProduitFr(string $nomProduitFr): self
    {
        $this->nomProduitFr = $nomProduitFr;

        return $this;
    }

    public function getNomProduitEn(): ?string
    {
        return $this->nomProduitEn;
    }

    public function setNomProduitEn(string $nomProduitEn): self
    {
        $this->nomProduitEn = $nomProduitEn;

        return $this;
    }

    public function getDescriptionFr(): ?string
    {
        return $this->descriptionFr;
    }

    public function setDescriptionFr(string $descriptionFr): self
    {
        $this->descriptionFr = $descriptionFr;

        return $this;
    }

    public function getDescriptionEn(): ?string
    {
        return $this->descriptionEn;
    }

    public function setDescriptionEn(string $descriptionEn): self
    {
        $this->descriptionEn = $descriptionEn;

        return $this;
    }

    public function getCoupe(): ?string
    {
        return $this->coupe;
    }

    public function setCoupe(?string $coupe): self
    {
        $this->coupe = $coupe;

        return $this;
    }

    public function getEntretien(): ?string
    {
        return $this->entretien;
    }

    public function setEntretien(?string $entretien): self
    {
        $this->entretien = $entretien;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getTailleMannequin(): ?string
    {
        return $this->TailleMannequin;
    }

    public function setTailleMannequin(?string $TailleMannequin): self
    {
        $this->TailleMannequin = $TailleMannequin;

        return $this;
    }

    public function getQuantiteStock(): ?int
    {
        return $this->quantiteStock;
    }

    public function setQuantiteStock(int $quantiteStock): self
    {
        $this->quantiteStock = $quantiteStock;

        return $this;
    }

    public function getSousCategorie(): ?SousCategorie
    {
        return $this->sousCategorie;
    }

    public function setSousCategorie(?SousCategorie $sousCategorie): self
    {
        $this->sousCategorie = $sousCategorie;

        return $this;
    }

    public function getUnivers(): ?Univers
    {
        return $this->Univers;
    }

    public function setUnivers(?Univers $Univers): self
    {
        $this->Univers = $Univers;

        return $this;
    }

    public function getTaille(): ?Taille
    {
        return $this->taille;
    }

    public function setTaille(?Taille $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getMatiere1(): ?string
    {
        return $this->matiere1;
    }

    public function setMatiere1(string $matiere1): self
    {
        $this->matiere1 = $matiere1;

        return $this;
    }

    public function getPourcentageMatiere1(): ?int
    {
        return $this->pourcentageMatiere1;
    }

    public function setPourcentageMatiere1(int $pourcentageMatiere1): self
    {
        $this->pourcentageMatiere1 = $pourcentageMatiere1;

        return $this;
    }

    public function getMatiere2(): ?string
    {
        return $this->matiere2;
    }

    public function setMatiere2(?string $matiere2): self
    {
        $this->matiere2 = $matiere2;

        return $this;
    }

    public function getPourcentageMatiere2(): ?int
    {
        return $this->pourcentageMatiere2;
    }

    public function setPourcentageMatiere2(?int $pourcentageMatiere2): self
    {
        $this->pourcentageMatiere2 = $pourcentageMatiere2;

        return $this;
    }
}
