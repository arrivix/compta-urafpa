<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContribRepository")
 */
class Contrib
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $Nom;

    /**
     * @ORM\Column(type="date")
     */
    private $DateBegin;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateEnd;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ContribRules", mappedBy="IDContrib", orphanRemoval=true)
     */
    private $ID;

    public function __construct()
    {
        $this->ID = new ArrayCollection();
    }

    /**
     * @return Collection|ContribRules[]
     */
    public function getID(): Collection
    {
        return $this->ID;
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

    public function getDateBegin(): ?\DateTimeInterface
    {
        return $this->DateBegin;
    }

    public function setDateBegin(\DateTimeInterface $DateBegin): self
    {
        $this->DateBegin = $DateBegin;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->DateEnd;
    }

    public function setDateEnd(?\DateTimeInterface $DateEnd): self
    {
        $this->DateEnd = $DateEnd;

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

    public function addID(ContribRules $iD): self
    {
        if (!$this->ID->contains($iD)) {
            $this->ID[] = $iD;
            $iD->setIDContrib($this);
        }

        return $this;
    }

    public function removeID(ContribRules $iD): self
    {
        if ($this->ID->contains($iD)) {
            $this->ID->removeElement($iD);
            // set the owning side to null (unless already changed)
            if ($iD->getIDContrib() === $this) {
                $iD->setIDContrib(null);
            }
        }

        return $this;
    }
}
