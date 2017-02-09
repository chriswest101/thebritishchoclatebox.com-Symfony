<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity
 */
class Products
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
     * @ORM\Column(name="prod_code", type="string", length=55, nullable=false)
     */
    private $prodCode;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacturer", type="text", length=65535, nullable=false)
     */
    private $manufacturer;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image_path", type="text", length=65535, nullable=false)
     */
    private $imagePath;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="sale_price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $salePrice = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="subscription", type="integer", nullable=false)
     */
    private $subscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="featured", type="integer", nullable=false)
     */
    private $featured = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="discontinued", type="integer", nullable=false)
     */
    private $discontinued = '0';


}

