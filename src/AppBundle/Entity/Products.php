<?php

namespace AppBundle\Entity;

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
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $salePrice;

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
    private $featured;

    /**
     * @var integer
     *
     * @ORM\Column(name="discontinued", type="integer", nullable=false)
     */
    private $discontinued;



    /**
     * Set prodCode
     *
     * @param string $prodCode
     * @return Products
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
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return Products
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Products
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Products
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set imagePath
     *
     * @param string $imagePath
     * @return Products
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    /**
     * Get imagePath
     *
     * @return string 
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Products
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set salePrice
     *
     * @param string $salePrice
     * @return Products
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get salePrice
     *
     * @return string 
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Set subscription
     *
     * @param integer $subscription
     * @return Products
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * Get subscription
     *
     * @return integer 
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Set featured
     *
     * @param integer $featured
     * @return Products
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * Get featured
     *
     * @return integer 
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Set discontinued
     *
     * @param integer $discontinued
     * @return Products
     */
    public function setDiscontinued($discontinued)
    {
        $this->discontinued = $discontinued;

        return $this;
    }

    /**
     * Get discontinued
     *
     * @return integer 
     */
    public function getDiscontinued()
    {
        return $this->discontinued;
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
