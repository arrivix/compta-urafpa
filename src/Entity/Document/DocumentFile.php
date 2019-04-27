<?php

namespace App\Entity\Document;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use App\Entity\BaseEntity\TraceUserDate;
use App\Entity\Document\Document;

/**
 * @property string md5
 * @ORM\Entity(repositoryClass="App\Repository\Document\DocumentFileRepository")
 * @Vich\Uploadable
 */

class DocumentFile
{
    use TraceUserDate;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Vich\UploadableField(mapping="documentfile_file", fileNameProperty="FileName", size="Size")
     * @var File
     */
    private $File;
    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $FileName;

    /**
     * @ORM\Column(type="date")
     */
    private $DateUpload;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $Md5;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $sha1;

    /**
     * @ORM\Column(type="float")
     */
    private $Size;

    /**
     * @ORM\Column(type="integer")
     */
    private $version;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Document\Document", inversedBy="DocumentFiles")
     */
    private $document;

    public function __construct()
    {
        $this->DateUpload = new \DateTime();
        $this->Md5 = md5('3EZE');
        $this->sha1 = sha1('3EZE');
        $this->version =1;
        $this->active =1;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateUpload(): ?\DateTimeInterface
    {
        return $this->DateUpload;
    }

    public function setDateUpload(\DateTimeInterface $DateUpload): self
    {
        $this->DateUpload = $DateUpload;

        return $this;
    }

    public function getMd5(): ?string
    {
        return $this->Md5;
    }


    public function setMd5(): self
    {
        //$this->md5 = hash_file('md5',$this->File->getPathname());

        return $this;
    }

    public function getSha1(): ?string
    {
        return $this->sha1;
    }

    public function setSha1(): self
    {
        //$this->md5 = hash_file('sha1', $this->File->getPathname());

        return $this;
    }

    public function getSize(): ?float
    {
        return $this->Size;
    }

    public function setSize(float $Size): self
    {
        $this->Size = $Size;

        return $this;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(int $version): self
    {
        $this->version = $version;

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


    public function setFile(File $File = null)
    {
        $this->File = $File;


        if (null !== $File) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getFile(): ?File
    {
        return $this->File;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function setDocument(?Document $document): self
    {
        $this->document = $document;

        return $this;
    }


}