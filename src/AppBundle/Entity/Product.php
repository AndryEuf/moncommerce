<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", uniqueConstraints={@ORM\UniqueConstraint(name="reference_UNIQUE", columns={"reference"})}, indexes={@ORM\Index(name="fk_category_idx", columns={"idCategory"})})
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProduct", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduct;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=45, nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="oldPrice", type="float", precision=10, scale=0, nullable=true)
     */
    private $oldprice = 'NULL';

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price = 'NULL';

    /**
     * @var float
     *
     * @ORM\Column(name="save", type="float", precision=10, scale=0, nullable=true)
     */
    private $save = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=200, nullable=true)
     */
    private $note = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=200, nullable=true)
     */
    private $details = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAdded", type="datetime", nullable=false)
     */
    private $dateadded;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image = 'NULL';

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCategory", referencedColumnName="idCategory")
     * })
     */
    private $idcategory;



    /**
     * Get the value of idproduct
     *
     * @return  integer
     */ 
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set the value of idproduct
     *
     * @param  integer  $idproduct
     *
     * @return  self
     */ 
    public function setIdproduct($idproduct)
    {
        $this->idproduct = $idproduct;

        return $this;
    }

    /**
     * Get the value of reference
     *
     * @return  string
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @param  string  $reference
     *
     * @return  self
     */ 
    public function setReference(string $reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of oldprice
     *
     * @return  float
     */ 
    public function getOldprice()
    {
        return $this->oldprice;
    }

    /**
     * Set the value of oldprice
     *
     * @param  float  $oldprice
     *
     * @return  self
     */ 
    public function setOldprice(float $oldprice)
    {
        $this->oldprice = $oldprice;

        return $this;
    }

    /**
     * Get the value of price
     *
     * @return  float
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param  float  $price
     *
     * @return  self
     */ 
    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of save
     *
     * @return  float
     */ 
    public function getSave()
    {
        return $this->save;
    }

    /**
     * Set the value of save
     *
     * @param  float  $save
     *
     * @return  self
     */ 
    public function setSave(float $save)
    {
        $this->save = $save;

        return $this;
    }

    /**
     * Get the value of note
     *
     * @return  string
     */ 
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @param  string  $note
     *
     * @return  self
     */ 
    public function setNote(string $note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of details
     *
     * @return  string
     */ 
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set the value of details
     *
     * @param  string  $details
     *
     * @return  self
     */ 
    public function setDetails(string $details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get the value of dateadded
     *
     * @return  \DateTime
     */ 
    public function getDateadded()
    {
        return $this->dateadded;
    }

    /**
     * Set the value of dateadded
     *
     * @param  \DateTime  $dateadded
     *
     * @return  self
     */ 
    public function setDateadded(\DateTime $dateadded)
    {
        $this->dateadded = $dateadded;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return  string
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param  string  $image
     *
     * @return  self
     */ 
    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of idcategory
     *
     * @return  \Category
     */ 
    public function getIdcategory()
    {
        return $this->idcategory;
    }

    /**
     * Set the value of idcategory
     *
     * @param  \Category  $idcategory
     *
     * @return  self
     */ 
    public function setIdcategory(\Category $idcategory)
    {
        $this->idcategory = $idcategory;

        return $this;
    }
}

