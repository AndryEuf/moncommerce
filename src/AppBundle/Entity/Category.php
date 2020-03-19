<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category", indexes={@ORM\Index(name="fk_parent_idx", columns={"parentCategory"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCategory", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description = 'NULL';

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentCategory", referencedColumnName="idCategory")
     * })
     */
    private $parentcategory;



    /**
     * Get the value of idcategory
     *
     * @return  integer
     */ 
    public function getIdcategory()
    {
        return $this->idcategory;
    }

    /**
     * Set the value of idcategory
     *
     * @param  integer  $idcategory
     *
     * @return  self
     */ 
    public function setIdcategory($idcategory)
    {
        $this->idcategory = $idcategory;

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
     * Get the value of parentcategory
     *
     * @return  \Category
     */ 
    public function getParentcategory()
    {
        return $this->parentcategory;
    }

    /**
     * Set the value of parentcategory
     *
     * @param  \Category  $parentcategory
     *
     * @return  self
     */ 
    public function setParentcategory(\Category $parentcategory)
    {
        $this->parentcategory = $parentcategory;

        return $this;
    }
}

