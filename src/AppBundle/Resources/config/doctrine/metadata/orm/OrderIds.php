<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * OrderIds
 *
 * @ORM\Table(name="order_ids")
 * @ORM\Entity
 */
class OrderIds
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
     * @ORM\Column(name="foo", type="integer", nullable=false)
     */
    private $foo;


}

