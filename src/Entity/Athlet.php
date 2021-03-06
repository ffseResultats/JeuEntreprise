<?php

namespace App\Entity;

use App\Repository\AthletRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AthletRepository")
 */
class Athlet
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
    private $name;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $firstname;

    /**
     * @ORM\Column(type="date")
     */
    private $dateBirth;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $license;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }



    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getDateBirth(): ?\DateTimeInterface
    {
        return $this->dateBirth;
    }

    public function setDateBirth(\DateTimeInterface $dateBirth): self
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }


    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $goldMedal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $silverMedal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bronzeMedal;

    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param mixed $license
     */
    public function setLicense($license): void
    {
        $this->license = $license;
    }

    /**
     * @return mixed
     */
    public function getGoldMedal()
    {
        return $this->goldMedal;
    }

    /**
     * @param mixed $goldMedal
     */
    public function setGoldMedal($goldMedal): void
    {
        $this->goldMedal = $goldMedal;
    }

    /**
     * @return mixed
     */
    public function getSilverMedal()
    {
        return $this->silverMedal;
    }

    /**
     * @param mixed $silverMedal
     */
    public function setSilverMedal($silverMedal): void
    {
        $this->silverMedal = $silverMedal;
    }

    /**
     * @return mixed
     */
    public function getBronzeMedal()
    {
        return $this->bronzeMedal;
    }

    /**
     * @param mixed $bronzeMedal
     */
    public function setBronzeMedal($bronzeMedal): void
    {
        $this->bronzeMedal = $bronzeMedal;
    }

    public function __construct()
    {
        $this->participant = new ArrayCollection();
        $this->teamCreated = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Participant", mappedBy="athlet", cascade={"remove"})
     */
    private $participant;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Company", inversedBy="athlets")
     */
    private $company;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TeamCreated", mappedBy="athlet", cascade={"remove"})
     */
    private $teamCreated;

    /**
     * @return ArrayCollection
     */
    public function getTeamCreated(): ArrayCollection
    {
        return $this->teamCreated;
    }

    /**
     * @param ArrayCollection $teamCreated
     */
    public function setTeamCreated(ArrayCollection $teamCreated): void
    {
        $this->teamCreated = $teamCreated;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * @param mixed $participant
     */
    public function setParticipant($participant): void
    {
        $this->participant = $participant;
    }


}
