<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Addresses
 *
 * @ORM\Table(name="addresses")
 * @ORM\Entity
 */
class Addresses
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
     * @ORM\Column(name="email_address", type="string", length=80, nullable=false)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address_1", type="string", length=190, nullable=false)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address_2", type="string", length=190, nullable=false)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=50, nullable=false)
     */
    private $town;

    /**
     * @var string
     *
     * @ORM\Column(name="county", type="string", length=50, nullable=false)
     */
    private $county;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=10, nullable=false)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=25, nullable=false)
     */
    private $country;


}

