<?php



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


}

