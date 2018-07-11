<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Product as Product;

/**
 * Cpu
 *
 * @ORM\Table(name="cpu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CpuRepository")
 */
class Cpu extends Product
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
     * @ORM\Column(name="architecture", type="string", length=255)
     */
    protected $architecture;

    /**
     * @var float
     *
     * @ORM\Column(name="frequency", type="float")
     */
    protected $frequency;

    /**
     * @var string
     *
     * @ORM\Column(name="memoryController", type="string", length=255)
     */
    protected $memoryController;


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
     * @return Cpu
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
     * Set memoryController
     *
     * @param string $memoryController
     *
     * @return Cpu
     */
    public function setMemoryController($memoryController)
    {
        $this->memoryController = $memoryController;

        return $this;
    }

    /**
     * Get memoryController
     *
     * @return string
     */
    public function getMemoryController()
    {
        return $this->memoryController;
    }
}