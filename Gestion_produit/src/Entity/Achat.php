<?php

namespace App\Entity;

use App\Repository\AchatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AchatRepository::class)]
class Achat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\Column(type: 'date')]
    private $dateAchat;

    #[ORM\Column(type: 'integer')]
    private $quantite;

    #[ORM\Column(type: 'boolean')]
    private $expedier;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateExpedition;

    #[ORM\Column(type: 'string', length: 255)]
    private $statutAchat;

    #[ORM\ManyToOne(targetEntity: ProduitEntreprise::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $produit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function isExpedier(): ?bool
    {
        return $this->expedier;
    }

    public function setExpedier(bool $expedier): self
    {
        $this->expedier = $expedier;

        return $this;
    }

    public function getDateExpedition(): ?\DateTimeInterface
    {
        return $this->dateExpedition;
    }

    public function setDateExpedition(?\DateTimeInterface $dateExpedition): self
    {
        $this->dateExpedition = $dateExpedition;

        return $this;
    }

    public function getStatutAchat(): ?string
    {
        return $this->statutAchat;
    }

    public function setStatutAchat(string $statutAchat): self
    {
        $this->statutAchat = $statutAchat;

        return $this;
    }

    public function getProduit(): ?ProjetEntreprise
    {
        return $this->produit;
    }

    public function setProduit(?ProjetEntreprise $produit): self
    {
        $this->produit = $produit;

        return $this;
    }
}
