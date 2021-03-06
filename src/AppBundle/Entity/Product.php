<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a parts Product,
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="category", type="string")
 * @ORM\DiscriminatorMap({"product" = "Product", "cpu" = "Cpu", "memory" = "Memory", "motherboard" = "MotherBoard"})
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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255, unique=true)
     */
    private $designation;

    /**
     * @var int
     *
     * @ORM\Column(name="buyingPrice", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $buyingPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="sellingPrice", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sellingPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255, nullable=true)
     */
    private $brand;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="entryDate", type="datetime", nullable=true)
     */
    private $entryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="discountStatus", type="string", length=255, nullable=true)
     */
    private $discountStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="stockStatus", type="string", length=255, nullable=true)
     */
    private $stockStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float", nullable=true)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255, nullable=true)
     */
    private $size;

    /**
     * Many Products have Many Providers
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Provider", mappedBy="products")
     */
    private $providers;

    /**
     * One Product has Many Media
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Media", mappedBy="product")
     */
    private $medias;

    /**
     * @var string
     *
     * @ORM\Column(name="cat", type="string", length=255)
     */
    private $cat;

    /**
     * One Product have Many CartProducts
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CartProduct", mappedBy="product")
     */
    private $cartProducts;
    
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
     * @return Product
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
     * Set buyingPrice
     *
     * @param float $buyingPrice
     *
     * @return Product
     */
    public function setBuyingPrice($buyingPrice)
    {
        $this->buyingPrice = $buyingPrice;

        return $this;
    }

    /**
     * Get buyingPrice
     *
     * @return float
     */
    public function getBuyingPrice()
    {
        return $this->buyingPrice;
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
     * Set entryDate
     *
     * @param \DateTime $entryDate
     *
     * @return Product
     */
    public function setEntryDate($entryDate)
    {
        if ($entryDate==null){
            $this->entryDate = new \DateTime("now") ;
        }else {
            $this->entryDate=$entryDate;
        }


        return $this;
    }

    /**
     * Get entryDate
     *
     * @return \DateTime
     */
    public function getEntryDate()
    {
        return $this->entryDate;
    }

    /**
     * Set discountStatus
     *
     * @param string $discountStatus
     *
     * @return Product
     */
    public function setDiscountStatus($discountStatus)
    {
        $this->discountStatus = $discountStatus;

        return $this;
    }

    /**
     * Get discountStatus
     *
     * @return string
     */
    public function getDiscountStatus()
    {
        return $this->discountStatus;
    }

    /**
     * Set stockStatus
     *
     * @param string $stockStatus
     *
     * @return Product
     */
    public function setStockStatus($stockStatus)
    {
        $this->stockStatus = $stockStatus;

        return $this;
    }

    /**
     * Get stockStatus
     *
     * @return string
     */
    public function getStockStatus()
    {
        return $this->stockStatus;
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
     * @param string $size
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
     * @return string
     */
    public function getSize()
    {
        return $this->size;
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
     * Get providers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviders()
    {
        return $this->providers;
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

    public function __toString() {
        return $this->designation;
    }

    /**
     * @return string
     */public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set cat
     *
     * @param string $cat
     *
     * @return Product
     */
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Add cartProduct
     *
     * @param \AppBundle\Entity\CartProduct $cartProduct
     *
     * @return Product
     */
    public function addCartProduct(\AppBundle\Entity\CartProduct $cartProduct)
    {
        $this->cartProducts[] = $cartProduct;

        return $this;
    }

    /**
     * Remove cartProduct
     *
     * @param \AppBundle\Entity\CartProduct $cartProduct
     */
    public function removeCartProduct(\AppBundle\Entity\CartProduct $cartProduct)
    {
        $this->cartProducts->removeElement($cartProduct);
    }

    /**
     * Get cartProducts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCartProducts()
    {
        return $this->cartProducts;
    }
}
