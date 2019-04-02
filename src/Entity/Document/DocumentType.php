<?php

namespace App\Entity\Document;

use App\Entity\Institution\Laboratory;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Document\DocumentTypeRepository")
 */
class DocumentType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Name;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Acro;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Folder;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ExternalResource;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Institution\Laboratory", inversedBy="documentTypes")
     */
    private $LaboratoryOrigin;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Active;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document\Document", mappedBy="DocumentType")
     */
    private $documents;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }

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

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getAcro(): ?string
    {
        return $this->Acro;
    }

    public function setAcro(string $Acro): self
    {
        $this->Acro = $Acro;

        return $this;
    }

    public function getFolder(): ?string
    {
        return $this->Folder;
    }

    public function setFolder(string $Folder): self
    {
        $this->Folder = $Folder;

        return $this;
    }

    public function getExternalResource(): ?bool
    {
        return $this->ExternalResource;
    }

    public function setExternalResource(bool $ExternalResource): self
    {
        $this->ExternalResource = $ExternalResource;

        return $this;
    }

    public function getLaboratoryOrigin(): ?Laboratory
    {
        return $this->LaboratoryOrigin;
    }

    public function setLaboratoryOrigin(?Laboratory $LaboratoryOrigin): self
    {
        $this->LaboratoryOrigin = $LaboratoryOrigin;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->Active;
    }

    public function setActive(bool $Active): self
    {
        $this->Active = $Active;

        return $this;
    }

    /**
     * @return Collection|Document[]
     */
    public function getDocuments(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Document $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
            $document->addDocumentType($this);
        }

        return $this;
    }

    public function removeDocument(Document $document): self
    {
        if ($this->documents->contains($document)) {
            $this->documents->removeElement($document);
            $document->removeDocumentType($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getAcro().' - '.$this->getName();
    }
}
