<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class Creneau
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateRV = null;

    public function getId(): ?int
    {
        return $this->id;
    }
cd     public function getDateRV(): ?\DateTimeInterface
    {
        return $this->dateRV;
    }
    public function getFormattedDate(): string
    {
        return $this->dateRV->format('Y-m-d H:i:s');
    }

    public function setDateRV(\DateTimeInterface $dateRV): static
    {
        $this->dateRV = $dateRV;

        return $this;
    }
}
