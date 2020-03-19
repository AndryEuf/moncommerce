<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartitem
 *
 * @ORM\Table(name="cartitem", indexes={@ORM\Index(name="fk_product_idx", columns={"idProduct"}), @ORM\Index(name="fk_cart_idx", columns={"idCart"})})
 * @ORM\Entity
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


}

