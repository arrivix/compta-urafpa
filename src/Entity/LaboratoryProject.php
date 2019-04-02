<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LaboratoryProjectRepository")
 */
class LaboratoryProject
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $persistent;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\QuinquenalContract")
     */
    private $QuinCont;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\LigneBudget", mappedBy="LaboratoryProject")
     */
    private $lignLabpro;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $ShortNom;

    public function __construct()
    {
        $this->QuinCont = new ArrayCollection();
        $this->LignBudg = new ArrayCollection();
        $this->lignLabpro = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

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

    public function getPersistent(): ?bool
    {
        return $this->persistent;
    }

    public function setPersistent(bool $persistent): self
    {
        $this->persistent = $persistent;

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

    /**
     * @return Collection|QuinquenalContract[]
     */
    public function getQuinCont(): Collection
    {
        return $this->QuinCont;
    }

    public function addQuinCont(QuinquenalContract $quinCont): self
    {
        if (!$this->QuinCont->contains($quinCont)) {
            $this->QuinCont[] = $quinCont;
        }

        return $this;
    }

    public function removeQuinCont(QuinquenalContract $quinCont): self
    {
        if ($this->QuinCont->contains($quinCont)) {
            $this->QuinCont->removeElement($quinCont);
        }

        return $this;
    }

    /**
     * @return Collection|LigneBudget[]
     */
    public function getLignLabpro(): Collection
    {
        return $this->lignLabpro;
    }

    public function addLignLabpro(LigneBudget $lignLabpro): self
    {
        if (!$this->lignLabpro->contains($lignLabpro)) {
            $this->lignLabpro[] = $lignLabpro;
            $lignLabpro->addLaboratoryProject($this);
        }

        return $this;
    }

    public function removeLignLabpro(LigneBudget $lignLabpro): self
    {
        if ($this->lignLabpro->contains($lignLabpro)) {
            $this->lignLabpro->removeElement($lignLabpro);
            $lignLabpro->removeLaboratoryProject($this);
        }

        return $this;
    }
	public function __toString() 
                                                         {
                                                      	   return (string) $this->Name;
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

}
