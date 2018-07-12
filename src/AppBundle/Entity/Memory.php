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
    private $id;

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
     * @var string
     *
     * @ORM\Column(name="capacity", type="string", length=255, nullable=true)
     */
    private $capacity;

    /**
     * @var int
     *
     * @ORM\Column(name="itemNumber", type="integer", nullable=true)
     */
    private $itemNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ramPerItem", type="string", length=255, nullable=true)
     */
    private $ramPerItem;


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
     * Set capacity
     *
     * @param string $capacity
     *
     * @return Memory
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set itemNumber
     *
     * @param integer $itemNumber
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
     * @return int
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * Set ramPerItem
     *
     * @param string $ramPerItem
     *
     * @return Memory
     */
    public function setRamPerItem($ramPerItem)
    {
        $this->ramPerItem = $ramPerItem;

        return $this;
    }

    /**
     * Get ramPerItem
     *
     * @return string
     */
    public function getRamPerItem()
    {
        return $this->ramPerItem;
    }
}
