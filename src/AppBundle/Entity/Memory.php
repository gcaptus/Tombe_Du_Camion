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
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="memoryType", type="string", length=255, nullable=true)
     */
    private $memoryType;

    /**
     * @var int
     *
     * @ORM\Column(name="memoryTotalCapacity", type="integer", nullable=true)
     */
    private $memoryTotalCapacity;

    /**
     * @var int
     *
     * @ORM\Column(name="memoryItem", type="integer", nullable=true)
     */
    private $memoryItem;

    /**
     * @var int
     *
     * @ORM\Column(name="capacityPerItem", type="integer", nullable=true)
     */
    private $capacityPerItem;

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
     * Set memoryTotalCapacity
     *
     * @param integer $memoryTotalCapacity
     *
     * @return Memory
     */
    public function setMemoryTotalCapacity($memoryTotalCapacity)
    {
        $this->memoryTotalCapacity = $memoryTotalCapacity;

        return $this;
    }

    /**
     * Get memoryTotalCapacity
     *
     * @return int
     */
    public function getMemoryTotalCapacity()
    {
        return $this->memoryTotalCapacity;
    }

    /**
     * Set memoryItem
     *
     * @param integer $memoryItem
     *
     * @return Memory
     */
    public function setMemoryItem($memoryItem)
    {
        $this->memoryItem = $memoryItem;

        return $this;
    }

    /**
     * Get memoryItem
     *
     * @return int
     */
    public function getMemoryItem()
    {
        return $this->memoryItem;
    }

    /**
     * Set capacityPerItem
     *
     * @param integer $capacityPerItem
     *
     * @return Memory
     */
    public function setCapacityPerItem($capacityPerItem)
    {
        $this->capacityPerItem = $capacityPerItem;

        return $this;
    }

    /**
     * Get capacityPerItem
     *
     * @return int
     */
    public function getCapacityPerItem()
    {
        return $this->capacityPerItem;
    }
}
