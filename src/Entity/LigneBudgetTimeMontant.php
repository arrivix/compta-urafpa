<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneBudgetTimeMontantRepository")
 */
class LigneBudgetTimeMontant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $Montant;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Annee")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Annee;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $BeginDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $AnneeBeginDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $EndDate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $AnneeEndDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LigneBudget", inversedBy="TimeMontant")
     * @ORM\JoinColumn(nullable=false)
     */
    private $LigneBudget;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant()
    {
        return $this->Montant;
    }

    public function setMontant($Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getAnnee(): ?Annee
    {
        return $this->Annee;
    }

    public function setAnnee(?Annee $Annee): self
    {
        $this->Annee = $Annee;

        return $this;
    }

    public function getBeginDate(): ?\DateTimeInterface
    {
        return $this->BeginDate;
    }

    public function setBeginDate(?\DateTimeInterface $BeginDate): self
    {
        $this->BeginDate = $BeginDate;

        return $this;
    }

    public function getAnneeBeginDate(): ?bool
    {
        return $this->AnneeBeginDate;
    }

    public function setAnneeBeginDate(bool $AnneeBeginDate): self
    {
        $this->AnneeBeginDate = $AnneeBeginDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->EndDate;
    }

    public function setEndDate(?\DateTimeInterface $EndDate): self
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    public function getAnneeEndDate(): ?bool
    {
        return $this->AnneeEndDate;
    }

    public function setAnneeEndDate(?bool $AnneeEndDate): self
    {
        $this->AnneeEndDate = $AnneeEndDate;

        return $this;
    }

    public function getLigneBudget(): ?LigneBudget
    {
        return $this->LigneBudget;
    }

    public function setLigneBudget(?LigneBudget $LigneBudget): self
    {
        $this->LigneBudget = $LigneBudget;

        return $this;
    }
}
