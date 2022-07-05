<?php

namespace App\Entity;

use App\Repository\UniversRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UniversRepository::class)]
class Univers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $universFr;

    #[ORM\Column(type: 'string', length: 255)]
    private $UniversEn;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUniversFr(): ?string
    {
        return $this->universFr;
    }

    public function setUniversFr(string $universFr): self
    {
        $this->universFr = $universFr;

        return $this;
    }

    public function getUniversEn(): ?string
    {
        return $this->UniversEn;
    }

    public function setUniversEn(string $UniversEn): self
    {
        $this->UniversEn = $UniversEn;

        return $this;
    }
}
