<?php

namespace App\Entity\Document;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Document\LabelFormFieldResultRepository")
 */
class LabelFormFieldResult
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ResultString;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ResultText;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ResultInteger;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $ResultFloat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResultString(): ?string
    {
        return $this->ResultString;
    }

    public function setResultString(?string $ResultString): self
    {
        $this->ResultString = $ResultString;

        return $this;
    }

    public function getResultText(): ?string
    {
        return $this->ResultText;
    }

    public function setResultText(?string $ResultText): self
    {
        $this->ResultText = $ResultText;

        return $this;
    }

    public function getResultInteger(): ?int
    {
        return $this->ResultInteger;
    }

    public function setResultInteger(?int $ResultInteger): self
    {
        $this->ResultInteger = $ResultInteger;

        return $this;
    }

    public function getResultFloat(): ?float
    {
        return $this->ResultFloat;
    }

    public function setResultFloat(?float $ResultFloat): self
    {
        $this->ResultFloat = $ResultFloat;

        return $this;
    }
}
