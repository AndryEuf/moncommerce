<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    /**
     * @Route("/product/{product_id}", name="product_detail")
     */
    public function productDetail($product_id)
    {
        // replace this example code with whatever you need
        return $this->render('front/product-detail.html.twig');
    }
}
