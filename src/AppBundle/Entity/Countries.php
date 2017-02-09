<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity
 */
class Countries
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
     * @ORM\Column(name="common_name", type="text", length=65535, nullable=false)
     */
    private $commonName;

    /**
     * @var string
     *
     * @ORM\Column(name="formal_name", type="text", length=65535, nullable=false)
     */
    private $formalName;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=5, nullable=false)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_symbol", type="text", length=65535, nullable=false)
     */
    private $currencySymbol;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=5, nullable=false)
     */
    private $countryCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="featured", type="integer", nullable=false)
     */
    private $featured;



    /**
     * Set commonName
     *
     * @param string $commonName
     * @return Countries
     */
    public function setCommonName($commonName)
    {
        $this->commonName = $commonName;

        return $this;
    }

    /**
     * Get commonName
     *
     * @return string 
     */
    public function getCommonName()
    {
        return $this->commonName;
    }

    /**
     * Set formalName
     *
     * @param string $formalName
     * @return Countries
     */
    public function setFormalName($formalName)
    {
        $this->formalName = $formalName;

        return $this;
    }

    /**
     * Get formalName
     *
     * @return string 
     */
    public function getFormalName()
    {
        return $this->formalName;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return Countries
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set currencySymbol
     *
     * @param string $currencySymbol
     * @return Countries
     */
    public function setCurrencySymbol($currencySymbol)
    {
        $this->currencySymbol = $currencySymbol;

        return $this;
    }

    /**
     * Get currencySymbol
     *
     * @return string 
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     * @return Countries
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set featured
     *
     * @param integer $featured
     * @return Countries
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
