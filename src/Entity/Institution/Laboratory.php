<?php

namespace App\Entity\Institution;

use App\Entity\Document\DocumentType;
use App\Entity\Platform\InstitutionalMember;
use App\Entity\Resource\Room;
use App\Entity\user;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Institution\LaboratoryRepository")
 */
class Laboratory
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
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ShortName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreationDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ModifyDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     * @ORM\JoinColumn(nullable=false)
     */
    private $CreationUser;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user")
     */
    private $ModificationUser;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Institution\Responsible", mappedBy="Laboratory")
     */
    private $Responsible;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Institution\ResponsibleTitle", mappedBy="Laboratory")
     */
    private $responsibleTitles;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Resource\Room", mappedBy="Laboratory")
     */
    private $rooms;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Platform\InstitutionalMember", mappedBy="Laboratory", cascade={"persist", "remove"})
     */
    private $institutionalMember;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Document\DocumentType", mappedBy="LaboratoryOrigin")
     */
    private $documentTypes;

    public function __construct()
    {
        $this->Responsible = new ArrayCollection();
        $this->responsibleTitles = new ArrayCollection();
        $this->rooms = new ArrayCollection();
        $this->documentTypes = new ArrayCollection();
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

    public function getShortName(): ?string
    {
        return $this->ShortName;
    }

    public function setShortName(?string $ShortName): self
    {
        $this->ShortName = $ShortName;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->CreationDate;
    }

    public function setCreationDate(\DateTimeInterface $CreationDate): self
    {
        $this->CreationDate = $CreationDate;

        return $this;
    }

    public function getModifyDate(): ?\DateTimeInterface
    {
        return $this->ModifyDate;
    }

    public function setModifyDate(\DateTimeInterface $ModifyDate): self
    {
        $this->ModifyDate = $ModifyDate;

        return $this;
    }

    public function getCreationUser(): ?user
    {
        return $this->CreationUser;
    }

    public function setCreationUser(?user $CreationUser): self
    {
        $this->CreationUser = $CreationUser;

        return $this;
    }

    public function getModificationUser(): ?user
    {
        return $this->ModificationUser;
    }

    public function setModificationUser(?user $ModificationUser): self
    {
        $this->ModificationUser = $ModificationUser;

        return $this;
    }

    /**
     * @return Collection|ResponsibleTitle[]
     */
    public function getResponsibleTitles(): Collection
    {
        return $this->responsibleTitles;
    }

    public function addResponsibleTitle(ResponsibleTitle $responsibleTitle): self
    {
        if (!$this->responsibleTitles->contains($responsibleTitle)) {
            $this->responsibleTitles[] = $responsibleTitle;
            $responsibleTitle->setLaboratory($this);
        }

        return $this;
    }

    public function removeResponsibleTitle(ResponsibleTitle $responsibleTitle): self
    {
        if ($this->responsibleTitles->contains($responsibleTitle)) {
            $this->responsibleTitles->removeElement($responsibleTitle);
            // set the owning side to null (unless already changed)
            if ($responsibleTitle->getLaboratory() === $this) {
                $responsibleTitle->setLaboratory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Room[]
     */
    public function getRooms(): Collection
    {
        return $this->rooms;
    }

    public function addRoom(Room $room): self
    {
        if (!$this->rooms->contains($room)) {
            $this->rooms[] = $room;
            $room->addLaboratory($this);
        }

        return $this;
    }

    public function removeRoom(Room $room): self
    {
        if ($this->rooms->contains($room)) {
            $this->rooms->removeElement($room);
            $room->removeLaboratory($this);
        }

        return $this;
    }

    public function getInstitutionalMember(): ?InstitutionalMember
    {
        return $this->institutionalMember;
    }

    public function setInstitutionalMember(InstitutionalMember $institutionalMember): self
    {
        $this->institutionalMember = $institutionalMember;

        // set the owning side of the relation if necessary
        if ($this !== $institutionalMember->getLaboratory()) {
            $institutionalMember->setLaboratory($this);
        }

        return $this;
    }

    /**
     * @return Collection|DocumentType[]
     */
    public function getDocumentTypes(): Collection
    {
        return $this->documentTypes;
    }

    public function addDocumentType(DocumentType $documentType): self
    {
        if (!$this->documentTypes->contains($documentType)) {
            $this->documentTypes[] = $documentType;
            $documentType->setLaboratoryOrigin($this);
        }

        return $this;
    }

    public function removeDocumentType(DocumentType $documentType): self
    {
        if ($this->documentTypes->contains($documentType)) {
            $this->documentTypes->removeElement($documentType);
            // set the owning side to null (unless already changed)
            if ($documentType->getLaboratoryOrigin() === $this) {
                $documentType->setLaboratoryOrigin(null);
            }
        }

        return $this;
    }
}
