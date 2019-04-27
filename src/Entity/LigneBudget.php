<?php
/** @Entity */
namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\LigneBudgetRepository")
 */
class LigneBudget
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
	/**
     * @ORM\Column(type="string", length=40)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $Description;
	
	/**
     * @ORM\Column(type="datetime")
     */
	private $Create_time;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_ouverture;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date_fin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Create_user;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Modification_user;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Modification_date;

	/**
     * @ORM\ManyToMany(targetEntity="App\Entity\Annee", inversedBy="LignAn")
     * @ORM\JoinTable(name="annee_ligne_budget")
     */
    private $AnLigneBudget;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\LaboratoryProject", inversedBy="lignLabpro")
     */
    private $LaboratoryProject;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LigneBudgetTimeMontant", mappedBy="LigneBudget", orphanRemoval=true)
     */
    private $TimeMontant;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\LigneBudgetType", inversedBy="lignebudgetrelated")
     */
    private $LigneBudgetType;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $ShortNom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Costs", mappedBy="BudgetLine")
     */
    private $CostPrice;

    public function __construct()
    {
        $this->AnLigneBudget = new ArrayCollection();
        $this->LaboratoryProject = new ArrayCollection();
        $this->TimeMontant = new ArrayCollection();
        $this->LigneBudgetType = new ArrayCollection();
        $this->CostPrice = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getCreateTime(): ?\DateTimeInterface
    {
        return $this->Create_time;
    }

    public function setCreateTime(\DateTimeInterface $Create_time): self
    {
        $this->Create_time = $Create_time;

        return $this;
    }

    public function getDateOuverture(): ?\DateTimeInterface
    {
        return $this->Date_ouverture;
    }

    public function setDateOuverture(\DateTimeInterface $Date_ouverture): self
    {
        $this->Date_ouverture = $Date_ouverture;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->Date_fin;
    }

    public function setDateFin(?\DateTimeInterface $Date_fin): self
    {
        $this->Date_fin = $Date_fin;

        return $this;
    }

    public function getCreateUser(): ?int
    {
        return $this->Create_user;
    }

    public function setCreateUser(?int $Create_user): self
    {
        $this->Create_user = $Create_user;

        return $this;
    }

    public function getModificationUser(): ?int
    {
        return $this->Modification_user;
    }

    public function setModificationUser(?int $Modification_user): self
    {
        $this->Modification_user = $Modification_user;

        return $this;
    }

    public function getModificationDate(): ?\DateTimeInterface
    {
        return $this->Modification_date;
    }

    public function setModificationDate(\DateTimeInterface $Modification_date): self
    {
        $this->Modification_date = $Modification_date;

        return $this;
    }

    /**
     * @return Collection|Annee[]
     */
    public function getAnLigneBudget(): Collection
    {
        return $this->AnLigneBudget;
    }

    public function addAnLigneBudget(Annee $anLigneBudget): self
    {
        if (!$this->AnLigneBudget->contains($anLigneBudget)) {
            $this->AnLigneBudget[] = $anLigneBudget;
        }

        return $this;
    }

    public function removeAnLigneBudget(Annee $anLigneBudget): self
    {
        if ($this->AnLigneBudget->contains($anLigneBudget)) {
            $this->AnLigneBudget->removeElement($anLigneBudget);
        }

        return $this;
    }

    /**
     * @return Collection|LaboratoryProject[]
     */
    public function getLaboratoryProject(): Collection
    {
        return $this->LaboratoryProject;
    }

    public function addLaboratoryProject(LaboratoryProject $laboratoryProject): self
    {
        if (!$this->LaboratoryProject->contains($laboratoryProject)) {
            $this->LaboratoryProject[] = $laboratoryProject;
        }

        return $this;
    }

    public function removeLaboratoryProject(LaboratoryProject $laboratoryProject): self
    {
        if ($this->LaboratoryProject->contains($laboratoryProject)) {
            $this->LaboratoryProject->removeElement($laboratoryProject);
        }

        return $this;
    }
	public function __toString() 
                                                                                                                              {
                                                                                                                           	   return (string) $this->Nom;
                                                                                                                              }

    /**
     * @return Collection|LigneBudgetTimeMontant[]
     */
    public function getTimeMontant(): Collection
    {
        return $this->TimeMontant;
    }

    public function addTimeMontant(LigneBudgetTimeMontant $timeMontant): self
    {
        if (!$this->TimeMontant->contains($timeMontant)) {
            $this->TimeMontant[] = $timeMontant;
            $timeMontant->setLigneBudget($this);
        }

        return $this;
    }

    public function removeTimeMontant(LigneBudgetTimeMontant $timeMontant): self
    {
        if ($this->TimeMontant->contains($timeMontant)) {
            $this->TimeMontant->removeElement($timeMontant);
            // set the owning side to null (unless already changed)
            if ($timeMontant->getLigneBudget() === $this) {
                $timeMontant->setLigneBudget(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|LigneBudgetType[]
     */
    public function getLigneBudgetType(): Collection
    {
        return $this->LigneBudgetType;
    }

    public function addLigneBudgetType(LigneBudgetType $ligneBudgetType): self
    {
        if (!$this->LigneBudgetType->contains($ligneBudgetType)) {
            $this->LigneBudgetType[] = $ligneBudgetType;
        }

        return $this;
    }

    public function removeLigneBudgetType(LigneBudgetType $ligneBudgetType): self
    {
        if ($this->LigneBudgetType->contains($ligneBudgetType)) {
            $this->LigneBudgetType->removeElement($ligneBudgetType);
        }

        return $this;
    }

    public function getShortNom(): ?string
    {
        return $this->ShortNom;
    }

    public function setShortNom(string $ShortNom): self
    {
        $this->ShortNom = $ShortNom;

        return $this;
    }

    /**
     * @return Collection|Costs[]
     */
    public function getCostPrice(): Collection
    {
        return $this->CostPrice;
    }

    public function addCostPrice(Costs $costPrice): self
    {
        if (!$this->CostPrice->contains($costPrice)) {
            $this->CostPrice[] = $costPrice;
            $costPrice->setBudgetLine($this);
        }

        return $this;
    }

    public function removeCostPrice(Costs $costPrice): self
    {
        if ($this->CostPrice->contains($costPrice)) {
            $this->CostPrice->removeElement($costPrice);
            // set the owning side to null (unless already changed)
            if ($costPrice->getBudgetLine() === $this) {
                $costPrice->setBudgetLine(null);
            }
        }

        return $this;
    }
}
