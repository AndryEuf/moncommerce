<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Checkout
 *
 * @ORM\Table(name="checkout", indexes={@ORM\Index(name="fk_cart_idx", columns={"idCart"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CheckoutRepository")
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



    /**
     * Get the value of idcheckout
     *
     * @return  integer
     */ 
    public function getIdcheckout()
    {
        return $this->idcheckout;
    }

    /**
     * Set the value of idcheckout
     *
     * @param  integer  $idcheckout
     *
     * @return  self
     */ 
    public function setIdcheckout($idcheckout)
    {
        $this->idcheckout = $idcheckout;

        return $this;
    }

    /**
     * Get the value of address
     *
     * @return  string
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @param  string  $address
     *
     * @return  self
     */ 
    public function setAddress(string $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of city
     *
     * @return  string
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @param  string  $city
     *
     * @return  self
     */ 
    public function setCity(string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of country
     *
     * @return  string
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @param  string  $country
     *
     * @return  self
     */ 
    public function setCountry(string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of locationdetail
     *
     * @return  string
     */ 
    public function getLocationdetail()
    {
        return $this->locationdetail;
    }

    /**
     * Set the value of locationdetail
     *
     * @param  string  $locationdetail
     *
     * @return  self
     */ 
    public function setLocationdetail(string $locationdetail)
    {
        $this->locationdetail = $locationdetail;

        return $this;
    }

    /**
     * Get the value of deliverymethod
     *
     * @return  string
     */ 
    public function getDeliverymethod()
    {
        return $this->deliverymethod;
    }

    /**
     * Set the value of deliverymethod
     *
     * @param  string  $deliverymethod
     *
     * @return  self
     */ 
    public function setDeliverymethod(string $deliverymethod)
    {
        $this->deliverymethod = $deliverymethod;

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

