<?php

namespace AppBundle\Entity;

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



    /**
     * Set boxId
     *
     * @param integer $boxId
     * @return BoxItem
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
     * Set prodCode
     *
     * @param string $prodCode
     * @return BoxItem
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
}
