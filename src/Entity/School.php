<?php

namespace App\Entity;

use App\Repository\SchoolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SchoolRepository::class)
 */
class School
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $street;

    /**
     * @ORM\Column(type="smallint")
     */
    private $number;

    /**
     * @ORM\Column(type="smallint")
     */
    private $zip;

    /**
     * @ORM\OneToMany(targetEntity=Implantation::class, mappedBy="school", orphanRemoval=true)
     */
    private $implantations;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;


    /**
     * School constructor.
     */
    public function __construct() {
        $this->implantations = new ArrayCollection();
    }

    /**
     * Return the School ID.
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Return the School name.
     * @return string|null
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Set the School name.
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    /**
     * Return the School street.
     * @return string|null
     */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Set the School street.
     * @param string $street
     * @return $this
     */
    public function setStreet(string $street): self {
        $this->street = $street;
        return $this;
    }

    /**
     * Return the School number.
     * @return int|null
     */
    public function getNumber(): ?int {
        return $this->number;
    }

    /**
     * Set the School number.
     * @param int $number
     * @return $this
     */
    public function setNumber(int $number): self {
        $this->number = $number;
        return $this;
    }

    /**
     * Return the School postal code.
     * @return int|null
     */
    public function getZip(): ?int {
        return $this->zip;
    }

    /**
     * Set the School postal code.
     * @param int $zip
     * @return $this
     */
    public function setZip(int $zip): self {
        $this->zip = $zip;
        return $this;
    }

    /**
     * Return the School country.
     * @return string|null
     */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Set the School Country.
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country): self {
        $this->country = $country;
        return $this;
    }

    /**
     * Return the School Implantations
     * @return Collection|Implantation[]
     */
    public function getImplantations(): Collection {
        return $this->implantations;
    }

    /**
     * Add a School Implantation.
     * @param Implantation $implantation
     * @return $this
     */
    public function addImplantation(Implantation $implantation): self {
        if (!$this->implantations->contains($implantation)) {
            $this->implantations[] = $implantation;
            $implantation->setSchool($this);
        }
        return $this;
    }

    /**
     * Remove a School Implantation.
     * @param Implantation $implantation
     * @return $this
     */
    public function removeImplantation(Implantation $implantation): self {
        if ($this->implantations->removeElement($implantation)) {
            // set the owning side to null (unless already changed)
            if ($implantation->getSchool() === $this) {
                $implantation->setSchool(null);
            }
        }
        return $this;
    }

    /**
     * Return the School's string representation.
     * @return string
     */
    public function __toString(): string {
        return $this->getName();
    }
}
