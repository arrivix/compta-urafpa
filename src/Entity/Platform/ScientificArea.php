<?php

namespace App\Entity\Platform;

use App\Entity\User\Contact;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Platform\ScientificAreaRepository")
 */
class ScientificArea
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
    private $Nom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $MissionLetter;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User\Contact", inversedBy="scientificAreas")
     * @ORM\JoinTable(name="ScientifiAreasScientificManager_Contact")
     */
    private $ScientificManager;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User\Contact", inversedBy="PermanentGuest")
     * @ORM\JoinTable(name="ScientifiAreasPermanentGuest_Contact")

     */
    private $PermanentGuest;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User\Contact", inversedBy="PermanentVoterScientificAreas")
     * @ORM\JoinTable(name="ScientifiAreasPermanentVoter_Contact")

     */
    private $PermanentVoter;

    public function __construct()
    {
        $this->ScientificManager = new ArrayCollection();
        $this->PermanentGuest = new ArrayCollection();
        $this->PermanentVoter = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getMissionLetter(): ?string
    {
        return $this->MissionLetter;
    }

    public function setMissionLetter(?string $MissionLetter): self
    {
        $this->MissionLetter = $MissionLetter;

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getScientificManager(): Collection
    {
        return $this->ScientificManager;
    }

    public function addScientificManager(Contact $scientificManager): self
    {
        if (!$this->ScientificManager->contains($scientificManager)) {
            $this->ScientificManager[] = $scientificManager;
        }

        return $this;
    }

    public function removeScientificManager(Contact $scientificManager): self
    {
        if ($this->ScientificManager->contains($scientificManager)) {
            $this->ScientificManager->removeElement($scientificManager);
        }

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getPermanentGuest(): Collection
    {
        return $this->PermanentGuest;
    }

    public function addPermanentGuest(Contact $permanentGuest): self
    {
        if (!$this->PermanentGuest->contains($permanentGuest)) {
            $this->PermanentGuest[] = $permanentGuest;
        }

        return $this;
    }

    public function removePermanentGuest(Contact $permanentGuest): self
    {
        if ($this->PermanentGuest->contains($permanentGuest)) {
            $this->PermanentGuest->removeElement($permanentGuest);
        }

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getPermanentVoter(): Collection
    {
        return $this->PermanentVoter;
    }

    public function addPermanentVoter(Contact $permanentVoter): self
    {
        if (!$this->PermanentVoter->contains($permanentVoter)) {
            $this->PermanentVoter[] = $permanentVoter;
        }

        return $this;
    }

    public function removePermanentVoter(Contact $permanentVoter): self
    {
        if ($this->PermanentVoter->contains($permanentVoter)) {
            $this->PermanentVoter->removeElement($permanentVoter);
        }

        return $this;
    }
}
