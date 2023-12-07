<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateRV = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToOne(inversedBy: 'rv')]
    private ?User $patient = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private ?User $laborantin = null;

    #[ORM\Column(length: 255)]
    private ?string $motif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRV(): ?\DateTimeInterface
    {
        return $this->dateRV;
    }

    public function setDateRV($dateRV): static
    {
        if ($dateRV instanceof \DateTimeInterface) {
            $this->dateRV = $dateRV;
        } elseif (is_string($dateRV)) {
            // Assuming the date format is 'Y-m-d H:i:s'
            $this->dateRV = \DateTime::createFromFormat('Y-m-d H:i:s', $dateRV);

            if (!$this->dateRV) {
                throw new \InvalidArgumentException('Invalid date format');
            }
        } else {
            throw new \InvalidArgumentException('Invalid date type');
        }

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): static
    {
        $this->motif = $motif;

        return $this;
    }


    public function getPatient(): ?User
    {
        return $this->patient;
    }

    public function setPatient(?User $patient): static
    {
        $this->patient = $patient;

        return $this;
    }

    public function getLaborantin(): ?User
    {
        return $this->laborantin;
    }

    public function setLaborantin(?User $laborantin): static
    {
        $this->laborantin = $laborantin;

        return $this;
    }

    public function getFormattedDate(): string
    {
        return $this->dateRV->format('Y-m-d H:i:s');
    }

}
