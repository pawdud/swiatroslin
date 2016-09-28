<?php

namespace ClientBundle\Controller;


use AppBundle\Entity\Client;
use ClientBundle\Form\ClientRegisterType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Panel klienta (strona startowa)
 */

class DefautlController extends Controller
{
   /**
     * @Route("/", name="client_homepage")
     */
    public function indexAction(Request $request)
    {
        
       
        return $this->render(
            'ClientBundle:panel:index.html.twig'
           
        );
        
        
    }
}