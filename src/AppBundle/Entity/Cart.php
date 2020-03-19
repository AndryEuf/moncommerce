<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 *
 * @ORM\Table(name="cart", indexes={@ORM\Index(name="fk_customer_idx", columns={"idCustomer"})})
 * @ORM\Entity
 */
class Cart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCart", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcart;

    /**
     * @var float
     *
     * @ORM\Column(name="totalAmout", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalamout = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=5, nullable=true)
     */
    private $state = 'NULL';

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCustomer", referencedColumnName="idCustomer")
     * })
     */
    private $idcustomer;


}

