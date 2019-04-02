<?php

namespace App\Entity\Resource;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Resource\FluidsRepository")
 */
class Fluids
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $MandatoryControl;

    /**
     * @ORM\Column(type="boolean")
     */
    private $SafetyElementMandatory;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMandatoryControl(): ?bool
    {
        return $this->MandatoryControl;
    }

    public function setMandatoryControl(bool $MandatoryControl): self
    {
        $this->MandatoryControl = $MandatoryControl;

        return $this;
    }

    public function getSafetyElementMandatory(): ?bool
    {
        return $this->SafetyElementMandatory;
    }

    public function setSafetyElementMandatory(bool $SafetyElementMandatory): self
    {
        $this->SafetyElementMandatory = $SafetyElementMandatory;

        return $this;
    }
}
