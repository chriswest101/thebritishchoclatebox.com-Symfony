<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * BoxItem
 *
 * @ORM\Table(name="box_item")
 * @ORM\Entity
 */
class BoxItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="box_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $boxId;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_code", type="string", length=55, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prodCode;


}

