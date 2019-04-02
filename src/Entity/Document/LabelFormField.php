<?php

namespace App\Entity\Document;

use App\Entity\Document\LabelFormFieldType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Document\LabelFormFieldRepository")
 */
class LabelFormField
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document\LabelForm", inversedBy="labelFormFields")
     */
    private $LabelForm;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Hierarchy;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Required;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Document\LabelFormFieldType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $LabelFormFieldType;

    public function __construct()
    {
        $this->LabelForm = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|LabelForm[]
     */
    public function getLabelForm(): Collection
    {
        return $this->LabelForm;
    }

    public function addLabelForm(LabelForm $labelForm): self
    {
        if (!$this->LabelForm->contains($labelForm)) {
            $this->LabelForm[] = $labelForm;
        }

        return $this;
    }

    public function removeLabelForm(LabelForm $labelForm): self
    {
        if ($this->LabelForm->contains($labelForm)) {
            $this->LabelForm->removeElement($labelForm);
        }

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

    public function getRequired(): ?bool
    {
        return $this->Required;
    }

    public function setRequired(bool $Required): self
    {
        $this->Required = $Required;

        return $this;
    }

    public function getLabelFormFieldType(): ?LabelFormFieldType
    {
        return $this->LabelFormFieldType;
    }

    public function setLabelFormFieldType(?LabelFormFieldType $LabelFormFieldType): self
    {
        $this->LabelFormFieldType = $LabelFormFieldType;

        return $this;
    }
}
