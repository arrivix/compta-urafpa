<?php

namespace App\Entity\Document;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Document\LabelFormRepository")
 */
class LabelForm
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Document\LabelType", inversedBy="labelForms")
     * @ORM\JoinColumn(nullable=false)
     */
    private $LabelType;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document\LabelFormField", mappedBy="LabelForm")
     */
    private $labelFormFields;

    public function __construct()
    {
        $this->labelFormFields = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabelType(): ?LabelType
    {
        return $this->LabelType;
    }

    public function setLabelType(?LabelType $LabelType): self
    {
        $this->LabelType = $LabelType;

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

    /**
     * @return Collection|LabelFormField[]
     */
    public function getLabelFormFields(): Collection
    {
        return $this->labelFormFields;
    }

    public function addLabelFormField(LabelFormField $labelFormField): self
    {
        if (!$this->labelFormFields->contains($labelFormField)) {
            $this->labelFormFields[] = $labelFormField;
            $labelFormField->addLabelForm($this);
        }

        return $this;
    }

    public function removeLabelFormField(LabelFormField $labelFormField): self
    {
        if ($this->labelFormFields->contains($labelFormField)) {
            $this->labelFormFields->removeElement($labelFormField);
            $labelFormField->removeLabelForm($this);
        }

        return $this;
    }
}
