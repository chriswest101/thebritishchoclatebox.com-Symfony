<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaypalProApi
 *
 * @ORM\Table(name="paypal_pro_api")
 * @ORM\Entity
 */
class PaypalProApi
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
     * @ORM\Column(name="token", type="string", length=25, nullable=false)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_id", type="string", length=25, nullable=false)
     */
    private $transactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="payer_id", type="string", length=25, nullable=false)
     */
    private $payerId;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", length=25, nullable=false)
     */
    private $paymentType;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=15, nullable=false)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="currCodeType", type="string", length=15, nullable=false)
     */
    private $currcodetype;

    /**
     * @var string
     *
     * @ORM\Column(name="txtime", type="string", length=25, nullable=false)
     */
    private $txtime;

    /**
     * @var string
     *
     * @ORM\Column(name="ack", type="string", length=20, nullable=false)
     */
    private $ack;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_type", type="string", length=25, nullable=false)
     */
    private $transactionType;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type2", type="string", length=20, nullable=false)
     */
    private $paymentType2;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_status", type="string", length=20, nullable=false)
     */
    private $paymentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="pending_reason", type="string", length=20, nullable=false)
     */
    private $pendingReason;

    /**
     * @var string
     *
     * @ORM\Column(name="reason_code", type="string", length=20, nullable=false)
     */
    private $reasonCode;

    /**
     * @var string
     *
     * @ORM\Column(name="address_status", type="string", length=20, nullable=false)
     */
    private $addressStatus;



    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return PaypalProApi
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
     * @return PaypalProApi
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
     * Set token
     *
     * @param string $token
     * @return PaypalProApi
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set transactionId
     *
     * @param string $transactionId
     * @return PaypalProApi
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string 
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set payerId
     *
     * @param string $payerId
     * @return PaypalProApi
     */
    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;

        return $this;
    }

    /**
     * Get payerId
     *
     * @return string 
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * Set paymentType
     *
     * @param string $paymentType
     * @return PaypalProApi
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string 
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return PaypalProApi
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set currcodetype
     *
     * @param string $currcodetype
     * @return PaypalProApi
     */
    public function setCurrcodetype($currcodetype)
    {
        $this->currcodetype = $currcodetype;

        return $this;
    }

    /**
     * Get currcodetype
     *
     * @return string 
     */
    public function getCurrcodetype()
    {
        return $this->currcodetype;
    }

    /**
     * Set txtime
     *
     * @param string $txtime
     * @return PaypalProApi
     */
    public function setTxtime($txtime)
    {
        $this->txtime = $txtime;

        return $this;
    }

    /**
     * Get txtime
     *
     * @return string 
     */
    public function getTxtime()
    {
        return $this->txtime;
    }

    /**
     * Set ack
     *
     * @param string $ack
     * @return PaypalProApi
     */
    public function setAck($ack)
    {
        $this->ack = $ack;

        return $this;
    }

    /**
     * Get ack
     *
     * @return string 
     */
    public function getAck()
    {
        return $this->ack;
    }

    /**
     * Set transactionType
     *
     * @param string $transactionType
     * @return PaypalProApi
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    /**
     * Get transactionType
     *
     * @return string 
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Set paymentType2
     *
     * @param string $paymentType2
     * @return PaypalProApi
     */
    public function setPaymentType2($paymentType2)
    {
        $this->paymentType2 = $paymentType2;

        return $this;
    }

    /**
     * Get paymentType2
     *
     * @return string 
     */
    public function getPaymentType2()
    {
        return $this->paymentType2;
    }

    /**
     * Set paymentStatus
     *
     * @param string $paymentStatus
     * @return PaypalProApi
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get paymentStatus
     *
     * @return string 
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set pendingReason
     *
     * @param string $pendingReason
     * @return PaypalProApi
     */
    public function setPendingReason($pendingReason)
    {
        $this->pendingReason = $pendingReason;

        return $this;
    }

    /**
     * Get pendingReason
     *
     * @return string 
     */
    public function getPendingReason()
    {
        return $this->pendingReason;
    }

    /**
     * Set reasonCode
     *
     * @param string $reasonCode
     * @return PaypalProApi
     */
    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;

        return $this;
    }

    /**
     * Get reasonCode
     *
     * @return string 
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Set addressStatus
     *
     * @param string $addressStatus
     * @return PaypalProApi
     */
    public function setAddressStatus($addressStatus)
    {
        $this->addressStatus = $addressStatus;

        return $this;
    }

    /**
     * Get addressStatus
     *
     * @return string 
     */
    public function getAddressStatus()
    {
        return $this->addressStatus;
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
