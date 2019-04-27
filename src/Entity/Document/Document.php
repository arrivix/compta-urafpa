<?php

namespace App\Entity\Document;

use App\Entity\Document\DocumentPage;
use App\Entity\Document\DocumentFile;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\BaseEntity\TraceUserDate;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Document\DocumentRepository")
 */
class Document {
    use TraceUserDate;
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $Description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Document\DocumentType", inversedBy="documents")
     */
    private $DocumentType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FileName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Folder;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Document\DocumentPage", mappedBy="Document", orphanRemoval=true)
     */
    private $documentPages;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Document\DocumentFile", mappedBy="document", orphanRemoval=true, cascade={"persist", "remove", "merge"})
     */
    private $DocumentFiles;

    public function __construct()
    {
        $this->DocumentType = new ArrayCollection();
        $this->documentPages = new ArrayCollection();
        $this->DocumentFiles = new ArrayCollection();
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

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return Collection|DocumentType[]
     */
    public function getDocumentType(): Collection
    {
        return $this->DocumentType;
    }

    public function addDocumentType(DocumentType $documentType): self
    {
        if (!$this->DocumentType->contains($documentType)) {
            $this->DocumentType[] = $documentType;
        }

        return $this;
    }

    public function removeDocumentType(DocumentType $documentType): self
    {
        if ($this->DocumentType->contains($documentType)) {
            $this->DocumentType->removeElement($documentType);
        }

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->FileName;
    }

    public function setFileName(string $FileName): self
    {
        $this->FileName = $FileName;

        return $this;
    }

    public function getFolder(): ?string
    {
        return $this->Folder;
    }

    public function setFolder(?string $Folder): self
    {
        $this->Folder = $Folder;

        return $this;
    }

    /**
     * @return Collection|DocumentPage[]
     */
    public function getDocumentPage(): Collection
    {
        return $this->documentPages;
    }

    public function addDocumentPage(DocumentPage $documentPage): self
    {
        if (!$this->documentPages->contains($documentPage)) {
            $this->documentPages[] = $documentPage;
            $documentPage->setDocument($this);
        }

        return $this;
    }

    public function removeDocumentPage(DocumentPage $documentPage): self
    {
        if ($this->documentPages->contains($documentPage)) {
            $this->documentPages->removeElement($documentPage);
            // set the owning side to null (unless already changed)
            if ($documentPage->getDocument() === $this) {
                $documentPage->setDocument(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|DocumentFile[]
     */
    public function getDocumentFile(): Collection
    {
        return $this->DocumentFiles;
    }

    public function addDocumentFile(DocumentFile $documentFile): self
    {
        if (!$this->DocumentFiles->contains($documentFile)) {
            $this->DocumentFiles[] = $documentFile;
            $documentFile->setDocument($this);
        }

        return $this;
    }

    public function removeDocumentFile(DocumentFile $documentFile): self
    {
        if ($this->DocumentFiles->contains($documentFile)) {
            $this->DocumentFiles->removeElement($documentFile);
            // set the owning side to null (unless already changed)
            if ($documentFile->getDocument() === $this) {
                $documentFile->setDocument(null);
            }
        }

        return $this;
    }
    public function __toString() {
        return $this->Name;
    }

}