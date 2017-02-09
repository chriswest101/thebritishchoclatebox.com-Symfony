<?php

namespace AppBundle\Entity;

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



    /**
     * Set foo
     *
     * @param integer $foo
     * @return OrderIds
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;

        return $this;
    }

    /**
     * Get foo
     *
     * @return integer 
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
