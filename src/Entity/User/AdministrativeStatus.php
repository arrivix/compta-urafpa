<?php

namespace App\Entity\User;

use App\Entity\Institution\laboratory;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\User\AdministrativeStatusRepository")
 */
class AdministrativeStatus
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $TypeMission;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Institution\laboratory")
     * @ORM\JoinColumn(nullable=false)
     */
    private $LinkLaboratory;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User\Contact")
     */
    private $HierarchicalResponsible;

    /**
     * @ORM\Column(type="date")
     */
    private $BeginDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $EndDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeMission(): ?int
    {
        return $this->TypeMission;
    }

    public function setTypeMission(int $TypeMission): self
    {
        $this->TypeMission = $TypeMission;

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

    public function getLinkLaboratory(): ?laboratory
    {
        return $this->LinkLaboratory;
    }

    public function setLinkLaboratory(?laboratory $LinkLaboratory): self
    {
        $this->LinkLaboratory = $LinkLaboratory;

        return $this;
    }

    public function getHierarchicalResponsible(): ?Contact
    {
        return $this->HierarchicalResponsible;
    }

    public function setHierarchicalResponsible(?Contact $HierarchicalResponsible): self
    {
        $this->HierarchicalResponsible = $HierarchicalResponsible;

        return $this;
    }

    public function getBeginDate(): ?\DateTimeInterface
    {
        return $this->BeginDate;
    }

    public function setBeginDate(\DateTimeInterface $BeginDate): self
    {
        $this->BeginDate = $BeginDate;

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
}
