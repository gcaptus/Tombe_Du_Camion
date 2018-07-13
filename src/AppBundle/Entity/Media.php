<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MediaRepository")
 */
class Media
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
     * @var array
     *
     * @ORM\Column(name="url", type="array", nullable=true)
     */
    private $url;

    /**
     * Many Medias have One Cpu
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cpu", inversedBy="medias")
     */
    private $cpu;


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
     * Set url
     *
     * @param array $url
     *
     * @return Media
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return array
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return Media
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set cpu
     *
     * @param \AppBundle\Entity\Cpu $cpu
     *
     * @return Media
     */
    public function setCpu(\AppBundle\Entity\Cpu $cpu = null)
    {
        $this->cpu = $cpu;

        return $this;
    }

    /**
     * Get cpu
     *
     * @return \AppBundle\Entity\Cpu
     */
    public function getCpu()
    {
        return $this->cpu;
    }
}
