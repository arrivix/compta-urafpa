<?php

namespace App\Entity;

use App\Entity\User\contact;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TechnicalManagerRepository")
 */
class TechnicalManager
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User\contact", inversedBy="technicalManagers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Contact;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContact(): ?contact
    {
        return $this->Contact;
    }

    public function setContact(?contact $Contact): self
    {
        $this->Contact = $Contact;

        return $this;
    }
}
