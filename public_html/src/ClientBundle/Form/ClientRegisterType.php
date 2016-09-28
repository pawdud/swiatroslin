<?php

namespace ClientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Rejestracja klienta
 */
class  ClientRegisterType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'text', array('label' => 'Email'))
                ->add('username', 'text', array('label' => 'Nazwa firmy'))
                ->add('password', 'repeated', array(
                        'type' => 'password',
                        'invalid_message' => 'Hasła muszą się zgadzać',           
                        'required' => true,
                        'first_options' => array('label' => 'Hasło'),
                        'second_options' => array('label' => 'Powtórz hasło'),
                ));
    }

    public function getName()
    {
        return 'clientRegister';
    }
}