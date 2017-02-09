<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity
 */
class Countries
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
     * @ORM\Column(name="common_name", type="text", length=65535, nullable=false)
     */
    private $commonName;

    /**
     * @var string
     *
     * @ORM\Column(name="formal_name", type="text", length=65535, nullable=false)
     */
    private $formalName;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=5, nullable=false)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_symbol", type="text", length=65535, nullable=false)
     */
    private $currencySymbol;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=5, nullable=false)
     */
    private $countryCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="featured", type="integer", nullable=false)
     */
    private $featured;


}

