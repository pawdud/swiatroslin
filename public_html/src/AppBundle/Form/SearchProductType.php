<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


use Doctrine\Common\Util\Debug;

/**
 * Wyszukiwarka produktów
 */
class  SearchProductType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        
        $product = $builder->getData();      
        
        // Siła wzrostu
        $data = array();
        foreach($product->getCfgGrowth() as $k => $v){
            if($product->getGrowth() & $k){
                array_push($data, $k);
            }
        }               
        $builder->add('growth', 'choice', array(
            'choices' => $product->getCfgGrowth(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'Siła wzrostu'
        ));   
        
        
        // Zimozielone
        $data = array();
        foreach($product->getCfgEvergreen() as $k => $v){
            if($product->getEvergreen() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('evergreen', 'choice', array(
            'choices' => $product->getCfgEvergreen(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'Zimozielone'
        ));   
        
        // Mrozoodporne
        $data = array();
        foreach($product->getCfgHardy() as $k => $v){
            if($product->getCfgHardy() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('hardy', 'choice', array(
            'choices' => $product->getCfgHardy(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'Mrozoodporne'
        )); 
        
        // Barwa liści
        $data = array();
        foreach($product->getCfgColorLeaf() as $k => $v){
            if($product->getCfgColorLeaf() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('colorLeaf', 'choice', array(
            'choices' => $product->getCfgColorLeaf(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'Kolor liści'
        ));  
        
        
        // Barwa kwiatów
        $data = array();
        foreach($product->getCfgColorFlower() as $k => $v){
            if($product->getCfgColorFlower() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('colorFlower', 'choice', array(
            'choices' => $product->getCfgColorFlower(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'Kolor kwiatów'
        ));  
        
        // Barwa owoców
        $data = array();
        foreach($product->getCfgColorFruits() as $k => $v){
            if($product->getCfgColorFruits() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('colorFruits', 'choice', array(
            'choices' => $product->getCfgColorFruits(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'Barwa owoców'
        ));  
        
        
        // Termin kwitnienia
        $data = array();
        foreach($product->getCfgTermFlowering() as $k => $v){
            if($product->getCfgTermFlowering() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('termFlowering', 'choice', array(
            'choices' => $product->getCfgTermFlowering(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'Termin kwitnienia'
        ));  
        
        
        // Termin owocowania
        $data = array();
        foreach($product->getCfgTermFruiting() as $k => $v){
            if($product->getCfgTermFruiting() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('termFruiting', 'choice', array(
            'choices' => $product->getCfgTermFruiting(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'Termin owocowania'
        ));
        
        // Stanowisko
        $data = array();
        foreach($product->getCfgPlace() as $k => $v){
            if($product->getCfgPlace() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('place', 'choice', array(
            'choices' => $product->getCfgPlace(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'stanowisko'
        ));
        
        // Wilgotność
        $data = array();
        foreach($product->getCfgHumidity() as $k => $v){
            if($product->getCfgHumidity() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('humidity', 'choice', array(
            'choices' => $product->getCfgHumidity(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'wilgotność'
        ));
        
        
        // Odczyn gleby
        $data = array();
        foreach($product->getCfgSoilReaction() as $k => $v){
            if($product->getCfgSoilReaction() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('soilReaction', 'choice', array(
            'choices' => $product->getCfgSoilReaction(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'Odczyn gleby'
        ));
        
        // Cięcie
        $data = array();
        foreach($product->getCfgCutting() as $k => $v){
            if($product->getCfgCutting() & $k){
                array_push($data, $k);
            }
        }   
        $builder->add('cutting', 'choice', array(
            'choices' => $product->getCfgCutting(),
            'multiple' => true,
            'expanded' => true,
            'data'      => $data,
            'label'     => 'Cięcie'
        ));
    }

    public function getName()
    {
        return 'searchProductType';
    }
    
    
    
    
    
    
    
    
    
}