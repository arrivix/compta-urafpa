<?php

namespace App\Entity\Resource;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Resource\EquipmentRepository")
 */
class Equipment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ID_Urafpa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Brand;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $SerialNumber;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $NumCompt;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateCommissioning;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Voltage;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Power;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $ReceptionDate;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Reliability;

    /**
     * @ORM\Column(type="boolean")
     */
    private $InventoryReleaseStatus;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $InventoryReleaseDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDUrafpa(): ?int
    {
        return $this->ID_Urafpa;
    }

    public function setIDUrafpa(?int $ID_Urafpa): self
    {
        $this->ID_Urafpa = $ID_Urafpa;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

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

    public function getBrand(): ?string
    {
        return $this->Brand;
    }

    public function setBrand(string $Brand): self
    {
        $this->Brand = $Brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->SerialNumber;
    }

    public function setSerialNumber(?string $SerialNumber): self
    {
        $this->SerialNumber = $SerialNumber;

        return $this;
    }

    public function getNumCompt(): ?string
    {
        return $this->NumCompt;
    }

    public function setNumCompt(string $NumCompt): self
    {
        $this->NumCompt = $NumCompt;

        return $this;
    }

    public function getDateCommissioning(): ?\DateTimeInterface
    {
        return $this->DateCommissioning;
    }

    public function setDateCommissioning(?\DateTimeInterface $DateCommissioning): self
    {
        $this->DateCommissioning = $DateCommissioning;

        return $this;
    }

    public function getVoltage(): ?int
    {
        return $this->Voltage;
    }

    public function setVoltage(?int $Voltage): self
    {
        $this->Voltage = $Voltage;

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->Power;
    }

    public function setPower(?int $Power): self
    {
        $this->Power = $Power;

        return $this;
    }

    public function getReceptionDate(): ?\DateTimeInterface
    {
        return $this->ReceptionDate;
    }

    public function setReceptionDate(?\DateTimeInterface $ReceptionDate): self
    {
        $this->ReceptionDate = $ReceptionDate;

        return $this;
    }

    public function getReliability(): ?int
    {
        return $this->Reliability;
    }

    public function setReliability(int $Reliability): self
    {
        $this->Reliability = $Reliability;

        return $this;
    }

    public function getInventoryReleaseStatus(): ?bool
    {
        return $this->InventoryReleaseStatus;
    }

    public function setInventoryReleaseStatus(bool $InventoryReleaseStatus): self
    {
        $this->InventoryReleaseStatus = $InventoryReleaseStatus;

        return $this;
    }

    public function getInventoryReleaseDate(): ?\DateTimeInterface
    {
        return $this->InventoryReleaseDate;
    }

    public function setInventoryReleaseDate(?\DateTimeInterface $InventoryReleaseDate): self
    {
        $this->InventoryReleaseDate = $InventoryReleaseDate;

        return $this;
    }
}
