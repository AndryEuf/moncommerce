<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock", indexes={@ORM\Index(name="fk_product_idx", columns={"idProduct"})})
 * @ORM\Entity
 */
class Stock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idStock", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstock;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=5, nullable=true)
     */
    private $size = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=50, nullable=true)
     */
    private $color = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="colorCode", type="string", length=45, nullable=true)
     */
    private $colorcode = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduct", referencedColumnName="idProduct")
     * })
     */
    private $idproduct;



    /**
     * Get the value of idstock
     *
     * @return  integer
     */ 
    public function getIdstock()
    {
        return $this->idstock;
    }

    /**
     * Set the value of idstock
     *
     * @param  integer  $idstock
     *
     * @return  self
     */ 
    public function setIdstock($idstock)
    {
        $this->idstock = $idstock;

        return $this;
    }

    /**
     * Get the value of size
     *
     * @return  string
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @param  string  $size
     *
     * @return  self
     */ 
    public function setSize(string $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of color
     *
     * @return  string
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @param  string  $color
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of colorcode
     *
     * @return  string
     */ 
    public function getColorcode()
    {
        return $this->colorcode;
    }

    /**
     * Set the value of colorcode
     *
     * @param  string  $colorcode
     *
     * @return  self
     */ 
    public function setColorcode(string $colorcode)
    {
        $this->colorcode = $colorcode;

        return $this;
    }

    /**
     * Get the value of quantity
     *
     * @return  integer
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @param  integer  $quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of idproduct
     *
     * @return  \Product
     */ 
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set the value of idproduct
     *
     * @param  \Product  $idproduct
     *
     * @return  self
     */ 
    public function setIdproduct(\Product $idproduct)
    {
        $this->idproduct = $idproduct;

        return $this;
    }
}

