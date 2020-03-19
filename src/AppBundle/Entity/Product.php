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


}

