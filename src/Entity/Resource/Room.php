<?php

namespace App\Entity\Resource;

use App\Entity\Institution\laboratory;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Resource\RoomRepository")
 */
class Room
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
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Institution\laboratory", inversedBy="rooms")
     */
    private $Laboratory;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Resource\SiteLocation", inversedBy="rooms")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Site;

    public function __construct()
    {
        $this->Laboratory = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|laboratory[]
     */
    public function getLaboratory(): Collection
    {
        return $this->Laboratory;
    }

    public function addLaboratory(laboratory $laboratory): self
    {
        if (!$this->Laboratory->contains($laboratory)) {
            $this->Laboratory[] = $laboratory;
        }

        return $this;
    }

    public function removeLaboratory(laboratory $laboratory): self
    {
        if ($this->Laboratory->contains($laboratory)) {
            $this->Laboratory->removeElement($laboratory);
        }

        return $this;
    }

    public function getSite(): ?SiteLocation
    {
        return $this->Site;
    }

    public function setSite(?SiteLocation $Site): self
    {
        $this->Site = $Site;

        return $this;
    }
}
