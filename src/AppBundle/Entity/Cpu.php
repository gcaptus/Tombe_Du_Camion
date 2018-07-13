<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cpu
 *
 * @ORM\Table(name="cpu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CpuRepository")
 */
class Cpu
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
     * @ORM\Column(name="memoryController", type="string", length=255, nullable=true)
     */
    private $memoryController;

    /**
     * Many Cpus have Many Providers
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Provider", inversedBy="cpus")
     */
    private $providers;

    /**
     * One Cpu have Many Medias
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Media", mappedBy="cpu")
     */
    private $medias;

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
     * @return Cpu
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
     * @return Cpu
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
