<?php

namespace App\Entity\Platform;

use App\Entity\Institution\Laboratory;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Platform\InstitutionalMemberRepository")
 */
class InstitutionalMember
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Institution\Laboratory", inversedBy="institutionalMember", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Laboratory;

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

    public function getLaboratory(): ?Laboratory
    {
        return $this->Laboratory;
    }

    public function setLaboratory(Laboratory $Laboratory): self
    {
        $this->Laboratory = $Laboratory;

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
