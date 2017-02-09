<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Discounts
 *
 * @ORM\Table(name="discounts")
 * @ORM\Entity
 */
class Discounts
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
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=15, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="percent", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $percent;

    /**
     * @var string
     *
     * @ORM\Column(name="start", type="string", length=14, nullable=false)
     */
    private $start;

    /**
     * @var string
     *
     * @ORM\Column(name="end", type="string", length=14, nullable=false)
     */
    private $end;


}

