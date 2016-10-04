<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use AppBundle\Entity\Product;

use AppBundle\Form\SearchProductType;


class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        $procuct = new Product();        
        $form = $this->createForm(new SearchProductType(), $procuct);
        
        
        $form->handleRequest($request);
        
        
        if($form->isSubmitted()){
            
            
            
        }
        
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:index.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
