<?php

namespace App\Entity\Document;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Document\PageLabelRepository")
 */
class PageLabel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document\DocumentPage", inversedBy="pageLabels")
     */
    private $Relation;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document\LabelType", inversedBy="pageLabels")
     */
    private $LabelType;

    public function __construct()
    {
        $this->Relation = new ArrayCollection();
        $this->LabelType = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|DocumentPage[]
     */
    public function getRelation(): Collection
    {
        return $this->Relation;
    }

    public function addRelation(DocumentPage $relation): self
    {
        if (!$this->Relation->contains($relation)) {
            $this->Relation[] = $relation;
        }

        return $this;
    }

    public function removeRelation(DocumentPage $relation): self
    {
        if ($this->Relation->contains($relation)) {
            $this->Relation->removeElement($relation);
        }

        return $this;
    }

    /**
     * @return Collection|LabelType[]
     */
    public function getLabelType(): Collection
    {
        return $this->LabelType;
    }

    public function addLabelType(LabelType $labelType): self
    {
        if (!$this->LabelType->contains($labelType)) {
            $this->LabelType[] = $labelType;
        }

        return $this;
    }

    public function removeLabelType(LabelType $labelType): self
    {
        if ($this->LabelType->contains($labelType)) {
            $this->LabelType->removeElement($labelType);
        }

        return $this;
    }
}
