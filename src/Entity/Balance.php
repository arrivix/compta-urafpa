<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BalanceRepository")
 */
class Balance
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
    private $Constructor;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $ServDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modele;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SerialNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $ScaleMin;

    /**
     * @ORM\Column(type="integer")
     */
    private $ScaleMax;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Active;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Archived;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\user")
     */
    private $ReferentUser;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreateDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ModifyDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ValidationDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CreateUser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $LastModificationUser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     */
    private $ValidationUser;

    public function __construct()
    {
        $this->ReferentUser = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConstructor(): ?string
    {
        return $this->Constructor;
    }

    public function setConstructor(string $Constructor): self
    {
        $this->Constructor = $Constructor;

        return $this;
    }

    public function getServDate(): ?\DateTimeInterface
    {
        return $this->ServDate;
    }

    public function setServDate(?\DateTimeInterface $ServDate): self
    {
        $this->ServDate = $ServDate;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->SerialNumber;
    }

    public function setSerialNumber(string $SerialNumber): self
    {
        $this->SerialNumber = $SerialNumber;

        return $this;
    }

    public function getScaleMin(): ?int
    {
        return $this->ScaleMin;
    }

    public function setScaleMin(int $ScaleMin): self
    {
        $this->ScaleMin = $ScaleMin;

        return $this;
    }

    public function getScaleMax(): ?int
    {
        return $this->ScaleMax;
    }

    public function setScaleMax(int $ScaleMax): self
    {
        $this->ScaleMax = $ScaleMax;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->Active;
    }

    public function setActive(bool $Active): self
    {
        $this->Active = $Active;

        return $this;
    }

    public function getArchived(): ?string
    {
        return $this->Archived;
    }

    public function setArchived(string $Archived): self
    {
        $this->Archived = $Archived;

        return $this;
    }

    /**
     * @return Collection|user[]
     */
    public function getReferentUser(): Collection
    {
        return $this->ReferentUser;
    }

    public function addReferentUser(user $referentUser): self
    {
        if (!$this->ReferentUser->contains($referentUser)) {
            $this->ReferentUser[] = $referentUser;
        }

        return $this;
    }

    public function removeReferentUser(user $referentUser): self
    {
        if ($this->ReferentUser->contains($referentUser)) {
            $this->ReferentUser->removeElement($referentUser);
        }

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->CreateDate;
    }

    public function setCreateDate(\DateTimeInterface $CreateDate): self
    {
        $this->CreateDate = $CreateDate;

        return $this;
    }

    public function getModifyDate(): ?\DateTimeInterface
    {
        return $this->ModifyDate;
    }

    public function setModifyDate(?\DateTimeInterface $ModifyDate): self
    {
        $this->ModifyDate = $ModifyDate;

        return $this;
    }

    public function getValidationDate(): ?\DateTimeInterface
    {
        return $this->ValidationDate;
    }

    public function setValidationDate(?\DateTimeInterface $ValidationDate): self
    {
        $this->ValidationDate = $ValidationDate;

        return $this;
    }

    public function getCreateUser(): ?User
    {
        return $this->CreateUser;
    }

    public function setCreateUser(?User $CreateUser): self
    {
        $this->CreateUser = $CreateUser;

        return $this;
    }

    public function getLastModificationUser(): ?User
    {
        return $this->LastModificationUser;
    }

    public function setLastModificationUser(?User $LastModificationUser): self
    {
        $this->LastModificationUser = $LastModificationUser;

        return $this;
    }

    public function getValidationUser(): ?user
    {
        return $this->ValidationUser;
    }

    public function setValidationUser(?user $ValidationUser): self
    {
        $this->ValidationUser = $ValidationUser;

        return $this;
    }
}
