<?php

namespace App\Entity;

use App\Entity\Institution\Responsible;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="user")
 * @UniqueEntity(fields="email", message="Email déjà pris")
 * @UniqueEntity(fields="username", message="Username déjà pris")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="boolean")
     */

    private $active;

    /**
     * @ORM\Column(type="boolean")
     */

    private $depreciatedpassword;

    /**
     * @ORM\Column(type="json")
     */

    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $FirstName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $LastName;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Institution\Responsible", mappedBy="user", orphanRemoval=true)
     */
    private $responsibility;

    public function __construct()
    {
        $this->responsibility = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

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

    public function getDepreciatedpassword(): ?bool
    {
        return $this->depreciatedpassword;
    }

    public function setDepreciatedpassword(bool $depreciatedpassword): self
    {
        $this->depreciatedpassword = $depreciatedpassword;

        return $this;
    }
    public function __toString()
    {
        return (string) $this->username;
    }

    /**
     * @return Collection|Responsible[]
     */
    public function getResponsibility(): Collection
    {
        return $this->responsibility;
    }

    public function addResponsibility(Responsible $responsibility): self
    {
        if (!$this->responsibility->contains($responsibility)) {
            $this->responsibility[] = $responsibility;
            $responsibility->setUser($this);
        }

        return $this;
    }

    public function removeResponsibility(Responsible $responsibility): self
    {
        if ($this->responsibility->contains($responsibility)) {
            $this->responsibility->removeElement($responsibility);
            // set the owning side to null (unless already changed)
            if ($responsibility->getUser() === $this) {
                $responsibility->setUser(null);
            }
        }

        return $this;
    }
}