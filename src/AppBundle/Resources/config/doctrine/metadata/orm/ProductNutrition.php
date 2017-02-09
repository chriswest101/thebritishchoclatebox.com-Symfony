<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ProductNutrition
 *
 * @ORM\Table(name="product_nutrition", indexes={@ORM\Index(name="fk_prod_code", columns={"prod_code"})})
 * @ORM\Entity
 */
class ProductNutrition
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
     * @ORM\Column(name="prod_code", type="string", length=30, nullable=false)
     */
    private $prodCode;

    /**
     * @var string
     *
     * @ORM\Column(name="kcal", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $kcal;

    /**
     * @var string
     *
     * @ORM\Column(name="fat", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $fat;

    /**
     * @var string
     *
     * @ORM\Column(name="saturates", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $saturates;

    /**
     * @var string
     *
     * @ORM\Column(name="sugars", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $sugars;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="per", type="string", length=35, nullable=false)
     */
    private $per;


}

