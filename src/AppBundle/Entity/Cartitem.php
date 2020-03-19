<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartitem
 *
 * @ORM\Table(name="cartitem", indexes={@ORM\Index(name="fk_product_idx", columns={"idProduct"}), @ORM\Index(name="fk_cart_idx", columns={"idCart"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CartitemRepository")
 */
class Cartitem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCartItem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcartitem;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity = 'NULL';

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
     * @var \Cart
     *
     * @ORM\ManyToOne(targetEntity="Cart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCart", referencedColumnName="idCart")
     * })
     */
    private $idcart;



    /**
     * Get the value of idcartitem
     *
     * @return  integer
     */ 
    public function getIdcartitem()
    {
        return $this->idcartitem;
    }

    /**
     * Set the value of idcartitem
     *
     * @param  integer  $idcartitem
     *
     * @return  self
     */ 
    public function setIdcartitem($idcartitem)
    {
        $this->idcartitem = $idcartitem;

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

    /**
     * Get the value of idcart
     *
     * @return  \Cart
     */ 
    public function getIdcart()
    {
        return $this->idcart;
    }

    /**
     * Set the value of idcart
     *
     * @param  \Cart  $idcart
     *
     * @return  self
     */ 
    public function setIdcart(\Cart $idcart)
    {
        $this->idcart = $idcart;

        return $this;
    }
}

