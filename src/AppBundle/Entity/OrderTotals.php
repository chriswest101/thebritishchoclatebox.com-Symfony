<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderTotals
 *
 * @ORM\Table(name="order_totals")
 * @ORM\Entity
 */
class OrderTotals
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="order_discount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $orderDiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="order_delivery", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $orderDelivery;

    /**
     * @var string
     *
     * @ORM\Column(name="order_vat", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $orderVat;

    /**
     * @var string
     *
     * @ORM\Column(name="order_gross", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $orderGross;



    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return OrderTotals
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orderDiscount
     *
     * @param string $orderDiscount
     * @return OrderTotals
     */
    public function setOrderDiscount($orderDiscount)
    {
        $this->orderDiscount = $orderDiscount;

        return $this;
    }

    /**
     * Get orderDiscount
     *
     * @return string 
     */
    public function getOrderDiscount()
    {
        return $this->orderDiscount;
    }

    /**
     * Set orderDelivery
     *
     * @param string $orderDelivery
     * @return OrderTotals
     */
    public function setOrderDelivery($orderDelivery)
    {
        $this->orderDelivery = $orderDelivery;

        return $this;
    }

    /**
     * Get orderDelivery
     *
     * @return string 
     */
    public function getOrderDelivery()
    {
        return $this->orderDelivery;
    }

    /**
     * Set orderVat
     *
     * @param string $orderVat
     * @return OrderTotals
     */
    public function setOrderVat($orderVat)
    {
        $this->orderVat = $orderVat;

        return $this;
    }

    /**
     * Get orderVat
     *
     * @return string 
     */
    public function getOrderVat()
    {
        return $this->orderVat;
    }

    /**
     * Set orderGross
     *
     * @param string $orderGross
     * @return OrderTotals
     */
    public function setOrderGross($orderGross)
    {
        $this->orderGross = $orderGross;

        return $this;
    }

    /**
     * Get orderGross
     *
     * @return string 
     */
    public function getOrderGross()
    {
        return $this->orderGross;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
