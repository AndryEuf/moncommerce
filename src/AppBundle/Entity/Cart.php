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



    /**
     * Get the value of idcart
     *
     * @return  integer
     */ 
    public function getIdcart()
    {
        return $this->idcart;
    }

    /**
     * Set the value of idcart
     *
     * @param  integer  $idcart
     *
     * @return  self
     */ 
    public function setIdcart($idcart)
    {
        $this->idcart = $idcart;

        return $this;
    }

    /**
     * Get the value of totalamout
     *
     * @return  float
     */ 
    public function getTotalamout()
    {
        return $this->totalamout;
    }

    /**
     * Set the value of totalamout
     *
     * @param  float  $totalamout
     *
     * @return  self
     */ 
    public function setTotalamout(float $totalamout)
    {
        $this->totalamout = $totalamout;

        return $this;
    }

    /**
     * Get the value of state
     *
     * @return  string
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @param  string  $state
     *
     * @return  self
     */ 
    public function setState(string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of idcustomer
     *
     * @return  \Customer
     */ 
    public function getIdcustomer()
    {
        return $this->idcustomer;
    }

    /**
     * Set the value of idcustomer
     *
     * @param  \Customer  $idcustomer
     *
     * @return  self
     */ 
    public function setIdcustomer(\Customer $idcustomer)
    {
        $this->idcustomer = $idcustomer;

        return $this;
    }
}

