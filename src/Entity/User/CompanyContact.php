<?php

namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompanyContactRepository")
 */
class CompanyContact
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
    private $CompanyName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $CompanyAdressNbStreet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CompanyAdressNameStreet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->CompanyName;
    }

    public function setCompanyName(string $CompanyName): self
    {
        $this->CompanyName = $CompanyName;

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

    public function getCompanyAdressNbStreet(): ?string
    {
        return $this->CompanyAdressNbStreet;
    }

    public function setCompanyAdressNbStreet(?string $CompanyAdressNbStreet): self
    {
        $this->CompanyAdressNbStreet = $CompanyAdressNbStreet;

        return $this;
    }

    public function getCompanyAdressNameStreet(): ?string
    {
        return $this->CompanyAdressNameStreet;
    }

    public function setCompanyAdressNameStreet(string $CompanyAdressNameStreet): self
    {
        $this->CompanyAdressNameStreet = $CompanyAdressNameStreet;

        return $this;
    }
}
