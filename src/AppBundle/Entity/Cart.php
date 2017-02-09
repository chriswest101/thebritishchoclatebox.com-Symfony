<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 *
 * @ORM\Table(name="cart")
 * @ORM\Entity
 */
class Cart
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
     * @ORM\Column(name="login", type="string", length=150, nullable=false)
     */
    private $login;

    /**
     * @var integer
     *
     * @ORM\Column(name="box_id", type="integer", nullable=false)
     */
    private $boxId;



    /**
     * Set login
     *
     * @param string $login
     * @return Cart
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set boxId
     *
     * @param integer $boxId
     * @return Cart
     */
    public function setBoxId($boxId)
    {
        $this->boxId = $boxId;

        return $this;
    }

    /**
     * Get boxId
     *
     * @return integer 
     */
    public function getBoxId()
    {
        return $this->boxId;
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
