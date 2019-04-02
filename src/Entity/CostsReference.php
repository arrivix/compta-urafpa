<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CostsReferenceRepository")
 */
class CostsReference
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Reference;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $ReferencePerson;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ReferencePersonUrafpa;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Type1Reference;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Type2Reference;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Type3Reference;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Type4Reference;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?int
    {
        return $this->Type;
    }

    public function setType(int $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(string $Reference): self
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getReferencePerson(): ?\DateTimeInterface
    {
        return $this->ReferencePerson;
    }

    public function setReferencePerson(?\DateTimeInterface $ReferencePerson): self
    {
        $this->ReferencePerson = $ReferencePerson;

        return $this;
    }

    public function getReferencePersonUrafpa(): ?int
    {
        return $this->ReferencePersonUrafpa;
    }

    public function setReferencePersonUrafpa(?int $ReferencePersonUrafpa): self
    {
        $this->ReferencePersonUrafpa = $ReferencePersonUrafpa;

        return $this;
    }

    public function getType1Reference(): ?int
    {
        return $this->Type1Reference;
    }

    public function setType1Reference(?int $Type1Reference): self
    {
        $this->Type1Reference = $Type1Reference;

        return $this;
    }

    public function getType2Reference(): ?int
    {
        return $this->Type2Reference;
    }

    public function setType2Reference(?int $Type2Reference): self
    {
        $this->Type2Reference = $Type2Reference;

        return $this;
    }

    public function getType3Reference(): ?int
    {
        return $this->Type3Reference;
    }

    public function setType3Reference(?int $Type3Reference): self
    {
        $this->Type3Reference = $Type3Reference;

        return $this;
    }

    public function getType4Reference(): ?int
    {
        return $this->Type4Reference;
    }

    public function setType4Reference(?int $Type4Reference): self
    {
        $this->Type4Reference = $Type4Reference;

        return $this;
    }
}
