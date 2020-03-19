<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CartController extends Controller
{
    /**
     * @Route("/cart/", name="cart")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('front/cart.html.twig');
    }
}