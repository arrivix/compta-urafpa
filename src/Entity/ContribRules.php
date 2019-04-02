<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContribRulesRepository")
 */
class ContribRules
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contrib", inversedBy="ID")
     * @ORM\JoinColumn(nullable=false)
     */
    private $IDContrib;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $FieldVerif;

    /**
     * @ORM\Column(type="integer")
     */
    private $FieldVerifType;

    /**
     * @ORM\Column(type="json_array")
     */
    private $FieldVerifValue;

    /**
     * @ORM\Column(type="integer")
     */
    private $Hierarchy;

    /**
     * @ORM\Column(type="json_array")
     */
    private $ContribCalculation;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreateTime;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $ModifyTime;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CreateUser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $ModifyUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDContrib(): ?Contrib
    {
        return $this->IDContrib;
    }

    public function setIDContrib(?Contrib $IDContrib): self
    {
        $this->IDContrib = $IDContrib;

        return $this;
    }

    public function getFieldVerif(): ?string
    {
        return $this->FieldVerif;
    }

    public function setFieldVerif(string $FieldVerif): self
    {
        $this->FieldVerif = $FieldVerif;

        return $this;
    }

    public function getFieldVerifType(): ?int
    {
        return $this->FieldVerifType;
    }

    public function setFieldVerifType(int $FieldVerifType): self
    {
        $this->FieldVerifType = $FieldVerifType;

        return $this;
    }

    public function getFieldVerifValue()
    {
        return $this->FieldVerifValue;
    }

    public function setFieldVerifValue($FieldVerifValue): self
    {
        $this->FieldVerifValue = $FieldVerifValue;

        return $this;
    }

    public function getHierarchy(): ?int
    {
        return $this->Hierarchy;
    }

    public function setHierarchy(int $Hierarchy): self
    {
        $this->Hierarchy = $Hierarchy;

        return $this;
    }

    public function getContribCalculation()
    {
        return $this->ContribCalculation;
    }

    public function setContribCalculation($ContribCalculation): self
    {
        $this->ContribCalculation = $ContribCalculation;

        return $this;
    }

    public function getCreateTime(): ?\DateTimeInterface
    {
        return $this->CreateTime;
    }

    public function setCreateTime(\DateTimeInterface $CreateTime): self
    {
        $this->CreateTime = $CreateTime;

        return $this;
    }

    public function getModifyTime(): ?\DateTimeInterface
    {
        return $this->ModifyTime;
    }

    public function setModifyTime(?\DateTimeInterface $ModifyTime): self
    {
        $this->ModifyTime = $ModifyTime;

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

    public function getModifyUser(): ?User
    {
        return $this->ModifyUser;
    }

    public function setModifyUser(?User $ModifyUser): self
    {
        $this->ModifyUser = $ModifyUser;

        return $this;
    }
}
