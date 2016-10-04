<?php

namespace ClientBundle\Controller;


use AppBundle\Entity\Client;
use ClientBundle\Form\ClientRegisterType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Doctrine\Common\Util\Debug;

use AppBundle\Entity\Category;

/**
 * Produkty
 */
class ProductController extends Controller
{
   /**
    *  List produktów
    * @Route("/product", name="client_product")
    */
    public function indexAction(Request $request)
    {      
        
        $sty = bindec('000000000001');
        $lut = bindec('000000000010');
        $mar = bindec('000000000100');
        $kwi = bindec('000000001000');   
        
        
        
        
        
        
//        
//        var_dump($sty); 
//        var_dump($lut);
//        var_dump($mar);
//        var_dump($kwi);
        
        
        $sum = $sty + $kwi;
        
//        var_dump($sum);
//        
//        var_dump($sty & $sum);
//        var_dump($kwi & $sum);
//        var_dump($mar & $sum);
        
        
        echo 'lub';
        
        
        var_dump($sty | $kwi);
        var_dump($sty + $kwi);
        
        $lub = ($sty | $kwi) & $sum;
        
        
        var_dump($lub);
        
        
        
        
        
        exit;
        
        
        
        
        
//        $em = $this->getDoctrine()->getManager();
//        $products = $em->getRepository('\AppBundle\Entity\Category')
//                ->findBy(array('parent' => null));
        
        
        $products = array();
        
               
        return $this->render(
            'ClientBundle:product:index.html.twig',
            array(
                'products' => $products
            )           
        );
    }
    
    
    
    /**
     * @Route("/product/addd", name="client_product_add")
     * @param Request $request
     * @return type
     */
    public function addAction(Request $request)
    {        
        
//        $em = $this->getDoctrine()->getManager();
//        $products = $em->getRepository('\AppBundle\Entity\Category')
//                ->findBy(array('parent' => null));
        
        
        $products = array();
        
               
        return $this->render(
            'ClientBundle:product:index.html.twig',
            array(
                'products' => $products
            )           
        );
    }
}