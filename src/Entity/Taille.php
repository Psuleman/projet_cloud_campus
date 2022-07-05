<?php

namespace App\Entity;

use App\Repository\TailleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TailleRepository::class)]
class Taille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $taille;

    #[ORM\ManyToOne(targetEntity: GrilleTaille::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $grilleTaille;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getGrilleTaille(): ?GrilleTaille
    {
        return $this->grilleTaille;
    }

    public function setGrilleTaille(?GrilleTaille $grilleTaille): self
    {
        $this->grilleTaille = $grilleTaille;

        return $this;
    }
}
