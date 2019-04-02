<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CostsRepository")
 */
class Costs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $CostDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\annee")
     * @ORM\JoinColumn(nullable=false)
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Provider;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LigneBudget", inversedBy="CostPrice")
     * @ORM\JoinColumn(nullable=false)
     */
    private $BudgetLine;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $CostPrice;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CreateUser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $LastUpdateUser;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreateDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $LastUpdateDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Historic;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Version=1;

    /**
     * @return mixed
     * @Assert\NotBlank
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param mixed $Version
     *
     */
    public function setVersion($Version): void
    {
        $this->Version = $Version;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCostDate(): ?\DateTimeInterface
    {
        return $this->CostDate;
    }

    public function setCostDate(\DateTimeInterface $CostDate): self
    {
        $this->CostDate = $CostDate;

        return $this;
    }

    public function getYear(): ?annee
    {
        return $this->year;
    }

    public function setYear(?annee $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getProvider(): ?string
    {
        return $this->Provider;
    }

    public function setProvider(string $Provider): self
    {
        $this->Provider = $Provider;

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

    public function getBudgetLine(): ?LigneBudget
    {
        return $this->BudgetLine;
    }

    public function setBudgetLine(?LigneBudget $BudgetLine): self
    {
        $this->BudgetLine = $BudgetLine;

        return $this;
    }

    public function getCostPrice()
    {
        return $this->CostPrice;
    }

    public function setCostPrice($CostPrice): self
    {
        $this->CostPrice = $CostPrice;

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

    public function getLastUpdateUser(): ?User
    {
        return $this->LastUpdateUser;
    }

    public function setLastUpdateUser(?User $LastUpdateUser): self
    {
        $this->LastUpdateUser = $LastUpdateUser;

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

    public function getLastUpdateDate(): ?\DateTimeInterface
    {
        return $this->LastUpdateDate;
    }

    public function setLastUpdateDate(?\DateTimeInterface $LastUpdateDate): self
    {
        $this->LastUpdateDate = $LastUpdateDate;

        return $this;
    }

    public function getHistoric(): ?string
    {
        return $this->Historic;
    }

    public function setHistoric(?string $Historic): self
    {
        $this->Historic = $Historic;

        return $this;
    }
}
