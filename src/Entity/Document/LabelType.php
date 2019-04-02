<?php

namespace App\Entity\Document;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Document\LabelTypeRepository")
 */
class LabelType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $Nom;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document\PageLabel", mappedBy="LabelType")
     */
    private $pageLabels;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Document\LabelForm", mappedBy="LabelType")
     */
    private $labelForms;

    public function __construct()
    {
        $this->pageLabels = new ArrayCollection();
        $this->labelForms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|PageLabel[]
     */
    public function getPageLabels(): Collection
    {
        return $this->pageLabels;
    }

    public function addPageLabel(PageLabel $pageLabel): self
    {
        if (!$this->pageLabels->contains($pageLabel)) {
            $this->pageLabels[] = $pageLabel;
            $pageLabel->addLabelType($this);
        }

        return $this;
    }

    public function removePageLabel(PageLabel $pageLabel): self
    {
        if ($this->pageLabels->contains($pageLabel)) {
            $this->pageLabels->removeElement($pageLabel);
            $pageLabel->removeLabelType($this);
        }

        return $this;
    }

    /**
     * @return Collection|LabelForm[]
     */
    public function getLabelForms(): Collection
    {
        return $this->labelForms;
    }

    public function addLabelForm(LabelForm $labelForm): self
    {
        if (!$this->labelForms->contains($labelForm)) {
            $this->labelForms[] = $labelForm;
            $labelForm->setLabelType($this);
        }

        return $this;
    }

    public function removeLabelForm(LabelForm $labelForm): self
    {
        if ($this->labelForms->contains($labelForm)) {
            $this->labelForms->removeElement($labelForm);
            // set the owning side to null (unless already changed)
            if ($labelForm->getLabelType() === $this) {
                $labelForm->setLabelType(null);
            }
        }

        return $this;
    }
}
