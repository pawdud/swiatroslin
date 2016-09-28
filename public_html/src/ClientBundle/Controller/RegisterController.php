<?php

namespace ClientBundle\Controller;


use AppBundle\Entity\Client;
use ClientBundle\Form\ClientRegisterType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class RegisterController extends Controller
{
   /**
     * @Route("/register", name="client_register")
     */
    public function indexAction(Request $request)
    {
        
         // 1) build the form
        $client = new Client();
        $form = $this->createForm(new ClientRegisterType(), $client);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($client, $client->getPassword());
            $client->setPassword($password);
            $client->setCreatedAt(new \DateTime());

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('replace_with_some_route');
        }

        return $this->render(
            'ClientBundle:register:index.html.twig',
            array('form' => $form->createView())
        );
        
        
    }
}