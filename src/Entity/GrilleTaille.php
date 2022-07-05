<?php

namespace App\Entity;

use App\Repository\GrilleTailleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GrilleTailleRepository::class)]
class GrilleTaille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $grilleTaille;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrilleTaille(): ?string
    {
        return $this->grilleTaille;
    }

    public function setGrilleTaille(string $grilleTaille): self
    {
        $this->grilleTaille = $grilleTaille;

        return $this;
    }
}
