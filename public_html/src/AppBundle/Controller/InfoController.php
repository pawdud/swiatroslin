<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * Treści stałe
 */
class InfoController extends Controller
{

    /**
     * @Route("/kontakt", name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:info:contact.html.twig', array(
        ));
    }
    
    /**
     * @Route("/o_nas", name="aboutus")
     */
    public function aboutusAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:info:aboutus.html.twig', array(
        ));
    }

}
