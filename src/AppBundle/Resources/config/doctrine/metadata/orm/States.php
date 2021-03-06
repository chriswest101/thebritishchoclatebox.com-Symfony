<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * States
 *
 * @ORM\Table(name="states")
 * @ORM\Entity
 */
class States
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
     * @ORM\Column(name="state", type="text", length=65535, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="short_code", type="string", length=4, nullable=false)
     */
    private $shortCode;


}

