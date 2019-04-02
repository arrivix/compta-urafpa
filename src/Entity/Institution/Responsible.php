<?php

namespace App\Entity\Institution;

use App\Entity\user;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Institution\ResponsibleRepository")
 */
class Responsible
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user", inversedBy="responsibility")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Institution\Laboratory", inversedBy="Responsible")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Laboratory;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Institution\ResponsibleTitle", mappedBy="Responsible")
     */
    private $ResponsibleTitle;

    public function __construct()
    {
        $this->ResponsibleTitle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }


    /**
     * @return Collection|ResponsibleTitle[]
     */
    public function getResponsibleTitle(): Collection
    {
        return $this->ResponsibleTitle;
    }

    public function addResponsibleTitle(ResponsibleTitle $responsibleTitle): self
    {
        if (!$this->ResponsibleTitle->contains($responsibleTitle)) {
            $this->ResponsibleTitle[] = $responsibleTitle;
            $responsibleTitle->setResponsible($this);
        }

        return $this;
    }

    public function removeResponsibleTitle(ResponsibleTitle $responsibleTitle): self
    {
        if ($this->ResponsibleTitle->contains($responsibleTitle)) {
            $this->ResponsibleTitle->removeElement($responsibleTitle);
            // set the owning side to null (unless already changed)
            if ($responsibleTitle->getResponsible() === $this) {
                $responsibleTitle->setResponsible(null);
            }
        }

        return $this;
    }
}
