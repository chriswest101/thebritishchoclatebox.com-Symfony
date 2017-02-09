<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderPayments
 *
 * @ORM\Table(name="order_payments")
 * @ORM\Entity
 */
class OrderPayments
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
     * @ORM\Column(name="pay_type", type="string", length=20, nullable=false)
     */
    private $payType;

    /**
     * @var string
     *
     * @ORM\Column(name="pay_ref", type="text", length=65535, nullable=false)
     */
    private $payRef;

    /**
     * @var string
     *
     * @ORM\Column(name="pay_ref2", type="text", length=65535, nullable=false)
     */
    private $payRef2;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=5, nullable=false)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="taken_by", type="string", length=30, nullable=false)
     */
    private $takenBy;

    /**
     * @var string
     *
     * @ORM\Column(name="timestamp", type="string", length=14, nullable=false)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=15, nullable=false)
     */
    private $status;



    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return OrderPayments
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
     * Set payType
     *
     * @param string $payType
     * @return OrderPayments
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;

        return $this;
    }

    /**
     * Get payType
     *
     * @return string 
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * Set payRef
     *
     * @param string $payRef
     * @return OrderPayments
     */
    public function setPayRef($payRef)
    {
        $this->payRef = $payRef;

        return $this;
    }

    /**
     * Get payRef
     *
     * @return string 
     */
    public function getPayRef()
    {
        return $this->payRef;
    }

    /**
     * Set payRef2
     *
     * @param string $payRef2
     * @return OrderPayments
     */
    public function setPayRef2($payRef2)
    {
        $this->payRef2 = $payRef2;

        return $this;
    }

    /**
     * Get payRef2
     *
     * @return string 
     */
    public function getPayRef2()
    {
        return $this->payRef2;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return OrderPayments
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return OrderPayments
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set takenBy
     *
     * @param string $takenBy
     * @return OrderPayments
     */
    public function setTakenBy($takenBy)
    {
        $this->takenBy = $takenBy;

        return $this;
    }

    /**
     * Get takenBy
     *
     * @return string 
     */
    public function getTakenBy()
    {
        return $this->takenBy;
    }

    /**
     * Set timestamp
     *
     * @param string $timestamp
     * @return OrderPayments
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return OrderPayments
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
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
