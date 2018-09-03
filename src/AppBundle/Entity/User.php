<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var \Date
     *
     * @ORM\Column(name="birthDate", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="gender", type="boolean", nullable=true)
     */
    private $gender;

    /**
     * One User have Many PaiementTypes
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\PaiementType", mappedBy="user")
     */
    private $paiementTypes;

    /**
     * One User have Many Addresses
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Address", mappedBy="user")
     */
    private $addresses;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthDate.
     *
     * @param \Date $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate.
     *
     * @return \Date
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set gender.
     *
     * @param bool $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return bool
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Add paiementType
     *
     * @param \AppBundle\Entity\PaiementType $paiementType
     *
     * @return User
     */
    public function addPaiementType(\AppBundle\Entity\PaiementType $paiementType)
    {
        $this->paiementTypes[] = $paiementType;

        return $this;
    }

    /**
     * Remove paiementType
     *
     * @param \AppBundle\Entity\PaiementType $paiementType
     */
    public function removePaiementType(\AppBundle\Entity\PaiementType $paiementType)
    {
        $this->paiementTypes->removeElement($paiementType);
    }

    /**
     * Get paiementTypes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPaiementTypes()
    {
        return $this->paiementTypes;
    }

    /**
     * Add address
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return User
     */
    public function addAddress(\AppBundle\Entity\Address $address)
    {
        $this->addresses[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \AppBundle\Entity\Address $address
     */
    public function removeAddress(\AppBundle\Entity\Address $address)
    {
        $this->addresses->removeElement($address);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
}
