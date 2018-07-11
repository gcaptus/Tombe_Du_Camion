<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Product as Product;

/**
 * MotherBoard
 *
 * @ORM\Table(name="mother_board")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MotherBoardRepository")
 */
class MotherBoard extends Product
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
     * @ORM\Column(name="model", type="string", length=255)
     */
    protected $model;

    /**
     * @var string
     *
     * @ORM\Column(name="socket", type="string", length=255)
     */
    protected $socket;

    /**
     * @var string
     *
     * @ORM\Column(name="chipset", type="string", length=255)
     */
    protected $chipset;

    /**
     * @var string
     *
     * @ORM\Column(name="memoryType", type="string", length=255)
     */
    protected $memoryType;

    /**
     * @var string
     *
     * @ORM\Column(name="memoryFrequency", type="string", length=255)
     */
    protected $memoryFrequency;

    /**
     * @var string
     *
     * @ORM\Column(name="maxRamPerSlot", type="string", length=255)
     */
    protected $maxRamPerSlot;

    /**
     * @var string
     *
     * @ORM\Column(name="graphSlotType", type="string", length=255)
     */
    protected $graphSlotType;

    /**
     * @var string
     *
     * @ORM\Column(name="chipsetMultiGpu", type="string", length=255)
     */
    protected $chipsetMultiGpu;


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
     * @return MotherBoard
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
     * @return MotherBoard
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
     * Set socket
     *
     * @param string $socket
     *
     * @return MotherBoard
     */
    public function setSocket($socket)
    {
        $this->socket = $socket;

        return $this;
    }

    /**
     * Get socket
     *
     * @return string
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * Set chipset
     *
     * @param string $chipset
     *
     * @return MotherBoard
     */
    public function setChipset($chipset)
    {
        $this->chipset = $chipset;

        return $this;
    }

    /**
     * Get chipset
     *
     * @return string
     */
    public function getChipset()
    {
        return $this->chipset;
    }

    /**
     * Set memoryType
     *
     * @param string $memoryType
     *
     * @return MotherBoard
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
     * Set memoryFrequency
     *
     * @param string $memoryFrequency
     *
     * @return MotherBoard
     */
    public function setMemoryFrequency($memoryFrequency)
    {
        $this->memoryFrequency = $memoryFrequency;

        return $this;
    }

    /**
     * Get memoryFrequency
     *
     * @return string
     */
    public function getMemoryFrequency()
    {
        return $this->memoryFrequency;
    }

    /**
     * Set maxRamPerSlot
     *
     * @param string $maxRamPerSlot
     *
     * @return MotherBoard
     */
    public function setMaxRamPerSlot($maxRamPerSlot)
    {
        $this->maxRamPerSlot = $maxRamPerSlot;

        return $this;
    }

    /**
     * Get maxRamPerSlot
     *
     * @return string
     */
    public function getMaxRamPerSlot()
    {
        return $this->maxRamPerSlot;
    }

    /**
     * Set graphSlotType
     *
     * @param string $graphSlotType
     *
     * @return MotherBoard
     */
    public function setGraphSlotType($graphSlotType)
    {
        $this->graphSlotType = $graphSlotType;

        return $this;
    }

    /**
     * Get graphSlotType
     *
     * @return string
     */
    public function getGraphSlotType()
    {
        return $this->graphSlotType;
    }

    /**
     * Set chipsetMultiGpu
     *
     * @param string $chipsetMultiGpu
     *
     * @return MotherBoard
     */
    public function setChipsetMultiGpu($chipsetMultiGpu)
    {
        $this->chipsetMultiGpu = $chipsetMultiGpu;

        return $this;
    }

    /**
     * Get chipsetMultiGpu
     *
     * @return string
     */
    public function getChipsetMultiGpu()
    {
        return $this->chipsetMultiGpu;
    }
}
