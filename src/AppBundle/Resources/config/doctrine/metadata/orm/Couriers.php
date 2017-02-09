<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Couriers
 *
 * @ORM\Table(name="couriers")
 * @ORM\Entity
 */
class Couriers
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
     * @var string
     *
     * @ORM\Column(name="courier_name", type="string", length=99, nullable=false)
     */
    private $courierName;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=4, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $cost;


}

