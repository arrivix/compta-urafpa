<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FundingResourceRepository")
 */
class FundingResource
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
	
	/**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $Nom;

	/**
     * @ORM\Column(type="string", length=10, unique=true)
     */
    private $ShortNom;
	
    /**
     * @ORM\Column(type="integer")
     */
    private $TypeFundingResource;
	
    /**
     * @ORM\Column(type="integer")
     */
    private $SourceFuningResource;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeFundingResource(): ?int
    {
        return $this->TypeFundingResource;
    }

    public function setTypeFundingResource(int $TypeFundingResource): self
    {
        $this->TypeFundingResource = $TypeFundingResource;

        return $this;
    }

    public function getSourceFuningResource(): ?int
    {
        return $this->SourceFuningResource;
    }

    public function setSourceFuningResource(int $SourceFuningResource): self
    {
        $this->SourceFuningResource = $SourceFuningResource;

        return $this;
    }

    public function getFundingBeginDate(): ?int
    {
        return $this->FundingBeginDate;
    }

    public function setFundingBeginDate(int $FundingBeginDate): self
    {
        $this->FundingBeginDate = $FundingBeginDate;

        return $this;
    }

    public function getFundingEndDate(): ?int
    {
        return $this->FundingEndDate;
    }

    public function setFundingEndDate(int $FundingEndDate): self
    {
        $this->FundingEndDate = $FundingEndDate;

        return $this;
    }

    public function getInactiveDate(): ?\DateTimeInterface
    {
        return $this->InactiveDate;
    }

    public function setInactiveDate(?\DateTimeInterface $InactiveDate): self
    {
        $this->InactiveDate = $InactiveDate;

        return $this;
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

    public function getShortNom(): ?string
    {
        return $this->ShortNom;
    }

    public function setShortNom(string $ShortNom): self
    {
        $this->ShortNom = $ShortNom;

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
}
