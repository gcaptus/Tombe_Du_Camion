<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaiementType
 *
 * @ORM\Table(name="paiement_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaiementTypeRepository")
 */
class PaiementType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="paiementType", type="string", length=255)
     */
    private $paiementType;

    /**
     * @var string
     *
     * @ORM\Column(name="fullName", type="string", length=255)
     */
    private $fullName;

    /**
     * @var int
     *
     * @ORM\Column(name="code", type="integer", unique=true)
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expDate", type="datetime")
     */
    private $expDate;

    /**
     * @var int
     *
     * @ORM\Column(name="crypt", type="integer")
     */
    private $crypt;

    /**
     * Many PaiementType have One User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="paiementTypes")
     */
    private $user;




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return PaiementType
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set paiementType
     *
     * @param string $paiementType
     *
     * @return PaiementType
     */
    public function setPaiementType($paiementType)
    {
        $this->paiementType = $paiementType;

        return $this;
    }

    /**
     * Get paiementType
     *
     * @return string
     */
    public function getPaiementType()
    {
        return $this->paiementType;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return PaiementType
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return PaiementType
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set expDate
     *
     * @param \DateTime $expDate
     *
     * @return PaiementType
     */
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;

        return $this;
    }

    /**
     * Get expDate
     *
     * @return \DateTime
     */
    public function getExpDate()
    {
        return $this->expDate;
    }

    /**
     * Set crypt
     *
     * @param integer $crypt
     *
     * @return PaiementType
     */
    public function setCrypt($crypt)
    {
        $this->crypt = $crypt;

        return $this;
    }

    /**
     * Get crypt
     *
     * @return int
     */
    public function getCrypt()
    {
        return $this->crypt;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return PaiementType
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    public function __toString() {
        return $this->designation;
    }
}
