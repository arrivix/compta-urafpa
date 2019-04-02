<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneBudgetTypeRepository")
 */
class LigneBudgetType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Nom;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $ExceptionRules = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $AlertRules = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $WarningRules = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $HelpRules = [];

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\LigneBudget", mappedBy="LigneBudgetType")
     */
    private $lignebudgetrelated;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $ShortType;

    public function __construct()
    {
        $this->lignebudgetrelated = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getExceptionRules(): ?array
    {
        return $this->ExceptionRules;
    }

    public function setExceptionRules(?array $ExceptionRules): self
    {
        $this->ExceptionRules = $ExceptionRules;

        return $this;
    }

    public function getAlertRules(): ?array
    {
        return $this->AlertRules;
    }

    public function setAlertRules(?array $AlertRules): self
    {
        $this->AlertRules = $AlertRules;

        return $this;
    }

    public function getWarningRules(): ?array
    {
        return $this->WarningRules;
    }

    public function setWarningRules(?array $WarningRules): self
    {
        $this->WarningRules = $WarningRules;

        return $this;
    }

    public function getHelpRules(): ?array
    {
        return $this->HelpRules;
    }

    public function setHelpRules(?array $HelpRules): self
    {
        $this->HelpRules = $HelpRules;

        return $this;
    }

    /**
     * @return Collection|LigneBudget[]
     */
    public function getLignebudgetrelated(): Collection
    {
        return $this->lignebudgetrelated;
    }

    public function addLignebudgetrelated(LigneBudget $lignebudgetrelated): self
    {
        if (!$this->lignebudgetrelated->contains($lignebudgetrelated)) {
            $this->lignebudgetrelated[] = $lignebudgetrelated;
            $lignebudgetrelated->addLigneBudgetType($this);
        }

        return $this;
    }

    public function removeLignebudgetrelated(LigneBudget $lignebudgetrelated): self
    {
        if ($this->lignebudgetrelated->contains($lignebudgetrelated)) {
            $this->lignebudgetrelated->removeElement($lignebudgetrelated);
            $lignebudgetrelated->removeLigneBudgetType($this);
        }

        return $this;
    }

    public function getShortType(): ?string
    {
        return $this->ShortType;
    }

    public function setShortType(string $ShortType): self
    {
        $this->ShortType = $ShortType;

        return $this;
    }
	public function __toString() 
	{
		return (string) $this->Nom;
	}

}
