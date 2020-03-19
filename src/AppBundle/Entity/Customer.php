<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer", uniqueConstraints={@ORM\UniqueConstraint(name="email_UNIQUE", columns={"email"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CustomerRepository")
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCustomer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcustomer;

    /**
     * @var string
     *
     * @ORM\Column(name="socialTitle", type="string", length=5, nullable=true)
     */
    private $socialtitle = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=60, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=60, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=60, nullable=true)
     */
    private $username = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", length=16777215, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="datetime", nullable=true)
     */
    private $birthdate = 'NULL';

    /**
     * @var boolean
     *
     * @ORM\Column(name="signedUpInNewsletter", type="boolean", nullable=true)
     */
    private $signedupinnewsletter = 'NULL';

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
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone = 'NULL';



    /**
     * Get the value of idcustomer
     *
     * @return  integer
     */ 
    public function getIdcustomer()
    {
        return $this->idcustomer;
    }

    /**
     * Set the value of idcustomer
     *
     * @param  integer  $idcustomer
     *
     * @return  self
     */ 
    public function setIdcustomer($idcustomer)
    {
        $this->idcustomer = $idcustomer;

        return $this;
    }

    /**
     * Get the value of socialtitle
     *
     * @return  string
     */ 
    public function getSocialtitle()
    {
        return $this->socialtitle;
    }

    /**
     * Set the value of socialtitle
     *
     * @param  string  $socialtitle
     *
     * @return  self
     */ 
    public function setSocialtitle(string $socialtitle)
    {
        $this->socialtitle = $socialtitle;

        return $this;
    }

    /**
     * Get the value of firstname
     *
     * @return  string
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param  string  $firstname
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return  string
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param  string  $lastname
     *
     * @return  self
     */ 
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of username
     *
     * @return  string
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @param  string  $username
     *
     * @return  self
     */ 
    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return  string
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param  string  $password
     *
     * @return  self
     */ 
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of birthdate
     *
     * @return  \DateTime
     */ 
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @param  \DateTime  $birthdate
     *
     * @return  self
     */ 
    public function setBirthdate(\DateTime $birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of signedupinnewsletter
     *
     * @return  boolean
     */ 
    public function getSignedupinnewsletter()
    {
        return $this->signedupinnewsletter;
    }

    /**
     * Set the value of signedupinnewsletter
     *
     * @param  boolean  $signedupinnewsletter
     *
     * @return  self
     */ 
    public function setSignedupinnewsletter(boolean $signedupinnewsletter)
    {
        $this->signedupinnewsletter = $signedupinnewsletter;

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
     * Get the value of phone
     *
     * @return  string
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @param  string  $phone
     *
     * @return  self
     */ 
    public function setPhone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }
}

