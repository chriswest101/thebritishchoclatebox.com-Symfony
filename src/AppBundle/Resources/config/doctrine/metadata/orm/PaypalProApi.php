<?php



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


}

