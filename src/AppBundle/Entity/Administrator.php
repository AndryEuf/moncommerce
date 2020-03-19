<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrator
 *
 * @ORM\Table(name="administrator")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdministratorRepository")
 */
class Administrator
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAdministrator", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadministrator;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=40, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", length=16777215, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=60, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=60, nullable=true)
     */
    private $lastname = 'NULL';



    /**
     * Get the value of idadministrator
     *
     * @return  integer
     */ 
    public function getIdadministrator()
    {
        return $this->idadministrator;
    }

    /**
     * Set the value of idadministrator
     *
     * @param  integer  $idadministrator
     *
     * @return  self
     */ 
    public function setIdadministrator($idadministrator)
    {
        $this->idadministrator = $idadministrator;

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
}

