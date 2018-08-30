<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cartProduct
 *
 * @ORM\Table(name="cart_product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\cartProductRepository")
 */
class cartProduct
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
     * @var int
     *
     * @ORM\Column(name="itemNumber", type="integer")
     */
    private $itemNumber;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;


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
     * Set itemNumber
     *
     * @param integer $itemNumber
     *
     * @return cartProduct
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
     * Set total
     *
     * @param float $total
     *
     * @return cartProduct
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }
}

