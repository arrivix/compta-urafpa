<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnneeRepository")
 */
class Annee
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
     * @ORM\Column(type="string", length=10)
     */
    private $Nom;
	
	/**
     * @ORM\Column(type="boolean")
     */
    private $active;

	/**
     * @ORM\Column(type="boolean")
     */
    private $archived;

	/**
     * @ORM\ManyToMany(targetEntity="App\Entity\LigneBudget", mappedBy="AnLigneBudget")
     * @ORM\JoinTable(name="annee_ligne_budget")
     */
    
    private $LignAn;

    public function __construct()
    {
        $this->LignAn = new ArrayCollection();
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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    public function setArchived(bool $archived): self
    {
        $this->archived = $archived;

        return $this;
    }

    /**
     * @return Collection|Annee[]
     */
    public function getLignAn(): Collection
    {
        return $this->LignAn;
    }

    public function addLignAn(Annee $lignAn): self
    {
        if (!$this->LignAn->contains($lignAn)) {
            $this->LignAn[] = $lignAn;
            $lignAn->addAnLigneBudget($this);
        }

        return $this;
    }

    public function removeLignAn(Annee $lignAn): self
    {
        if ($this->LignAn->contains($lignAn)) {
            $this->LignAn->removeElement($lignAn);
            $lignAn->removeAnLigneBudget($this);
        }

        return $this;
    }
	
	public function __toString() 
                                 {
                              	   return (string) $this->Nom;
                                 }

 
}
