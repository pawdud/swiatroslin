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
 * Kategorie
 */
class CategoryController extends Controller
{
   /**
    *  Drzewko kategorii
    * @Route("/category", name="client_category")
    */
    public function indexAction(Request $request)
    {        
        
        $em = $this->getDoctrine()->getManager();
        
        
        $categories = $em->getRepository('\AppBundle\Entity\Category')
                ->findBy(array('parent' => null));
        
               
        return $this->render(
            'ClientBundle:category:index.html.twig',
            array(
                'categories' => $categories
            )           
        );
    }
    
    
    
    /**
     *  @Route("/category/add/{id}", defaults={"id": 0}, name="client_category_add")
     *  @ParamConverter("parent", class="AppBundle:Category", options={"id" = "id"})
     * 
     */
    
    public function addAction(Request $request, $id, Category $parent = null){           
        $category = new Category();        
        if($parent){
            $category->setParent($parent);
        }
        $form = $this->createForm(new \ClientBundle\Form\CategoryType(), $category);        
      
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $category->setCreatedAt(new \DateTime());
            $category->setUpdatedAt(new \DateTime());         
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute('client_category');
        }

        return $this->render(
            'ClientBundle:category:add.html.twig',
            array('form' => $form->createView())
        );
    }
    
     /**
     *  @Route("/category/edit/{id}",name="client_category_edit")
     *  @ParamConverter("category", class="AppBundle:Category", options={"id" = "id"})
     * 
     */
    
    public function editAction(Request $request, Category $category){   
       
        $form = $this->createForm(new \ClientBundle\Form\CategoryType(), $category);        
      
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {            
            $category->setUpdatedAt(new \DateTime());         
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute('client_category');
        }

        return $this->render(
            'ClientBundle:category:add.html.twig',
            array('form' => $form->createView())
        );
    }
    
    
    
     /**
     *  @Route("/category/delete/{id}", name="client_category_delete")
     *  @ParamConverter("parent", class="AppBundle:Category")
     * 
     */    
    public function deleteAction(Category $category){
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();        
        return $this->redirectToRoute('client_category');
    }
    
}