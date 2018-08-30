<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 *
 * @ORM\Table(name="cart")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CartRepository")
 */
class Cart
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
     * @ORM\Column(name="reference", type="string", length=255, unique=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255, nullable=true, unique=true)
     */
    private $designation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="totalPrice", type="float")
     */
    private $totalPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="shippingStatus", type="string", length=255)
     */
    private $shippingStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="deliveryCompany", type="string", length=255)
     */
    private $deliveryCompany;

    /**
     * @var float
     *
     * @ORM\Column(name="packageWeight", type="float")
     */
    private $packageWeight;

    /**
     * @var bool
     *
     * @ORM\Column(name="giftBox", type="boolean")
     */
    private $giftBox;


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
     * Set reference
     *
     * @param string $reference
     *
     * @return Cart
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Cart
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Cart
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set totalPrice
     *
     * @param float $totalPrice
     *
     * @return Cart
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set shippingStatus
     *
     * @param string $shippingStatus
     *
     * @return Cart
     */
    public function setShippingStatus($shippingStatus)
    {
        $this->shippingStatus = $shippingStatus;

        return $this;
    }

    /**
     * Get shippingStatus
     *
     * @return string
     */
    public function getShippingStatus()
    {
        return $this->shippingStatus;
    }

    /**
     * Set deliveryCompany
     *
     * @param string $deliveryCompany
     *
     * @return Cart
     */
    public function setDeliveryCompany($deliveryCompany)
    {
        $this->deliveryCompany = $deliveryCompany;

        return $this;
    }

    /**
     * Get deliveryCompany
     *
     * @return string
     */
    public function getDeliveryCompany()
    {
        return $this->deliveryCompany;
    }

    /**
     * Set packageWeight
     *
     * @param float $packageWeight
     *
     * @return Cart
     */
    public function setPackageWeight($packageWeight)
    {
        $this->packageWeight = $packageWeight;

        return $this;
    }

    /**
     * Get packageWeight
     *
     * @return float
     */
    public function getPackageWeight()
    {
        return $this->packageWeight;
    }

    /**
     * Set giftBox
     *
     * @param boolean $giftBox
     *
     * @return Cart
     */
    public function setGiftBox($giftBox)
    {
        $this->giftBox = $giftBox;

        return $this;
    }

    /**
     * Get giftBox
     *
     * @return bool
     */
    public function getGiftBox()
    {
        return $this->giftBox;
    }
}

