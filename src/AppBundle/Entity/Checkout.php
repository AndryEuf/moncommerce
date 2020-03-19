<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Checkout
 *
 * @ORM\Table(name="checkout", indexes={@ORM\Index(name="fk_cart_idx", columns={"idCart"})})
 * @ORM\Entity
 */
class Checkout
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCheckout", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcheckout;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100, nullable=true)
     */
    private $address = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=100, nullable=true)
     */
    private $country = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="locationDetail", type="string", length=200, nullable=true)
     */
    private $locationdetail = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="deliveryMethod", type="string", length=50, nullable=true)
     */
    private $deliverymethod = 'NULL';

    /**
     * @var float
     *
     * @ORM\Column(name="totalAmout", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalamout = 'NULL';

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

