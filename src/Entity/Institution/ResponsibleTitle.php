<?php

namespace App\Entity\Institution;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Institution\ResponsibleTitleRepository")
 */
class ResponsibleTitle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Ongoing;

    /**
     * @ORM\Column(type="date")
     */
    private $BeginDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $EndDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Institution\Responsible", inversedBy="ResponsibleTitle")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Responsible;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Institution\Laboratory", inversedBy="responsibleTitles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Laboratory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOngoing(): ?bool
    {
        return $this->Ongoing;
    }

    public function setOngoing(bool $Ongoing): self
    {
        $this->Ongoing = $Ongoing;

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

    public function getResponsible(): ?Responsible
    {
        return $this->Responsible;
    }

    public function setResponsible(?Responsible $Responsible): self
    {
        $this->Responsible = $Responsible;

        return $this;
    }

    public function getLaboratory(): ?Laboratory
    {
        return $this->Laboratory;
    }

    public function setLaboratory(?Laboratory $Laboratory): self
    {
        $this->Laboratory = $Laboratory;

        return $this;
    }
}
