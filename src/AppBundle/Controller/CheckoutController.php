<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CheckoutController extends Controller
{
    /**
     * @Route("/checkout/", name="checkout")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('front/checkout.html.twig');
    }
}