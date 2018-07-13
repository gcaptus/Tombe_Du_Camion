<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */

class Product
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var float
     *
     * @ORM\Column(name="purchase_price", type="float")
     */
    protected $purchasePrice;

    /**
     * @var float
     *
     * @ORM\Column(name="selling_price", type="float")
     */
    protected $sellingPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     */
    protected $brand;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="register_date", type="datetime")
     */
    protected $registerDate;

    /**
     * @var string
     *
     * @ORM\Column(name="promo", type="string", length=255)
     */
    protected $promo;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255)
     */
    protected $Type;

    /**
     * @var string
     *
     * @ORM\Column(name="available", type="string", length=255)
     */
    protected $available;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    protected $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float")
     */
    protected $weight;

    /**
     * @var float
     *
     * @ORM\Column(name="size", type="float")
     */
    protected $size;

    /**
  
     */
    protected $providers;

    /**
     * 
     */
    protected $medias;

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
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set purchasePrice
     *
     * @param float $purchasePrice
     *
     * @return Product
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    /**
     * Get purchasePrice
     *
     * @return float
     */
    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * Set sellingPrice
     *
     * @param float $sellingPrice
     *
     * @return Product
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;

        return $this;
    }

    /**
     * Get sellingPrice
     *
     * @return float
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Product
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set registerDate
     *
     * @param \DateTime $registerDate
     *
     * @return Product
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return \DateTime
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set promo
     *
     * @param string $promo
     *
     * @return Product
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return string
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set available
     *
     * @param string $available
     *
     * @return Product
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return string
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set weight
     *
     * @param float $weight
     *
     * @return Product
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set size
     *
     * @param float $size
     *
     * @return Product
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return mixed
     */
    public function getProviders()
    {
        return $this->providers;
    }

    /**
     * @param mixed $providers
     */
    public function setProviders($providers)
    {
        $this->providers = $providers;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->providers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add provider
     *
     * @param \AppBundle\Entity\Provider $provider
     *
     * @return Product
     */
    public function addProvider(\AppBundle\Entity\Provider $provider)
    {
        $this->providers[] = $provider;

        return $this;
    }

    /**
     * Remove provider
     *
     * @param \AppBundle\Entity\Provider $provider
     */
    public function removeProvider(\AppBundle\Entity\Provider $provider)
    {
        $this->providers->removeElement($provider);
    }

    /**
     * Add media
     *
     * @param \AppBundle\Entity\Media $media
     *
     * @return Product
     */
    public function addMedia(\AppBundle\Entity\Media $media)
    {
        $this->medias[] = $media;

        return $this;
    }

    /**
     * Remove media
     *
     * @param \AppBundle\Entity\Media $media
     */
    public function removeMedia(\AppBundle\Entity\Media $media)
    {
        $this->medias->removeElement($media);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedias()
    {
        return $this->medias;
    }
}
