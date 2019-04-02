<?php

namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepartmentAddressRepository")
 */
class DepartmentAddress
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
    private $AddName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $OtherEntityLine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Streetline;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $OtherFrstStreetLine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $OtherScndStreetLine;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $PostalCode;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $PostalCedex;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $CityName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddName(): ?bool
    {
        return $this->AddName;
    }

    public function setAddName(bool $AddName): self
    {
        $this->AddName = $AddName;

        return $this;
    }

    public function getOtherEntityLine(): ?string
    {
        return $this->OtherEntityLine;
    }

    public function setOtherEntityLine(?string $OtherEntityLine): self
    {
        $this->OtherEntityLine = $OtherEntityLine;

        return $this;
    }

    public function getStreetline(): ?string
    {
        return $this->Streetline;
    }

    public function setStreetline(string $Streetline): self
    {
        $this->Streetline = $Streetline;

        return $this;
    }

    public function getOtherFrstStreetLine(): ?string
    {
        return $this->OtherFrstStreetLine;
    }

    public function setOtherFrstStreetLine(?string $OtherFrstStreetLine): self
    {
        $this->OtherFrstStreetLine = $OtherFrstStreetLine;

        return $this;
    }

    public function getOtherScndStreetLine(): ?string
    {
        return $this->OtherScndStreetLine;
    }

    public function setOtherScndStreetLine(string $OtherScndStreetLine): self
    {
        $this->OtherScndStreetLine = $OtherScndStreetLine;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }

    public function setPostalCode(?string $PostalCode): self
    {
        $this->PostalCode = $PostalCode;

        return $this;
    }

    public function getPostalCedex(): ?int
    {
        return $this->PostalCedex;
    }

    public function setPostalCedex(?int $PostalCedex): self
    {
        $this->PostalCedex = $PostalCedex;

        return $this;
    }

    public function getCityName(): ?string
    {
        return $this->CityName;
    }

    public function setCityName(string $CityName): self
    {
        $this->CityName = $CityName;

        return $this;
    }
}
