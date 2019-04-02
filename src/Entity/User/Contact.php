<?php

namespace App\Entity\User;

use App\Entity\Platform\ScientificArea;
use App\Entity\TechnicalManager;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\User\ContactRepository")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $string;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TechnicalManager", mappedBy="Contact", orphanRemoval=true)
     */
    private $technicalManagers;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Platform\ScientificArea", mappedBy="ScientificManager")
     */
    private $scientificAreas;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Platform\ScientificArea", mappedBy="PermanentGuest")
     */
    private $PermanentGuests;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Platform\ScientificArea", mappedBy="PermanentVoter")
     */
    private $PermanentVoterScientificAreas;

    public function __construct()
    {
        $this->technicalManagers = new ArrayCollection();
        $this->scientificAreas = new ArrayCollection();
        $this->PermanentGuests = new ArrayCollection();
        $this->PermanentVoterScientificAreas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getString(): ?string
    {
        return $this->string;
    }

    public function setString(string $string): self
    {
        $this->string = $string;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * @return Collection|TechnicalManager[]
     */
    public function getTechnicalManagers(): Collection
    {
        return $this->technicalManagers;
    }

    public function addTechnicalManager(TechnicalManager $technicalManager): self
    {
        if (!$this->technicalManagers->contains($technicalManager)) {
            $this->technicalManagers[] = $technicalManager;
            $technicalManager->setContact($this);
        }

        return $this;
    }

    public function removeTechnicalManager(TechnicalManager $technicalManager): self
    {
        if ($this->technicalManagers->contains($technicalManager)) {
            $this->technicalManagers->removeElement($technicalManager);
            // set the owning side to null (unless already changed)
            if ($technicalManager->getContact() === $this) {
                $technicalManager->setContact(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ScientificArea[]
     */
    public function getScientificAreas(): Collection
    {
        return $this->scientificAreas;
    }

    public function addScientificArea(ScientificArea $scientificArea): self
    {
        if (!$this->scientificAreas->contains($scientificArea)) {
            $this->scientificAreas[] = $scientificArea;
            $scientificArea->addScientificManager($this);
        }

        return $this;
    }

    public function removeScientificArea(ScientificArea $scientificArea): self
    {
        if ($this->scientificAreas->contains($scientificArea)) {
            $this->scientificAreas->removeElement($scientificArea);
            $scientificArea->removeScientificManager($this);
        }

        return $this;
    }

    /**
     * @return Collection|ScientificArea[]
     */
    public function getPermanentGuest(): Collection
    {
        return $this->PermanentGuest;
    }

    public function addPermanentGuest(ScientificArea $PermanentGuest): self
    {
        if (!$this->PermanentGuests->contains($PermanentGuest)) {
            $this->PermanentGuests = $PermanentGuest;
            $PermanentGuest->addPermanentGuest($this);
        }

        return $this;
    }

    public function removePermanentGuest(ScientificArea $PermanentGuest): self
    {
        if ($this->PermanentGuests->contains($PermanentGuest)) {
            $this->PermanentGuests->removeElement($PermanentGuest);
            $PermanentGuest->removePermanentGuest($this);
        }

        return $this;
    }

    /**
     * @return Collection|ScientificArea[]
     */
    public function getPermanentVoterScientificAreas(): Collection
    {
        return $this->PermanentVoterScientificAreas;
    }

    public function addPermanentVoterScientificArea(ScientificArea $permanentVoterScientificArea): self
    {
        if (!$this->PermanentVoterScientificAreas->contains($permanentVoterScientificArea)) {
            $this->PermanentVoterScientificAreas[] = $permanentVoterScientificArea;
            $permanentVoterScientificArea->addPermanentVoter($this);
        }

        return $this;
    }

    public function removePermanentVoterScientificArea(ScientificArea $permanentVoterScientificArea): self
    {
        if ($this->PermanentVoterScientificAreas->contains($permanentVoterScientificArea)) {
            $this->PermanentVoterScientificAreas->removeElement($permanentVoterScientificArea);
            $permanentVoterScientificArea->removePermanentVoter($this);
        }

        return $this;
    }
}
