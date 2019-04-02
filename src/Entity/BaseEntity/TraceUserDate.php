<?php
/**
 * Created by PhpStorm.
 * User: delannoy5
 * Date: 17/03/2019
 * Time: 18:22
 */

namespace App\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
trait TraceUserDate
{

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $Create_user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $Modification_user;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Modification_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Create_date;

    public function __construct()
    {

    }

    public function getCreateUser(): UserInterface
    {
        return $this->Create_user;
    }

    public function setCreateUser(UserInterface $Create_user): self
    {
        $this->Create_user = $Create_user;

        return $this;
    }

    public function getModificationUser(): UserInterface
    {
        return $this->Modification_user;
    }

    public function setModificationUser(UserInterface $Modification_user): self
    {
        $this->Modification_user = $Modification_user;

        return $this;
    }

    public function getModificationDate(): ?\DateTimeInterface
    {
        return $this->Modification_date;
    }

    public function setModificationDate(\DateTimeInterface $Modification_date): self
    {
        if ( !is_null($this->getCreateDate())) {
            $this->Modification_date = date("Y-m-d H:i:s");
        }

        return $this;
    }



    public function getCreateDate()
    {
        return $this->Create_date;
    }

    /**
     * @return TraceUserDate
     */
    public function setCreateDate(): self
    {
        if (is_null($this->getCreateDate())) {
            $this->Create_date = date("Y-m-d H:i:s");
        }
        return $this;
    }
}

