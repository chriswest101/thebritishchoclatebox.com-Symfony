<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Couriers
 *
 * @ORM\Table(name="couriers")
 * @ORM\Entity
 */
class Couriers
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
     * @ORM\Column(name="courier_name", type="string", length=99, nullable=false)
     */
    private $courierName;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=4, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $cost;



    /**
     * Set courierName
     *
     * @param string $courierName
     * @return Couriers
     */
    public function setCourierName($courierName)
    {
        $this->courierName = $courierName;

        return $this;
    }

    /**
     * Get courierName
     *
     * @return string 
     */
    public function getCourierName()
    {
        return $this->courierName;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Couriers
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set cost
     *
     * @param string $cost
     * @return Couriers
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string 
     */
    public function getCost()
    {
        return $this->cost;
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
