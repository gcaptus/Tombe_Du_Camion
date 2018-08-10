<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="socket", type="string", length=255, nullable=true)
     */
    private $socket;

    /**
     * @var string
     *
     * @ORM\Column(name="chipset", type="string", length=255, nullable=true)
     */
    private $chipset;

    /**
     * @var string
     *
     * @ORM\Column(name="memoryType", type="string", length=255, nullable=true)
     */
    private $memoryType;

    /**
     * @var float
     *
     * @ORM\Column(name="memoryFrequencyMax", type="float", nullable=true)
     */
    private $memoryFrequencyMax;

    /**
     * @var string
     *
     * @ORM\Column(name="memoryCapacityMax", type="string", length=255, nullable=true)
     */
    private $memoryCapacityMax;

    /**
     * @var string
     *
     * @ORM\Column(name="graphicalSlot", type="string", length=255, nullable=true)
     */
    private $graphicalSlot;

    /**
     * @var string
     *
     * @ORM\Column(name="multiGPUSlot", type="string", length=255, nullable=true)
     */
    private $multiGPUSlot;


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
     * Set memoryFrequencyMax
     *
     * @param float $memoryFrequencyMax
     *
     * @return MotherBoard
     */
    public function setMemoryFrequencyMax($memoryFrequencyMax)
    {
        $this->memoryFrequencyMax = $memoryFrequencyMax;

        return $this;
    }

    /**
     * Get memoryFrequencyMax
     *
     * @return float
     */
    public function getMemoryFrequencyMax()
    {
        return $this->memoryFrequencyMax;
    }

    /**
     * Set memoryCapacityMax
     *
     * @param string $memoryCapacityMax
     *
     * @return MotherBoard
     */
    public function setMemoryCapacityMax($memoryCapacityMax)
    {
        $this->memoryCapacityMax = $memoryCapacityMax;

        return $this;
    }

    /**
     * Get memoryCapacityMax
     *
     * @return string
     */
    public function getMemoryCapacityMax()
    {
        return $this->memoryCapacityMax;
    }

    /**
     * Set graphicalSlot
     *
     * @param string $graphicalSlot
     *
     * @return MotherBoard
     */
    public function setGraphicalSlot($graphicalSlot)
    {
        $this->graphicalSlot = $graphicalSlot;

        return $this;
    }

    /**
     * Get graphicalSlot
     *
     * @return string
     */
    public function getGraphicalSlot()
    {
        return $this->graphicalSlot;
    }

    /**
     * Set multiGPUSlot
     *
     * @param string $multiGPUSlot
     *
     * @return MotherBoard
     */
    public function setMultiGPUSlot($multiGPUSlot)
    {
        $this->multiGPUSlot = $multiGPUSlot;

        return $this;
    }

    /**
     * Get multiGPUSlot
     *
     * @return string
     */
    public function getMultiGPUSlot()
    {
        return $this->multiGPUSlot;
    }
}

