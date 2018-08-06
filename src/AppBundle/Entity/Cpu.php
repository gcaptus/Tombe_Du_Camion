<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpu
 *
 * @ORM\Table(name="cpu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CpuRepository")
 */
class Cpu extends Product
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
     * @ORM\Column(name="socket", type="string", length=255, nullable=true)
     */
    private $socket;

    /**
     * @var string
     *
     * @ORM\Column(name="architecture", type="string", length=255, nullable=true)
     */
    private $architecture;

    /**
     * @var float
     *
     * @ORM\Column(name="frequency", type="float", nullable=true)
     */
    private $frequency;

    /**
     * @var string
     *
     * @ORM\Column(name="memoryControl", type="string", length=255, nullable=true)
     */
    private $memoryControl;

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Cpu
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
     * @return Cpu
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
     * Set architecture
     *
     * @param string $architecture
     *
     * @return Cpu
     */
    public function setArchitecture($architecture)
    {
        $this->architecture = $architecture;

        return $this;
    }

    /**
     * Get architecture
     *
     * @return string
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }

    /**
     * Set frequency
     *
     * @param float $frequency
     *
     * @return Cpu
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return float
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set memoryControl
     *
     * @param string $memoryControl
     *
     * @return Cpu
     */
    public function setMemoryControl($memoryControl)
    {
        $this->memoryControl = $memoryControl;

        return $this;
    }

    /**
     * Get memoryControl
     *
     * @return string
     */
    public function getMemoryControl()
    {
        return $this->memoryControl;
    }
}

