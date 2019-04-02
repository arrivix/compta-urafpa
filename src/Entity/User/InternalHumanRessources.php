<?php

namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\User\InternalHumanRessourcesRepository")
 */
class InternalHumanRessources
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $TimeDedicatedTo;

    /**
     * @ORM\Column(type="date")
     */
    private $BeginDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $endDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $AdministrativeValidation;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateValidation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimeDedicatedTo(): ?float
    {
        return $this->TimeDedicatedTo;
    }

    public function setTimeDedicatedTo(float $TimeDedicatedTo): self
    {
        $this->TimeDedicatedTo = $TimeDedicatedTo;

        return $this;
    }

    public function getBeginDate(): ?\DateTimeInterface
    {
        return $this->BeginDate;
    }

    public function setBeginDate(\DateTimeInterface $BeginDate): self
    {
        $this->BeginDate = $BeginDate;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getAdministrativeValidation(): ?bool
    {
        return $this->AdministrativeValidation;
    }

    public function setAdministrativeValidation(bool $AdministrativeValidation): self
    {
        $this->AdministrativeValidation = $AdministrativeValidation;

        return $this;
    }

    public function getDateValidation(): ?\DateTimeInterface
    {
        return $this->DateValidation;
    }

    public function setDateValidation(?\DateTimeInterface $DateValidation): self
    {
        $this->DateValidation = $DateValidation;

        return $this;
    }
}
