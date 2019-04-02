<?php

namespace App\Entity\Document;

use App\Entity\Document\Document;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Document\DocumentPageRepository")
 */
class DocumentPage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Document\Document", inversedBy="documentPages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Document;

    /**
     * @ORM\Column(type="smallint")
     */
    private $NumPage;

    /**
     * @ORM\Column(type="smallint")
     */
    private $EndNumPage;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document\PageLabel", mappedBy="Relation")
     */
    private $pageLabels;

    public function __construct()
    {
        $this->pageLabels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDocument(): ?Document
    {
        return $this->Document;
    }

    public function setDocument(?Document $Document): self
    {
        $this->Document = $Document;

        return $this;
    }

    public function getNumPage(): ?int
    {
        return $this->NumPage;
    }

    public function setNumPage(int $NumPage): self
    {
        $this->NumPage = $NumPage;

        return $this;
    }

    public function getEndNumPage(): ?int
    {
        return $this->EndNumPage;
    }

    public function setEndNumPage(int $EndNumPage): self
    {
        $this->EndNumPage = $EndNumPage;

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
            $pageLabel->addRelation($this);
        }

        return $this;
    }

    public function removePageLabel(PageLabel $pageLabel): self
    {
        if ($this->pageLabels->contains($pageLabel)) {
            $this->pageLabels->removeElement($pageLabel);
            $pageLabel->removeRelation($this);
        }

        return $this;
    }
}
