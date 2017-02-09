<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity
 */
class Orders
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
     * @ORM\Column(name="email_address", type="string", length=90, nullable=false)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="order_date", type="string", length=14, nullable=false)
     */
    private $orderDate;

    /**
     * @var string
     *
     * @ORM\Column(name="dispatch_date", type="string", length=14, nullable=false)
     */
    private $dispatchDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="delivery_address_id", type="integer", nullable=false)
     */
    private $deliveryAddressId;

    /**
     * @var integer
     *
     * @ORM\Column(name="delivery_id", type="integer", nullable=false)
     */
    private $deliveryId;



    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return Orders
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
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return Orders
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set orderDate
     *
     * @param string $orderDate
     * @return Orders
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return string 
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set dispatchDate
     *
     * @param string $dispatchDate
     * @return Orders
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->dispatchDate = $dispatchDate;

        return $this;
    }

    /**
     * Get dispatchDate
     *
     * @return string 
     */
    public function getDispatchDate()
    {
        return $this->dispatchDate;
    }

    /**
     * Set deliveryAddressId
     *
     * @param integer $deliveryAddressId
     * @return Orders
     */
    public function setDeliveryAddressId($deliveryAddressId)
    {
        $this->deliveryAddressId = $deliveryAddressId;

        return $this;
    }

    /**
     * Get deliveryAddressId
     *
     * @return integer 
     */
    public function getDeliveryAddressId()
    {
        return $this->deliveryAddressId;
    }

    /**
     * Set deliveryId
     *
     * @param integer $deliveryId
     * @return Orders
     */
    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * Get deliveryId
     *
     * @return integer 
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
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
