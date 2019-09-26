<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookingsRepository")
 */
class Bookings
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
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailid;

    /**
     * @ORM\Column(type="datetime")
     */
    private $entrydate;

    /**
     * @ORM\Column(type="date")
     */
    private $exitdate;

    /**
     * @ORM\Column(type="integer")
     */
    private $phonenumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmailid(): ?string
    {
        return $this->emailid;
    }

    public function setEmailid(string $emailid): self
    {
        $this->emailid = $emailid;

        return $this;
    }

    public function getEntrydate(): ?\DateTimeInterface
    {
        return $this->entrydate;
    }

    public function setEntrydate(\DateTimeInterface $entrydate): self
    {
    	
        $this->entrydate = $entrydate;

        return $this;
    }

    public function getExitdate(): ?\DateTimeInterface
    {
        return $this->exitdate;
    }

    public function setExitdate(\DateTimeInterface $exitdate): self
    {
        $this->exitdate = $exitdate;

        return $this;
    }

    public function getPhonenumber(): ?int
    {
        return $this->phonenumber;
    }

    public function setPhonenumber(int $phonenumber): self
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }
}
