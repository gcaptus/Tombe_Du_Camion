<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memory
 *
 * @ORM\Table(name="memory")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MemoryRepository")
 */
class Memory extends Product
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
     * @ORM\Column(name="brand", type="string", length=255)
     */
    protected $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    protected $model;

    /**
     * @var string
     *
     * @ORM\Column(name="memoryType", type="string", length=255)
     */
    protected $memoryType;

    /**
     * @var string
     *
     * @ORM\Column(name="memoryCapacity", type="string", length=255)
     */
    protected $memoryCapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="itemNumber", type="string", length=255)
     */
    protected $itemNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="memoryPerItem", type="string", length=255)
     */
    protected $memoryPerItem;


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
     * Set brand
     *
     * @param string $brand
     *
     * @return Memory
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
     * Set model
     *
     * @param string $model
     *
     * @return Memory
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set memoryType
     *
     * @param string $memoryType
     *
     * @return Memory
     */
    public function setMemoryType($memoryType)
    {
        $this->memoryType = $memoryType;

        return $this;
    }

    /**
     * Get memoryType
     *
     * @return string
     */
    public function getMemoryType()
    {
        return $this->memoryType;
    }

    /**
     * Set memoryCapacity
     *
     * @param string $memoryCapacity
     *
     * @return Memory
     */
    public function setMemoryCapacity($memoryCapacity)
    {
        $this->memoryCapacity = $memoryCapacity;

        return $this;
    }

    /**
     * Get memoryCapacity
     *
     * @return string
     */
    public function getMemoryCapacity()
    {
        return $this->memoryCapacity;
    }

    /**
     * Set itemNumber
     *
     * @param string $itemNumber
     *
     * @return Memory
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }

    /**
     * Get itemNumber
     *
     * @return string
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * Set memoryPerItem
     *
     * @param string $memoryPerItem
     *
     * @return Memory
     */
    public function setMemoryPerItem($memoryPerItem)
    {
        $this->memoryPerItem = $memoryPerItem;

        return $this;
    }

    /**
     * Get memoryPerItem
     *
     * @return string
     */
    public function getMemoryPerItem()
    {
        return $this->memoryPerItem;
    }
}
