<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductNutrition
 *
 * @ORM\Table(name="product_nutrition")
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



    /**
     * Set prodCode
     *
     * @param string $prodCode
     * @return ProductNutrition
     */
    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;

        return $this;
    }

    /**
     * Get prodCode
     *
     * @return string 
     */
    public function getProdCode()
    {
        return $this->prodCode;
    }

    /**
     * Set kcal
     *
     * @param string $kcal
     * @return ProductNutrition
     */
    public function setKcal($kcal)
    {
        $this->kcal = $kcal;

        return $this;
    }

    /**
     * Get kcal
     *
     * @return string 
     */
    public function getKcal()
    {
        return $this->kcal;
    }

    /**
     * Set fat
     *
     * @param string $fat
     * @return ProductNutrition
     */
    public function setFat($fat)
    {
        $this->fat = $fat;

        return $this;
    }

    /**
     * Get fat
     *
     * @return string 
     */
    public function getFat()
    {
        return $this->fat;
    }

    /**
     * Set saturates
     *
     * @param string $saturates
     * @return ProductNutrition
     */
    public function setSaturates($saturates)
    {
        $this->saturates = $saturates;

        return $this;
    }

    /**
     * Get saturates
     *
     * @return string 
     */
    public function getSaturates()
    {
        return $this->saturates;
    }

    /**
     * Set sugars
     *
     * @param string $sugars
     * @return ProductNutrition
     */
    public function setSugars($sugars)
    {
        $this->sugars = $sugars;

        return $this;
    }

    /**
     * Get sugars
     *
     * @return string 
     */
    public function getSugars()
    {
        return $this->sugars;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return ProductNutrition
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set per
     *
     * @param string $per
     * @return ProductNutrition
     */
    public function setPer($per)
    {
        $this->per = $per;

        return $this;
    }

    /**
     * Get per
     *
     * @return string 
     */
    public function getPer()
    {
        return $this->per;
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
